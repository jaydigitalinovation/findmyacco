<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Admin;
use DB;

class PartnerController extends Controller
{
    public function partner_banner(){

        $partner_banner=DB::table('banner_image')->where('page_name','partner')->get();

        $data['partner_banner']=$partner_banner;

        return view('admin.partner_banner',$data);
    }



    public function partner_info(){

            $data['partner_info_des']=DB::table('partner_info_des')->get();

            $partner_info=DB::table('partner_info')->get();

            $data['partner_info']=$partner_info;

            return view('admin.partner_info',$data);
    }



    public function add_partner_info_data($id){

        if($id==0){

                $data['advantage']='';
                
                $data['id']=0;


        }else{

                $partner_info=DB::table('partner_info')->where('id',$id)->get();

                $data['advantage']=$partner_info[0]->advantage;
                $data['id']=$partner_info[0]->id;


        } 

           return view('admin.add_partner_info_data',$data);
    }

    public function store_add_partner_info_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'advantage'=>'required',
            ]);

            $advantage=$request->input('advantage');

            DB::table('partner_info')->insert(['advantage'=>$advantage,]);

            return redirect('/admin/partner_info')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'advantage'=>'required',
            ]);

            $advantage=$request->input('advantage');

            DB::table('partner_info')->where('id',$id)->update(['advantage'=>$advantage,]);

            return redirect('/admin/partner_info')->with('error','data updated successfully!!!');
        }
    }


    public function delete_partner_info($id){

        DB::table('partner_info')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }

    public function add_partner_info_des_data($id){

        $partner_info_des=DB::table('partner_info_des')->where('id',$id)->get();

        $data['image']=$partner_info_des[0]->image;

        $data['title']=$partner_info_des[0]->title;

        $data['id']=$partner_info_des[0]->id;

        return view('admin.add_partner_info_des_data',$data);
    }


    public function store_add_partner_info_des_data(Request $request,$id){

        $validated=$request->validate([
            'title'=>'required',
        ]);

        $title=$request->input('title');

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

            DB::table('partner_info_des')->where('id',$id)->update(['image'=>$imagename,]);
        }

        DB::table('partner_info_des')->where('id',$id)->update(['title'=>$title,]);

        return redirect('/admin/partner_info')->with('error','data updated successfully!!!');
    }





    public function partner_form(){

            $partner_form=DB::table('partner_form')->get();

            $data['partner_form']=$partner_form;

            return view('admin.partner_form',$data);
    }



    public function add_partner_form_data($id){

        if($id==0){

                $data['title1']='';
                $data['title2']='';
                
                $data['id']=0;


        }else{

                $partner_form=DB::table('partner_form')->where('id',$id)->get();

                $data['title1']=$partner_form[0]->title1;
                $data['title2']=$partner_form[0]->title2;
                $data['id']=$partner_form[0]->id;


        } 

           return view('admin.add_partner_form_data',$data);
    }

    public function store_add_partner_form_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
            ]);

            $title1=$request->input('title1');
            $title2=$request->input('title2');

            DB::table('partner_form')->insert(['title1'=>$title1,'title2'=>$title2,]);

            return redirect('/admin/partner_form')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');

            DB::table('partner_form')->where('id',$id)->update(['title1'=>$title1,'title2'=>$title2,]);

            return redirect('/admin/partner_form')->with('error','data updated successfully!!!');
        }
    }





    public function partner_detail(){

            $partner_detail=DB::table('partner_detail')->get();

            $data['partner_detail']=$partner_detail;

            return view('admin.partner_detail',$data);
    }



    public function add_partner_detail_data($id){

        if($id==0){

                $data['image']='';
                $data['title']='';
                $data['description']='';
                
                $data['id']=0;


        }else{

                $partner_detail=DB::table('partner_detail')->where('id',$id)->get();

                $data['image']=$partner_detail[0]->image;
                $data['title']=$partner_detail[0]->title;
                $data['description']=$partner_detail[0]->description;

                $data['id']=$partner_detail[0]->id;


        } 

           return view('admin.add_partner_detail_data',$data);
    }

    public function store_add_partner_detail_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            $file=$request->file('image');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

            DB::table('partner_detail')->insert(['image'=>$imagename,'title'=>$title ,'description'=>$description ,]);

            return redirect('/admin/partner_detail')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

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

                DB::table('partner_detail')->where('id',$id)->update(['image'=>$imagename]);
            }

            DB::table('partner_detail')->where('id',$id)->update(['title'=>$title ,'description'=>$description ,]);

            return redirect('/admin/partner_detail')->with('error','data updated successfully!!!');
        }
    }


    public function delete_partner_detail($id){

        $userdata=DB::table('partner_detail')->where('id', $id)->get();

        $image=$userdata[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('partner_detail')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }








    public function partner_acco(){

            $data['partner_acco_des']=DB::table('partner_acco_des')->get();

            $partner_acco=DB::table('partner_acco')->get();

            $data['partner_acco']=$partner_acco;

            return view('admin.partner_acco',$data);
    }



    public function add_partner_acco_data($id){

        if($id==0){

                $data['advantage']='';
                
                $data['id']=0;


        }else{

                $partner_acco=DB::table('partner_acco')->where('id',$id)->get();

                $data['advantage']=$partner_acco[0]->advantage;
                $data['id']=$partner_acco[0]->id;


        } 

           return view('admin.add_partner_acco_data',$data);
    }

    public function store_add_partner_acco_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'advantage'=>'required',
            ]);

            $advantage=$request->input('advantage');

            DB::table('partner_acco')->insert(['advantage'=>$advantage,]);

            return redirect('/admin/partner_acco')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'advantage'=>'required',
            ]);

            $advantage=$request->input('advantage');

            DB::table('partner_acco')->where('id',$id)->update(['advantage'=>$advantage,]);

            return redirect('/admin/partner_acco')->with('error','data updated successfully!!!');
        }
    }


    public function delete_partner_acco($id){

        DB::table('partner_acco')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }

    public function add_partner_acco_des_data($id){

        $partner_acco_des=DB::table('partner_acco_des')->where('id',$id)->get();

        $data['description']=$partner_acco_des[0]->description;

        $data['title']=$partner_acco_des[0]->title;

        $data['id']=$partner_acco_des[0]->id;

        return view('admin.add_partner_acco_des_data',$data);
    }


    public function store_add_partner_acco_des_data(Request $request,$id){

        $validated=$request->validate([
            'title'=>'required',
        ]);

        $title=$request->input('title');

        $description=$request->input('description');

        DB::table('partner_acco_des')->where('id',$id)->update(['title'=>$title,'description'=>$description,]);

        return redirect('/admin/partner_acco')->with('error','data updated successfully!!!');
    }









    public function partner_faq(){

            $data['partner_faq_des']=DB::table('partner_faq_des')->get();

            $partner_faq=DB::table('partner_faq')->get();

            $data['partner_faq']=$partner_faq;

            return view('admin.partner_faq',$data);
    }



    public function add_partner_faq_data($id){

        if($id==0){

                $data['question']='';
                $data['answer']='';
                
                $data['id']=0;


        }else{

                $partner_faq=DB::table('partner_faq')->where('id',$id)->get();

                $data['question']=$partner_faq[0]->question;
                $data['answer']=$partner_faq[0]->answer;
                $data['id']=$partner_faq[0]->id;


        } 

           return view('admin.add_partner_faq_data',$data);
    }

    public function store_add_partner_faq_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'question'=>'required',
                'answer'=>'required',
            ]);

            $question=$request->input('question');

            $answer=$request->input('answer');

            DB::table('partner_faq')->insert(['question'=>$question,'answer'=>$answer,]);

            return redirect('/admin/partner_faq')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'question'=>'required',
                'answer'=>'required',
            ]);

            $question=$request->input('question');

            $answer=$request->input('answer');

            DB::table('partner_faq')->where('id',$id)->update(['question'=>$question,'answer'=>$answer,]);

            return redirect('/admin/partner_faq')->with('error','data updated successfully!!!');
        }
    }


    public function delete_partner_faq($id){

        DB::table('partner_faq')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }

    public function add_partner_faq_des_data($id){

        $partner_faq_des=DB::table('partner_faq_des')->where('id',$id)->get();

        $data['description']=$partner_faq_des[0]->description;

        $data['title']=$partner_faq_des[0]->title;

        $data['id']=$partner_faq_des[0]->id;

        return view('admin.add_partner_faq_des_data',$data);
    }


    public function store_add_partner_faq_des_data(Request $request,$id){

        $validated=$request->validate([
            'title'=>'required',
        ]);

        $title=$request->input('title');

        $description=$request->input('description');

        DB::table('partner_faq_des')->where('id',$id)->update(['title'=>$title,'description'=>$description,]);

        return redirect('/admin/partner_faq')->with('error','data updated successfully!!!');
    }
}
