@extends('admin.layout.header')

@section('content')


 <div class="head-banner">
         <ul class="breadcrumb">
            <li>
               <a href="{{url('admin/home')}}">Home</a>
            </li>
            <li>

               @if($id==0)
               
               <a href=""><span>Add Cities</span></a>
               @else

                   <a href=""><span>Update Cities</span></a>
               @endif


               
            </li>
         </ul>
      </div>
      <div class="page mt-4 hosting-page title1 page-with" style="display: block;">
         <div class="list1">

              @if($id==0)
               
                <h4 class="mb-4">Add new Cities</h4>
               @else

                    <h4 class="mb-4">Update  Cities</h4>
               @endif


         </div>
         <form action="{{url('admin/store_new_city')}}/{{$id}}" method="post" enctype="multipart/form-data">
         	@csrf
         <div class="detail table-responsive">
            <div class="details_main">

               <div class="details_inner">
                  <div class="part">
                     <div class="details_image">
                        <img src="/uploads/{{$image}}" id="blah">
                     </div>
                     <div class="details_sub">
                        <input type="file" name="image" onchange="readURL(this);" >
                           <input type="hidden" name="oldimage" value="{{$image}} "/>
                          @if($errors->has('image')) <p class="error_mes">{{ $errors->first('image') }}</p> @endif
                      <!-- <img id="blah" src="#" alt=""> -->
                     </div>  
                  </div>            
               </div>
            </div>

               <div class="details_inner">
               <div class="part">
                  <div class="row">
                     <div class="col-lg-4 label">
                        <label>Country</label>
                     </div>
                     <div class="col-lg-10 data">
                        <select name="country" id="country" >
                           <option value="">Select Country</option>

                             @foreach($countries as $c)

                                
                              <option value="{{ $c->id }}"{{$c->id== $country_id ? 'selected' : ''}}>{{ $c->name}}</option>

                             @endforeach
                                       
                        </select>
                         @if($errors->has('country')) <p class="error_mes">{{ $errors->first('country') }}</p> @endif

                     </div>
                  </div>
                                     
               </div>
            </div>
              
               <div class="details_inner">
                  <div class="part">
                     <div class="row">
                        <div class="col-lg-4 label">
                           <label>Name</label>
                        </div>
                        <div class="col-lg-10 data">
                           <input type="text" placeholder="Enter name" name="name" value="{{$name}}" >
                             @if($errors->has('name')) <p class="error_mes">{{ $errors->first('name') }}</p> @endif
                        </div>
                     </div>   
                  </div>
               </div>

              

               <div class="uplode-btn" style="text-align: center;">
                  <button>submit</button>
                  <a href="{{url('admin/home')}}">Back to Home?</a>
               </div>
            </div>
          
        

         </form>
      </div>
      <style type="text/css">
         .row{
              margin-left: 0px!important;
            }
      </style>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script type="text/javascript">

           function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(130)
                        .height(130);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>

<style type="text/css">

   .details_sub {
  
     padding-left: 0px !important; 
}

.row {
    margin-left: 24px!important;
}

.uplode-btn {
 
    text-align: left !important;
    margin-left: 42px !important;
}
   

</style>



@endsection