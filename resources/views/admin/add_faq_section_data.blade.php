@extends('admin.layout.header')

@section('content')


 <div class="head-banner">
         <ul class="breadcrumb">
            <li>
               <a href="{{url('admin/home')}}">Home</a>
            </li>
            <li>
               
               <a href=""><span>Update Banner Image</span></a>
               
            </li>
         </ul>
      </div>
      <div class="page mt-4 hosting-page title1 page-with" style="display: block;">
         <div class="list1">
         
            <h4 class="mb-4">Update Banner Image</h4>

         </div>
         <form action="{{url('admin/store_add_faq_section_data')}}/{{$id}}" method="post" enctype="multipart/form-data">
         	@csrf
         <div class="detail table-responsive">
            <div class="details_main">

               <div class="details_inner">
                  <div class="part">
                     <div class="row">
                        <div class="col-lg-4 label">
                           <label>Select Type</label>
                        </div>
                        <div class="col-lg-10 data">
                           @if($list_id !='')

                           <select name="list_id">
                              <option value="{{$list_id}}">{{$list}}</option>

                              @foreach($faq_list as $f)
                              <option value="{{$f->id}}">{{$f->list}}</option>
                              @endforeach

                           </select>

                           @else
                           <select name="list_id">
                              <option>Select type</option>

                              @foreach($faq_list as $f)
                              <option value="{{$f->id}}">{{$f->list}}</option>
                              @endforeach

                           </select>
                           @endif
                             @if($errors->has('question')) <p class="error_mes">{{ $errors->first('question') }}</p> @endif
                        </div>
                     </div>   
                  </div>
               </div>
              
               <div class="details_inner">
                  <div class="part">
                     <div class="row">
                        <div class="col-lg-4 label">
                           <label>Question</label>
                        </div>
                        <div class="col-lg-10 data">
                           <input type="text" placeholder="Enter question" name="question" value="{{$question}}" >
                             @if($errors->has('question')) <p class="error_mes">{{ $errors->first('question') }}</p> @endif
                        </div>
                     </div>   
                  </div>
               </div>

               

               <div class="part part">
                  <div class="col-md-12 label">
                     <label>Answer</label>
                  </div>
                  <div class="col-md-12 data data1">
                     <div class="days data1">
                       <textarea type="text" name="answer">{{$answer}}</textarea>   
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



@endsection