@extends('layout.header')

@section('content')

<style type="text/css">
	p.error_mes {
	    color: red;
	}
</style>
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

<div class="bg-address">
	<div class="container">
		<div class="adrs-box">
			@foreach($admin_detail as $ad)
			<div class="row">
				<div class="col-lg-4 col-md-6 bg-blue">
					<div class="adrs-detail">
						<div class="adrs-icon">
							<i class="fa-solid fa-location-pin"></i>
						</div>
						<div class="adrs-info">
							<h4>
								location address:
							</h4>

							<p>
								{{$ad->address}}
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 bg-blue">
					<div class="adrs-detail">
						<div class="adrs-icon">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="adrs-info">
							<h4>
								phone number:
							</h4>

							<p>
								<span>mob:</span><a href="tel:{{$ad->phone_no}}">{{$ad->phone_no}}</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 bg-blue">
					<div class="adrs-detail">
						<div class="adrs-icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="adrs-info">
							<h4>
								E-mail address:
							</h4>

							<p>
								<a href="mailto:{{$ad->email}}">{{$ad->email}}</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<div class="bg-contact-us">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">

				@if ($message = Session::get('error'))
            <div  id="hideDiv" class="alert alert-success alert-block" >
                <!--     <input type="text" class="close" data-dismiss="alert"></input> -->
                <strong style="padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
             </div>
           @endif
         @yield('content')
			    <form action="{{url('/contact_admin')}}" method="post">
			    	@csrf
			        <div class="contact-form">
						<h2>
							Get In Touch & Contact To Reach Us !
						</h2>
					<div class="row">
						<div class="col-lg-12 col-md-12">
						 	<div class="cu-name form-floating">
						 		
						 		<input type="text" name="name" class="form-control" placeholder="name" value="">
						 		
						 		<label>
						 			name
						 		</label>
						 	</div>
						 	@if($errors->has('name')) <p class="error_mes">{{ $errors->first('name') }}</p> @endif
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="cu-name form-floating">
								
								<input type="email" name="email" class="form-control" placeholder="email" value="">
								
								<label>
									email
								</label>
							</div>
							@if($errors->has('email')) <p class="error_mes">{{ $errors->first('email') }}</p> @endif
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="cu-name">
								
								<input type="number" name="phone_no" value="" id="mobile_code">
								
								<!-- <label>number</label> -->
							</div>
							@if($errors->has('phone_no')) <p class="error_mes">{{ $errors->first('phone_no') }}</p> @endif
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="cu-name form-floating">
								<input type="text" name="subject" class="form-control" placeholder="subject" value="">
								
								<label>
									subject
								</label>
							</div>
							@if($errors->has('subject')) <p class="error_mes">{{ $errors->first('subject') }}</p> @endif
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="cu-name form-floating">
								
								<textarea name="message" class="form-control" placeholder="message">

									
								</textarea>
								
								<label>
									message
								</label>
							</div>
							@if($errors->has('message')) <p class="error_mes">{{ $errors->first('message') }}</p> @endif
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="cu-btn">
								<button type="submit">
									submit 
								</button>
							</div>
						</div>
					</div>
				</div>
			    </form>
				
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="cu-detail">
					<div class="cu-title">
					<!-- 	<h5>
							contact us
						</h5> -->
					</div>

					@foreach($contact_detail as $cd)
					<div class="cu-heading">
						<div class="cu-img">
							<img src="/uploads/{{$cd->image}}">
						</div>
						<!-- <h2>
							Get In Touch & Contact To Reach Us !
						</h2> -->
						<p>
							{{$cd->description}}
						</p>
					</div>
					@endforeach

					@foreach($social_links as $sl)
					<div class="cu-link">
						<div class="cu-inner-link">
							<a href="{{$sl->facebook_url}}">
								<i class="fa-brands fa-facebook"></i>
							</a>
							
						</div>
						<div class="cu-inner-link">
							<a href="{{$sl->twitter_url}}">
								<i class="fa-brands fa-twitter"></i>
							</a>
							
						</div>
						<div class="cu-inner-link">
							<a href="{{$sl->linkedin_url}}">
								<i class="fa-brands fa-linkedin"></i>
							</a>
						</div>
						<div class="cu-inner-link"> 
							<a href="{{$sl->instagram_url}}">
								<i class="fa-brands fa-instagram"></i>
							</a>
							
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</div>
</div>
<div class="cu-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29341.11467776782!2d72.6040576!3d23.18336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1662807441685!5m2!1sen!2sin" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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




<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.4/js/lightgallery-all.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
<script type="text/javascript" src="all-js.js"></script>
<script type="text/javascript">

$(function() {
                 setTimeout(function() { $("#hideDiv").fadeOut(3000); }, 3000)

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

</script>
</body>
</html>

@endsection