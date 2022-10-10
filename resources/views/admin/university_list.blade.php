@extends('admin.layout.header')

@section('content')


  <div class="head-banner">
         <ul class="breadcrumb">
            <li>
               <a href="{{url('admin/home')}}">Home</a>
            </li>
            <li>
               <a href=""><span>University</span></a>
            </li>
         </ul>
      </div>

   
      <div class="page mt-4 hosting-page title1" style="display: block;">
         <div class="list1">
            <h4 class="mb-0">University</h4>

            
            <div class="btn1-main">
                <!-- <button class="btn1 delete-btn1">all delete</button> -->
                <button class="btn1"><a href="{{url('admin/add_new_university')}}/0" style="color:white;">ADD</a></button>
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
                   
                     <th>Sr.No</th>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Country</th>
                     <th>City</th>
                     <th>Action</th>
                  </tr>
               </thead>

               @foreach($universities as $key=>$u)
                 <tbody class="univercity_{{$u->id}}">
                    <tr>
                   
                        <td>{{$key+1}}</td>
                        
                        <td>
                            <img src="/uploads/{{$u->image}}" width="100" height="100">
                        </td>
                        <td>{{$u->name}}</td>

                          <td>
                            @foreach($countries as $cd)

                             @if($cd->id == $u->country_id)

                             {{$cd->name}}

                             @endif

                            @endforeach
                         </td>

                          <td>
                            @foreach($cities as $ct)

                             @if($ct->id == $u->city_id)

                              {{$ct->name}}

                             @endif

                            @endforeach
                         </td>
                        <td>
                          <a class="icon__1" href="{{url('admin/add_new_university')}}/{{$u->id}}"><i class="fas fa-edit"></i></a>
                          <a class="icon__2" onclick="delete_univercity({{$u->id}})"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        
                     </tr>
                 </tbody>
               @endforeach
              
            </table>
         
         </div>
      </div>

       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      
      <script type="text/javascript">



        $(function() {
                 setTimeout(function() { $("#hideDiv").fadeOut(3000); }, 3000)

             });

        function delete_univercity($id){

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

                                url:BASE_URL+'/admin/delete_university/'+id,
                                type:'GET',
                                dataType: "json",

                                success: function(response){
        
                                     $('.univercity_'+id).hide();
         
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