<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Admin;
use DB;

class HomeController extends Controller
{
    public function home_banner(){

        $home_banner=DB::table('home_banner')->get();

        $data['home_banner']=$home_banner;

        $home_banner_image=DB::table('home_banner_image')->get();

        $data['home_banner_image']=$home_banner_image;

        return view('admin.home_banner',$data);
    }


    public function allroom_banner(){

        $allroom_banner=DB::table('banner_image')->where('page_name','allroom')->get();

        $data['allroom_banner']=$allroom_banner;

        return view('admin.allroom_banner',$data);
    }

    public function country_banner(){

        $country_banner=DB::table('banner_image')->where('page_name','country')->get();

        $data['country_banner']=$country_banner;

        return view('admin.country_banner',$data);
    }

    public function add_home_banner_data($id){

        if($id==0){

                $data['image']='';
                $data['title']='';
                $data['description']='';
                $data['id']=0;

              }else{

                $home_banner=DB::table('home_banner')->where('id',$id)->get();

                $data['image']=$home_banner[0]->image;
                $data['title']=$home_banner[0]->title;
                $data['description']=$home_banner[0]->description;

                $data['id']=$home_banner[0]->id;
              } 

           return view('admin.add_home_banner_data',$data);
    }

    public function store_add_home_banner_data(Request $request,$id){


        if($id==0){

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            $file=$request->file('image');

            $imagename='';

            if($file){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

            DB::table('home_banner')->insert(['image'=>$imagename,'title'=>$title,'description'=>$description,]);

            return redirect('/admin/home_banner')->with('error','data submitted successfully!!!');
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

            if($file){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage){

                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('home_banner')->where('id',$id)->update(['image'=>$imagename]);
            }

            DB::table('home_banner')->where('id',$id)->update(['title'=>$title,'description'=>$description]);

            return redirect('/admin/home_banner')->with('error','data updated successfully!!!');
        }
    }


    public function delete_home_banner($id){

        $userdata=DB::table('home_banner')->where('id', $id)->get();

        $image=$userdata[0]->image;

        if($image){
            unlink(public_path('/uploads/'.$image));
        }

        DB::table('home_banner')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }





    public function add_home_banner_image_data($id){

        if($id==0){

                $data['image']='';
                $data['id']=0;

              }else{

                $home_banner_image=DB::table('home_banner_image')->where('id',$id)->get();

                $data['image']=$home_banner_image[0]->image;
                $data['id']=$home_banner_image[0]->id;
              } 

           return view('admin.add_home_banner_image_data',$data);
    }

    public function store_add_home_banner_image_data(Request $request,$id){


        if($id==0){

            $file=$request->file('image');

            $imagename='';

            if($file){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

            DB::table('home_banner_image')->insert(['image'=>$imagename,]);

            return redirect('/admin/home_banner')->with('error','data submitted successfully!!!');
        }else{

            $file=$request->file('image');

            $oldimage=$request->input('oldimage');

            $imagename='';

            if($file){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage){

                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('home_banner_image')->where('id',$id)->update(['image'=>$imagename]);
            }

            return redirect('/admin/home_banner')->with('error','data updated successfully!!!');
        }
    }


    public function delete_home_banner_image($id){

        $userdata=DB::table('home_banner_image')->where('id', $id)->get();

        $image=$userdata[0]->image;

        if($image){
            unlink(public_path('/uploads/'.$image));
        }

        DB::table('home_banner_image')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }





    public function home_counter(){

        $home_counter=DB::table('home_counter')->get();

        $data['home_counter']=$home_counter;

        return view('admin.home_counter',$data);
    }

    public function add_home_counter_data($id){

        if($id==0){

                $data['icon']='';
                $data['count']='';
                $data['name']='';
                $data['id']=0;

              }else{

                $home_counter=DB::table('home_counter')->where('id',$id)->get();

                $data['icon']=$home_counter[0]->icon;
                $data['count']=$home_counter[0]->count;
                $data['name']=$home_counter[0]->name;

                $data['id']=$home_counter[0]->id;
              } 

           return view('admin.add_home_counter_data',$data);
    }

    public function store_add_home_counter_data(Request $request,$id){


        if($id==0){

            $validated=$request->validate([
                'count'=>'required',
                'name'=>'required',
            ]);

            $count=$request->input('count');

            $name=$request->input('name');

            $icon=$request->input('icon');

            DB::table('home_counter')->insert(['icon'=>$icon,'count'=>$count,'name'=>$name,]);

            return redirect('/admin/home_counter')->with('error','data submitted successfully!!!');
        }else{

            $validated=$request->validate([
                'count'=>'required',
                'name'=>'required',
            ]);

            $count=$request->input('count');

            $name=$request->input('name');

            $icon=$request->input('icon');

            DB::table('home_counter')->where('id',$id)->update(['icon'=>$icon,'count'=>$count,'name'=>$name]);

            return redirect('/admin/home_counter')->with('error','data updated successfully!!!');
        }
    }


    public function delete_home_counter($id){

        DB::table('home_counter')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }




    public function home_work(){

        $home_work=DB::table('home_work')->get();

        $data['home_work']=$home_work;

        return view('admin.home_work',$data);
    }

    public function add_home_work_data($id){

        if($id==0){

                $data['image']='';
                $data['title']='';
                $data['description']='';
                $data['id']=0;

              }else{

                $home_work=DB::table('home_work')->where('id',$id)->get();

                $data['image']=$home_work[0]->image;
                $data['title']=$home_work[0]->title;
                $data['description']=$home_work[0]->description;

                $data['id']=$home_work[0]->id;
              } 

           return view('admin.add_home_work_data',$data);
    }

    public function store_add_home_work_data(Request $request,$id){


        if($id==0){

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            $file=$request->file('image');

            $imagename='';

            if($file){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

            DB::table('home_work')->insert(['image'=>$imagename,'title'=>$title,'description'=>$description,]);

            return redirect('/admin/home_work')->with('error','data submitted successfully!!!');
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

            if($file){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage){

                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('home_work')->where('id',$id)->update(['image'=>$imagename]);
            }

            DB::table('home_work')->where('id',$id)->update(['title'=>$title,'description'=>$description]);

            return redirect('/admin/home_work')->with('error','data updated successfully!!!');
        }
    }


    public function delete_home_work($id){

        $userdata=DB::table('home_work')->where('id', $id)->get();

        $image=$userdata[0]->image;

        if($image){
            unlink(public_path('/uploads/'.$image));
        }

        DB::table('home_work')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }





    public function home_testimonial(){

        $home_testimonial=DB::table('home_testimonial')->get();

        $data['home_testimonial']=$home_testimonial;

        $home_testimonial_description=DB::table('home_testimonial_description')->get();

        $data['home_testimonial_description']=$home_testimonial_description;

        return view('admin.home_testimonial',$data);
    }


    public function update_home_testimonial_description_data($id){
        
            $home_testimonial_description=DB::table('home_testimonial_description')->where('id',$id)->get();

            $data['id']=$home_testimonial_description[0]->id;

            $data['title']=$home_testimonial_description[0]->title;

            $data['description']=$home_testimonial_description[0]->description;

            $data['image']=$home_testimonial_description[0]->image;

            $data['link']=$home_testimonial_description[0]->link;
        

        return view('admin.update_home_testimonial_description_data',$data);
    }


    public function store_update_home_testimonial_description_data(Request $request,$id){

        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'link'=>'required',
        ]);


            $title=$request->input('title');

            $description=$request->input('description');

            $link=$request->input('link');

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

                DB::table('home_testimonial_description')->where('id',$id)->update(['image'=>$imagename]);
            }

            
            DB::table('home_testimonial_description')->where('id',$id)->update(['description'=>$description ,'title'=>$title ,'link'=>$link ,]);

            return redirect('/admin/home_testimonial')->with('error','data updated successfully!!');
        
    }


    public function add_home_testimonial_data($id){
        
        if($id==0){

            $data['image']='';

            $data['description']='';

            $data['name']='';

            $data['profession']='';

            $data['id']=$id;
        }
        else{

            $home_testimonial=DB::table('home_testimonial')->where('id',$id)->get();

            $data['id']=$home_testimonial[0]->id;

            $data['image']=$home_testimonial[0]->image;

            $data['name']=$home_testimonial[0]->name;

            $data['profession']=$home_testimonial[0]->profession;

            $data['description']=$home_testimonial[0]->description;
        }

        return view('admin.add_home_testimonial_data',$data);
    }


    public function store_add_home_testimonial_data(Request $request,$id){

        $validated=$request->validate([
            'name'=>'required',
            'profession'=>'required',
            'description'=>'required',
        ]);

        if($id ==0){

            $name=$request->input('name');

            $profession=$request->input('profession');

            $description=$request->input('description');

            $file=$request->file('image');

            $imagename='';

            if($file !=''){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

            }

            DB::table('home_testimonial')->insert(['image'=>$imagename, 'description'=>$description ,'name'=>$name,'profession'=>$profession]);

            return redirect('/admin/home_testimonial')->with('error','data submitted successfully!!');
        }

        else{

            $name=$request->input('name');

            $profession=$request->input('profession');

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

                DB::table('home_testimonial')->where('id',$id)->update(['image'=>$imagename ]);

            }
            
            DB::table('home_testimonial')->where('id',$id)->update(['description'=>$description ,'name'=>$name,'profession'=>$profession]);

            return redirect('/admin/home_testimonial')->with('error','data updated successfully!!');
        }
    }

    

    public function delete_home_testimonial($id){

        $userdata=DB::table('home_testimonial')->where('id',$id)->get();

        $image=$userdata[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('home_testimonial')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);
    }






    public function home_notch(){

        $home_notch=DB::table('home_notch')->get();

        $data['home_notch']=$home_notch;

        return view('admin.home_notch',$data);
    }

    public function add_home_notch_data($id){

        if($id==0){

                $data['image']='';
                $data['title']='';
                $data['description']='';
                $data['id']=0;

              }else{

                $home_notch=DB::table('home_notch')->where('id',$id)->get();

                $data['image']=$home_notch[0]->image;
                $data['title']=$home_notch[0]->title;
                $data['description']=$home_notch[0]->description;

                $data['id']=$home_notch[0]->id;
              } 

           return view('admin.add_home_notch_data',$data);
    }

    public function store_add_home_notch_data(Request $request,$id){


        if($id==0){

            $validated=$request->validate([
                'title'=>'required',
                'description'=>'required',
            ]);

            $title=$request->input('title');

            $description=$request->input('description');

            $file=$request->file('image');

            $imagename='';

            if($file){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

            DB::table('home_notch')->insert(['image'=>$imagename,'title'=>$title,'description'=>$description,]);

            return redirect('/admin/home_notch')->with('error','data submitted successfully!!!');
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

            if($file){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                if($oldimage){

                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('home_notch')->where('id',$id)->update(['image'=>$imagename]);
            }

            DB::table('home_notch')->where('id',$id)->update(['title'=>$title,'description'=>$description]);

            return redirect('/admin/home_notch')->with('error','data updated successfully!!!');
        }
    }


    public function delete_home_notch($id){

        $userdata=DB::table('home_notch')->where('id', $id)->get();

        $image=$userdata[0]->image;

        if($image){
            unlink(public_path('/uploads/'.$image));
        }

        DB::table('home_notch')->where('id', $id)->delete();

        return response()->json([
         'success' => 'Record has been deleted successfully!'
        ]);

    }








    public function home_choose(){

        $home_choose=DB::table('home_choose')->get();

        $data['home_choose']=$home_choose;

        $home_choose_image=DB::table('home_choose_image')->get();

        $data['home_choose_image']=$home_choose_image;

        return view('admin.home_choose',$data);
    }


    public function add_home_choose_image_data($id){
        
            $home_choose_image=DB::table('home_choose_image')->where('id',$id)->get();

            $data['id']=$home_choose_image[0]->id;

            $data['image1']=$home_choose_image[0]->image1;

            $data['image2']=$home_choose_image[0]->image2;
        

        return view('admin.add_home_choose_image_data',$data);
    }


    public function store_add_home_choose_image_data(Request $request,$id){

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

                DB::table('home_choose_image')->where('id',$id)->update(['image1'=>$imagename1]);
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

                DB::table('home_choose_image')->where('id',$id)->update(['image2'=>$imagename2]);
            }

            return redirect('/admin/home_choose')->with('error','data updated successfully!!');
        
    }


    public function add_home_choose_data($id){
        
        if($id==0){

            $data['icon']='';

            $data['title']='';

            $data['description']='';

            $data['id']=$id;
        }
        else{

            $home_choose=DB::table('home_choose')->where('id',$id)->get();

            $data['id']=$home_choose[0]->id;

            $data['icon']=$home_choose[0]->icon;

            $data['description']=$home_choose[0]->description;

            $data['title']=$home_choose[0]->title;
        }

        return view('admin.add_home_choose_data',$data);
    }


    public function store_add_home_choose_data(Request $request,$id){

        $validated=$request->validate([
            'icon'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        if($id ==0){

            $icon=$request->input('icon');

            $title=$request->input('title');

            $description=$request->input('description');


            DB::table('home_choose')->insert(['description'=>$description ,'icon'=>$icon,'title'=>$title]);

            return redirect('/admin/home_choose')->with('error','data submitted successfully!!');
        }

        else{

            $icon=$request->input('icon');

            $title=$request->input('title');

            $description=$request->input('description');
            
            DB::table('home_choose')->where('id',$id)->update(['description'=>$description ,'icon'=>$icon,'title'=>$title]);

            return redirect('/admin/home_choose')->with('error','data updated successfully!!');
        }
    }

    

    public function delete_home_choose($id){

        DB::table('home_choose')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);
    }










     public function countries(){

        $data['countries']=DB::table('countries')->get();

        return view('admin.country_list',$data);
    }
    public function add_new_country($id){

           if($id==0){

                $data['image']='';
                $data['name']='';
                $data['id']=0;

              }else{

                $countries=DB::table('countries')->where('id',$id)->get();
                $data['image']=$countries[0]->image;
                $data['name']=$countries[0]->name;
                $data['id']=$countries[0]->id;

              } 

           return view('admin.add_countries',$data);

    }

    public function store_new_country(Request $request,$id){

        if($id==0){


         $validated=$request->validate([
            'image'=>'required',
            'name'=>'required',
           
            ]);

         $name=$request->input('name');
         $file=$request->file('image');

         $count=DB::table('countries')->where('name',$name)->count();

         if($count==0){

           $imagename='';

            if($file){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

             DB::table('countries')->insert(['name'=>$name, 'image'=>$imagename]);

             return redirect('admin/countries')->with('error','data submitted successfully!!');

         }else{

           return redirect('admin/countries')->with('error','This country is already inserted!!');

         }



        }else{


         $validated=$request->validate([
          
              'name'=>'required',
           
            ]);

         $name=$request->input('name');
         $file=$request->file('image');

           $count=DB::table('countries')->where('name',$name)->count();

         if($count==0){

            if($file){

                $imagename='';

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                DB::table('countries')->where('id',$id)->update(['image'=>$imagename]);

                $oldimage=$request->input('oldimage');

                if($oldimage !=''){

                    unlink(public_path('/uploads/'.$oldimage));
                }

            }

             DB::table('countries')->where('id',$id)->update(['name'=>$name]);

              return redirect('admin/countries')->with('error','data updated successfully!!');

         }else{

          return redirect('admin/countries')->with('error','This country is already inserted!!');

        }
      }
    }

    public function delete_country($id){


        $country=DB::table('countries')->where('id',$id)->get();

        $image=$country[0]->image;

        if($image!=''){

            unlink(public_path('/uploads/'.$image));
        }

      DB::table('countries')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);


    }

    public function cities(){

       $data['countries']=DB::table('countries')->get();
       $data['cities']=DB::table('cities')->get();

        return view('admin.cities_list',$data);

    }

    public function add_new_city($id){


           if($id==0){

                $data['image']='';
                $data['name']='';
                $data['id']=0;
                $data['country_id']=0;
                $data['countries']=DB::table('countries')->get();

              }else{

                $cities=DB::table('cities')->where('id',$id)->get();
                $data['image']=$cities[0]->image;
                $data['name']=$cities[0]->name;
                $data['country_id']=$cities[0]->country_id;
                $data['id']=$cities[0]->id;
                $data['countries']=DB::table('countries')->get();

              } 

           return view('admin.add_cities',$data);

    }

       public function store_new_city(Request $request,$id){

        if($id==0){

           $validated=$request->validate([
            'image'=>'required',
            'name'=>'required',
            'country'=>'required',
           
            ]);

         $name=$request->input('name');
         $file=$request->file('image');
         $country=$request->input('country');

         $count=DB::table('cities')->where('name',$name)->where('country_id',$country)->count();

         if($count==0){

           $imagename='';

            if($file){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

             DB::table('cities')->insert(['name'=>$name, 'image'=>$imagename, 'country_id'=>$country]);

             return redirect('admin/cities')->with('error','data submitted successfully!!');

         }else{

           return redirect('admin/add_new_city/0')->with('error','This city is already inserted!!');

         }



        }else{


         $validated=$request->validate([
          
            'name'=>'required',
            'country'=>'required',
           
            ]);

         $name=$request->input('name');
         $file=$request->file('image');

         $country=$request->input('country');

         $count=DB::table('cities')->where('name',$name)->where('country_id',$country)->count();

         if($count==0){


            return redirect('admin/add_new_city/'+$id)->with('error','This city is already inserted!!');

         }else{



            if($file){

                $imagename='';

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                DB::table('cities')->where('id',$id)->update(['image'=>$imagename]);

                $oldimage=$request->input('oldimage');

                if($oldimage !=''){

                    unlink(public_path('/uploads/'.$oldimage));
                }

            }

             DB::table('cities')->where('id',$id)->update(['name'=>$name, 'country_id'=>$country]);

              return redirect('admin/cities')->with('error','data updated successfully!!');

          }

         
      }
    }



    public function delete_city($id){


        $city=DB::table('cities')->where('id',$id)->get();

        $image=$city[0]->image;

        if($image!=''){

            unlink(public_path('/uploads/'.$image));
        }

      DB::table('cities')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);

    }

   public function universities()
    {

       $data['countries']=DB::table('countries')->get();
       $data['cities']=DB::table('cities')->get();
        $data['universities']=DB::table('universities')->get();

        return view('admin.university_list',$data);


    }


     public function add_new_university($id){


           if($id==0){

                $data['image']='';
                $data['name']='';
                $data['id']=0;
                $data['country_id']=0;
                  $data['city_id']=0;
                $data['countries']=DB::table('countries')->get();
                 $data['cities']=DB::table('cities')->get();

              }else{

                $universities=DB::table('universities')->where('id',$id)->get();
                $data['image']=$universities[0]->image;
                $data['name']=$universities[0]->name;
                $data['country_id']=$universities[0]->country_id;
                $data['id']=$universities[0]->id;
                $data['city_id']=$universities[0]->city_id;
                $data['countries']=DB::table('countries')->get();
                $data['cities']=DB::table('cities')->get();

                  $data['selected_cities']=DB::table('cities')->where('country_id',$universities[0]->country_id)->get();


              } 

           return view('admin.add_new_university',$data);

    }

    public function get_city($id){

         return json_encode( DB::table('cities')->where('country_id',$id)->get()->toArray());

              
    }

    public function store_new_university(Request $request, $id){

          if($id==0){

           $validated=$request->validate([
            'image'=>'required',
            'name'=>'required',
            'country'=>'required',
            'city'=>'required',
           
            ]);

         $name=$request->input('name');
         $file=$request->file('image');
         $country=$request->input('country');
         $city=$request->input('city');

         $count=DB::table('universities')->where('name',$name)->where('city_id',$city)->count();

         if($count==0){

           $imagename='';

            if($file){

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);
            }

             DB::table('universities')->insert(['name'=>$name, 'image'=>$imagename, 'country_id'=>$country, 'city_id'=>$city, ]);

             return redirect('admin/universities')->with('error','data submitted successfully!!');

         }else{

           return redirect('admin/add_new_university/0')->with('error','This university is already inserted!!');

         }



        }else{


         $validated=$request->validate([
          
            'name'=>'required',
            'country'=>'required',
            'city'=>'required',
           
            ]);

         $name=$request->input('name');
         $file=$request->file('image');
         $city=$request->input('city');
         $country=$request->input('country');

         $count=DB::table('universities')->where('name',$name)->where('city_id',$city)->count();

         if($count !=0){

           return redirect('admin/add_new_university/'+$id)->with('error','This university is already inserted!!');

           }else{

              if($file){

                $imagename='';

                $destination_path='uploads';

                $imagename=time().'_'.$file->getClientOriginalName();

                $file->move($destination_path,$imagename);

                DB::table('universities')->where('id',$id)->update(['image'=>$imagename]);

                $oldimage=$request->input('oldimage');

                if($oldimage !=''){

                    unlink(public_path('/uploads/'.$oldimage));
                }

              }
  
             DB::table('universities')->where('id',$id)->update(['name'=>$name, 'country_id'=>$country, 'city_id'=>$city]);

              return redirect('admin/universities')->with('error','data updated successfully!!');

            }

         
       }

    }



    public function delete_university($id){

        $university=DB::table('universities')->where('id',$id)->get();

        $image=$university[0]->image;

        if($image!=''){

            unlink(public_path('/uploads/'.$image));
        }

      DB::table('universities')->where('id',$id)->delete();

        return response()->json([
            'success'=>'200',
        ]);

    }
}
