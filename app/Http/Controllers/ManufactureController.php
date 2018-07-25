<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class ManufactureController extends Controller{


 public function AdminAuthCheck(){
      $admin_id=Session::get('admin_id');
         if ($admin_id) {
           return;
            //Redirect::to('/admin.dashboard');
         }else{
      
          return Redirect::to('/admin')->send();

         }

     }


    public function index(){
    $this->AdminAuthCheck();

    return view('admin.add_manufacture');
   }
   //sav add-manufacture
   public function save_manufacture(Request $request){
    $data=array();
    $data['manufacture_id']=$request->manufacture_id;
    $data['manufacture_name']=$request->manufacture_name;
    $data['manufacture_description']=$request->manufacture_description;
    $data['publication_status']=$request->publication_status;
    DB::table('tbl_manufacture')->insert($data);
    Session::put('exception','Manufacture added successfully');
    return Redirect::to('/add-manufacture');
    }

    //all_manufacture
 public function all_manufacture(){
        $this->AdminAuthCheck();

     $all_manufacture_info=DB::table('tbl_manufacture')->get();
   $mange_manufacture=view('admin.all_manufacture')->with('all_manufacture_info',$all_manufacture_info);
    return view('admin_layout')->with('admin.all_manufacture',$mange_manufacture);
   }

//delete-manufacture

   public function deletemanufacture($manufacture_id){
 DB::table('tbl_manufacture')->where('manufacture_id',$manufacture_id)->delete();
 Session::put('exception','Data delete successfully');
  return Redirect::to('/all-manufacture');

         }
//unactivemanufacture
 public function unactivemanufacture($manufacture_id){

DB::table('tbl_manufacture')->where('manufacture_id',$manufacture_id)->update(['publication_status'=>0]);
    Session::put('exception','Manufacture unactive successfully');
        return Redirect::to('/all-manufacture');

     }

//activemanufacture
public function activemanufacture($manufacture_id){
DB::table('tbl_manufacture')->where('manufacture_id',$manufacture_id)->update(['publication_status'=>1]);
    Session::put('exception','Manufacture active successfully');
        return Redirect::to('/all-manufacture');

    }
//editmanufacture
     public function editmanufacture($manufacture_id){
    $this->AdminAuthCheck();

     $all_manufacture_info=DB::table('tbl_manufacture')->where('manufacture_id',$manufacture_id)->first();
    $mange_manufacture=view('admin.edit_manufacture')->with('all_manufacture_info',$all_manufacture_info);
    return view('admin_layout')->with('admin.edit_manufacture',$mange_manufacture);
     }
   //updatemanufacture
     public function updatemanufacture(Request $request,$manufacture_id){
    $data=array();
    $data['manufacture_name']=$request->manufacture_name;
    $data['manufacture_description']=$request->manufacture_description;
    DB::table('tbl_manufacture')->where('manufacture_id',$manufacture_id)->update($data);
    //for shng mssagp
    Session::put('exception','Data updated successfully');
    return Redirect::to('/all-manufacture');

     }

}
