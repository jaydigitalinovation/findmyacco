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


<div class="bg-abt-story">
	<div class="container">

		@foreach($aboutus_about as $au)
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="story-img">
					<div class="inner-story-img">
						<img src="/uploads/{{$au->image1}}">
					</div>
					<div class="inner-story-img1">
						<img src="/uploads/{{$au->image2}}">
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="aboutpage-info">
					<h5>
						about us 
					</h5>
					<h2>
						{{$au->title}}
					</h2>
					{!!$au->description!!}
								
				</div>
			</div>
		</div>
		@endforeach

	</div>
</div>


<div class="bg-mission" style="background-image:url('/uploads/{{$mission_vision_banner_image}}');">
	<div class="row">
	    <div class="col-lg-6 col-md-5 col-4"></div>
	    <div class="col-lg-6 col-md-7 col-8 inner-why">

	    	@foreach($aboutus_mission_vision as $amv)
	    	<div class="why">
	    		<div class="icon">
	    		    {!!$amv->icon!!}
	    		</div>
	    		<div class="why-dec">
	    			<h4>{{$amv->title}}</h4>
	    			<p>{{$amv->description}}</p>
		        </div>
		    </div>
		    @endforeach
		    
	    </div>
    </div>	
</div>


<div class="co_counter1" style="background-image:url('/uploads/{{$counter_banner_image}}');">
	<div class="counter-overlay">
        <div class="container">
            <div class="row">
            	@foreach($aboutus_counter as $ac)
				<div class="col-lg-3 col-md-3 col-6">
					<div class="counts">
						
						<div class="counter-number">
						<span class="inner-count" data-count="{{$ac->count}}">0</span>
						<b>+</b>	
					</div>
						<div class="counts-title">
							<h4>
								{{$ac->count_name}}
							</h4>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
        </div>
    </div> 
</div>


<div class="bg-abt-team">
	<div class="container">
		<div class="our-team-title">
			<h2>
				our best team
			</h2>	
		</div>
		<div class="row">
			@foreach($aboutus_team as $at)
			<div class="col-lg-3 col-md-6">
				<div class="abt-team">
 					<div class="team-img">
 						<img src="/uploads/{{$at->image}}">
 					</div>
 					<div class="team-info">
 						<h4>{{$at->name}}</h4>
 						<span>
 							{{$at->profession}}
 						</span>

 						<div class="team-icon">
 							<a href="#">
 								<i class="fa-brands fa-facebook"></i>
 							</a>
 							<a href="#">
 								<i class="fa-brands fa-twitter"></i>
 							</a>
 							<a href="#">
 								<i class="fa-brands fa-linkedin"></i>
 							</a>	
 						</div>
 					</div>
 				</div>
			</div>
			@endforeach
			
		</div>
	</div>
</div>


<div class="bg-timeline-history">
	<div class="container">
		<div class="our-team-title">
			<h2>our history</h2>
		</div>
	<div class="timeline">
		
		@foreach($aboutus_timeline as $at)
	  <div class="timeline-content">
	    <div class="timeline-period">{{$at->year}}</div>
	    <div class="timieline-title">{{$at->title}}</div>
	   {{$at->description}}
	  </div>
	  @endforeach

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
	


$(".timeline").slick({
  slidesToShow:4,
  slidesToScroll:1,
  arrows:true,
  fade:false,
  draggable:true,
  prevArrow: '<div class="service-arrow slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></div>',
  nextArrow: '<div class="service-arrow slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></div>',
      responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow:2,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                  },
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow:1,
                    slidesToScroll: 1,
                  },
                },
            ],
        });



	var counted = 0;
		$(window).scroll(function() {
  		var oTop = $('.counter-number').offset().top - window.innerHeight;
  			if (counted == 0 && $(window).scrollTop() > oTop) {
    			$('.inner-count').each(function() {
      			var $this = $(this),
        		countTo = $this.attr('data-count');
     	 		$({
        			countNum: $this.text()
      			}).animate({
         			countNum: countTo
        		},
        		{

          		duration: 5000,
          		easing: 'swing',
          		step: function() {
          		  $this.text(Math.floor(this.countNum));
          		},
          		complete: function() {
          		  $this.text(this.countNum);
          		}

        });
    });
    counted = 1;
  }

});

</script>

@endsection


