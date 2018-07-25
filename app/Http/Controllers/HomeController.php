<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
//use Wishlist;
use Cart;

class HomeController extends Controller{
   
public function index(){
	        

//return view('pages.home_content');
//$this->AdminAuthCheck();
    $all_published_product=DB::table('tbl_products')
    ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
    ->join('tbl_manufacture', 'tbl_products.manufacture_id', '=','tbl_manufacture.manufacture_id')
    ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufacture.manufacture_name')
    ->where('tbl_products.publication_status',1)
    //->limit(6)
    //->get();
      ->orderBy('product_id','ASC')
      ->paginate(3);


    $mange_published_product=view('pages.home_content')->with('all_published_product',$all_published_product);
     return view('layout')->with('pages.home_content',$mange_published_product);

     }
//mthd productbycategory

public function productbycategory($category_id){
$product_by_category=DB::table('tbl_products')
    ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
    ->select('tbl_products.*', 'tbl_category.category_name')
    ->where('tbl_category.category_id',$category_id)
    ->where('tbl_products.publication_status',1)

    ->limit(18)
    ->get();
$mange_product_by_category=view('pages.category_by_product')->with('product_by_category',$product_by_category);
     return view('layout')->with('pages.category_by_product',$mange_product_by_category);

     }






   public function productcategory($category_id){
   $product_categorys=DB::table('tbl_products')
    ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
    ->select('tbl_products.*', 'tbl_category.category_name')
    ->where('tbl_category.category_id',$category_id)
    ->where('tbl_products.publication_status',1)

    ->limit(12)
    ->get();
$mange_product_by_category=view('pages.home_content')->with('product_categorys',$product_categorys);
     return view('layout')->with('pages.home_content',$mange_product_by_category);

     }



   //productbymanufacture
public function productbymanufacture($manufacture_id){
    $all_manufacture_product=DB::table('tbl_products')
    ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
    ->join('tbl_manufacture', 'tbl_products.manufacture_id', '=','tbl_manufacture.manufacture_id')
    ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufacture.manufacture_name')
    ->where('tbl_manufacture.manufacture_id',$manufacture_id)

    ->where('tbl_products.publication_status',1)
    ->limit(18)
    ->get();
$mange_product_by_manufacture=view('pages.manufacture_by_product')->with('all_manufacture_product',$all_manufacture_product);
     return view('layout')->with('pages.manufacture_by_product',$mange_product_by_manufacture);

      }


//mthd product_details_by_id
public function product_details_by_id($product_id){

    $product_details_by=DB::table('tbl_products')
    ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
    ->join('tbl_manufacture', 'tbl_products.manufacture_id', '=','tbl_manufacture.manufacture_id')
    ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufacture.manufacture_name')
    ->where('tbl_products.product_id',$product_id)
    ->where('tbl_products.publication_status',1)
    ->first();
     $mange_product_by_details=view('pages.product_details')->with('product_details_by',$product_details_by);
     return view('layout')->with('pages.product_details',$mange_product_by_details);

      }

//mthd contact_us

public function contact_us(){
    $title="contact_us";
return view('pages.contact-us');

      }
//save-contact
public function save_contact(Request $request){
    $data=array();
    $data['contact_id']=$request->contact_id;
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['subject']=$request->subject;
    $data['message']=$request->message;

    DB::table('tbl_contact')->insert($data);
    Session::put('data','Data insert successfully');
    return Redirect::to('/contact-us');


}
//Wish_list
public function Wish_list(){
return view('pages.Wishlist_page');

    }

//Save_Review
   public function Save_Review(Request $request){
    $data=array();
    $data['review_id']=$request->review_id;
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['details']=$request->details;
    DB::table('tbl_review')->insert($data);
    Session::put('data','Review insert successfully');
    return Redirect::to('/');
}
//add_Save_list
public function add_Save_list(Request $request){
     
       $product_id=$request->product_id;   
      $qty=$request->qty;
      $product_info=DB::table('tbl_products')->where('product_id',$product_id)->first();
       $data['qty']=$qty;
       $data['id']=$product_info->product_id;
       $data['name']=$product_info->product_name;
       $data['price']=$product_info->product_price;
       $data['options']['image']=$product_info->product_image;
       Cart::add($data);
       return Redirect::to('/show-list');

     }
//show_cart
   public function show_list(){
   $all_published_category=DB::table('tbl_category')->where('publication_status',1)->get();
   $mange_published_category=view('pages.Wishlist_page')->with('all_published_category',$all_published_category);
    return view('layout')->with('pages.Wishlist_page',$mange_published_category);

     }

//delete_to_list
    public function delete_to_list($rowId){
  Cart::remove($rowId);
  return Redirect::to('/show-list'); 
   }

//mthd Compayer_list

public function Compayer_list(){
return view('pages.Compayer');

    }
///add_comparer
     public function add_comparer(Request $request){
       $product_id=$request->product_id;   
      $qty=$request->qty;
      $product_info=DB::table('tbl_products')->where('product_id',$product_id)->first();
       $data['qty']=$qty;
       $data['id']=$product_info->product_id;
       $data['name']=$product_info->product_name;
       $data['price']=$product_info->product_price;
       $data['options']['image']=$product_info->product_image;
       Cart::add($data);
       return Redirect::to('/show-compayer');
     }
    public function show_compayer(){
   $all_published_category=DB::table('tbl_category')->where('publication_status',1)->get();
   $mange_published_category=view('pages.Compayer')->with('all_published_category',$all_published_category);
    return view('layout')->with('pages.Compayer',$mange_published_category);
     }
//Pro_file
public function Pro_file(){
return view('pages.Profile');
     }
//update-customer
public function updatecustomer($customer_id,Request $request){
    $data=array();
    $data['customer_name']=$request->customer_name;
    $data['customer_email']=$request->customer_email;
    $data['password']=md5($request->password);
    $data['mobile_number']=$request->mobile_number;
    DB::table('tbl_customer')->where('customer_id',$customer_id)->update($data);
    Session::put('massg','Data updated successfully');
    return Redirect::to('/Profile');

     }

}