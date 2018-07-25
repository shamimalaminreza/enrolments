<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Cart;

class CartController extends Controller{

	//mthd f0 addtocart
    public function addtocart(Request $request){
	
       $product_id=$request->product_id;   
      $qty=$request->qty;
      $product_info=DB::table('tbl_products')->where('product_id',$product_id)->first();
       $data['qty']=$qty;
       $data['id']=$product_info->product_id;
       $data['name']=$product_info->product_name;
       $data['price']=$product_info->product_price;
       $data['options']['image']=$product_info->product_image;
       Cart::add($data);
       return Redirect::to('/show-cart');


     }
//show_cart
   public function show_cart(){
    $all_published_category=DB::table('tbl_category')->where('publication_status',1)->get();
$mange_published_category=view('pages.add_to_cart')->with('all_published_category',$all_published_category);
    return view('layout')->with('pages.add_to_cart',$mange_published_category);

     }

     //delete_to_cart
public function delete_to_cart($rowId){
//t0 delete_cart 1 Itm
	//Cart::update($rowId, 0);
	Cart::remove($rowId);
    return Redirect::to('/show-cart');

     }
//update_cart
public function update_cart(Request $request){
$qty=$request->qty;
$rowId=$request->rowId;
Cart::update($rowId, $qty);
return Redirect::to('/show-cart');


    }

}
