<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Admin;
use DB;

class BlogController extends Controller
{
    public function blog_banner(){

        $blog_banner=DB::table('banner_image')->where('page_name','blog')->get();

        $data['blog_banner']=$blog_banner;

        return view('admin.blog_banner',$data);
    }



    public function blog_detail(){

            $blog_detail=DB::table('blog_detail')->get();

            $data['blog_detail']=$blog_detail;

            return view('admin.blog_detail',$data);
    }



    public function add_blog_detail_data($id){

        if($id==0){

                $data['image']='';
                $data['date']='';
                $data['title']='';
                $data['description']='';
                
                $data['id']=0;


        }else{

                $blog_detail=DB::table('blog_detail')->where('id',$id)->get();

                $data['image']=$blog_detail[0]->image;
                $data['date']=$blog_detail[0]->date;
                $data['title']=$blog_detail[0]->title;
                $data['description']=$blog_detail[0]->description;

                $data['id']=$blog_detail[0]->id;


        } 

           return view('admin.add_blog_detail_data',$data);
    }

    public function store_add_blog_detail_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'date'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $date=$request->input('date');

            $title=$request->input('title');

            $description=$request->input('description');

            $file=$request->file('image');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path , $imagename);
            }

            DB::table('blog_detail')->insert(['date'=>$date,'title'=>$title,'description'=>$description,'image'=>$imagename,]);

            return redirect('/admin/blog_detail')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'date'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $date=$request->input('date');

            $title=$request->input('title');

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

                DB::table('blog_detail')->where('id',$id)->update(['image'=>$imagename,]);
            }

            DB::table('blog_detail')->where('id',$id)->update(['date'=>$date,'title'=>$title,'description'=>$description,]);

            return redirect('/admin/blog_detail')->with('error','data updated successfully!!!');
        }
    }


    public function delete_blog_detail($id){

        $userdata=DB::table('blog_detail')->where('id', $id)->get();

        $image=$userdata[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('blog_detail')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }
}
