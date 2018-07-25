<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller{    
//mak ath
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

    return view('admin.add_category');
   }

    public function all_category(){
    $this->AdminAuthCheck();
     $all_category_info=DB::table('tbl_category')->get();
     $mange_category=view('admin.all_category')->with('all_category_info',$all_category_info);
    return view('admin_layout')->with('admin.all_category',$mange_category);
   }


//save_category
    public function save_category(Request $request){
    $data=array();
    $data['category_id']=$request->category_id;
    $data['category_name']=$request->category_name;
    $data['category_description']=$request->category_description;
    $data['publication_status']=$request->publication_status;
    DB::table('tbl_category')->insert($data);
    Session::put('exception','Category added successfully');
    return Redirect::to('/add-category');
    }
//mthd unctive_category
 public function unactivecategory($category_id){
    DB::table('tbl_category')->where('category_id',$category_id)->update(['publication_status'=>0]);
    Session::put('exception','Category unactive successfully');
        return Redirect::to('/all-category');

     }
//mthd active_category

   public function activecategory($category_id){
 DB::table('tbl_category')->where('category_id',$category_id)->update(['publication_status'=>1]);
    Session::put('exception','Category active successfully');
        return Redirect::to('/all-category');

    }

    //editcategory
public function editcategory($category_id){
      $this->AdminAuthCheck();

     $all_category_info=DB::table('tbl_category')->where('category_id',$category_id)->first();
     $mange_category=view('admin.edit_category')->with('all_category_info',$all_category_info);
    return view('admin_layout')->with('admin.edit_category',$mange_category);
     }
//updatecategory
public function updatecategory(Request $request,$category_id){
    $data=array();
    $data['category_name']=$request->category_name;
    $data['category_description']=$request->category_description;
    DB::table('tbl_category')->where('category_id',$category_id)->update($data);
    //for shng mssagp
    Session::put('exception','Data updated successfully');
    return Redirect::to('/all-category');

     }

//deletecategory
public function deletecategory($category_id){
 DB::table('tbl_category')->where('category_id',$category_id)->delete();
 Session::put('exception','Data delete successfully');
  return Redirect::to('/all-category');


         }


}
