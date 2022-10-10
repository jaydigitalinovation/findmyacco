@extends('layout.header')

@section('content')

<style type="text/css">
    .room-arrow5 {
        background: none;
    }
</style>

<div class="in_banner">
    <img src="/uploads/{{$bg_image}}">
    <div class="banner_detail">
        <h3>{{$title1}} <span>{{$title2}}</span>,<br>{{$title3}} <span>{{$title4}}</span></h3>
        <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
            <span class="btn-title">Apply Now</span>
            <span></span><span></span><span></span><span></span><span></span>
        </button>
    </div>
</div>

<div class="in_service">
	<div class="container">
		<div class="row">
            @foreach($scholarship_about as $sa)
			<div class="col-lg-4 col-md-6">
				<div class="serv_main">
					<div class="serv_sub">
						{!!$sa->icon!!}
					     <div class="paaa">
                            <h3>{{$sa->title}}</h3>
                            <p>{{$sa->description}}</p> 
                         </div>
					</div>
				</div>
			</div>
            @endforeach
			
		</div>
	</div>
</div>

<div class="co_ebook">
    <h4> Other services</h4>
    <div class="container">
        <div class="pro_silder">
            @foreach($scholarship_service as $ss)
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-card">
                    <a>
                        <img class="v-1" src="/uploads/{{$ss->image1}}" alt="Images">
                        <img class="v-2" src="/uploads/{{$ss->image2}}" alt="Images">
                    </a>
                    <h3>{{$ss->title}}</h3>
                    <p>{{$ss->description}}</p>
                     <button type="button" class="btn re_btn" data-bs-toggle="modal" data-bs-target="#myModal">Request Callback</button>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>

<div class="Journey">
    <div class="container">
        @foreach($scholarship_journey as $sj)
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="be_image">
                    <img src="/uploads/{{$sj->image}}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="jo_sub">
                    <h3>{{$sj->title1}} <br><span>{{$sj->title2}}</span></h3>
                    {!!$sj->description!!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="bg-video-wrap">
    <video src="https://designsupply-web.com/samplecontent/vender/codepen/20181014.mp4" loop muted autoplay></video>
    <div class="overlay"></div>
</div>

<div class="University">
    <div class="container">
        <div class="univ_head">
            <h3>Change Your Future</h3>
        </div>
        <div class="row">
            @foreach($scholarship_future as $sf)
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="em_img">
                        <img src="/uploads/{{$sf->image}}">
                    </div>
                    <div class="em_disc">
                        <p>{{$sf->title1}}</p>
                        <h3>{{$sf->title2}}</h3>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>

@foreach($scholarship_detail as $sd)
<div class="Scholarship" style="background-image: url('/uploads/{{$sd->image}}');">
    <div class="container">
        
        <div class="row">
           <div class="col-lg-7 col-md-5"></div> 
           <div class="col-lg-5 col-md-7">
               <div class="scho_details">
                    <h3>{{$sd->title1}} <br><span>{{$sd->title2}}</span></h3>
                    <p>{{$sd->description}}</p>
                    <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                    <span class="btn-title">Apply Now</span>
                    <span></span><span></span><span></span><span></span><span></span>
                </button>
                </div>
           </div>        
        </div>
        
    </div>
</div>
@endforeach


<div class="ho_service">
    <div class="container">
        <h4>Apply. Amaze. Avail.</h4>
        <div class="services">
            <div class="row">
                @foreach($scholarship_available as $sa)
                <div class="col-lg-4 col-md-6">
                    <div class="item--inner ">
                        <div class="item--overlay"></div>
                        <div class="item--holder">
                            <div class="item--icon"> 
                                <img src="/uploads/{{$sa->image}}">
                            </div>
                            <h3 class="item--title">{{$sa->title}}</h3>
                            <div class="item--description">{{$sa->description}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>


<div class="so_faq">
    <div class="container">
        <div class="so_head">
            <h3>Frequently Asked Questions</h3>
        </div>
        <div class="so_main">
            <div class="accordion" id="accordionExample">

                @foreach($scholarship_faq as $key=>$sf)
                  <div class="item">
                     <div class="item-header" id="heading{{$key+1}}">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse{{$key+1}}" aria-expanded="true" aria-controls="collapse{{$key+1}}">{{$key+1}}.{{$sf->question}}
                           <i class="fa fa-angle-down"></i>
                           </button>
                        </h2>
                     </div>
                     @if($key+1 ==1)
                     <div id="collapse{{$key+1}}" class="collapse show" aria-labelledby="heading{{$key+1}}"
                        data-parent="#accordionExample">
                        <div class="t-p">
                           {{$sf->answer}} 
                        </div>
                     </div>
                     @else
                     <div id="collapse{{$key+1}}" class="collapse" aria-labelledby="heading{{$key+1}}"
                        data-parent="#accordionExample">
                        <div class="t-p">
                           {{$sf->answer}} 
                        </div>
                     </div>
                     @endif
                  </div>
                  @endforeach
                  <!-- <div class="item">
                     <div class="item-header" id="headingTwo">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2.When will the winners be announced?
                                <i class="fa fa-angle-down"></i>
                           </button>
                        </h2>
                     </div>
                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="t-p">
                            Winners will be announced after Feb 2023
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="item-header" id="headingThree">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseThree" aria-expanded="false"
                              aria-controls="collapseThree">
                               3. On what parameters will applicants be judged?
                           <i class="fa fa-angle-down"></i>
                           </button>
                        </h2>
                     </div>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="t-p">
                             You will be judged on the execution, feasibility, creativity and presentation of your idea.  
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="item-header" id="headingFour">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFour" aria-expanded="false"
                              aria-controls="collapseFour">
                              4.What is the eligibility criteria?
                           <i class="fa fa-angle-down"></i>
                           </button>
                        </h2>
                     </div>
                     <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="t-p">
                           The scholarship is viable for students studying in the UK (abroad or domestic) 
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="item-header" id="headingFour">
                        <h2 class="mb-0">
                           <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFive" aria-expanded="false"
                              aria-controls="collapseFive">
                              5.What do we need from you?
                           <i class="fa fa-angle-down"></i>
                           </button>
                        </h2>
                     </div>
                     <div id="collapseFive" class="collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="t-p">
                           You'll need to submit your Acceptance Letter, Passport, Marksheets & Previous degree 
                        </div>
                     </div>
                  </div> -->
                </div>
        </div>
    </div>
</div>
    



<div class="modal" id="myModal">
  <div class="modal-dialog s_dialog">
    <div class="modal-content s_content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Fill in your Information</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="message"></div>
        <form class="b-detail" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-4">
                     <div class="image_model s_model">
                         <img src="image/col-bgimage-1.jpg">
                     </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 uni_check">
                            <input type="text" placeholder="First Name" name="fname" id="fname">
                            <span class="text-danger error-text fname_err"></span>
                        </div>
                        <div class="col-md-6 uni_check">
                            <input type="text" placeholder="Last Name" name="lname" id="lname">
                            <span class="text-danger error-text lname_err"></span>
                        </div>
                        <div class="col-md-6 uni_check">
                            <input type="number" placeholder="Phone number" name="phone_no" id="phone_no">
                            <span class="text-danger error-text phone_no_err"></span>
                        </div>
                        <div class="col-md-6 uni_check">
                            <input type="email" placeholder="Email address" name="email" id="email">
                            <span class="text-danger error-text email_err"></span>
                        </div>
                        <div class="col-md-6 uni_check">
                            <input type="text" placeholder="University" name="university" id="university">
                            <span class="text-danger error-text university_err"></span>
                        </div>
                        <div class="col-md-6 uni_check">
                            <div class="t-dropdown-block">
                              <div class="t-dropdown-select">
                                <input type="text" name="destination" id="destination" class="t-dropdown-input" placeholder="Preferred Destination Country" />
                                <span class="text-danger error-text destination_err"></span>
                                <span class="t-select-btn">
                              </span>
                              </div>
                              <ul class="t-dropdown-list">
                                <li class="t-dropdown-item">United kingdom</li>
                                <li class="t-dropdown-item">canada</li>
                                <li class="t-dropdown-item">United states</li>
                                <li class="t-dropdown-item">Australia</li>
                                <li class="t-dropdown-item">Ireland</li>
                                <li class="t-dropdown-item">Germany</li>
                                <li class="t-dropdown-item">canada</li>
                                <li class="t-dropdown-item">Ireland</li>
                                <li class="t-dropdown-item">India</li>
                                <li class="t-dropdown-item">Japan</li>
                                <li class="t-dropdown-item">Italy</li>
                                <li class="t-dropdown-item">Spain</li>
                              </ul>
                            </div>
                        </div>
                        <p>By submitting you agree to our <span>terms</span> and <span>privacy policy</span>.</p>
                        <button class="btn_acele btn_black btn_s" id="submit1">submit</button>
                    </div>
                </div>
            </div>
        </form>
      </div>

    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
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

                  var fname= $('#fname').val();
                  var lname= $('#lname').val();
                  var phone_no= $('#phone_no').val();
                  var email= $('#email').val();
                  var university= $('#university').val();
                  var destination= $('#destination').val();


                  /*var email= $(this).find('input[name="email"]').val();
                  var fname= $(this).find('input[name="fname"]').val();
                  var lname= $(this).find('input[name="lname"]').val();
                  var mobile_no= $(this).find('input[name="mobile_no"]').val();
                  var partner_name= $(this).find('input[name="partner_name"]').val();
               
                  var website= $(this).find('input[name="website"]').val();
                  var message= $(this).find('textarea[name="message"]').val();*/
            

            $.ajax({
                url: '/scholarship_request',
                type:'POST',
              data: {_token: @json(csrf_token()),email:email,fname:fname,lname:lname,phone_no:phone_no,university:university,destination:destination,},
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
        $(".item button").click(function(){

            $(".item .collapse").removeClass("show");

            $(".item .collapse").$(this).addClass("show");
        });
    });

   $(document).ready(function(){
    $('.t-dropdown-input').on('click', function() {
        $(this).parent().next().slideDown('fast');
    });

    $('.t-select-btn').on('click', function() {
       $('.t-dropdown-list').slideUp('fast');

        if(!$(this).prev().attr('disabled')){
        $(this).prev().trigger('click');
        }
    });

    $('.t-dropdown-input').width($('.t-dropdown-select').width() - $('.t-select-btn').width() - 13);

    $('.t-dropdown-list').width($('.t-dropdown-select').width());

    $('.t-dropdown-input').val('');

    $('li.t-dropdown-item').on('click', function() {
      var text = $(this).html();
      $(this).parent().prev().find('.t-dropdown-input').val(text);
      $('.t-dropdown-list').slideUp('fast');
    });

    $(document).on('click', function(event) {
      if ($(event.target).closest(".t-dropdown-input, .t-select-btn").length)
        return;
      $('.t-dropdown-list').slideUp('fast');
      event.stopPropagation();
    });

    });


	$('.pro_silder').slick({
    	autoplay: false,
    	autoplaySpeed: 1500,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows:true,
        focusOnSelect: true,
        prevArrow: '<div class="room-arrow5 slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></div>',
         nextArrow: '<div class="room-arrow5 slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></div>',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                adaptiveHeight: true,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
        ],
    });

	$(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('#dynamic').addClass('newClass');
        } else {
            $('#dynamic').removeClass('newClass');
        }
    });
</script>
</body>
</html>


@endsection