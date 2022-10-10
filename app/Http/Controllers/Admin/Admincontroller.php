<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\carbon;
use DB;
use Hash;
use \Crypt;
use Illuminate\support\facades\Auth;
use Illuminate\support\facades\Redirect;
use Illuminate\support\facades\validator;

class Admincontroller extends Controller
{
    public function __construct(){

                $this->middleware('auth:admin');
        }

   public function home(){
 
        $admin=Auth::guard('admin')->user();

       
        $data['admin']=$admin;

        $data['site_url']= env('APP_URl');
        $data['metatitle']='home page';

        $id=Auth::id();
        $admin=Admin::where('id',$id)->get();

        $data['admin_name']=$admin[0]->name;

        return view('admin.home',$data);
      
     }


     /*----------- change password ---------------*/

    public function changepassword(){
       
        return view('admin.change_password');
    }

    public function updatepassword(Request $request,$id){

        $error=$request->validate([
          'oldpassword' => 'required|string',
          'newpassword' => 'required|string|min:6',
       
        ]);

        $oldpassword=$request->input('oldpassword');
        $newpassword=$request->input('newpassword');

        $password=DB::table('admins')->where('id', $id)->get();

        $password1=$password[0]->password;

        if(Hash::check($oldpassword,$password1)){

           DB::table('admins')->where('id', $id)->update(['password'=>Hash::make($newpassword)]);

           return redirect('admin/home')->with('error','your password has been update sucessfully' );

           }else{

            return Redirect::back()->with('error','Your Old password is not correct!!!!');

        }
    }
}
