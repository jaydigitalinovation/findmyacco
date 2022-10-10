<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Admin;
use DB;

class FAQController extends Controller
{
    public function faq_banner(){

        $faq_banner=DB::table('banner_image')->where('page_name','faq')->get();

        $data['faq_banner']=$faq_banner;

        return view('admin.faq_banner',$data);
    }

    public function faq_section(){

        $faq_section=DB::table('faq_section')->get();

        $data['faq_section']=$faq_section;

        $faq_list=DB::table('faq_list')->get();

        $data['faq_list']=$faq_list;

        return view('admin.faq_section',$data);
    }

    public function add_faq_section_data($id){

        $faq_list=DB::table('faq_list')->get();

        $data['faq_list']=$faq_list;

        if($id==0){

            

                $data['question']='';
                $data['answer']='';
                $data['id']=0;
                $data['list_id']='';

              }else{

                $faq_section=DB::table('faq_section')->where('id',$id)->get();

                $data['question']=$faq_section[0]->question;
                $data['answer']=$faq_section[0]->answer;

                $list_id=$faq_section[0]->list_id;

                $data['list_id']=$list_id;

                $data['id']=$faq_section[0]->id;

                $list=DB::table('faq_list')->where('id',$list_id)->get();

                $data['list']=$list[0]->list;

              } 

           return view('admin.add_faq_section_data',$data);
    }

    public function store_add_faq_section_data(Request $request,$id){


        if($id==0){

            $validated=$request->validate([
                'list_id'=>'required',
                'question'=>'required',
                'answer'=>'required',
            ]);

            $question=$request->input('question');

            $answer=$request->input('answer');

            $list_id=$request->input('list_id');

            DB::table('faq_section')->insert(['list_id'=>$list_id,'question'=>$question,'answer'=>$answer,]);

            return redirect('/admin/faq_section')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'list_id'=>'required',
                'question'=>'required',
                'answer'=>'required',
            ]);

            $question=$request->input('question');

            $answer=$request->input('answer');

            $list_id=$request->input('list_id');

            DB::table('faq_section')->where('id',$id)->update(['list_id'=>$list_id,'question'=>$question,'answer'=>$answer]);

            return redirect('/admin/faq_section')->with('error','data updated successfully!!!');
        }
    }

    public function delete_faq_section($id){

            DB::table('faq_section')->where('id', $id)->delete();

            return response()->json([
             'success' => 'Record has been deleted successfully!'
            ]);

        }
}
