@extends('admin.layout.header')

@section('content')

  <div class="head-banner">
         <ul class="breadcrumb">
            <li>
               <a href="{{url('admin/home')}}">Home</a>
            </li>
            <li>
               <a href=""><span>Mission Vision Detail</span></a>
            </li>
         </ul>
      </div>


      <div class="page mt-4 hosting-page title1" style="display: block;">
         <div class="list1">
            <h4 class="mb-0">Mission Vision Background</h4>
         
         </div>
         <div class="sear-list">
            <div class="row">
               <div class="col-lg-12">
                
               </div>
            </div>
         </div>
         <div class="pro-table table-responsive">
            <table class="table table-bordered table-striped text">

                @foreach($mission_vision_banner as $id)

                <tr>
                    
                     <th>Image</th>

                 </tr>

                 <tr>

                  <th>
                    <div class="set_width"><img src="/uploads/{{$id->image}}" class="w-100"></div>
                  </th>

                 </tr>

                  <tr>

                     <th><button class="clo btn0"><a href="{{url('admin/update_inner_banner_data')}}/{{$id->id}}">update</a></button></th>  
                    

                  </tr>

                 @endforeach
                    
              
            </table>
            
         </div>
      </div>

   


      <div class="page mt-4 hosting-page title1" style="display: block;">
         <div class="list1">
            <h4 class="mb-0">Mission Vision Details</h4>

            
            <div class="btn1-main">
                <!-- <button class="btn1 delete-btn1">all delete</button> -->
                <button class="btn1"><a href="{{url('admin/add_aboutus_mission_vision_data')}}/0" style="color:white;">ADD</a></button>
            </div>
         </div>
         <div class="sear-list">
            <div class="row">
               <div class="col-lg-12">
                  <div class="sear-main">
                    <!--  <label><input type="search" class="form-control " placeholder="Find..."></label> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="pro-table table-responsive">
            <table class="table table-bordered table-striped">
               <thead>
                  <tr>
                    <!-- <th><input type="checkbox" name="" id="chkcheckAll"/></th> -->
                     <th>Sr.No</th>
                     <th>Icon</th>
                     <th>Title</th>
                     <th>Description</th>
                     <th>Action</th>
                  </tr>
               </thead>

               @foreach($aboutus_mission_vision as $key=>$ad)
                 <tbody class="case_studies_{{$ad->id}}">
                    <tr>
                        <!-- <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$ad->id}}"/></td> -->
                        <td>{{$key+1}}</td>
                        
                        <td>
                            {!!$ad->icon!!}
                        </td>
                        <td>{{$ad->title}}</td>
                        <td>
                            {!!$ad->description!!}
                        </td>
                        <td>
                          <a class="icon__1" href="{{url('admin/add_aboutus_mission_vision_data')}}/{{$ad->id}}"><i class="fas fa-edit"></i></a>
                           <a class="icon__2" onclick="delete_cs_banner_list({{$ad->id}})"><i class="fas fa-trash-alt"></i></a>

                        </td>
                        
                    </tr>
                 </tbody>
               @endforeach
              
            </table>
         
         </div>
      </div>

      <style type="text/css">
         .set_width{

            height: 200px;
            width: 200px;
            object-fit: cover;
         }
      </style>

       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      
      <script type="text/javascript">


        $(function() {
                 setTimeout(function() { $("#hideDiv").fadeOut(3000); }, 3000)

             });

        function delete_cs_banner_list($id){

                  swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                 
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {

                    var BASE_URL = "{{ url('/') }}";

                    var id = $id;

                          $.ajax({

                                url:BASE_URL+'/admin/delete_aboutus_mission_vision/'+id,
                                type:'GET',
                                dataType: "json",

                                success: function(response){
        
                                     $('.case_studies_'+id).hide();
         
   
                                     },
 
                            error: function(response) {

                                     alert('error');
          
                                },        
          
                           });



                    
                    } else {
                     
                    }
                  });
        
           }
      

      </script> 


@endsection