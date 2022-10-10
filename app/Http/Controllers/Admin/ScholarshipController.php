<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Admin;
use DB;

class ScholarshipController extends Controller
{
    public function scholarship_banner(){

        $scholarship_banner=DB::table('scholarship_banner')->get();

        $data['scholarship_banner']=$scholarship_banner;

        $scholarship_video=DB::table('scholarship_video')->get();

        $data['scholarship_video']=$scholarship_video;

        $scholarship_banner_title=DB::table('scholarship_banner_title')->get();

        $data['scholarship_banner_title']=$scholarship_banner_title;

        return view('admin.scholarship_banner',$data);
    }



    public function add_scholarship_banner_data($id){

        
        $scholarship_banner=DB::table('scholarship_banner')->where('id',$id)->get();

        $data['image']=$scholarship_banner[0]->image;

        $data['id']=$scholarship_banner[0]->id;
              

        return view('admin.add_scholarship_banner_data',$data);
    }

    public function store_add_scholarship_banner_data(Request $request,$id){

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

                DB::table('scholarship_banner')->where('id',$id)->update(['image'=>$imagename,]);
            }

            return redirect('/admin/scholarship_banner')->with('error','data updated successfully!!!');
        
    }


    public function add_scholarship_banner_title_data($id){

        $scholarship_banner_title=DB::table('scholarship_banner_title')->where('id',$id)->get();

        $data['title1']=$scholarship_banner_title[0]->title1;

        $data['title2']=$scholarship_banner_title[0]->title2;

        $data['id']=$scholarship_banner_title[0]->id;

        return view('admin.add_scholarship_banner_title_data',$data);
    }


    public function store_add_scholarship_banner_title_data(Request $request,$id){

        $validated=$request->validate([
            'title1'=>'required',
            'title2'=>'required',
        ]);

        $title1=$request->input('title1');

        $title2=$request->input('title2');

        DB::table('scholarship_banner_title')->where('id',$id)->update(['title1'=>$title1,'title2'=>$title2,]);

        return redirect('/admin/scholarship_banner')->with('error','data updated successfully!!!');
    }








    public function scholarship_about(){

            $scholarship_about=DB::table('scholarship_about')->get();

            $data['scholarship_about']=$scholarship_about;

            return view('admin.scholarship_about',$data);
    }



    public function add_scholarship_about_data($id){

        if($id==0){

                $data['image']='';
                $data['icon']='';
                $data['title']='';
                $data['description']='';
                
                $data['id']=0;


        }else{

                $scholarship_about=DB::table('scholarship_about')->where('id',$id)->get();

                $data['image']=$scholarship_about[0]->image;
                $data['icon']=$scholarship_about[0]->icon;
                $data['title']=$scholarship_about[0]->title;
                $data['description']=$scholarship_about[0]->description;

                $data['id']=$scholarship_about[0]->id;


        } 

           return view('admin.add_scholarship_about_data',$data);
    }

    public function store_add_scholarship_about_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'icon'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $icon=$request->input('icon');

            $title=$request->input('title');

            $description=$request->input('description');

            $file=$request->file('image');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

            DB::table('scholarship_about')->insert(['image'=>$imagename,'icon'=>$icon,'title'=>$title ,'description'=>$description ,]);

            return redirect('/admin/scholarship_about')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'icon'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $icon=$request->input('icon');

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

                DB::table('scholarship_about')->where('id',$id)->update(['image'=>$imagename]);
            }

            DB::table('scholarship_about')->where('id',$id)->update(['icon'=>$icon,'title'=>$title ,'description'=>$description ,]);

            return redirect('/admin/scholarship_about')->with('error','data updated successfully!!!');
        }
    }


    public function delete_scholarship_about($id){

        $userdata=DB::table('scholarship_about')->where('id', $id)->get();

        $image=$userdata[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('scholarship_about')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }








    public function scholarship_journey(){

            $scholarship_journey=DB::table('scholarship_journey')->get();

            $data['scholarship_journey']=$scholarship_journey;

            return view('admin.scholarship_journey',$data);
    }



    public function add_scholarship_journey_data($id){

        

                $scholarship_journey=DB::table('scholarship_journey')->where('id',$id)->get();

                $data['image']=$scholarship_journey[0]->image;
                $data['title1']=$scholarship_journey[0]->title1;
                $data['title2']=$scholarship_journey[0]->title2;
                $data['description']=$scholarship_journey[0]->description;

                $data['id']=$scholarship_journey[0]->id;

           return view('admin.add_scholarship_journey_data',$data);
    }

    public function store_add_scholarship_journey_data(Request $request,$id){

        

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
                'description'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');

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

                DB::table('scholarship_journey')->where('id',$id)->update(['image'=>$imagename]);
            }

            DB::table('scholarship_journey')->where('id',$id)->update(['title1'=>$title1,'title2'=>$title2 ,'description'=>$description ,]);

            return redirect('/admin/scholarship_journey')->with('error','data updated successfully!!!');
        
    }





    public function scholarship_service(){

            $scholarship_service=DB::table('scholarship_service')->get();

            $data['scholarship_service']=$scholarship_service;

            return view('admin.scholarship_service',$data);
    }



    public function add_scholarship_service_data($id){

        if($id==0){

                $data['image1']='';
                $data['image2']='';
                $data['title']='';
                $data['description']='';
                
                $data['id']=0;


        }else{

                $scholarship_service=DB::table('scholarship_service')->where('id',$id)->get();

                $data['image1']=$scholarship_service[0]->image1;
                $data['image2']=$scholarship_service[0]->image2;
                $data['title']=$scholarship_service[0]->title;
                $data['description']=$scholarship_service[0]->description;

                $data['id']=$scholarship_service[0]->id;


        } 

           return view('admin.add_scholarship_service_data',$data);
    }

    public function store_add_scholarship_service_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            $file1=$request->file('image1');

            $imagename1='';

            if($file1 !=''){

                $destination_path='uploads';

                $imagename1=time().'_'.$file1->getClientOriginalName();

                $file1->move($destination_path,$imagename1);
            }



            $file2=$request->file('image2');

            $imagename2='';

            if($file2 !=''){

                $destination_path='uploads';

                $imagename2=time().'__'.$file2->getClientOriginalName();

                $file2->move($destination_path,$imagename2);
            }
            

            DB::table('scholarship_service')->insert(['image1'=>$imagename1,'image2'=>$imagename2,'title'=>$title ,'description'=>$description ,]);

            return redirect('/admin/scholarship_service')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            $file1=$request->file('image1');

            $oldimage1=$request->input('oldimage1');

            $imagename1='';

            if($file1 !=''){

                $destination_path='uploads';

                $imagename1=time().'_'.$file1->getClientOriginalName();

                $file1->move($destination_path,$imagename1);

                if($oldimage1 !=''){

                    unlink(public_path('/uploads/'.$oldimage1));
                }

                DB::table('scholarship_service')->where('id',$id)->update(['image1'=>$imagename1]);
            }




            $file2=$request->file('image2');

            $oldimage2=$request->input('oldimage2');

            $imagename2='';

            if($file2 !=''){

                $destination_path='uploads';

                $imagename2=time().'__'.$file2->getClientOriginalName();

                $file2->move($destination_path,$imagename2);

                if($oldimage2 !=''){

                    unlink(public_path('/uploads/'.$oldimage2));
                }

                DB::table('scholarship_service')->where('id',$id)->update(['image2'=>$imagename2]);
            }

            DB::table('scholarship_service')->where('id',$id)->update(['title'=>$title ,'description'=>$description ,]);

            return redirect('/admin/scholarship_service')->with('error','data updated successfully!!!');
        }
    }


    public function delete_scholarship_service($id){

        $userdata=DB::table('scholarship_service')->where('id', $id)->get();

        $image1=$userdata[0]->image1;

        if($image1 !=''){

            unlink(public_path('/uploads/'.$image1));
        }

        $image2=$userdata[0]->image2;

        if($image2 !=''){

            unlink(public_path('/uploads/'.$image2));
        }

        DB::table('scholarship_service')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }






    public function scholarship_future(){

            $scholarship_future=DB::table('scholarship_future')->get();

            $data['scholarship_future']=$scholarship_future;

            return view('admin.scholarship_future',$data);
    }



    public function add_scholarship_future_data($id){

        if($id==0){

                $data['image']='';
                $data['title1']='';
                $data['title2']='';
                
                $data['id']=0;


        }else{

                $scholarship_future=DB::table('scholarship_future')->where('id',$id)->get();

                $data['title1']=$scholarship_future[0]->title1;
                $data['title2']=$scholarship_future[0]->title2;
                $data['image']=$scholarship_future[0]->image;
                
                $data['id']=$scholarship_future[0]->id;


        } 

           return view('admin.add_scholarship_future_data',$data);
    }

    public function store_add_scholarship_future_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');

            $file=$request->file('image');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

            DB::table('scholarship_future')->insert(['image'=>$imagename,'title1'=>$title1,'title2'=>$title2 ,]);

            return redirect('/admin/scholarship_future')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');

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

                DB::table('scholarship_future')->where('id',$id)->update(['image'=>$imagename]);
            }



            DB::table('scholarship_future')->where('id',$id)->update(['title1'=>$title1 ,'title2'=>$title2 ,]);

            return redirect('/admin/scholarship_future')->with('error','data updated successfully!!!');
        }
    }


    public function delete_scholarship_future($id){

        $userdata=DB::table('scholarship_future')->where('id', $id)->get();

        $image=$userdata[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('scholarship_future')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }






    public function scholarship_detail(){

            $scholarship_detail=DB::table('scholarship_detail')->get();

            $data['scholarship_detail']=$scholarship_detail;

            return view('admin.scholarship_detail',$data);
    }



    public function add_scholarship_detail_data($id){

        

                $scholarship_detail=DB::table('scholarship_detail')->where('id',$id)->get();

                $data['image']=$scholarship_detail[0]->image;
                $data['title1']=$scholarship_detail[0]->title1;
                $data['title2']=$scholarship_detail[0]->title2;
                $data['description']=$scholarship_detail[0]->description;

                $data['id']=$scholarship_detail[0]->id;

           return view('admin.add_scholarship_detail_data',$data);
    }

    public function store_add_scholarship_detail_data(Request $request,$id){

        

            $validated=$request->validate([
                'title1'=>'required',
                'title2'=>'required',
                'description'=>'required',
            ]);

            $title1=$request->input('title1');

            $title2=$request->input('title2');

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

                DB::table('scholarship_detail')->where('id',$id)->update(['image'=>$imagename]);
            }

            DB::table('scholarship_detail')->where('id',$id)->update(['title1'=>$title1,'title2'=>$title2 ,'description'=>$description ,]);

            return redirect('/admin/scholarship_detail')->with('error','data updated successfully!!!');
        
    }









    public function scholarship_available(){

            $scholarship_available=DB::table('scholarship_available')->get();

            $data['scholarship_available']=$scholarship_available;

            return view('admin.scholarship_available',$data);
    }



    public function add_scholarship_available_data($id){

        if($id==0){

                $data['image']='';
                $data['title']='';
                $data['description']='';
                
                $data['id']=0;


        }else{

                $scholarship_available=DB::table('scholarship_available')->where('id',$id)->get();

                $data['image']=$scholarship_available[0]->image;
                $data['title']=$scholarship_available[0]->title;
                $data['description']=$scholarship_available[0]->description;

                $data['id']=$scholarship_available[0]->id;


        } 

           return view('admin.add_scholarship_available_data',$data);
    }

    public function store_add_scholarship_available_data(Request $request,$id){

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

            DB::table('scholarship_available')->insert(['image'=>$imagename,'title'=>$title ,'description'=>$description ,]);

            return redirect('/admin/scholarship_available')->with('error','data submitted successfully!!!');
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

                DB::table('scholarship_available')->where('id',$id)->update(['image'=>$imagename]);
            }

            DB::table('scholarship_available')->where('id',$id)->update(['title'=>$title ,'description'=>$description ,]);

            return redirect('/admin/scholarship_available')->with('error','data updated successfully!!!');
        }
    }


    public function delete_scholarship_available($id){

        $userdata=DB::table('scholarship_available')->where('id', $id)->get();

        $image=$userdata[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('scholarship_available')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }





    public function scholarship_faq(){

            $scholarship_faq=DB::table('scholarship_faq')->get();

            $data['scholarship_faq']=$scholarship_faq;

            return view('admin.scholarship_faq',$data);
    }



    public function add_scholarship_faq_data($id){

        if($id==0){

                $data['question']='';
                $data['answer']='';
                
                $data['id']=0;


        }else{

                $scholarship_faq=DB::table('scholarship_faq')->where('id',$id)->get();

                $data['question']=$scholarship_faq[0]->question;
                $data['answer']=$scholarship_faq[0]->answer;

                $data['id']=$scholarship_faq[0]->id;


        } 

           return view('admin.add_scholarship_faq_data',$data);
    }

    public function store_add_scholarship_faq_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'question'=>'required',
                'answer'=>'required',
            ]);

            $question=$request->input('question');

            $answer=$request->input('answer');

            DB::table('scholarship_faq')->insert(['question'=>$question ,'answer'=>$answer ,]);

            return redirect('/admin/scholarship_faq')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'question'=>'required',
                'answer'=>'required',
            ]);

            $question=$request->input('question');

            $answer=$request->input('answer');

            DB::table('scholarship_faq')->where('id',$id)->update(['question'=>$question ,'answer'=>$answer ,]);

            return redirect('/admin/scholarship_faq')->with('error','data updated successfully!!!');
        }
    }


    public function delete_scholarship_faq($id){

        DB::table('scholarship_faq')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }





    public function add_scholarship_video_data($id){

        

                $scholarship_video=DB::table('scholarship_video')->where('id',$id)->get();

                $data['video']=$scholarship_video[0]->video;

                $data['id']=$scholarship_video[0]->id;


        

           return view('admin.add_scholarship_video_data',$data);
    }

    public function store_add_scholarship_video_data(Request $request,$id){

            $validated=$request->validate([
                'video'=>'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
            ]);

            $file=$request->file('video');

            $oldvideo=$request->input('oldvideo');

            $videoname='';

            if($file !=''){

                $destination_path='uploads';

                $videoname=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$videoname);

                if($oldvideo !=''){

                    unlink(public_path('/uploads/'.$oldvideo));
                }

                DB::table('scholarship_video')->where('id',$id)->update(['video'=>$videoname]);
            }

            return redirect('/admin/scholarship_banner')->with('error','data updated successfully!!!');
        
    }
}
