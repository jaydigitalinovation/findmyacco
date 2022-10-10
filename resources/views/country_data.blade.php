@extends('layout.header')

@section('content')


@foreach($banner_image as $bi)
	<div class="co_banner1">
		<img src="/uploads/{{$bi->image}}">
		<div class="container">
			<div class="inner-bcontent">
				<h2>{{$bi->title}} {{$country}}</h2>
				<ul>
					<li><a href="{{url('/')}}"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
					<li class="bd"><i class="fa-solid fa-angles-right"></i></li>
					<li class="bd">{{$bi->title}}</li>
				</ul>
			</div>
		</div>
	</div>
@endforeach
	<div class="co_cities co_inner-city">
		<div class="container">
			<div class="main-title">
				<h3>Popular Universities</h3>
			</div>
			<div class="row">
				@foreach($university as $u)
				<div class="col-lg-3 col-md-6">
					<a href="#">
                        <div class="cities-img">
                            <img src="/uploads/{{$u->image}}">
          	                <div class="city-content">
          	                 	<h2>{{$u->name}}</h2>
          	                </div>
                        </div>
                    </a>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
	<div class="co_cities co_inner-city">
		<div class="container">
			<div class="main-title">
				<h3>Popular city</h3>
			</div>
			<div class="row">

				@foreach($cities as $c)
				<div class="col-lg-3 col-md-6">
					<a href="{{url('/all_room')}}">
                        <div class="cities-img">
                            <img src="/uploads/{{$c->image}}">
          	                <div class="city-content">
          	                 	<h2>{{$c->name}}</h2>
          	                </div>
                        </div>
                    </a>
				</div>
			  @endforeach
			
			</div>
		</div>
	</div>
	<div class="co_room popular_room">
		<div class="container">
			<div class="main-title">
				<h3>Popular Properties</h3>
			</div>
			<div class="room-slider mb-0 row">
				<div class="col-lg-6 col-md-6">
					<div class="home-room">
						<div class="inner-hroom">
					    	<div class="hroom-img">
					    		<a href="#"><img src="/image/room-1.avif"></a>
					    	</div>
					    	<div class="hroom-details">
					    		<h2><a href="#">iQ Shoreditch</a></h2>
					    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
					    		<ul>
					    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
					    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
					    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
					    		</ul>
					    		<div class="view-btn">
					    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
					    		    <a href="#">view details</a>
					    		</div>
						    </div>
					    </div>
		    		</div>
	    	    </div>
	    	    <div class="col-lg-6 col-md-6">
					<div class="home-room">
						<div class="inner-hroom">
					    	<div class="hroom-img">
					    		<a href="#"><img src="/image/room-1.avif"></a>
					    	</div>
					    	<div class="hroom-details">
					    		<h2><a href="#">iQ Shoreditch</a></h2>
					    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
					    		<ul>
					    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
					    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
					    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
					    		</ul>
					    		<div class="view-btn">
					    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
					    		    <a href="#">view details</a>
					    		</div>
						    </div>
					    </div>
		    		</div>
	    	    </div>
	    	    <div class="col-lg-6 col-md-6">
					<div class="home-room">
						<div class="inner-hroom">
					    	<div class="hroom-img">
					    		<a href="#"><img src="/image/room-1.avif"></a>
					    	</div>
					    	<div class="hroom-details">
					    		<h2><a href="#">iQ Shoreditch</a></h2>
					    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
					    		<ul>
					    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
					    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
					    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
					    		</ul>
					    		<div class="view-btn">
					    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
					    		    <a href="#">view details</a>
					    		</div>
						    </div>
					    </div>
		    		</div>
	    	    </div>
	    	    <div class="col-lg-6 col-md-6">
					<div class="home-room">
						<div class="inner-hroom">
					    	<div class="hroom-img">
					    		<a href="#"><img src="/image/room-1.avif"></a>
					    	</div>
					    	<div class="hroom-details">
					    		<h2><a href="#">iQ Shoreditch</a></h2>
					    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
					    		<ul>
					    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
					    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
					    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
					    		</ul>
					    		<div class="view-btn">
					    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
					    		    <a href="#">view details</a>
					    		</div>
						    </div>
					    </div>
		    		</div>
	    	    </div>
	    	    <div class="col-lg-6 col-md-6">
					<div class="home-room">
						<div class="inner-hroom">
					    	<div class="hroom-img">
					    		<a href="#"><img src="/image/room-1.avif"></a>
					    	</div>
					    	<div class="hroom-details">
					    		<h2><a href="#">iQ Shoreditch</a></h2>
					    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
					    		<ul>
					    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
					    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
					    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
					    		</ul>
					    		<div class="view-btn">
					    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
					    		    <a href="#">view details</a>
					    		</div>
						    </div>
					    </div>
		    		</div>
	    	    </div>
	    	    <div class="col-lg-6 col-md-6">
					<div class="home-room">
						<div class="inner-hroom">
					    	<div class="hroom-img">
					    		<a href="#"><img src="/image/room-1.avif"></a>
					    	</div>
					    	<div class="hroom-details">
					    		<h2><a href="#">iQ Shoreditch</a></h2>
					    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
					    		<ul>
					    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
					    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
					    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
					    		</ul>
					    		<div class="view-btn">
					    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
					    		    <a href="#">view details</a>
					    		</div>
						    </div>
					    </div>
		    		</div>
	    	    </div>
			</div>
		</div>
	</div>
	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="co_details">
						@foreach($partner_acco_des as $pad)
	                    <div class="content">
	                        <h2> {{$pad->title}}</h2>
	                        <h6>{{$pad->description}}</h6>
	                        <ul>

	                        	@foreach($partner_acco as $pa)
	                            <li>
	                                <i class="fa-solid fa-square-check"></i>
	                                <p>{{$pa->advantage}}</p>
	                            </li>
	                            @endforeach
	                            
	                        </ul>
	                    </div>
                    @endforeach
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="co_form1 ma_1">

						<div id="message"></div>
						<form method="post"  id="sendmessage">

                       {{ csrf_field() }}
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<span class="your-name">
											<input type="text" name="name" value="" id="name" size="40" placeholder="Name">
											<span class="text-danger error-text name_err"></span>
										</span><br>
										<span class="alert-error"></span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<span class="email">
											<input type="email" name="email" id="email"  value="" size="40" placeholder="Email">
											    <span class="text-danger error-text email_err"></span>
										</span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="f-name">
											<input type="number" name="mobile_no" value="" placeholder="your number" id="mobile_no">
											<span class="text-danger error-text mobile_no_err"></span>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<span class="your-name">
											<input type="text" name="university" value=""  id="university" size="40" placeholder="University">
											   <span class="text-danger error-text university_err"></span>
										</span>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="co_btn">
										<p>By submitting you agree to our <span>terms</span> and <span>privacy policy</span>.</p>
										<button id ="submit1"><a>Get Expert Help!</a></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="co_teb">
		<div class="container">
			<div class="tab_list">
				<ul class="tabs">
					<li class="tab-link current" data-tab="tab-1">Nearby Cities</li>
					<li class="tab-link" data-tab="tab-2">Nearby Areas</li>
					<li class="tab-link" data-tab="tab-3">Nearby Universities</li>
					<li class="tab-link" data-tab="tab-4">Best Student Accommodation</li>
				</ul>
				<div id="tab-1" class="tab-content current">
					<div class="city">
						<div class="row">
							<div class="col-lg-3">
								<p><a href="#">Sydney</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Wollongong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Morisset–Cooranbong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Bowral–Mittagong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Nowra–Bomaderry</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Newcastle–Maitland</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Singleton</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Wollongong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Morisset–Cooranbong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Bowral–Mittagong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Bowral–Mittagong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Lithgow</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Sydney</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Wollongong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Morisset–Cooranbong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Bowral–Mittagong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Nowra–Bomaderry</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Newcastle–Maitland</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Singleton</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Wollongong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Morisset–Cooranbong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Bowral–Mittagong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Bowral–Mittagong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Lithgow</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Wollongong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Morisset–Cooranbong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Bowral–Mittagong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Nowra–Bomaderry</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Newcastle–Maitland</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Singleton</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Wollongong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Morisset–Cooranbong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Bowral–Mittagong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Bowral–Mittagong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Lithgow</a></p>
							</div>
						</div>
					</div>
				</div>
				<div id="tab-2" class="tab-content">
					 <div class="city">
						<div class="row">
							<div class="col-lg-3">
								<p><a href="#">Wollongong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Morisset–Cooranbong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Morisset–Cooranbong</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Bowral–Mittagong</a></p>
							</div>
						</div>
					</div>
				</div>
				<div id="tab-3" class="tab-content">
					<div class="city">
						<div class="row">
							<div class="col-lg-3">
								<p><a href="#">University of Newcastle</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">The College of Law</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Kent Institute Australia</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Central Queensland University - Sydney</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">University of New South Wales - CBD Campus</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">La Trobe University - Sydney</a></p>
							</div>
						</div>
					</div>
				</div>
				<div id="tab-4" class="tab-content">
					<div class="city">
						<div class="row">
							<div class="col-lg-3">
								<p><a href="#">Buchanan View</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Sheffield 3</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Collegelands</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Foundry Courtyard</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Belgrave View</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Queens Park House</a></p>
							</div>
							<div class="col-lg-3">
								<p><a href="#">Calcott Ten</a></p>
							</div>
						</div>
					</div>
				</div>
		    </div>
	    </div>
	</div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!--      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>

	<script type="text/javascript">


	  $(document).ready(function() {
        $("#submit1").click(function(e){
            e.preventDefault();

            
            var _token = $("input[name='_token']").val();  
         /*   var email = $('#email').val();
            var name = $('#name').val();
            var mobileno = $('#mobile_no').val();
            var university = $('#university').val();*/

              var email= $(this).find('input[name="email"]').val();
               var name= $(this).find('input[name="name"]').val();
                var mobile_no= $(this).find('input[name="mobile_no"]').val();
                 var university= $(this).find('input[name="university"]').val();
  


            $.ajax({
                url: '/getinquiry',
                type:'POST',
              data: {_token:_token,email:email,name:name,mobile_no:mobile_no,university:university},
                success: function(data) {
                  console.log(data.error)
                    if($.isEmptyObject(data.error)){

                     $("#message").append("<b>your message submit sucessfully!!!</b>");
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
		


	
	</script>
	


@endsection