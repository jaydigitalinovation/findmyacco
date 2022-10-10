<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Auth;
use App\Models\Admin;
use DB;

class EducationController extends Controller
{
    public function education_banner(){

        $education_banner=DB::table('banner_image')->where('page_name','education')->get();

        $data['education_banner']=$education_banner;

        $data['education_partner_banner']=DB::table('banner_image')->where('page_name','education_partner')->get();

        $data['education_studentloan_banner']=DB::table('banner_image')->where('page_name','education_studentloan')->get();

        return view('admin.education_banner',$data);
    }

    public function education_country(){

            $data['education_country_des']=DB::table('education_country_des')->get();

            $education_country=DB::table('education_country')->get();

            $data['education_country']=$education_country;

            return view('admin.education_country',$data);
    }



    public function add_education_country_data($id){

        if($id==0){

                $data['flag']='';
                $data['name']='';
                
                $data['id']=0;


        }else{

                $education_country=DB::table('education_country')->where('id',$id)->get();

                $data['flag']=$education_country[0]->flag;
                $data['name']=$education_country[0]->name;

                $data['id']=$education_country[0]->id;


        } 

           return view('admin.add_education_country_data',$data);
    }

    public function store_add_education_country_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'name'=>'required',
            ]);

            $name=$request->input('name');

            $file=$request->file('flag');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path , $imagename);
            }

            DB::table('education_country')->insert(['name'=>$name,'flag'=>$imagename,]);

            return redirect('/admin/education_country')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'name'=>'required',
            ]);

            $name=$request->input('name');

            $file=$request->file('flag');

            $oldflag=$request->input('oldflag');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path , $imagename);

                if($oldflag !=''){
                    unlink(public_path('/uploads/'.$oldflag));
                }

                DB::table('education_country')->where('id',$id)->update(['flag'=>$imagename,]);
            }

            DB::table('education_country')->where('id',$id)->update(['name'=>$name,]);

            return redirect('/admin/education_country')->with('error','data updated successfully!!!');
        }
    }


    public function delete_education_country($id){

        $userdata=DB::table('education_country')->where('id', $id)->get();

        $image=$userdata[0]->flag;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('education_country')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }

    public function add_education_country_des_data($id){

        $education_country_des=DB::table('education_country_des')->where('id',$id)->get();

        $data['description']=$education_country_des[0]->description;

        $data['id']=$education_country_des[0]->id;

        return view('admin.add_education_country_des_data',$data);
    }


    public function store_add_education_country_des_data(Request $request,$id){

        $validated=$request->validate([
            'description'=>'required',
        ]);

        $description=$request->input('description');

        DB::table('education_country_des')->where('id',$id)->update(['description'=>$description,]);

        return redirect('/admin/education_country')->with('error','data updated successfully!!!');
    }






    public function education_work(){

            $data['education_work_image']=DB::table('education_work_image')->get();

            $education_work=DB::table('education_work')->get();

            $data['education_work']=$education_work;

            return view('admin.education_work',$data);
    }



    public function add_education_work_data($id){

        if($id==0){

                $data['icon']='';
                $data['title']='';
                $data['description']='';
                
                $data['id']=0;


        }else{

                $education_work=DB::table('education_work')->where('id',$id)->get();

                $data['icon']=$education_work[0]->icon;
                $data['title']=$education_work[0]->title;
                $data['description']=$education_work[0]->description;

                $data['id']=$education_work[0]->id;


        } 

           return view('admin.add_education_work_data',$data);
    }

    public function store_add_education_work_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'icon'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $icon=$request->input('icon');

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('education_work')->insert(['icon'=>$icon,'title'=>$title,'description'=>$description,]);

            return redirect('/admin/education_work')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'icon'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $icon=$request->input('icon');

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('education_work')->where('id',$id)->update(['icon'=>$icon,'title'=>$title,'description'=>$description,]);

            return redirect('/admin/education_work')->with('error','data updated successfully!!!');
        }
    }


    public function delete_education_work($id){

        DB::table('education_work')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }

    public function add_education_work_image_data($id){

        $education_work_image=DB::table('education_work_image')->where('id',$id)->get();

        $data['image']=$education_work_image[0]->image;

        $data['id']=$education_work_image[0]->id;

        return view('admin.add_education_work_image_data',$data);
    }


    public function store_add_education_work_image_data(Request $request,$id){

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file !=''){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path , $imagename);

            if($oldimage !=''){
                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('education_work_image')->where('id',$id)->update(['image'=>$imagename,]);
        }

        return redirect('/admin/education_work')->with('error','data updated successfully!!!');
    }









    public function education_choose(){

            $data['education_choose_des']=DB::table('education_choose_des')->get();

            $education_choose=DB::table('education_choose')->get();

            $data['education_choose']=$education_choose;

            return view('admin.education_choose',$data);
    }



    public function add_education_choose_data($id){

        if($id==0){

                $data['icon']='';
                $data['title']='';
                $data['description']='';
                
                $data['id']=0;


        }else{

                $education_choose=DB::table('education_choose')->where('id',$id)->get();

                $data['icon']=$education_choose[0]->icon;
                $data['title']=$education_choose[0]->title;
                $data['description']=$education_choose[0]->description;

                $data['id']=$education_choose[0]->id;


        } 

           return view('admin.add_education_choose_data',$data);
    }

    public function store_add_education_choose_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'icon'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $icon=$request->input('icon');

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('education_choose')->insert(['icon'=>$icon,'title'=>$title,'description'=>$description,]);

            return redirect('/admin/education_choose')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'icon'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $icon=$request->input('icon');

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('education_choose')->where('id',$id)->update(['icon'=>$icon,'title'=>$title,'description'=>$description,]);

            return redirect('/admin/education_choose')->with('error','data updated successfully!!!');
        }
    }


    public function delete_education_choose($id){

        DB::table('education_choose')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }

    public function add_education_choose_des_data($id){

        $education_choose_des=DB::table('education_choose_des')->where('id',$id)->get();

        $data['image']=$education_choose_des[0]->image;

        $data['description']=$education_choose_des[0]->description;

        $data['id']=$education_choose_des[0]->id;

        return view('admin.add_education_choose_des_data',$data);
    }


    public function store_add_education_choose_des_data(Request $request,$id){

        $validated=$request->validate([
            'description'=>'required',
        ]);

        $description=$request->input('description');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file !=''){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path , $imagename);

            if($oldimage !=''){
                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('education_choose_des')->where('id',$id)->update(['image'=>$imagename,]);
        }
        

        DB::table('education_choose_des')->where('id',$id)->update(['description'=>$description,]);

        return redirect('/admin/education_choose')->with('error','data updated successfully!!!');
    }









    public function education_form(){

            $data['education_form_image']=DB::table('education_form_image')->get();

            return view('admin.education_form',$data);
    }



    public function add_education_form_image_data($id){

        $education_form_image=DB::table('education_form_image')->where('id',$id)->get();

        $data['image']=$education_form_image[0]->image;

        $data['side_image']=$education_form_image[0]->side_image;

        $data['id']=$education_form_image[0]->id;

        return view('admin.add_education_form_image_data',$data);
    }


    public function store_add_education_form_image_data(Request $request,$id){

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file !=''){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path , $imagename);

            if($oldimage !=''){
                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('education_form_image')->where('id',$id)->update(['image'=>$imagename,]);
        }



        $file1=$request->file('side_image');

        $oldside_image=$request->input('oldside_image');

        $side_imagename='';

        if($file1 !=''){

            $destination_path='uploads';

            $side_imagename=time().'_'.$file1->getClientOriginalName();

            $file1->move($destination_path , $side_imagename);

            if($oldside_image !=''){
                unlink(public_path('/uploads/'.$oldside_image));
            }

            DB::table('education_form_image')->where('id',$id)->update(['side_image'=>$side_imagename,]);
        }

        return redirect('/admin/education_form')->with('error','data updated successfully!!!');
    }








    public function education_partner(){

            $data['education_partner_des']=DB::table('education_partner_des')->get();

            $education_partner=DB::table('education_partner')->get();

            $data['education_partner']=$education_partner;

            return view('admin.education_partner',$data);
    }




    public function add_education_partner_data($id){

        if($id==0){

                $data['image']='';
                
                $data['id']=0;


        }else{

                $education_partner=DB::table('education_partner')->where('id',$id)->get();

                $data['image']=$education_partner[0]->image;

                $data['id']=$education_partner[0]->id;


        } 

           return view('admin.add_education_partner_data',$data);
    }

    public function store_add_education_partner_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'image'=>'required',
            ]);

            $file=$request->file('image');

            $oldimage=$request->input('oldimage');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path , $imagename);
            }
            DB::table('education_partner')->insert(['image'=>$imagename,]);

            return redirect('/admin/education_partner')->with('error','data submitted successfully!!!');
        }else{

            $file=$request->file('image');

            $oldimage=$request->input('oldimage');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path , $imagename);

                if($oldimage !=''){
                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('education_partner')->where('id',$id)->update(['image'=>$imagename,]);
            }

            return redirect('/admin/education_partner')->with('error','data updated successfully!!!');
        }
    }


    public function delete_education_partner($id){

        $userdata=DB::table('education_partner')->where('id', $id)->get();

        $image=$userdata[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('education_partner')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }

    public function add_education_partner_des_data($id){

        $education_partner_des=DB::table('education_partner_des')->where('id',$id)->get();

        $data['image']=$education_partner_des[0]->image;

        $data['description']=$education_partner_des[0]->description;

        $data['id']=$education_partner_des[0]->id;

        return view('admin.add_education_partner_des_data',$data);
    }


    public function store_add_education_partner_des_data(Request $request,$id){

        $validated=$request->validate([
            'description'=>'required',
        ]);

        $description=$request->input('description');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file !=''){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path , $imagename);

            if($oldimage !=''){
                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('education_partner_des')->where('id',$id)->update(['image'=>$imagename,]);
        }

        DB::table('education_partner_des')->where('id',$id)->update(['description'=>$description,]);

        return redirect('/admin/education_partner')->with('error','data updated successfully!!!');
    }






    public function education_partner_detail(){

            $education_partner_detail=DB::table('education_partner_detail')->get();

            $data['education_partner_detail']=$education_partner_detail;

            return view('admin.education_partner_detail',$data);
    }



    public function add_education_partner_detail_data($id){

        if($id==0){

                $data['title1']='';
                $data['title2']='';
                $data['description']='';
                
                $data['id']=0;


        }else{

                $education_partner_detail=DB::table('education_partner_detail')->where('id',$id)->get();

                $data['title1']=$education_partner_detail[0]->title1;
                $data['title2']=$education_partner_detail[0]->title2;
                $data['description']=$education_partner_detail[0]->description;

                $data['id']=$education_partner_detail[0]->id;


        } 

           return view('admin.add_education_partner_detail_data',$data);
    }

    public function store_add_education_partner_detail_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
                'description'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');

            $description=$request->input('description');

            DB::table('education_partner_detail')->insert(['title1'=>$title1,'title2'=>$title2,'description'=>$description,]);

            return redirect('/admin/education_partner_detail')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
                'description'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');

            $description=$request->input('description');

            DB::table('education_partner_detail')->where('id',$id)->update(['title1'=>$title1,'title2'=>$title2,'description'=>$description,]);

            return redirect('/admin/education_partner_detail')->with('error','data updated successfully!!!');
        }
    }


    public function delete_education_partner_detail($id){

        DB::table('education_partner_detail')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }









    public function education_faq(){

            $education_faq=DB::table('education_faq')->get();

            $data['education_faq']=$education_faq;

            return view('admin.education_faq',$data);
    }



    public function add_education_faq_data($id){

        if($id==0){

                $data['question']='';
                $data['answer']='';
                
                $data['id']=0;


        }else{

                $education_faq=DB::table('education_faq')->where('id',$id)->get();

                $data['question']=$education_faq[0]->question;
                $data['answer']=$education_faq[0]->answer;

                $data['id']=$education_faq[0]->id;


        } 

           return view('admin.add_education_faq_data',$data);
    }

    public function store_add_education_faq_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'question'=>'required',
                'answer'=>'required',
            ]);

            $question=$request->input('question');

            $answer=$request->input('answer');

            DB::table('education_faq')->insert(['question'=>$question,'answer'=>$answer,]);

            return redirect('/admin/education_faq')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'question'=>'required',
                'answer'=>'required',
            ]);

            $question=$request->input('question');


            $answer=$request->input('answer');

            DB::table('education_faq')->where('id',$id)->update(['question'=>$question,'answer'=>$answer,]);

            return redirect('/admin/education_faq')->with('error','data updated successfully!!!');
        }
    }


    public function delete_education_faq($id){

        DB::table('education_faq')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }







    public function education_studentloan(){

            $education_studentloan=DB::table('education_studentloan')->get();

            $data['education_studentloan']=$education_studentloan;

            return view('admin.education_studentloan',$data);
    }



    public function add_education_studentloan_data($id){

        if($id==0){

                $data['title1']='';
                $data['title2']='';
                $data['description']='';
                
                $data['id']=0;


        }else{

                $education_studentloan=DB::table('education_studentloan')->where('id',$id)->get();

                $data['title1']=$education_studentloan[0]->title1;
                $data['title2']=$education_studentloan[0]->title2;
                $data['description']=$education_studentloan[0]->description;

                $data['id']=$education_studentloan[0]->id;


        } 

           return view('admin.add_education_studentloan_data',$data);
    }

    public function store_add_education_studentloan_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
                'description'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');

            $description=$request->input('description');

            DB::table('education_studentloan')->insert(['title1'=>$title1,'title2'=>$title2,'description'=>$description,]);

            return redirect('/admin/education_studentloan')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
                'description'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');

            $description=$request->input('description');

            DB::table('education_studentloan')->where('id',$id)->update(['title1'=>$title1,'title2'=>$title2,'description'=>$description,]);

            return redirect('/admin/education_studentloan')->with('error','data updated successfully!!!');
        }
    }


    public function delete_education_studentloan($id){

        DB::table('education_studentloan')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }
}
