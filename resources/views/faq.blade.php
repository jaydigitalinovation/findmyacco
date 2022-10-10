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

<div class="bg-faq">
	<div class="container">
		<div class="faq-heading">
			<h1>
				most asked question
			</h1>
		</div>
		<div class="faq-tabs">
			<div class="inner-faq-tabs">
			<ul class="nav nav-pills" role="tablist">
				@foreach($faq_list as $key=>$fl)
					@if($key+1==1)
					<li class="nav-item">
					  <a class="nav-link active" data-bs-toggle="pill" href="#home{{$fl->id}}">{{$fl->list}}</a>
					</li>
					@else
					<li class="nav-item">
					  <a class="nav-link" data-bs-toggle="pill" href="#home{{$fl->id}}">{{$fl->list}}</a>
					</li>
					@endif

				@endforeach
					<!-- <li class="nav-item">
					  <a class="nav-link" data-bs-toggle="pill" href="#menu1">offers</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-bs-toggle="pill" href="#menu2">room types</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-bs-toggle="pill" href="#menu3">payments</a>
					</li> -->
				</ul>
			</div>
			

				 <div class="tab-content">
				 @foreach($faq_list as $key=>$fl)
				 @if($key+1==1)
				<div id="home{{$fl->id}}" class="container tab-pane active"><br>
  						<div class="room-faq">
							<div id="accordion">
								@foreach($faq_section as $key=>$fs)
				 				@if($fl->id == $fs->list_id)
								<div class="card">
  									<div class="card-header">
    									<a class="btn" data-bs-toggle="collapse" href="#collapse{{$fs->id}}">
      										{{$fs->question}}
      										<i class="fa-solid fa-plus"></i>
    									</a>
  									</div>

  									@if($key+1 ==1)
  									<div id="collapse{{$fs->id}}" class="collapse show" data-bs-parent="#accordion">
    									<div class="card-body">
      										{{$fs->answer}}
   				 						</div>
  									</div>
  									@else
  									<div id="collapse{{$fs->id}}" class="collapse" data-bs-parent="#accordion">
    									<div class="card-body">
      										{{$fs->answer}}
   				 						</div>
  									</div>
  									@endif
								</div>
								@endif
								@endforeach
								
							</div>
						</div>	
				</div>
				@else

				<div id="home{{$fl->id}}" class="container tab-pane fade"><br>
				  <div class="room-faq">
							<div id="accordion">
							 @foreach($faq_section as $key=>$fs)
				 				@if($fl->id == $fs->list_id)
								<div class="card">
  									<div class="card-header">
    									<a class="btn" data-bs-toggle="collapse" href="#collapse{{$fs->id}}">
      										{{$key+1}} . {{$fs->question}}
      										<i class="fa-solid fa-plus"></i>
    									</a>
  									</div>
  									@if($key+1 == 1)
  									<div id="collapse{{$fs->id}}" class="collapse show" data-bs-parent="#accordion">
    									<div class="card-body">
      										{{$fs->answer}}
   				 						</div>
  									</div>
  									@else
  									<div id="collapse{{$fs->id}}" class="collapse" data-bs-parent="#accordion">
    									<div class="card-body">
      										{{$fs->answer}}
   				 						</div>
  									</div>
  									@endif
								</div>
								@endif
								@endforeach
								
							</div>
						</div>
				</div>

				@endif
				@endforeach
				
					</div>
			</div>
		</div>
</div>
	



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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.js"></script>
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

	const select = document.querySelectorAll('.selectBtn');
		const option = document.querySelectorAll('.option');
		let index = 1;

		select.forEach(a => {
			a.addEventListener('click', b => {
				const next = b.target.nextElementSibling;
				next.classList.toggle('toggle');
				next.style.zIndex = index++;
			})
		})
		option.forEach(a => {
			a.addEventListener('click', b => {
				b.target.parentElement.classList.remove('toggle');
				
				const parent = b.target.closest('.select').children[0];
				parent.setAttribute('data-type', b.target.getAttribute('data-type'));
				parent.innerText = b.target.innerText;
			})
		});

	$(document).ready(function(){
  $(".card-header a").click(function(){
    $(this).toggleClass("rotate");
  });
});
</script>

</body>
</html>

@endsection