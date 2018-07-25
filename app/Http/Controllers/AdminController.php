<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller{
    public function index(){
	//
      return view('admin_login');
     }


     //admn l0gn dashb0ad
public function dashboard(Request $request){
   $admin_email=$request->admin_email;
    $admin_password=md5($request->admin_password);
    $result=DB::table('tbl_admin')
    ->where('admin_email',$admin_email)
    ->where('admin_password',$admin_password)
    ->first();
     if ($result) {
             
     	Session::put('admin_email',$result->admin_email);
     Session::put('admin_name',$result->admin_name);
     Session::put('admin_id',$result->admin_id);
      Session::put('exception','You are successfully login');
         return Redirect::to('/dashboard');
             }else{
          Session::put('exception','Email and password invalid');
         return Redirect::to('/admin');
             }
     }

}
