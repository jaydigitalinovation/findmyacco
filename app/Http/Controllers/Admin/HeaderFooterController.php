<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Admin;
use DB;

class HeaderFooterController extends Controller
{

    public function add_banner_image_data($id){
        
        $banner_image=DB::table('banner_image')->where('id',$id)->get();

        $data['image']=$banner_image[0]->image;

        $data['title']=$banner_image[0]->title;

        $data['page_name']=$banner_image[0]->page_name;

        $data['description']=$banner_image[0]->description;

        $data['id']=$banner_image[0]->id;
              

        return view('admin.add_banner_image_data',$data);
    }

    public function store_add_banner_image_data(Request $request,$id){

            $validated=$request->validate([
                'title'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            $page_name=$request->input('page_name');

            $file=$request->file('image');

            $oldimage=$request->input('oldimage');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage !=''){

                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('banner_image')->where('id',$id)->update(['image'=>$imagename,]);
            }

            DB::table('banner_image')->where('id',$id)->update(['title'=>$title,'description'=>$description,]);


            if($page_name == 'aboutus'){

                return redirect('admin/aboutus_banner')->with('error',' update banner data succcesfully!!!!');
            }

            if($page_name == 'faq'){

                return redirect('admin/faq_banner')->with('error',' update banner data succcesfully!!!!');
            }

            if($page_name == 'education'){

                return redirect('admin/education_banner')->with('error',' update banner data succcesfully!!!!');
            }

            if($page_name == 'partner'){

                return redirect('admin/partner_banner')->with('error',' update banner data succcesfully!!!!');
            }

            if($page_name == 'contact'){

                return redirect('admin/contact_banner')->with('error',' update banner data succcesfully!!!!');
            }

            if($page_name == 'host_home'){

                return redirect('admin/host_home_banner')->with('error',' update banner data succcesfully!!!!');
            }

            if($page_name == 'blog'){

                return redirect('admin/blog_banner')->with('error',' update banner data succcesfully!!!!');
            }

            if($page_name == 'education_partner'){

                return redirect('admin/education_banner')->with('error',' update banner data succcesfully!!!!');
            }

            if($page_name == 'education_studentloan'){

                return redirect('admin/education_banner')->with('error',' update banner data succcesfully!!!!');
            }
            if($page_name == 'allroom'){

                return redirect('admin/allroom_banner')->with('error',' update banner data succcesfully!!!!');
            }
            if($page_name == 'country'){

                return redirect('admin/country_banner')->with('error',' update banner data succcesfully!!!!');
            }
        
    }





    public function header_offer(){

        $header_offer=DB::table('header_offer')->get();

        $data['header_offer']=$header_offer;

        return view('admin.header_offer',$data);
    }

    public function add_header_offer_data($id){

        
        $header_offer=DB::table('header_offer')->where('id',$id)->get();

        $data['offer']=$header_offer[0]->offer;

        $data['id']=$header_offer[0]->id;
              

        return view('admin.add_header_offer_data',$data);
    }

    public function store_add_header_offer_data(Request $request,$id){

            $validated=$request->validate([
                'offer'=>'required',
            ]);

            $offer=$request->input('offer');

            DB::table('header_offer')->where('id',$id)->update(['offer'=>$offer,]);

            return redirect('/admin/header_offer')->with('error','data updated successfully!!!');
        
    }






    public function header_contact(){

        $header_contact=DB::table('header_contact')->get();

        $data['header_contact']=$header_contact;

        return view('admin.header_contact',$data);
    }

    public function add_header_contact_data($id){

        
        $header_contact=DB::table('header_contact')->where('id',$id)->get();

        $data['mobile_no']=$header_contact[0]->mobile_no;

        $data['phone_no']=$header_contact[0]->phone_no;

        $data['email']=$header_contact[0]->email;

        $data['id']=$header_contact[0]->id;
              

        return view('admin.add_header_contact_data',$data);
    }

    public function store_add_header_contact_data(Request $request,$id){

            $validated=$request->validate([
                'mobile_no'=>'required',
                'phone_no'=>'required',
                'email'=>'required|email',
            ]);

            $mobile_no=$request->input('mobile_no');

            $phone_no=$request->input('phone_no');

            $email=$request->input('email');

            DB::table('header_contact')->where('id',$id)->update(['mobile_no'=>$mobile_no,'phone_no'=>$phone_no,'email'=>$email,]);

            return redirect('/admin/header_contact')->with('error','data updated successfully!!!');
        
    }






    public function admin_detail(){

            $admin_detail=DB::table('admin_detail')->get();

            $data['admin_detail']=$admin_detail;

            return view('admin.admin_detail',$data);
         }



         public function add_admin_detail_data($id){

            if($id==0){

                    $data['name']='';
                    $data['email']='';
                    
                    $data['phone_no']='';
                    $data['address']='';

                    $data['id']=0;


                  }else{

                      $admin_detail=DB::table('admin_detail')->where('id',$id)->get();

                    $data['name']=$admin_detail[0]->name;
                    $data['email']=$admin_detail[0]->email;

                    $data['phone_no']=$admin_detail[0]->phone_no;

                    $data['address']=$admin_detail[0]->address;

                    $data['id']=$admin_detail[0]->id;


                  } 

               return view('admin.add_admin_detail_data',$data);
        }

        public function store_add_admin_detail_data(Request $request,$id){

            if($id==0){

                $validated=$request->validate([
                    'name'=>'required',
                    'email'=>'required|email',
                    'phone_no'=>'required',
                    'address'=>'required',
                ]);

                $name=$request->input('name');

                $email=$request->input('email');

                $phone_no=$request->input('phone_no');

                $address=$request->input('address');

                DB::table('admin_detail')->insert(['name'=>$name,'email'=>$email ,'phone_no'=>$phone_no,'address'=>$address ,]);

                return redirect('/admin/admin_detail')->with('error','data submitted successfully!!!');
            }else{

                $validated=$request->validate([
                    'name'=>'required',
                    'email'=>'required|email',
                    'phone_no'=>'required',
                    'address'=>'required',
                ]);

                $name=$request->input('name');

                $email=$request->input('email');

                $phone_no=$request->input('phone_no');

                $address=$request->input('address');

                DB::table('admin_detail')->where('id',$id)->update(['name'=>$name,'email'=>$email ,'phone_no'=>$phone_no,'address'=>$address ,]);

                return redirect('/admin/admin_detail')->with('error','data updated successfully!!!');
            }
        }


        public function delete_admin_detail($id){

            DB::table('admin_detail')->where('id', $id)->delete();

            return response()->json([
             'success' => 'Record has been deleted successfully!'
            ]);

        }






    public function footer_description(){

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description;

        return view('admin.footer_description',$data);
    }

    public function add_footer_description_data($id){

        
        $footer_description=DB::table('footer_description')->where('id',$id)->get();

        $data['description']=$footer_description[0]->description;

        $data['id']=$footer_description[0]->id;
              

        return view('admin.add_footer_description_data',$data);
    }

    public function store_add_footer_description_data(Request $request,$id){

            $validated=$request->validate([
                'description'=>'required',
            ]);

            $description=$request->input('description');

            DB::table('footer_description')->where('id',$id)->update(['description'=>$description,]);

            return redirect('/admin/footer_description')->with('error','data updated successfully!!!');
        
    }



    public function social_links(){

        $social_links=DB::table('social_links')->get();

        $data['social_links']=$social_links;

        return view('admin.social_links',$data);
    }

    public function add_social_links_data($id){

        
        $social_links=DB::table('social_links')->where('id',$id)->get();

        $data['facebook_url']=$social_links[0]->facebook_url;

        $data['twitter_url']=$social_links[0]->twitter_url;

        $data['linkedin_url']=$social_links[0]->linkedin_url;

        $data['instagram_url']=$social_links[0]->instagram_url;

        $data['id']=$social_links[0]->id;
              

        return view('admin.add_social_links_data',$data);
    }

    public function store_add_social_links_data(Request $request,$id){

            $facebook_url=$request->input('facebook_url');
            $twitter_url=$request->input('twitter_url');
            $linkedin_url=$request->input('linkedin_url');
            $instagram_url=$request->input('instagram_url');

            DB::table('social_links')->where('id',$id)->update(['facebook_url'=>$facebook_url,'twitter_url'=>$twitter_url,'linkedin_url'=>$linkedin_url,'instagram_url'=>$instagram_url,]);

            return redirect('/admin/social_links')->with('error','data updated successfully!!!');
        
    }


    public function inquiry_data(){

        $data['inquiry_data']=DB::table('inquiry')->get();

        return view('admin.inquiry_data',$data);
    }

    public function delete_inquiry_data($id){

        DB::table('inquiry')->where('id', $id)->delete();

            return response()->json([
             'success' => 'Record has been deleted successfully!'
            ]);
    }




    public function contact_admin_data(){

        $data['contact_admin_data']=DB::table('contact_admin')->get();

        return view('admin.contact_admin_data',$data);
    }

    public function delete_contact_admin_data($id){

        DB::table('contact_admin')->where('id', $id)->delete();

            return response()->json([
             'success' => 'Record has been deleted successfully!'
            ]);
    }





    public function host_home_admin_data(){

        $data['host_home_admin_data']=DB::table('host_home_admin')->get();

        return view('admin.host_home_admin_data',$data);
    }

    public function delete_host_home_admin_data($id){

        DB::table('host_home_admin')->where('id', $id)->delete();

            return response()->json([
             'success' => 'Record has been deleted successfully!'
            ]);
    }




    public function education_studentloan_admin_data(){

        $data['education_studentloan_admin_data']=DB::table('education_studentloan_admin')->get();

        return view('admin.education_studentloan_admin_data',$data);
    }

    public function delete_education_studentloan_admin_data($id){

        DB::table('education_studentloan_admin')->where('id', $id)->delete();

            return response()->json([
             'success' => 'Record has been deleted successfully!'
            ]);
    }




    public function partner_application_data(){

        $data['partner_application_data']=DB::table('partner_application_data')->get();

        return view('admin.partner_application_data',$data);
    }

    public function delete_partner_application_data($id){

        DB::table('partner_application_data')->where('id', $id)->delete();

            return response()->json([
             'success' => 'Record has been deleted successfully!'
            ]);
    }





    public function education_request_data(){

        $data['education_request_data']=DB::table('education_request')->get();

        return view('admin.education_request_data',$data);
    }

    public function delete_education_request_data($id){

        DB::table('education_request')->where('id', $id)->delete();

            return response()->json([
             'success' => 'Record has been deleted successfully!'
            ]);
    }




    public function education_apply_data(){

        $data['education_apply_data']=DB::table('education_apply')->get();

        return view('admin.education_apply_data',$data);
    }

    public function delete_education_apply_data($id){

        DB::table('education_apply')->where('id', $id)->delete();

            return response()->json([
             'success' => 'Record has been deleted successfully!'
            ]);
    }
}
