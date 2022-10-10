@extends('admin.layout.header')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css">


 <div class="head-banner">
         <ul class="breadcrumb">
            <li>
               <a href="{{url('admin/home')}}">Home</a>
            </li>
            <li>
               @if($id==0)
               <a href=""><span>Add new Service</span></a>
               @else
               <a href=""><span>Update Service</span></a>
               @endif
            </li>
         </ul>
      </div>
      <div class="page mt-4 hosting-page title1 page-with" style="display: block;">
         <div class="list1">
           @if($id==0)
            <h4 class="mb-4">Add new Service</h4>
          @else
              <h4 class="mb-4">Update Service</h4>
            @endif
         </div>
         <form action="{{url('admin/store_add_aboutus_counter_data')}}/{{$id}}" method="post" enctype="multipart/form-data">
         	@csrf
         <div class="detail table-responsive">
            <div class="details_main">

                <div class="details_inner">
                  <div class="part">
                     <div class="row">
                        <div class="col-lg-4 label">
                           <label>Count</label>
                        </div>
                        <div class="col-lg-10 data">
                           <input type="number" placeholder="Enter Count" name="count" value="{{$count}}" >
                             @if($errors->has('count')) <p class="error_mes">{{ $errors->first('count') }}</p> @endif
                        </div>
                     </div>   
                  </div>   
               </div>

               <div class="details_inner">
                  <div class="part">
                     <div class="row">
                        <div class="col-lg-4 label">
                           <label>Count_name</label>
                        </div>
                        <div class="col-lg-10 data">
                           <input type="text" placeholder="Enter Count_name" name="count_name" value="{{$count_name}}" >
                             @if($errors->has('count_name')) <p class="error_mes">{{ $errors->first('count_name') }}</p> @endif
                        </div>
                     </div>   
                  </div>   
               </div>                         
               
               <div class="uplode-btn" style="text-align: center;">
                  <button>submit</button>
                  <a href="{{url('admin/home')}}">Back to Home?</a>
               </div>
            </div>
         </div>

         </form>
      </div>

@endsection