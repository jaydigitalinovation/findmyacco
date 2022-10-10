<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Admin;
use DB;

class ContactusController extends Controller
{
    public function contact_banner(){

        $contact_banner=DB::table('banner_image')->where('page_name','contact')->get();

        $data['contact_banner']=$contact_banner;

        $contact_detail=DB::table('contact_detail')->get();

        $data['contact_detail']=$contact_detail;

        return view('admin.contact_banner',$data);
    }


    public function add_contact_detail_data($id){

        
        $contact_detail=DB::table('contact_detail')->where('id',$id)->get();

        $data['image']=$contact_detail[0]->image;

        $data['description']=$contact_detail[0]->description;

        $data['id']=$contact_detail[0]->id;
              

        return view('admin.add_contact_detail_data',$data);
    }

    public function store_add_contact_detail_data(Request $request,$id){

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

                $file->move($destination_path,$imagename);

                if($oldimage !=''){

                    unlink(public_path('/uploads/'.$oldimage));
                }

                DB::table('contact_detail')->where('id',$id)->update(['image'=>$imagename,]);
            }

            DB::table('contact_detail')->where('id',$id)->update(['description'=>$description,]);

            return redirect('/admin/contact_banner')->with('error','data updated successfully!!!');
        
    }






    public function host_home_banner(){

        $host_home_banner=DB::table('banner_image')->where('page_name','host_home')->get();

        $data['host_home_banner']=$host_home_banner;

        return view('admin.host_home_banner',$data);
    }
}
