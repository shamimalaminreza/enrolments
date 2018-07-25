<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class SuperadminController extends Controller{
//shngdashboard
     public function index(){

      $this->AdminAuthCheck();
      return view('admin.dashboard');
     }
//logout
  public function logout(){
 Session::put('admin_email',null);
Session::put('admin_id',null);
Session::put('exception','You are successfully logout');
        //Session::flush();
      return Redirect::to('/admin');
     }

//make athntc
     public function AdminAuthCheck(){
      $admin_id=Session::get('admin_id');
         if ($admin_id) {
           return;
            //Redirect::to('/admin.dashboard');
         }else{
          return Redirect::to('/admin')->send();
         }
     }
//profile
 public function profile(){
$this->AdminAuthCheck();

  //$admin_id=Session::get('admin_id');
 $viewprofile_info=DB::table('tbl_admin')->get();
$manage_viewprofile=view('admin.profile')->with('viewprofile_info',$viewprofile_info);
 return view('admin_layout')->with('viewprofile_info',$manage_viewprofile);

     }

 public function adminedit($admin_id){
$admin_info=DB::table('tbl_admin')->select('*')->where('admin_id',$admin_id)->first();
  $manage_admin=view('admin.admin_edit')->with('all_admin_info',$admin_info);
   return view('admin_layout')->with('admin_edit',$manage_admin);
 	
 }
  
//adminupdte
public function adminupdte(Request $request, $admin_id){
    $data=array();
    $data['admin_email']=$request->admin_email;
    $data['admin_name']=$request->admin_name;
    $data['admin_password']=md5($request->admin_password);
    $data['admin_phone']=$request->admin_phone;
    DB::table('tbl_admin')->where('admin_id',$admin_id)->update($data);
    //for shng mssagp
    Session::put('message','Data updated successfully');
    return Redirect::to('/profile');
 }
//admindelete
public function admindelete($admin_id){
    DB::table('tbl_admin')->where('admin_id',$admin_id)->delete(); 
 Session::put('message','Data delete successfully');
   return Redirect::to('/profile');

    }



    //mthd del_item
public function del_item($order_id){
DB::table('tbl_order')->where('order_id',$order_id)->delete(); 
 Session::put('message','Data delete successfully');
   return Redirect::to('/manage_order');

      }
//success_order
public function success_order($order_id){
DB::table('tbl_order')->where('order_id',$order_id)->update(['order_status'=>'success']);
    Session::put('message','Order  successfully');
        return Redirect::to('/manage_order');
}

//SuperadminController
public function manage_contact(){
$all_manage_info=DB::table('tbl_contact')->get();
$manage_info=view('admin.manage_contact')->with('all_manage_info',$all_manage_info);
return view('admin_layout')->with('admin.manage_contact',$manage_info);
   }
//view_contact
public function view_contact($contact_id){
    $order_by_id=DB::table('tbl_contact')
    ->where('contact_id',$contact_id)
    ->first();
     $view_contact=view('admin.view_contact')->with('order_by_id',$order_by_id);
     return view('admin_layout')->with('admin.view_contact',$view_contact);

   }
//view_contacts

public function view_contacts($contact_id){
$order_by_id=DB::table('tbl_contact')->where('contact_id',$contact_id)->first();
  return Redirect::to('/manage_contact');
   }
//del-contact
public function del_contact($contact_id){

DB::table('tbl_contact')->where('contact_id',$contact_id)->delete(); 
 Session::put('message','Data delete successfully');
   return Redirect::to('/manage_contact');

   }  

}
