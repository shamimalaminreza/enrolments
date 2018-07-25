<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller{
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

    return view('admin.add_product');
   }


//save_product
    public function save_product(Request $request){
     $data=array();
     $data['product_name']=$request->product_name;
     $data['category_id']=$request->category_id;
     $data['manufacture_id']=$request->manufacture_id;
     $data['product_short_description']=$request->product_short_description;
     $data['product_long_description']=$request->product_long_description;
     $data['product_price']=$request->product_price;
     $data['product_size']=$request->product_size;
     $data['product_color']=$request->product_color;
     $data['publication_status']=$request->publication_status;


     $image=$request->file('product_image');
     if ($image) {
        $image_name=str_random(20);
        $txt=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$txt;
        $upload_path='image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path, $image_full_name);
        if ($success) {
            $data['product_image']=$image_url;
             DB::table('tbl_products')->insert($data);
Session::put('exception','Data  insert successfully');
         return Redirect::to('/add-product');
        }
       }
//$image_url

  $data['product_image']='';
  DB::table('tbl_products')->insert($data);
Session::put('exception','Data  insert without image successfully');
   return Redirect::to('/add-product');

    }

//allproduct
    public function allproduct(){
    $this->AdminAuthCheck();
    $all_product_info=DB::table('tbl_products')
    ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
    ->join('tbl_manufacture', 'tbl_products.manufacture_id', '=','tbl_manufacture.manufacture_id')
    ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufacture.manufacture_name')
    ->get();
     $mange_product=view('admin.all_product')->with('all_product_info',$all_product_info);
     return view('admin_layout')->with('admin.all_product',$mange_product);
   }

   //unactiveproduct
     public function unactiveproduct($product_id){
    DB::table('tbl_products')->where('product_id',$product_id)->update(['publication_status'=>0]);
    Session::put('exception','Data unactive successfully');
        return Redirect::to('/all-product');

     }

     //activeproduct
      public function activeproduct($product_id){
    DB::table('tbl_products')->where('product_id',$product_id)->update(['publication_status'=>1]);
    Session::put('exception','Data active successfully');
        return Redirect::to('/all-product');

     }
//deleteproduct
public function deleteproduct($product_id){
 DB::table('tbl_products')->where('product_id',$product_id)->delete();
 Session::put('exception','Data delete successfully');
  return Redirect::to('/all-product');

     }
   //editproduct
     public function editproduct($product_id){
      $this->AdminAuthCheck();

     $all_product_info=DB::table('tbl_products')->where('product_id',$product_id)->first();
     $mange_product=view('admin.edit_product')->with('all_product_info',$all_product_info);
    return view('admin_layout')->with('admin.edit_product',$mange_product);
     }


     
//updateproduct
public function updateproduct(Request $request,$product_id){
    $data=array();
    $data['product_name']=$request->product_name;
    $data['category_id']=$request->category_id;

    $data['manufacture_id']=$request->manufacture_id;
    $data['product_long_description']=$request->product_long_description;

    $data['product_price']=$request->product_price;
    $data['product_image']=$request->product_image;

    DB::table('tbl_products')->where('product_id',$product_id)->update($data);
    //for shng mssagp
    Session::put('exception','Data updated successfully');
    return Redirect::to('/all-product');

     }

}
