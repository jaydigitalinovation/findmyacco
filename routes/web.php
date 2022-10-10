<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\Auth\Adminlogincontroller;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HeaderFooterController;
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ScholarshipController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ContactusController;
use App\Http\Controllers\Home_controller;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Form_controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[Home_controller::class, 'index']);

Route::get('/about_us',[Home_controller::class, 'about_us']);

Route::get('/scholarship',[Home_controller::class, 'scholarship']);

Route::get('/partner',[Home_controller::class, 'partner']);

Route::get('/partner_detail/{id}',[Home_controller::class, 'partner_detail']);

Route::get('/faq',[Home_controller::class, 'faq']);

Route::get('/contact_us',[Home_controller::class, 'contact_us']);

Route::get('/host_home',[Home_controller::class, 'host_home']);

Route::get('/blog',[Home_controller::class, 'blog']);

Route::get('/education',[Home_controller::class, 'education']);

Route::get('/education_partner_detail',[Home_controller::class, 'education_partner_detail']);

Route::get('/education_studentloan',[Home_controller::class, 'education_studentloan']);

Route::get('/country_data/{id}',[Home_controller::class, 'country_data']);

Route::get('/all_room',[Home_controller::class, 'all_room']);

Route::get('/room_detail',[Home_controller::class, 'room_detail']);






Route::post('/getinquiry',[Form_controller::class, 'getinquiry']);

Route::post('/contact_admin',[Form_controller::class, 'contact_admin']);

Route::post('/host_home_admin',[Form_controller::class, 'host_home_admin']);

Route::post('/education_studentloan_admin',[Form_controller::class, 'education_studentloan_admin']);

Route::post('/become_partner',[Form_controller::class, 'become_partner']);

Route::post('/education_request',[Form_controller::class, 'education_request']);

Route::post('/education_apply',[Form_controller::class, 'education_apply']);

Route::post('/scholarship_request',[Form_controller::class, 'scholarship_request']);











Route::prefix('admin')->group(function(){

Route::get('/login',[Adminlogincontroller::class, 'login']);
Route::post('/login',[Adminlogincontroller::class, 'authenticate'])->name('login');
Route::get('/logout',[Adminlogincontroller::class, 'logout'])->name('adminlogout');

Route::get('/forgetpasswordview',[Adminlogincontroller::class, 'forgetpasswordview'])->name('forgetpasswordview');
Route::post('/resetpasswordlink',[Adminlogincontroller::class, 'resetpasswordlink'])->name('resetpasswordlink');

Route::get('/resetpasswordview/{id}',[Adminlogincontroller::class, 'resetpasswordview'])->name('resetpasswordview');
Route::post('/resetpassword/{id}',[Adminlogincontroller::class, 'resetpassword'])->name('resetpassword');

Route::get('/changepassword',[Admincontroller::class, 'changepassword']);
Route::post('/updatepassword/{id}',[Admincontroller::class, 'updatepassword']);

Route::get('/home',[Admincontroller::class, 'home']);




/*home route        home route        home route        home route        home route        home route        home route        */




Route::get('/home_banner',[HomeController::class, 'home_banner']);

Route::get('/add_home_banner_data/{id}',[HomeController::class, 'add_home_banner_data']);
Route::post('/store_add_home_banner_data/{id}',[HomeController::class, 'store_add_home_banner_data']);

Route::get('/delete_home_banner/{id}',[HomeController::class, 'delete_home_banner']);



Route::get('/home_banner_image',[HomeController::class, 'home_banner_image']);

Route::get('/add_home_banner_image_data/{id}',[HomeController::class, 'add_home_banner_image_data']);
Route::post('/store_add_home_banner_image_data/{id}',[HomeController::class, 'store_add_home_banner_image_data']);

Route::get('/delete_home_banner_image/{id}',[HomeController::class, 'delete_home_banner_image']);




Route::get('/home_counter',[HomeController::class, 'home_counter']);

Route::get('/add_home_counter_data/{id}',[HomeController::class, 'add_home_counter_data']);
Route::post('/store_add_home_counter_data/{id}',[HomeController::class, 'store_add_home_counter_data']);

Route::get('/delete_home_counter/{id}',[HomeController::class, 'delete_home_counter']);



Route::get('/home_work',[HomeController::class, 'home_work']);

Route::get('/add_home_work_data/{id}',[HomeController::class, 'add_home_work_data']);
Route::post('/store_add_home_work_data/{id}',[HomeController::class, 'store_add_home_work_data']);

Route::get('/delete_home_work/{id}',[HomeController::class, 'delete_home_work']);



Route::get('/home_testimonial',[HomeController::class, 'home_testimonial']);

Route::get('/update_home_testimonial_description_data/{id}',[HomeController::class, 'update_home_testimonial_description_data']);
Route::post('/store_update_home_testimonial_description_data/{id}',[HomeController::class, 'store_update_home_testimonial_description_data']);

Route::get('/add_home_testimonial_data/{id}',[HomeController::class, 'add_home_testimonial_data']);
Route::post('/store_add_home_testimonial_data/{id}',[HomeController::class, 'store_add_home_testimonial_data']);

Route::get('/delete_home_testimonial/{id}',[HomeController::class, 'delete_home_testimonial']);




Route::get('/home_choose',[HomeController::class, 'home_choose']);

Route::get('/add_home_choose_image_data/{id}',[HomeController::class, 'add_home_choose_image_data']);
Route::post('/store_add_home_choose_image_data/{id}',[HomeController::class, 'store_add_home_choose_image_data']);

Route::get('/add_home_choose_data/{id}',[HomeController::class, 'add_home_choose_data']);
Route::post('/store_add_home_choose_data/{id}',[HomeController::class, 'store_add_home_choose_data']);

Route::get('/delete_home_choose/{id}',[HomeController::class, 'delete_home_choose']);




Route::get('/home_notch',[HomeController::class, 'home_notch']);

Route::get('/add_home_notch_data/{id}',[HomeController::class, 'add_home_notch_data']);
Route::post('/store_add_home_notch_data/{id}',[HomeController::class, 'store_add_home_notch_data']);

Route::get('/delete_home_notch/{id}',[HomeController::class, 'delete_home_notch']);



Route::get('/inquiry_data',[HomeController::class, 'inquiry_data']);
Route::get('/delete_inquiry_data/{id}',[HomeController::class, 'delete_inquiry_data']);





Route::get('/allroom_banner',[HomeController::class, 'allroom_banner']);

Route::get('/country_banner',[HomeController::class, 'country_banner']);


/* jinal mam */




Route::get('/countries',[HomeController::class, 'countries']);
Route::get('/add_new_country/{id}',[HomeController::class, 'add_new_country']);
Route::post('/store_new_country/{id}',[HomeController::class, 'store_new_country']);
Route::get('/delete_country/{id}',[HomeController::class, 'delete_country']);

Route::get('/cities',[HomeController::class, 'cities']);
Route::get('/add_new_city/{id}',[HomeController::class, 'add_new_city']);
Route::post('/store_new_city/{id}',[HomeController::class, 'store_new_city']);
Route::get('/delete_city/{id}',[HomeController::class, 'delete_city']);

Route::get('/universities',[HomeController::class, 'universities']);
Route::get('/add_new_university/{id}',[HomeController::class, 'add_new_university']);
Route::post('/store_new_university/{id}',[HomeController::class, 'store_new_university']);
Route::get('/delete_university/{id}',[HomeController::class, 'delete_university']);
Route::get('/get_city/{id}',[HomeController::class, 'get_city']);




/*headerfooter route        headerfooter route        headerfooter route        headerfooter route        headerfooter route        */





Route::get('/header_offer',[HeaderFooterController::class, 'header_offer']);

Route::get('/add_header_offer_data/{id}',[HeaderFooterController::class, 'add_header_offer_data']);
Route::post('/store_add_header_offer_data/{id}',[HeaderFooterController::class, 'store_add_header_offer_data']);


Route::get('/header_contact',[HeaderFooterController::class, 'header_contact']);

Route::get('/add_header_contact_data/{id}',[HeaderFooterController::class, 'add_header_contact_data']);
Route::post('/store_add_header_contact_data/{id}',[HeaderFooterController::class, 'store_add_header_contact_data']);




Route::get('/admin_detail',[HeaderFooterController::class, 'admin_detail']);

Route::get('/add_admin_detail_data/{id}',[HeaderFooterController::class, 'add_admin_detail_data']);
Route::post('/store_add_admin_detail_data/{id}',[HeaderFooterController::class, 'store_add_admin_detail_data']);

Route::get('/delete_admin_detail/{id}',[HeaderFooterController::class, 'delete_admin_detail']);



Route::get('/footer_description',[HeaderFooterController::class, 'footer_description']);

Route::get('/add_footer_description_data/{id}',[HeaderFooterController::class, 'add_footer_description_data']);
Route::post('/store_add_footer_description_data/{id}',[HeaderFooterController::class, 'store_add_footer_description_data']);



Route::get('/social_links',[HeaderFooterController::class, 'social_links']);

Route::get('/add_social_links_data/{id}',[HeaderFooterController::class, 'add_social_links_data']);
Route::post('/store_add_social_links_data/{id}',[HeaderFooterController::class, 'store_add_social_links_data']);



Route::get('/add_banner_image_data/{id}',[HeaderFooterController::class, 'add_banner_image_data']);
Route::post('/store_add_banner_image_data/{id}',[HeaderFooterController::class, 'store_add_banner_image_data']);



Route::get('/inquiry_data',[HeaderFooterController::class, 'inquiry_data']);

Route::get('/delete_inquiry_data/{id}',[HeaderFooterController::class, 'delete_inquiry_data']);



Route::get('/contact_admin_data',[HeaderFooterController::class, 'contact_admin_data']);

Route::get('/delete_contact_admin_data/{id}',[HeaderFooterController::class, 'delete_contact_admin_data']);



Route::get('/host_home_admin_data',[HeaderFooterController::class, 'host_home_admin_data']);

Route::get('/delete_host_home_admin_data/{id}',[HeaderFooterController::class, 'delete_host_home_admin_data']);



Route::get('/education_studentloan_admin_data',[HeaderFooterController::class, 'education_studentloan_admin_data']);

Route::get('/delete_education_studentloan_admin_data/{id}',[HeaderFooterController::class, 'delete_education_studentloan_admin_data']);



Route::get('/partner_application_data',[HeaderFooterController::class, 'partner_application_data']);

Route::get('/delete_partner_application_data/{id}',[HeaderFooterController::class, 'delete_partner_application_data']);




Route::get('/education_request_data',[HeaderFooterController::class, 'education_request_data']);

Route::get('/delete_education_request_data/{id}',[HeaderFooterController::class, 'delete_education_request_data']);



Route::get('/education_apply_data',[HeaderFooterController::class, 'education_apply_data']);

Route::get('/delete_education_apply_data/{id}',[HeaderFooterController::class, 'delete_education_apply_data']);








/*FAQ route        FAQ route        FAQ route        FAQ route        FAQ route        FAQ route        FAQ route        */





Route::get('/faq_banner',[FAQController::class, 'faq_banner']);

Route::get('/faq_section',[FAQController::class, 'faq_section']);

Route::get('/add_faq_section_data/{id}',[FAQController::class, 'add_faq_section_data']);
Route::post('/store_add_faq_section_data/{id}',[FAQController::class, 'store_add_faq_section_data']);

Route::get('/delete_faq_section/{id}',[FAQController::class, 'delete_faq_section']);




/*About route        About route        About route        About route        About route        About route        About route        */





Route::get('/aboutus_banner',[AboutusController::class, 'aboutus_banner']);

Route::get('/aboutus_about',[AboutusController::class, 'aboutus_about']);

Route::get('/add_aboutus_about_data/{id}',[AboutusController::class, 'add_aboutus_about_data']);
Route::post('/store_add_aboutus_about_data/{id}',[AboutusController::class, 'store_add_aboutus_about_data']);


Route::get('/aboutus_mission_vision',[AboutusController::class, 'aboutus_mission_vision']);

Route::get('/add_aboutus_mission_vision_data/{id}',[AboutusController::class, 'add_aboutus_mission_vision_data']);
Route::post('/store_add_aboutus_mission_vision_data/{id}',[AboutusController::class, 'store_add_aboutus_mission_vision_data']);

Route::get('/delete_aboutus_mission_vision/{id}',[AboutusController::class, 'delete_aboutus_mission_vision']);



Route::get('/update_inner_banner_data/{id}',[AboutusController::class, 'update_inner_banner_data']);
Route::post('/store_update_inner_banner_data/{id}',[AboutusController::class, 'store_update_inner_banner_data']);



Route::get('/aboutus_counter',[AboutusController::class, 'aboutus_counter']);

Route::get('/add_aboutus_counter_data/{id}',[AboutusController::class, 'add_aboutus_counter_data']);
Route::post('/store_add_aboutus_counter_data/{id}',[AboutusController::class, 'store_add_aboutus_counter_data']);

Route::get('/delete_aboutus_counter/{id}',[AboutusController::class, 'delete_aboutus_counter']);



Route::get('/aboutus_team',[AboutusController::class, 'aboutus_team']);

Route::get('/add_aboutus_team_data/{id}',[AboutusController::class, 'add_aboutus_team_data']);
Route::post('/store_add_aboutus_team_data/{id}',[AboutusController::class, 'store_add_aboutus_team_data']);

Route::get('/delete_aboutus_team/{id}',[AboutusController::class, 'delete_aboutus_team']);



Route::get('/aboutus_timeline',[AboutusController::class, 'aboutus_timeline']);

Route::get('/add_aboutus_timeline_data/{id}',[AboutusController::class, 'add_aboutus_timeline_data']);
Route::post('/store_add_aboutus_timeline_data/{id}',[AboutusController::class, 'store_add_aboutus_timeline_data']);

Route::get('/delete_aboutus_timeline/{id}',[AboutusController::class, 'delete_aboutus_timeline']);





/*Education route        Education route        Education route        Education route        Education route        Education route*/





Route::get('/education_banner',[EducationController::class, 'education_banner']);

Route::get('/education_country',[EducationController::class, 'education_country']);


Route::get('/add_education_country_des_data/{id}',[EducationController::class, 'add_education_country_des_data']);
Route::post('/store_add_education_country_des_data/{id}',[EducationController::class, 'store_add_education_country_des_data']);


Route::get('/add_education_country_data/{id}',[EducationController::class, 'add_education_country_data']);
Route::post('/store_add_education_country_data/{id}',[EducationController::class, 'store_add_education_country_data']);

Route::get('/delete_education_country/{id}',[EducationController::class, 'delete_education_country']);




Route::get('/education_work',[EducationController::class, 'education_work']);


Route::get('/add_education_work_image_data/{id}',[EducationController::class, 'add_education_work_image_data']);
Route::post('/store_add_education_work_image_data/{id}',[EducationController::class, 'store_add_education_work_image_data']);


Route::get('/add_education_work_data/{id}',[EducationController::class, 'add_education_work_data']);
Route::post('/store_add_education_work_data/{id}',[EducationController::class, 'store_add_education_work_data']);

Route::get('/delete_education_work/{id}',[EducationController::class, 'delete_education_work']);





Route::get('/education_choose',[EducationController::class, 'education_choose']);


Route::get('/add_education_choose_des_data/{id}',[EducationController::class, 'add_education_choose_des_data']);
Route::post('/store_add_education_choose_des_data/{id}',[EducationController::class, 'store_add_education_choose_des_data']);


Route::get('/add_education_choose_data/{id}',[EducationController::class, 'add_education_choose_data']);
Route::post('/store_add_education_choose_data/{id}',[EducationController::class, 'store_add_education_choose_data']);

Route::get('/delete_education_choose/{id}',[EducationController::class, 'delete_education_choose']);




Route::get('/education_form',[EducationController::class, 'education_form']);


Route::get('/add_education_form_image_data/{id}',[EducationController::class, 'add_education_form_image_data']);
Route::post('/store_add_education_form_image_data/{id}',[EducationController::class, 'store_add_education_form_image_data']);





Route::get('/education_partner',[EducationController::class, 'education_partner']);


Route::get('/add_education_partner_des_data/{id}',[EducationController::class, 'add_education_partner_des_data']);
Route::post('/store_add_education_partner_des_data/{id}',[EducationController::class, 'store_add_education_partner_des_data']);


Route::get('/add_education_partner_data/{id}',[EducationController::class, 'add_education_partner_data']);
Route::post('/store_add_education_partner_data/{id}',[EducationController::class, 'store_add_education_partner_data']);

Route::get('/delete_education_partner/{id}',[EducationController::class, 'delete_education_partner']);






Route::get('/education_partner_detail',[EducationController::class, 'education_partner_detail']);


Route::get('/add_education_partner_detail_data/{id}',[EducationController::class, 'add_education_partner_detail_data']);
Route::post('/store_add_education_partner_detail_data/{id}',[EducationController::class, 'store_add_education_partner_detail_data']);

Route::get('/delete_education_partner_detail/{id}',[EducationController::class, 'delete_education_partner_detail']);



Route::get('/education_faq',[EducationController::class, 'education_faq']);


Route::get('/add_education_faq_data/{id}',[EducationController::class, 'add_education_faq_data']);
Route::post('/store_add_education_faq_data/{id}',[EducationController::class, 'store_add_education_faq_data']);

Route::get('/delete_education_faq/{id}',[EducationController::class, 'delete_education_faq']);








Route::get('/education_studentloan',[EducationController::class, 'education_studentloan']);


Route::get('/add_education_studentloan_data/{id}',[EducationController::class, 'add_education_studentloan_data']);
Route::post('/store_add_education_studentloan_data/{id}',[EducationController::class, 'store_add_education_studentloan_data']);

Route::get('/delete_education_studentloan/{id}',[EducationController::class, 'delete_education_studentloan']);








/*Scholarship route        Scholarship route        Scholarship route        Scholarship route        Scholarship route       */




Route::get('/scholarship_banner',[ScholarshipController::class, 'scholarship_banner']);


Route::get('/add_scholarship_banner_data/{id}',[ScholarshipController::class, 'add_scholarship_banner_data']);
Route::post('/store_add_scholarship_banner_data/{id}',[ScholarshipController::class, 'store_add_scholarship_banner_data']);

Route::get('/add_scholarship_banner_title_data/{id}',[ScholarshipController::class, 'add_scholarship_banner_title_data']);
Route::post('/store_add_scholarship_banner_title_data/{id}',[ScholarshipController::class, 'store_add_scholarship_banner_title_data']);



Route::get('/add_scholarship_video_data/{id}',[ScholarshipController::class, 'add_scholarship_video_data']);
Route::post('/store_add_scholarship_video_data/{id}',[ScholarshipController::class, 'store_add_scholarship_video_data']);




Route::get('/scholarship_about',[ScholarshipController::class, 'scholarship_about']);

Route::get('/add_scholarship_about_data/{id}',[ScholarshipController::class, 'add_scholarship_about_data']);
Route::post('/store_add_scholarship_about_data/{id}',[ScholarshipController::class, 'store_add_scholarship_about_data']);

Route::get('/delete_scholarship_about/{id}',[ScholarshipController::class, 'delete_scholarship_about']);



Route::get('/scholarship_journey',[ScholarshipController::class, 'scholarship_journey']);

Route::get('/add_scholarship_journey_data/{id}',[ScholarshipController::class, 'add_scholarship_journey_data']);
Route::post('/store_add_scholarship_journey_data/{id}',[ScholarshipController::class, 'store_add_scholarship_journey_data']);



Route::get('/scholarship_service',[ScholarshipController::class, 'scholarship_service']);

Route::get('/add_scholarship_service_data/{id}',[ScholarshipController::class, 'add_scholarship_service_data']);
Route::post('/store_add_scholarship_service_data/{id}',[ScholarshipController::class, 'store_add_scholarship_service_data']);

Route::get('/delete_scholarship_service/{id}',[ScholarshipController::class, 'delete_scholarship_service']);




Route::get('/scholarship_future',[ScholarshipController::class, 'scholarship_future']);

Route::get('/add_scholarship_future_data/{id}',[ScholarshipController::class, 'add_scholarship_future_data']);
Route::post('/store_add_scholarship_future_data/{id}',[ScholarshipController::class, 'store_add_scholarship_future_data']);

Route::get('/delete_scholarship_future/{id}',[ScholarshipController::class, 'delete_scholarship_future']);




Route::get('/scholarship_detail',[ScholarshipController::class, 'scholarship_detail']);

Route::get('/add_scholarship_detail_data/{id}',[ScholarshipController::class, 'add_scholarship_detail_data']);
Route::post('/store_add_scholarship_detail_data/{id}',[ScholarshipController::class, 'store_add_scholarship_detail_data']);




Route::get('/scholarship_available',[ScholarshipController::class, 'scholarship_available']);

Route::get('/add_scholarship_available_data/{id}',[ScholarshipController::class, 'add_scholarship_available_data']);
Route::post('/store_add_scholarship_available_data/{id}',[ScholarshipController::class, 'store_add_scholarship_available_data']);

Route::get('/delete_scholarship_available/{id}',[ScholarshipController::class, 'delete_scholarship_available']);




Route::get('/scholarship_faq',[ScholarshipController::class, 'scholarship_faq']);

Route::get('/add_scholarship_faq_data/{id}',[ScholarshipController::class, 'add_scholarship_faq_data']);
Route::post('/store_add_scholarship_faq_data/{id}',[ScholarshipController::class, 'store_add_scholarship_faq_data']);

Route::get('/delete_scholarship_faq/{id}',[ScholarshipController::class, 'delete_scholarship_faq']);




/*Partner route        Partner route        Partner route        Partner route        Partner route        Partner route       */





Route::get('/partner_banner',[PartnerController::class, 'partner_banner']);


Route::get('/partner_info',[PartnerController::class, 'partner_info']);


Route::get('/add_partner_info_des_data/{id}',[PartnerController::class, 'add_partner_info_des_data']);
Route::post('/store_add_partner_info_des_data/{id}',[PartnerController::class, 'store_add_partner_info_des_data']);


Route::get('/add_partner_info_data/{id}',[PartnerController::class, 'add_partner_info_data']);
Route::post('/store_add_partner_info_data/{id}',[PartnerController::class, 'store_add_partner_info_data']);

Route::get('/delete_partner_info/{id}',[PartnerController::class, 'delete_partner_info']);



Route::get('/partner_form',[PartnerController::class, 'partner_form']);

Route::get('/add_partner_form_data/{id}',[PartnerController::class, 'add_partner_form_data']);
Route::post('/store_add_partner_form_data/{id}',[PartnerController::class, 'store_add_partner_form_data']);




Route::get('/partner_detail',[PartnerController::class, 'partner_detail']);

Route::get('/add_partner_detail_data/{id}',[PartnerController::class, 'add_partner_detail_data']);
Route::post('/store_add_partner_detail_data/{id}',[PartnerController::class, 'store_add_partner_detail_data']);

Route::get('/delete_partner_detail/{id}',[PartnerController::class, 'delete_partner_detail']);





Route::get('/partner_acco',[PartnerController::class, 'partner_acco']);


Route::get('/add_partner_acco_des_data/{id}',[PartnerController::class, 'add_partner_acco_des_data']);
Route::post('/store_add_partner_acco_des_data/{id}',[PartnerController::class, 'store_add_partner_acco_des_data']);


Route::get('/add_partner_acco_data/{id}',[PartnerController::class, 'add_partner_acco_data']);
Route::post('/store_add_partner_acco_data/{id}',[PartnerController::class, 'store_add_partner_acco_data']);

Route::get('/delete_partner_acco/{id}',[PartnerController::class, 'delete_partner_acco']);





Route::get('/partner_faq',[PartnerController::class, 'partner_faq']);


Route::get('/add_partner_faq_des_data/{id}',[PartnerController::class, 'add_partner_faq_des_data']);
Route::post('/store_add_partner_faq_des_data/{id}',[PartnerController::class, 'store_add_partner_faq_des_data']);


Route::get('/add_partner_faq_data/{id}',[PartnerController::class, 'add_partner_faq_data']);
Route::post('/store_add_partner_faq_data/{id}',[PartnerController::class, 'store_add_partner_faq_data']);

Route::get('/delete_partner_faq/{id}',[PartnerController::class, 'delete_partner_faq']);




/*Contact route        Contact route        Contact route        Contact route        Contact route        Contact route        */




Route::get('/contact_banner',[ContactusController::class, 'contact_banner']);

Route::get('/add_contact_detail_data/{id}',[ContactusController::class, 'add_contact_detail_data']);
Route::post('/store_add_contact_detail_data/{id}',[ContactusController::class, 'store_add_contact_detail_data']);



Route::get('/host_home_banner',[ContactusController::class, 'host_home_banner']);




/*Blog route        Blog route        Blog route        Blog route        Blog route        Blog route        Blog route        */




Route::get('/blog_banner',[BlogController::class, 'blog_banner']);


Route::get('/blog_detail',[BlogController::class, 'blog_detail']);

Route::get('/add_blog_detail_data/{id}',[BlogController::class, 'add_blog_detail_data']);
Route::post('/store_add_blog_detail_data/{id}',[BlogController::class, 'store_add_blog_detail_data']);

Route::get('/delete_blog_detail/{id}',[BlogController::class, 'delete_blog_detail']);

});