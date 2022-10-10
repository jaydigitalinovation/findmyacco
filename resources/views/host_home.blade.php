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


<div class="contact-form  host-form">

	@if ($message = Session::get('error'))
            <div  id="hideDiv" class="alert alert-success alert-block" >
                <!--     <input type="text" class="close" data-dismiss="alert"></input> -->
                <strong style="padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
             </div>
           @endif
         @yield('content')
	<form action="{{url('/host_home_admin')}}" method="post">
		@csrf
	<div class="row">
		<div class="col-lg-12">
		 	<div class="cu-name form-floating">
		 		<input type="text" class="form-control" placeholder="name" name="name" value="">
		 		<label>
		 			name
		 		</label>
		 	</div>
		 	@if($errors->has('name')) <p class="error_mes">{{ $errors->first('name') }}</p> @endif
		</div>
		<div class="col-lg-12">
			<div class="cu-name form-floating">
				<input type="email" class="form-control" placeholder="email" name="email" value="">
				<label>
					email
				</label>
			</div>
			@if($errors->has('email')) <p class="error_mes">{{ $errors->first('email') }}</p> @endif
		</div>
		<div class="col-lg-12">
			<div class="cu-name">
				
				<input type="number" class="" name="phone_no" value="" id="mobile_code">
				<!-- <label>number</label> -->
			</div>
			@if($errors->has('phone_no')) <p class="error_mes">{{ $errors->first('phone_no') }}</p> @endif
		</div>
		<div class="col-lg-12">
			<div class="cu-name form-floating">
				<input type="text" class="form-control" placeholder="city" name="city" value="">
				<label>
					city
				</label>
			</div>
			@if($errors->has('city')) <p class="error_mes">{{ $errors->first('city') }}</p> @endif
		</div>
		<div class="col-lg-12">
			<div class="cu-name form-floating">
				<input type="text" class="form-control" placeholder="university" name="university" value="">
				<label>
					nearby university
				</label>
			</div>
			@if($errors->has('university')) <p class="error_mes">{{ $errors->first('university') }}</p> @endif
		</div>
		<div class="col-lg-12">
			<div class="cu-name form-floating">
				<input type="text" class="form-control" placeholder="lease" name="lease" value="">
				<label>
					available lease duration in weeks
				</label>
			</div>
			@if($errors->has('lease')) <p class="error_mes">{{ $errors->first('lease') }}</p> @endif
		</div>
		<div class="col-lg-12">
			<div class="cu-name form-floating">
				<input type="text" class="form-control" placeholder="price" name="price" value="">
				<label>
					price range per week
				</label>
			</div>
			@if($errors->has('price')) <p class="error_mes">{{ $errors->first('price') }}</p> @endif
		</div>
		<div class="col-lg-12">
			<div class="cu-btn">
				<button type="submit">
					submit 
				</button>
			</div>
		</div>
	</div>
	</form>
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