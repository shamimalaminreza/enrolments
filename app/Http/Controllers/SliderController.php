<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class SliderController extends Controller{

 
public function index(){
	
return view('admin.add_slider');
     }

//saveslider
	
 public function saveslider(Request $request){
     $data=array();
     $data['publication_status']=$request->publication_status;
     $image=$request->file('slider_image');
     if ($image) {
        $image_name=str_random(20);
        $txt=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$txt;
        $upload_path='Slider/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path, $image_full_name);
        if ($success) {
            $data['slider_image']=$image_url;
             DB::table('tbl_slider')->insert($data);
Session::put('exception','Data  insert successfully');
         return Redirect::to('/add-slider');
        }
       }
//$image_url

  $data['slider_image']='';
  DB::table('tbl_slider')->insert($data);
Session::put('exception','Data  insert without image successfully');
   return Redirect::to('/add-slider');

    }    
//allslider
    public function allslider(){
     $all_slider_info=DB::table('tbl_slider')->get();
     $mange_slider=view('admin.all_slider')->with('all_slider_info',$all_slider_info);
    return view('admin_layout')->with('admin.all_slider',$mange_slider);

}
//unactiveslider
  public function unactiveslider($slider_id){
    DB::table('tbl_slider')->where('slider_id',$slider_id)->update(['publication_status'=>0]);
    Session::put('exception','Slider unactive successfully');
        return Redirect::to('/all-slider');

     }
//activeslider
public function activeslider($slider_id){
    DB::table('tbl_slider')->where('slider_id',$slider_id)->update(['publication_status'=>1]);
    Session::put('exception','Slider active successfully');
        return Redirect::to('/all-slider');

     }

     //deleteslider
public function deleteslider($slider_id){
    DB::table('tbl_slider')->where('slider_id',$slider_id)->delete();
    Session::put('exception','Slider delete successfully');
        return Redirect::to('/all-slider');

     }





}
