<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Admin;
use DB;

class AboutusController extends Controller
{
    public function aboutus_banner(){

        $aboutus_banner=DB::table('banner_image')->where('page_name','aboutus')->get();

        $data['aboutus_banner']=$aboutus_banner;

        return view('admin.aboutus_banner',$data);
    }


    public function aboutus_about(){

        $aboutus_about=DB::table('aboutus_about')->get();

        $data['aboutus_about']=$aboutus_about;

        return view('admin.aboutus_about',$data);
    }

    public function add_aboutus_about_data($id){

        
        $aboutus_about=DB::table('aboutus_about')->where('id',$id)->get();

        $data['image1']=$aboutus_about[0]->image1;

        $data['image2']=$aboutus_about[0]->image2;

        $data['title']=$aboutus_about[0]->title;

        $data['description']=$aboutus_about[0]->description;

        $data['id']=$aboutus_about[0]->id;
              

        return view('admin.add_aboutus_about_data',$data);
    }

    public function store_add_aboutus_about_data(Request $request,$id){

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

                DB::table('aboutus_about')->where('id',$id)->update(['image1'=>$imagename1,]);
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

                DB::table('aboutus_about')->where('id',$id)->update(['image2'=>$imagename2,]);
            }



            DB::table('aboutus_about')->where('id',$id)->update(['title'=>$title,'description'=>$description,]);

            return redirect('/admin/aboutus_about')->with('error','data updated successfully!!!');
        
    }




    public function aboutus_mission_vision(){

            $data['mission_vision_banner']=DB::table('inner_banner_image')->where('name','mission_vision')->get();

            $aboutus_mission_vision=DB::table('aboutus_mission_vision')->get();

            $data['aboutus_mission_vision']=$aboutus_mission_vision;

            return view('admin.aboutus_mission_vision',$data);
    }



    public function add_aboutus_mission_vision_data($id){

        if($id==0){

                $data['icon']='';
                $data['title']='';
                
                $data['description']='';
                $data['id']=0;


        }else{

                $aboutus_mission_vision=DB::table('aboutus_mission_vision')->where('id',$id)->get();

                $data['icon']=$aboutus_mission_vision[0]->icon;
                $data['title']=$aboutus_mission_vision[0]->title;

                $data['description']=$aboutus_mission_vision[0]->description;
                $data['id']=$aboutus_mission_vision[0]->id;


        } 

           return view('admin.add_aboutus_mission_vision_data',$data);
    }

    public function store_add_aboutus_mission_vision_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'icon'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $icon=$request->input('icon');

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('aboutus_mission_vision')->insert(['icon'=>$icon,'title'=>$title ,'description'=>$description,]);

            return redirect('/admin/aboutus_mission_vision')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'icon'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $icon=$request->input('icon');

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('aboutus_mission_vision')->where('id',$id)->update(['icon'=>$icon,'title'=>$title ,'description'=>$description,]);

            return redirect('/admin/aboutus_mission_vision')->with('error','data updated successfully!!!');
        }
    }


    public function delete_aboutus_mission_vision($id){

        DB::table('aboutus_mission_vision')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }



    public function update_inner_banner_data($id){

        $inner_banner_image=DB::table('inner_banner_image')->where('id',$id)->get();

        $data['image']=$inner_banner_image[0]->image;

        $data['name']=$inner_banner_image[0]->name;

        $data['id']=$inner_banner_image[0]->id;
              

        return view('admin.update_inner_banner_data',$data);        
    }


    public function store_update_inner_banner_data(Request $request,$id){

        $name=$request->input('name');

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

            DB::table('inner_banner_image')->where('id',$id)->update(['image'=>$imagename,]);
        }

        if($name == 'mission_vision'){

            return redirect('/admin/aboutus_mission_vision')->with('error','data updated successfully!!!');
        }

        if($name == 'counter'){

            return redirect('/admin/aboutus_counter')->with('error','data updated successfully!!!');
        }


    }



    public function aboutus_counter(){

            $data['counter_banner']=DB::table('inner_banner_image')->where('name','counter')->get();

            $aboutus_counter=DB::table('aboutus_counter')->get();

            $data['aboutus_counter']=$aboutus_counter;

            return view('admin.aboutus_counter',$data);
    }



    public function add_aboutus_counter_data($id){

        if($id==0){

                $data['count']='';
                $data['count_name']='';
                
                $data['id']=0;


        }else{

                $aboutus_counter=DB::table('aboutus_counter')->where('id',$id)->get();

                $data['count']=$aboutus_counter[0]->count;
                $data['count_name']=$aboutus_counter[0]->count_name;

                $data['id']=$aboutus_counter[0]->id;


        } 

           return view('admin.add_aboutus_counter_data',$data);
    }

    public function store_add_aboutus_counter_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'count'=>'required',
                'count_name'=>'required',
            ]);

            $count=$request->input('count');

            $count_name=$request->input('count_name');


            DB::table('aboutus_counter')->insert(['count'=>$count,'count_name'=>$count_name ,]);

            return redirect('/admin/aboutus_counter')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'count'=>'required',
                'count_name'=>'required',
            ]);

            $count=$request->input('count');

            $count_name=$request->input('count_name');

            DB::table('aboutus_counter')->where('id',$id)->update(['count'=>$count,'count_name'=>$count_name ,]);

            return redirect('/admin/aboutus_counter')->with('error','data updated successfully!!!');
        }
    }


    public function delete_aboutus_counter($id){

        DB::table('aboutus_counter')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }




    public function aboutus_team(){

            $aboutus_team=DB::table('aboutus_team')->get();

            $data['aboutus_team']=$aboutus_team;

            return view('admin.aboutus_team',$data);
    }



    public function add_aboutus_team_data($id){

        if($id==0){

                $data['name']='';
                $data['profession']='';
                $data['image']='';
                
                $data['id']=0;


        }else{

                $aboutus_team=DB::table('aboutus_team')->where('id',$id)->get();

                $data['name']=$aboutus_team[0]->name;
                $data['profession']=$aboutus_team[0]->profession;
                $data['image']=$aboutus_team[0]->image;

                $data['id']=$aboutus_team[0]->id;


        } 

           return view('admin.add_aboutus_team_data',$data);
    }

    public function store_add_aboutus_team_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'name'=>'required',
                'profession'=>'required',
            ]);

            $name=$request->input('name');

            $profession=$request->input('profession');

            $file=$request->file('image');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

            DB::table('aboutus_team')->insert(['image'=>$imagename,'name'=>$name,'profession'=>$profession ,]);

            return redirect('/admin/aboutus_team')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'name'=>'required',
                'profession'=>'required',
            ]);

            $name=$request->input('name');

            $profession=$request->input('profession');

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

                DB::table('aboutus_team')->where('id',$id)->update(['image'=>$imagename]);
            }

            DB::table('aboutus_team')->where('id',$id)->update(['name'=>$name,'profession'=>$profession ,]);

            return redirect('/admin/aboutus_team')->with('error','data updated successfully!!!');
        }
    }


    public function delete_aboutus_team($id){

        $userdata=DB::table('aboutus_team')->where('id', $id)->get();

        $image=$userdata[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('aboutus_team')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }




    public function aboutus_timeline(){

            $aboutus_timeline=DB::table('aboutus_timeline')->get();

            $data['aboutus_timeline']=$aboutus_timeline;

            return view('admin.aboutus_timeline',$data);
    }



    public function add_aboutus_timeline_data($id){

        if($id==0){

                $data['year']='';
                $data['title']='';
                $data['description']='';
                
                $data['id']=0;


        }else{

                $aboutus_timeline=DB::table('aboutus_timeline')->where('id',$id)->get();

                $data['year']=$aboutus_timeline[0]->year;
                $data['title']=$aboutus_timeline[0]->title;
                $data['description']=$aboutus_timeline[0]->description;

                $data['id']=$aboutus_timeline[0]->id;


        } 

           return view('admin.add_aboutus_timeline_data',$data);
    }

    public function store_add_aboutus_timeline_data(Request $request,$id){

        if($id==0){

            $validated=$request->validate([
                'year'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $year=$request->input('year');

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('aboutus_timeline')->insert(['description'=>$description,'year'=>$year,'title'=>$title ,]);

            return redirect('/admin/aboutus_timeline')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'year'=>'required',
                'title'=>'required',
                'description'=>'required',
            ]);

            $year=$request->input('year');

            $title=$request->input('title');

            $description=$request->input('description');

            DB::table('aboutus_timeline')->where('id',$id)->update(['description'=>$description,'year'=>$year,'title'=>$title ,]);

            return redirect('/admin/aboutus_timeline')->with('error','data updated successfully!!!');
        }
    }


    public function delete_aboutus_timeline($id){

        DB::table('aboutus_timeline')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }


}
