<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\support\facades\Auth;
use App\Models\Admin;
use Illuminate\support\MessageBag;
use Illuminate\Support\Facades\Mail;
use Illuminate\support\facades\Input;
use DB;
use Hash;

class Form_controller extends Controller
{
    public function getinquiry1(Request $request){

        $validator = Validator::make($request->all(), [
          
            'name' => 'required',
            'email' => 'required|email',
            'mobile_no' => 'required',
            'university' => 'required',
       
        ]);

          if($validator->fails()){

          return response()->json(['error'=>$validator->errors()->all()]);
        }

         $name=$request->name;
         $email=$request->email;
         $mobile_no=$request->mobile_no;
         $university=$request->university;         
      


       $inquiry=DB::table('inquiry')->insert(['name'=>$name,'email'=>$email,'mobile_no'=>$mobile_no,'university'=>$university,]);

       if($inquiry){


            $admin_detail=DB::table('admins')->get();

            $aemail=$admin_detail[0]->email;

            $aphone_no=$admin_detail[0]->phone_no;
       
             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="apptest2303@gmail.com";
             $meta['subject']="Someone need expert help";  
                 
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'New Get Started Inquiry');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });




             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="$email";
             $meta['subject']="New Get Started Inquiry";  
            
          
      
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'Inquiry submitted successfully');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });



         return response()->json(['success'=>'Registration successfully completed..']);


       }


     }

     public function getinquiry(Request $request){

        
        $validator = Validator::make($request->all(), [
              'name' => 'required',
            'email' => 'required|email',
            'mobile_no' => 'required',
            'university' => 'required',
        ]);

        if ($validator->passes()) {

        $name=$request->name;
         $email=$request->email;
         $phone_no=$request->mobile_no;
         $university=$request->university;

         $inquiry=DB::table('inquiry')->insert(['name'=>$name,'email'=>$email,'phone_no'=>$phone_no,'university'=>$university,]);

       if($inquiry){


            $admin_detail=DB::table('admins')->get();

            $aemail=$admin_detail[0]->email;

            $aphone_no=$admin_detail[0]->phone_no;
       
             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="apptest2303@gmail.com";
             $meta['subject']="Someone need expert help";  
                 
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'New Get Started Inquiry');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });




             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="$email";
             $meta['subject']="New Get Started Inquiry";  
            
          
      
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'Inquiry submitted successfully');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });
            

            return response()->json(['success'=>'Response Sent successfully.']);
            
        }
    }

        return response()->json(['error'=>$validator->errors()]);
        
    }




    public function become_partner(Request $request){

        
        $validator = Validator::make($request->all(), [
              'fname' => 'required',
              'lname' => 'required',
            'email' => 'required|email',
            'mobile_no' => 'required',
            'partner_name' => 'required',
            'website' => 'required',
            'message' => 'required',
        ]);



        if ($validator->passes()) {


        $fname=$request->fname;
        $lname=$request->lname;
         $email=$request->email;
         $phone_no=$request->mobile_no;
         $partner_name=$request->partner_name;
         $website=$request->website;
         $message=$request->message;

         $inquiry=DB::table('partner_application_data')->insert(['fname'=>$fname,'lname'=>$lname,'email'=>$email,'phone_no'=>$phone_no,'partner_name'=>$partner_name,'website_name'=>$website,'message'=>$message,]);

       if($inquiry){


            $admin_detail=DB::table('admins')->get();

            $aemail=$admin_detail[0]->email;

            $aphone_no=$admin_detail[0]->phone_no;
       
             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="apptest2303@gmail.com";
             $meta['subject']="Someone need expert help";  
                 
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'New Get Started Inquiry');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });




             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="$email";
             $meta['subject']="New Get Started Inquiry";  
            
          
      
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'Inquiry submitted successfully');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });
            

            return response()->json(['success'=>'Response Sent successfully.']);
            
        }
    }

        return response()->json(['error'=>$validator->errors()]);
        
    }



    


    public function education_request(Request $request){

        
        $validator = Validator::make($request->all(), [
              'name' => 'required',
              'phone_no' => 'required',
            'email' => 'required|email',
            'amount' => 'required',
            'country' => 'required',
            'status' => 'required',
            'city' => 'required',
            'startDate' => 'required',
        ]);



        if ($validator->passes()) {


        $name=$request->name;
        $phone_no=$request->phone_no;
         $email=$request->email;
         $amount=$request->amount;
         $country=$request->country;
         $status=$request->status;
         $city=$request->city;
         $startDate=$request->startDate;

         $inquiry=DB::table('education_request')->insert(['name'=>$name,'phone_no'=>$phone_no,'email'=>$email,'amount'=>$amount,'country'=>$country,'status'=>$status,'city'=>$city,'startDate'=>$startDate,]);

       if($inquiry){


            $admin_detail=DB::table('admins')->get();

            $aemail=$admin_detail[0]->email;

            $aphone_no=$admin_detail[0]->phone_no;
       
             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="apptest2303@gmail.com";
             $meta['subject']="Someone need expert help";  
                 
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'New Get Started Inquiry');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });




             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="$email";
             $meta['subject']="New Get Started Inquiry";  
            
          
      
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'Inquiry submitted successfully');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });
            

            return response()->json(['success'=>'Response Sent successfully.']);
            
        }
    }

        return response()->json(['error'=>$validator->errors()]);
        
    }





    public function education_apply(Request $request){

        
        $validator = Validator::make($request->all(), [
              'name' => 'required',
              'phone_no' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'message' => 'required',
        ]);



        if ($validator->passes()) {


        $name=$request->name;
        $phone_no=$request->phone_no;
         $email=$request->email;
         $country=$request->country;
         $message=$request->message;

         $inquiry=DB::table('education_apply')->insert(['name'=>$name,'phone_no'=>$phone_no,'email'=>$email,'country'=>$country,'message'=>$message,]);

       if($inquiry){


            $admin_detail=DB::table('admins')->get();

            $aemail=$admin_detail[0]->email;

            $aphone_no=$admin_detail[0]->phone_no;
       
             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="apptest2303@gmail.com";
             $meta['subject']="Someone need expert help";  
                 
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'New Get Started Inquiry');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });




             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="$email";
             $meta['subject']="New Get Started Inquiry";  
            
          
      
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'Inquiry submitted successfully');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });
            

            return response()->json(['success'=>'Response Sent successfully.']);
            
        }
    }

        return response()->json(['error'=>$validator->errors()]);
        
    }






    public function scholarship_request(Request $request){

        
        $validator = Validator::make($request->all(), [
              'fname' => 'required',
              'lname' => 'required',
              'phone_no' => 'required',
            'email' => 'required|email',
            'university' => 'required',
            'destination' => 'required',
        ]);



        if ($validator->passes()) {

        $fname=$request->fname;
        $lname=$request->lname;
        $phone_no=$request->phone_no;
         $email=$request->email;
         $university=$request->university;
         $destination=$request->destination;

         $inquiry=DB::table('scholarship_request')->insert(['fname'=>$fname,'lname'=>$lname,'phone_no'=>$phone_no,'email'=>$email,'university'=>$university,'destination'=>$destination,]);

       if($inquiry){


            $admin_detail=DB::table('admins')->get();

            $aemail=$admin_detail[0]->email;

            $aphone_no=$admin_detail[0]->phone_no;
       
             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="apptest2303@gmail.com";
             $meta['subject']="Someone need expert help";  
                 
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'New Get Started Inquiry');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });




             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="$email";
             $meta['subject']="New Get Started Inquiry";  
            
          
      
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'Inquiry submitted successfully');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });
            

            return response()->json(['success'=>'Response Sent successfully.']);
            
        }
    }

        return response()->json(['error'=>$validator->errors()]);
        
    }








     public function contact_admin(Request $request){

        $validated=$request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone_no'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $name=$request->input('name');

        $email=$request->input('email');

        $phone_no=$request->input('phone_no');

        $subject=$request->input('subject');

        $message=$request->input('message');

        $inquiry = DB::table('contact_admin')->insert(['name'=>$name,'email'=>$email,'phone_no'=>$phone_no,'subject'=>$subject,'message'=>$message,]);



        if($inquiry){


            $admin_detail=DB::table('admins')->get();

            $aemail=$admin_detail[0]->email;

            $aphone_no=$admin_detail[0]->phone_no;
       
             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="apptest2303@gmail.com";
             $meta['subject']="Someone need expert help";  
                 
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'New Get Started Inquiry');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });




             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="$email";
             $meta['subject']="New Get Started Inquiry";  
            
          
      
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'Inquiry submitted successfully');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });
                        
        }

        return redirect('/contact_us')->with('error','message sent successfully!');
     }




     public function host_home_admin(Request $request){

        $validated=$request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone_no'=>'required',
            'city'=>'required',
            'university'=>'required',
            'lease'=>'required',
            'price'=>'required',
        ]);

        $name=$request->input('name');

        $email=$request->input('email');

        $phone_no=$request->input('phone_no');

        $city=$request->input('city');

        $university=$request->input('university');

        $lease=$request->input('lease');

        $price=$request->input('price');

        $inquiry=DB::table('host_home_admin')->insert(['name'=>$name,'email'=>$email,'phone_no'=>$phone_no,'city'=>$city,'university'=>$university,'lease'=>$lease,'price'=>$price,]);

        if($inquiry){


            $admin_detail=DB::table('admins')->get();

            $aemail=$admin_detail[0]->email;

            $aphone_no=$admin_detail[0]->phone_no;
       
             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="apptest2303@gmail.com";
             $meta['subject']="Someone need expert help";  
                 
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'New Get Started Inquiry');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });




             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="$email";
             $meta['subject']="New Get Started Inquiry";  
            
          
      
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'Inquiry submitted successfully');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });
            
            
        }

        return redirect('/host_home')->with('error','message sent successfully!');
     }



     public function education_studentloan_admin(Request $request){

        $validated=$request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone_no'=>'required',
            'city'=>'required',
            'amount'=>'required',
            'status'=>'required',
            'country'=>'required',
        ]);

        $name=$request->input('name');

        $email=$request->input('email');

        $phone_no=$request->input('phone_no');

        $city=$request->input('city');

        $amount=$request->input('amount');

        $status=$request->input('status');

        $country=$request->input('country');

        $inquiry=DB::table('education_studentloan_admin')->insert(['name'=>$name,'email'=>$email,'phone_no'=>$phone_no,'city'=>$city,'amount'=>$amount,'status'=>$status,'country'=>$country,]);


        if($inquiry){


            $admin_detail=DB::table('admins')->get();

            $aemail=$admin_detail[0]->email;

            $aphone_no=$admin_detail[0]->phone_no;
       
             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="apptest2303@gmail.com";
             $meta['subject']="Someone need expert help";  
                 
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'New Get Started Inquiry');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });




             $meta['FROM_EMAIL']="apptest2303@gmail.com";
             $meta['email']="$email";
             $meta['subject']="New Get Started Inquiry";  
            
          
      
           Mail::send('email.resetpassword_url1', $meta, function($m) use($meta){
        
               $m->from($meta['FROM_EMAIL'],'Inquiry submitted successfully');
               $m->to($meta['email']);
               $m->subject($meta['subject']); 
             });
                        
        }

        return redirect('/education_studentloan')->with('error','message sent successfully!');
     }

}
