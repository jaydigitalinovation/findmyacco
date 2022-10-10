<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\Admin;
use DB;

class Home_controller extends Controller
{
    public function index(){

        $data['home_banner']=DB::table('home_banner')->get();

        $data['home_banner_image']=DB::table('home_banner_image')->get();

        $data['home_counter']=DB::table('home_counter')->get();

        $data['home_choose']=DB::table('home_choose')->get();

        $data['home_choose_image']=DB::table('home_choose_image')->get();

        $data['home_notch']=DB::table('home_notch')->get();

        $data['home_work']=DB::table('home_work')->get();

        $data['home_testimonial']=DB::table('home_testimonial')->get();

        $data['home_testimonial_description']=DB::table('home_testimonial_description')->get();

        $data['countries']=DB::table('countries')->get();

        $data['cities']=DB::table('cities')->inRandomOrder()->limit(4)->get();



        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();





        return view('index',$data);
    }

    public function about_us(){

        $data['banner_image']=DB::table('banner_image')->where('page_name','aboutus')->get();

        $data['aboutus_about']=DB::table('aboutus_about')->get();

        $data['aboutus_mission_vision']=DB::table('aboutus_mission_vision')->get();

        $mission_vision_banner=DB::table('inner_banner_image')->where('name','mission_vision')->get();

        $data['mission_vision_banner_image']=$mission_vision_banner[0]->image;

        $counter_banner=DB::table('inner_banner_image')->where('name','counter')->get();

        $data['counter_banner_image']=$counter_banner[0]->image;

        $data['aboutus_counter']=DB::table('aboutus_counter')->get();

        $data['aboutus_team']=DB::table('aboutus_team')->get();

        $data['aboutus_timeline']=DB::table('aboutus_timeline')->get();




        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();




        return view('about_us',$data);
    }



    public function scholarship(){

        $scholarship_banner=DB::table('scholarship_banner')->get();

        $data['bg_image']=$scholarship_banner[0]->image;

        $scholarship_banner_title=DB::table('scholarship_banner_title')->get();

        $data['title1']=$scholarship_banner_title[0]->title1;

        $data['title2']=$scholarship_banner_title[0]->title2;

        $data['title3']=$scholarship_banner_title[1]->title1;

        $data['title4']=$scholarship_banner_title[1]->title2;

        $data['scholarship_about']=DB::table('scholarship_about')->get();

        $data['scholarship_service']=DB::table('scholarship_service')->get();

        $data['scholarship_journey']=DB::table('scholarship_journey')->get();

        $data['scholarship_future']=DB::table('scholarship_future')->get();

        $data['scholarship_detail']=DB::table('scholarship_detail')->get();

        $data['scholarship_available']=DB::table('scholarship_available')->get();

        $data['scholarship_faq']=DB::table('scholarship_faq')->get();





        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();




        return view('scholarship',$data);
    }



    public function partner(){

        $data['banner_image']=DB::table('banner_image')->where('page_name','partner')->get();

        $data['partner_info']=DB::table('partner_info')->get();

        $data['partner_info_des']=DB::table('partner_info_des')->get();

        $data['partner_detail']=DB::table('partner_detail')->get();

        $data['partner_form']=DB::table('partner_form')->get();




        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();






        return view('partner',$data);
    }


    public function partner_detail($id){

        $data['banner_image']=DB::table('banner_image')->where('page_name','partner')->get();

        $data['partner_detail']=DB::table('partner_detail')->where('id',$id)->get();

        $data['partner_acco']=DB::table('partner_acco')->get();

        $data['partner_acco_des']=DB::table('partner_acco_des')->get();

        $data['partner_faq']=DB::table('partner_faq')->get();

        $data['partner_faq_des']=DB::table('partner_faq_des')->get();





        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();





        return view('partner_detail',$data);
    }


    public function contact_us(){

        $data['banner_image']=DB::table('banner_image')->where('page_name','contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $data['contact_detail']=DB::table('contact_detail')->get();

        $data['social_links']=DB::table('social_links')->get();




        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();





        return view('contact_us',$data);
    }


    public function faq(){

        $data['banner_image']=DB::table('banner_image')->where('page_name','faq')->get();

        $data['faq_section']=DB::table('faq_section')->get();

        $data['faq_list']=DB::table('faq_list')->get();



        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();






        return view('faq',$data);
    }



    public function blog(){

        $data['banner_image']=DB::table('banner_image')->where('page_name','blog')->get();

        $data['blog_detail']=DB::table('blog_detail')->get();

        $data['blog_detail_slide1']=DB::table('blog_detail')->inRandomOrder()->limit(3)->get();

        $data['blog_detail_slide2']=DB::table('blog_detail')->inRandomOrder()->limit(3)->get();





        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();




        return view('blog',$data);
    }


    public function education(){

        $data['banner_image']=DB::table('banner_image')->where('page_name','education')->get();

        $data['education_country']=DB::table('education_country')->get();

        $data['education_country_des']=DB::table('education_country_des')->get();

        $data['education_choose']=DB::table('education_choose')->get();

        $data['education_choose_des']=DB::table('education_choose_des')->get();

        $data['education_partner']=DB::table('education_partner')->get();

        $data['education_partner_des']=DB::table('education_partner_des')->get();

        $education_form=DB::table('education_form_image')->get();

        $data['education_form_image']=$education_form[0]->image;

        $data['education_form_side_image']=$education_form[0]->side_image;




        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();





        return view('education',$data);
    }



     public function country_data($id){

        $data['banner_image']=DB::table('banner_image')->where('page_name','country')->get();

        $data['cities']=DB::table('cities')->where('country_id',$id)->get();

        $data['university']=DB::table('universities')->where('country_id',$id)->get();

        $data['partner_acco']=DB::table('partner_acco')->get();

        $data['partner_acco_des']=DB::table('partner_acco_des')->get();

        $country=DB::table('countries')->where('id',$id)->get();

        $data['country']=$country[0]->name;




        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();




         return view('country_data',$data);

    }

    public function all_room(){

        $data['banner_image']=DB::table('banner_image')->where('page_name','allroom')->get();

        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();



        return view('all_room',$data);
    }



    public function education_partner_detail(){

        $data['banner_image']=DB::table('banner_image')->where('page_name','education_partner')->get();

        $data['education_partner_detail']=DB::table('education_partner_detail')->get();

        $data['education_faq']=DB::table('education_faq')->get();




        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();



        return view('education_partner_detail',$data);
    }


    public function education_studentloan(){

        $data['banner_image']=DB::table('banner_image')->where('page_name','education_studentloan')->get();

        $data['education_choose']=DB::table('education_choose')->get();

        $data['education_choose_des']=DB::table('education_choose_des')->get();

        $data['education_partner']=DB::table('education_partner')->get();

        $data['education_partner_des']=DB::table('education_partner_des')->get();

        $data['education_studentloan']=DB::table('education_studentloan')->get();

        $data['education_faq']=DB::table('education_faq')->get();




        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();





        return view('education_studentloan',$data);
    }


    public function host_home(){

        $data['banner_image']=DB::table('banner_image')->where('page_name','host_home')->get();



        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();



        return view('host_home',$data);
    }

    public function room_detail(){



        $data['header_contact']=DB::table('header_contact')->get();

        $data['admin_detail']=DB::table('admin_detail')->get();

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description[0]->description;

        $data['social_links']=DB::table('social_links')->get();



        return view('room_detail',$data);
    }


}
