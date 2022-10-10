@extends('layout.header')

@section('content')


@foreach($banner_image as $bi)
<div class="co_banner1">
	<img src="/uploads/{{$bi->image}}">
	<div class="container">
		
		<div class="inner-bcontent">
			<h2>{{$bi->title}}</h2>
			<ul>
				<li><a href="{{url('/')}}"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
				<li class="bd"><i class="fa-solid fa-angles-right"></i></li>
				<li class="bd">{{$bi->title}}</li>
			</ul>
		</div>
		
	</div>
</div>
@endforeach

<div class="bg-our-partner">
	<div class="container">
		@foreach($partner_info_des as $pid)
		<div class="row">
			<div class="col-lg-7 col-md-6">
				<div class="partner-src-img">
					<img src="/uploads/{{$pid->image}}">
				</div>
			</div>
			<div class="col-lg-5 col-md-6">
				<div class="our-partner-info">
					<h1>
						{{$pid->title}}
					</h1>

					<div class="partner-src">
						<div class="row">
							@foreach($partner_info as $pi)
							<div class="col-lg-6 col-md-6">
								<div class="partner-src-flex">
									<div class="partner-src-icon">
										<i class="fa-solid fa-check"></i>
									</div>
									<div class="partner-src-title">
										<h6>
											{{$pi->advantage}}	
										</h6>
										
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

<div class="bg-multi-partner">
	<div class="container">
		<div class="multi-partner-title">
			<h2>Our Partners</h2>
		</div>
		<div class="row">

			@foreach($partner_detail as $pd)
			<div class="col-lg-3 col-md-6">
				<div class="multi-partner-img">
					<div class="inner-partner-img">
						<a href="{{url('/partner_detail')}}/{{$pd->id}}"><img src="/uploads/{{$pd->image}}"></a>
					</div>
				</div>
			</div>
			@endforeach
			
		</div>
	</div>
</div>

<div class="become-partner">
	<div class="container">
	@foreach($partner_form as $pf)
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="inner-becomep">
					<p>{{$pf->title1}}</p>
					<h2>{{$pf->title2}}</h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="join-btn">
					<button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight" data-bs-toggle="modal" data-bs-target="#myModal">
						<span class="btn-title">join now</span>
				        <span></span><span></span><span></span><span></span><span></span>
				    </button>
				</div>
			</div>
		</div>
	@endforeach
	</div>
</div>

<div class="bg-city-tab">
	<div class="container">
		<div class="city-heading">
			<h2>
				near by location
			</h2>
		</div>

	<div class="city-tab">
		<ul class="nav nav-tabs nav-justified" role="tablist">
            <div class="slider"></div>
            <li class="nav-item">
                <a class="nav-link active" id="home1-tab" data-bs-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true">near by cities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="home2-tab" data-bs-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="false">near by areas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="home3-tab" data-bs-toggle="tab" href="#home3" role="tab" aria-controls="home3" aria-selected="false">near by university</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="home4-tab" data-bs-toggle="tab" href="#home4" role="tab" aria-controls="home4" aria-selected="false">best student accomendation</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home1-tab">
            	<div class="city">
					<div class="row">
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Sydney</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Morisset–Cooranbong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Nowra–Bomaderry</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Newcastle–Maitland</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Singleton</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Morisset–Cooranbong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Newcastle–Maitland</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Nowra–Bomaderry</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong
									</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Lithgow</a>
								</p>
							</div>
						</div>
					</div>
            	</div>
            </div>

            <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">
            	<div class="city">
					<div class="row">
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Sydney</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Morisset–Cooranbong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Nowra–Bomaderry</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Newcastle–Maitland</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Singleton</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Morisset–Cooranbong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Newcastle–Maitland</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Nowra–Bomaderry</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong
									</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Lithgow</a>
								</p>
							</div>
						</div>
					</div>
            	</div>
            </div>
            <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home3-tab">
            	<div class="city">
					<div class="row">
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Sydney</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Morisset–Cooranbong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Nowra–Bomaderry</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Newcastle–Maitland</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Singleton</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Morisset–Cooranbong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Newcastle–Maitland</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Nowra–Bomaderry</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong
									</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Lithgow</a>
								</p>
							</div>
						</div>
					</div>
            	</div>
            </div>

            <div class="tab-pane fade" id="home4" role="tabpanel" aria-labelledby="home4-tab">
            	<div class="city">
					<div class="row">
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Sydney</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Morisset–Cooranbong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Nowra–Bomaderry</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Newcastle–Maitland</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Singleton</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Morisset–Cooranbong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Newcastle–Maitland</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Nowra–Bomaderry</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Wollongong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong
									</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Bowral–Mittagong</a>
								</p>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="city-list">
								<p>
									<i class="fa-solid fa-angles-right"></i>
									<a href="#">Lithgow</a>
								</p>
							</div>
						</div>
					</div>
            	</div>
            </div>
            
        </div>
    </div>
	</div>
</div>


 <!------------- search-modal --------------->
    <div class="search-popup">
        <button class="close-search style-two"><span class="fa-solid fa-xmark"></span></button>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form>
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search City and Countries" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>

<div class="modal modal-address" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Partner Application Form</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                	<div id="message"></div>
						<form method="POST"  id="sendmessage">
							{{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 check">
                               <input type="text" placeholder="First name" name="fname">
                                  <span class="text-danger error-text fname_err"></span>
                            </div>
                            <div class="col-md-6 check">
                                <input type="text" placeholder="Last name" name="lname">
                                	<span class="text-danger error-text lname_err"></span>
                            </div>
                            <div class="col-md-6 check">
                                <input type="email" placeholder="Email address" name="email">
                                	<span class="text-danger error-text email_err"></span>
                            </div>
                            <div class="col-md-6 check">
                                <input type="number" placeholder="Phone Number" name="mobile_no">
                                	<span class="text-danger error-text mobile_no_err"></span>
                            </div>
                            <div class="col-md-6 check">
                                <input type="text" placeholder="Partner Name" name="partner_name">
                                	<span class="text-danger error-text partner_name_err"></span>
                            </div>
                            <div class="col-md-6 check">
                                <input type="text" placeholder="Website Name" name="website">
                                	<span class="text-danger error-text website_err"></span>
                            </div>
                            <div class="col-md-12 check">
                                <textarea placeholder="Message" name="message" rows="5"></textarea>
                                	<span class="text-danger error-text message_err"></span>
                            </div>
                        </div>
                        <button id="submit1" class="banner-btn theme-btn w-100" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
							<span class="btn-title">submit</span>
					        <span></span><span></span><span></span><span></span><span></span>
					    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
	

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/js/lightgallery-all.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
<script type="text/javascript" src="all-js.js"></script>
<script type="text/javascript">


	  $(document).ready(function() {
        $("#submit1").click(function(e){
            e.preventDefault();

            
            var _token = $("input[name='_token']").val();  
         /*   var email = $('#email').val();
            var name = $('#name').val();
            var mobileno = $('#mobile_no').val();
            var university = $('#university').val();*/

            var email= $('input[name="email"]').val();
                  var fname= $('input[name="fname"]').val();
                  var lname= $('input[name="lname"]').val();
                  var mobile_no= $('input[name="mobile_no"]').val();
                  var partner_name= $('input[name="partner_name"]').val();
               
                  var website= $('input[name="website"]').val();
                  var message= $('textarea[name="message"]').val();



                  /*var email= $(this).find('input[name="email"]').val();
                  var fname= $(this).find('input[name="fname"]').val();
                  var lname= $(this).find('input[name="lname"]').val();
                  var mobile_no= $(this).find('input[name="mobile_no"]').val();
                  var partner_name= $(this).find('input[name="partner_name"]').val();
               
                  var website= $(this).find('input[name="website"]').val();
                  var message= $(this).find('textarea[name="message"]').val();*/
  

            $.ajax({
                url: '/become_partner',
                type:'POST',
              data: {_token:_token,email:email,fname:fname,lname:lname,partner_name:partner_name,website:website,message:message,mobile_no:mobile_no,},
                success: function(data) {
                  console.log(data.error)
                    if($.isEmptyObject(data.error)){

                    $("#message").empty();
                     $("#message").append("<b>your message submit sucessfully!!!</b>");
                     $("#message").css("display","block");
                     $('#message').delay(3000).fadeOut(3000);    
                     

                    }else{

                        printErrorMsg(data.error);

        
                    }
                }
            });
        }); 

        function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
            console.log(key);
              $('.'+key+'_err').text(value);
            });
        }
    });



	$(document).ready(function(){
          $(".search").click(function(){
            $(".dropdown-content").toggleClass('new__1');
          });
        });

         $('.sub-menu ul').hide();
    $(".sub-menu .fa.fa-caret-down").click(function () {
      $(this).parent(".sub-menu").children("ul").slideToggle("100");
      $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
    });

    $(document).ready(function(){
            $('.menu a').click(function(){
                $('.menu a').removeClass("active_1");
                $(this).addClass("active_1");
            });
        });

         $(window).scroll(function(){
            if ($(this).scrollTop() > 150) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });


         $(window).scroll(function(){
            if ($(this).scrollTop() > 150) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });

    	function openNav() {
            document.getElementById("mySidepanel").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }

        $(document).ready(function(){
            $(".icon1").click(function(){
                $(".search-box1").slideDown("slow");
            });
            $(".search-box1 a").click(function(){
                $(".search-box1").slideUp("slow");
            });
        });

        $('.search-toggle').addClass('closed');
        $('.search-toggle .search-icon').click(function(e) {
            if ($('.search-toggle').hasClass('closed')) {
                $('.search-toggle').removeClass('closed').addClass('opened');
                $('.search-toggle, .search-container').addClass('opened');
                $('#search-terms').focus();
            } else {
                $('.search-toggle').removeClass('opened').addClass('closed');
                $('.search-toggle, .search-container').removeClass('opened');
            }
        });
	



	$("#mobile_code").intlTelInput({
	initialCountry: "in",
	separateDialCode: true,
	utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
});

$(document).ready(function(){
			$('ul.tabs li').click(function(){
				var tab_id = $(this).attr('data-tab');

				$('ul.tabs li').removeClass('current');
				$('.tab-content').removeClass('current');

				$(this).addClass('current');
				$("#"+tab_id).addClass('current');
			});
		});



		$(".city-tab .nav-tabs a").click(function() {
		  var position = $(this).parent().position();
		  var width = $(this).parent().width();
		    $(".city-tab .slider").css({"left":+ position.left,"width":width});
		});
		var actWidth = $(".city-tab .nav-tabs").find(".active").parent("li").width();
		var actPosition = $(".city-tab .nav-tabs .active").position();
		$(".city-tab .slider").css({"left":+ actPosition.left,"width": actWidth});




</script>
</body>
</html>



@endsection