<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Uniacco</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="text/css" href="images/fevicon.png">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
</head>
<style type="text/css">
	
	div#message {
    color: white;
    background-color: #dfa920;
    text-align: center; 
}
p.error_mes {
	    color: red;
	}
</style>

<body class="body">
	<div class="uni_menu" id="dynamic">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="uni_logo">
						<a href="{{url('/education')}}"><img src="image/logo3.png"></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="u_menu">
						<nav id="top-nav">
						  <ul class="">
						    <li class="dropdown"><a href="#">Student Loan  <span>&diams;</span> </a>
						      <ul class="dropdown-menu">
						        <li><a href="{{url('/education_studentloan')}}">Abroad Education Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">Avanse Education Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">Incred Education Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">HDFC Education Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">Axis Bank Education Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">Auxilo Education Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">Leap Finance Education Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">ICICI Bank Study Abroad Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">Bank of Baroda Education Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">Prodigy Finance Education Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">Mpower Education Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">Credenc Education Loan</a></li>
                                <li><a href="{{url('/education_studentloan')}}">IDFC Education Loan</a></li>
						      </ul>
						    </li>
						    <li class="dropdown"><a href="#">Contact Us <span>&diams;</span></a>
						      @foreach($admin_detail as $ad)
							      <ul class="dropdown-menu">
							        <li><a href="#">WhatsApp</a></li>
							        <li><a href="tel:{{$ad->phone_no}}"><i class="fa-solid fa-phone"></i> {{$ad->phone_no}}</a></li>
							        <li><a href="tel:{{$ad->phone_no}}"><i class="fa-solid fa-phone"></i> {{$ad->phone_no}}</a></li>
							        <li><a href="melto:{{$ad->email}}"><i class="fa-regular fa-envelope"></i>{{$ad->email}}</a></li>
							      </ul>
						      @endforeach
						    </li>
						  </ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

	@foreach($banner_image as $bi)
	<div class="lone_banner">
		<img src="/uploads/{{$bi->image}}">
		<div class="lone_form">
			<div class="container">
				<div class="lone_box">
					<h3>Start your journey now</h3>

					@if ($message = Session::get('error'))
            <div  id="hideDiv" class="alert alert-success alert-block" >
                <!--     <input type="text" class="close" data-dismiss="alert"></input> -->
                <strong style="padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
             </div>
           @endif
         @yield('content')
					<form action="{{url('/education_studentloan_admin')}}" method="post">
						@csrf
					<div class="row">
		                <div class="col-md-6 uni_check">
		                    <input type="text" placeholder="Name" name="name">
		                    @if($errors->has('name')) <p class="error_mes">{{ $errors->first('name') }}</p> @endif
		                </div>
		                <div class="col-md-6 uni_check">
		                    <input type="number" placeholder="Phone number" name="phone_no">
		                    @if($errors->has('phone_no')) <p class="error_mes">{{ $errors->first('phone_no') }}</p> @endif
		                </div>
		                <div class="col-md-6 uni_check">
		                    <input type="email" placeholder="Email address" name="email">
		                    @if($errors->has('email')) <p class="error_mes">{{ $errors->first('email') }}</p> @endif
		                </div>
		                <div class="col-md-6 uni_check">
		                    <input type="number" placeholder="Loan Amount (INR)" name="amount">
		                    @if($errors->has('amount')) <p class="error_mes">{{ $errors->first('amount') }}</p> @endif
		                </div>
		                <div class="col-md-12 uni_check">
		                    <input type="text" placeholder="Permanent City" name="city">
		                    @if($errors->has('city')) <p class="error_mes">{{ $errors->first('city') }}</p> @endif
		                </div>
		                <div class="col-md-12 uni_check">
		                	<div class="t-dropdown-block">
		                      <div class="t-dropdown-select">
		                        <input type="text"  class="t-dropdown-input" name="status" placeholder="Admission Status" />
		                        @if($errors->has('status')) <p class="error_mes">{{ $errors->first('status') }}</p> @endif
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
		                <div class="col-md-12 uni_check">
		                    <div class="t-dropdown-block">
		                      <div class="t-dropdown-select">
		                        <input type="text"  class="t-dropdown-input" name="country" placeholder="Preferred Destination Country" />
		                        @if($errors->has('country')) <p class="error_mes">{{ $errors->first('country') }}</p> @endif
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
		                <button class="btn_acele btn_black">submit</button>
		            </div>
		            </form>
				</div>
			</div>
		</div>
	</div>
	@endforeach

	<div class="home-service">
		@foreach($education_choose_des as $ecd)
       <div class="container">
          <div class="section-head">
          	
             <div class="row">
                <div class="col-lg-8 offset-lg-2">
                   <div class="title-divider"></div>
                   <h2 class="section-title"><span>Why choose UniCreds</span></h2>
                   <p>{{$ecd->description}}</p>
                </div>
             </div>
             
          </div>
          <div class="service-inner">
             <div class="row g-0 align-items-center">
                <div class="col-sm-12 col-md-5 col-lg-4 text-right">
                	@foreach($education_choose as $ec)
                	@if($ec->id %2 == 0)
                   <div class="service-icon-box">
                      <div class="service-icon-content">
                         <h4>
                            <a href="service-detail.html">Transparency</a>
                         </h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <div class="service-icon">
                         <i class="fas fa-layer-group"></i>
                      </div>
                   </div>
                   @endif
                   @endforeach
                   <!-- <div class="service-icon-box">
                      <div class="service-icon-content">
                         <h4>
                            <a href="service-detail.html">Technology</a>
                         </h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <div class="service-icon">
                         <i class="fa-solid fa-microchip"></i>
                      </div>
                   </div>
                   <div class="service-icon-box">
                      <div class="service-icon-content">
                         <h4>
                            <a href="service-detail.html">Support</a>
                         </h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <div class="service-icon">
                         <i class="fa-solid fa-comments"></i>
                      </div>
                   </div> -->
                </div>
                <div class="col-sm-6 offset-sm-3 offset-md-0 col-md-2 col-lg-4 text-center">
                   <figure class="service-image">
                      <img src="/uploads/{{$ecd->image}}" alt="">
                   </figure>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-4 text-left">
                	@foreach($education_choose as $ec)
                	@if($ec->id %2 != 0)
                   <div class="service-icon-box">
                      <div class="service-icon-content">
                         <h4>
                            <a href="service-detail.html">Tax benefits</a>
                         </h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <div class="service-icon">
                         <i class="fa-solid fa-chart-line"></i>
                      </div>
                   </div>
                   @endif
                   @endforeach
                   <!-- <div class="service-icon-box">
                      <div class="service-icon-content">
                         <h4>
                            <a href="service-detail.html">Flexible Collateral</a>
                         </h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <div class="service-icon">
                         <i class="fa-solid fa-hand-holding-dollar"></i>
                      </div>
                   </div>
                   <div class="service-icon-box">
                      <div class="service-icon-content">
                         <h4>
                            <a href="service-detail.html">Secure</a>
                         </h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <div class="service-icon">
                         <i class="fa-solid fa-lock"></i>
                      </div>
                   </div> -->
                </div>
             </div>
          </div>
       </div>
       @endforeach
    </div>

   <!-- <div class="uni_work">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="uni-img">
						<img src="image/uni_work.png">
						<a class="video-icon" href="#"><i class="fa-solid fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="u_work">
                        <h2>How it works</h2>
                        <div class="sub_work">
                            <div class="work-count">
                                <h6><i class="fa-regular fa-circle-check"></i></h6>
                            </div>
                            <div class="work-content">
                                <h3>Step 1</h3>
                                <p>Compare up to 4 properties across 80+ parameters.</p>
                            </div>
                        </div>
                        <div class="sub_work">
                            <div class="work-count">
                                <h6><i class="fa-regular fa-comment-dots"></i></h6>
                            </div>
                            <div class="work-content">
                                <h3>Step 2</h3>
                                <p>Consult our industry experts and pick what’s best for you.</p>
                            </div>
                        </div>
                        <div class="sub_work">
                            <div class="work-count">
                                <h6><i class="fa-solid fa-hand-holding-heart"></i></h6>
                            </div>
                            <div class="work-content">
                                <h3>Step 3</h3>
                                <p>Choose the property of your dreams and complete your booking.</p>
                            </div>
                        </div>               
                    </div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="cedu_patner">
		@foreach($education_partner_des as $epd)
		<div class="container">
			<h3>Our Patner</h3>
			<p>{{$epd->description}}</p>
			<div class="row">
				<div class="col-lg-5">
					<div class="patner_image">
						<img src="/uploads/{{$epd->image}}">
					</div>
				</div>
				<div class="col-lg-7">
					<div class="patner_logo">
						@foreach($education_partner as $ep)
						<div class="ed_img">
		               <a href="{{url('/education_partner_detail')}}"><img src="/uploads/{{$ep->image}}"></a>      
		            </div>
		            @endforeach
		            
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>

	<div class="scroll_tab">
        <div class="container">
            <div data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

                <nav id="dynamic1" class="navbar navbar-expand-sm affix-top">
                      <ul class="navbar-nav">
                      	@foreach($education_studentloan as $es)
                        <li class="nav-item">
                          <a class="nav-link" href="#section{{$es->id}}">{{$es->title1}}</a>
                        </li>
                        @endforeach
                        <!-- <li class="nav-item">
                          <a class="nav-link" href="#section2">Eligibility</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#section3">Documents</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#section4">How to apply</a>
                        </li> -->
                      </ul>
                </nav>
                @foreach($education_studentloan as $es)
                <div id="section{{$es->id}}"style="padding:50px 20px;">
                	<h6 style="font-size: 20px;font-weight: 500;padding-bottom: 5px;">{{$es->title2}}</h6>
                       {!!$es->description!!}
                </div>
                @endforeach
                
                <div id="section7">
                    <div class="so_faq">
                        <div class="so_head s_head">
                            <h3>Frequently Asked Questions</h3>
                        </div>
                        <div class="so_main">
                            <div class="accordion" id="accordionExample">
                            	@foreach($education_faq as $key=>$ef)
                                  <div class="item">
                                     <div class="item-header" id="heading{{$ef->id}}">
                                        <h2 class="mb-0">
                                           <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                              data-bs-target="#collapse{{$ef->id}}" aria-expanded="true" aria-controls="collapse{{$ef->id}}">{{$key+1}}. {{$ef->question}}
                                           <i class="fa fa-angle-down"></i>
                                           </button>
                                        </h2>
                                     </div>
                                     @if($key+1 ==1)
                                     <div id="collapse{{$ef->id}}" class="collapse show" aria-labelledby="heading{{$ef->id}}"
                                        data-bs-parent="#accordionExample">
                                        <div class="t-p t-pp">
                                           {{$ef->answer}}
                                        </div>
                                     </div>
                                     @else
                                     <div id="collapse{{$ef->id}}" class="collapse" aria-labelledby="heading{{$ef->id}}"
                                        data-bs-parent="#accordionExample">
                                        <div class="t-p t-pp">
                                           {{$ef->answer}}
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
                                                2.What does an education loan's holiday period entail?
                                                <i class="fa fa-angle-down"></i>
                                           </button>
                                        </h2>
                                     </div>
                                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="t-p t-pp">
                                            To put it as briefly as possible, an education loan's moratorium period is the interval between receiving the loan and paying your first EMI. At Avanse, we provide a 6-month vacation period after you complete your degree or 3 months after you get work, whichever comes first. During this time, you will not be required to pay any EMIs on your education loan. However, you should keep in mind that, while you are not required to pay your EMIs during the holidays, especially if you are a full-time master's student, it makes far more economic sense to do so.
                                        </div>
                                     </div>
                                  </div>
                                  <div class="item">
                                     <div class="item-header" id="headingThree">
                                        <h2 class="mb-0">
                                           <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                              data-bs-target="#collapseThree" aria-expanded="false"
                                              aria-controls="collapseThree">
                                               3. What documents are required for an education loan?
                                           <i class="fa fa-angle-down"></i>
                                           </button>
                                        </h2>
                                     </div>
                                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="t-p t-pp">
                                             This depends totally on your loan worthiness. Generally speaking, loan amounts easily go up to Rs. 50 lakh mark. However, lenders can provide even more than this. In some cases, they do so without any security as well.  
                                        </div>
                                     </div>
                                  </div>
                                  <div class="item">
                                     <div class="item-header" id="headingFour">
                                        <h2 class="mb-0">
                                           <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                              data-bs-target="#collapseFour" aria-expanded="false"
                                              aria-controls="collapseFour">
                                              4.I had applied to Avanse previously and my request for an educational loan was rejected. Can I apply again?
                                           <i class="fa fa-angle-down"></i>
                                           </button>
                                        </h2>
                                     </div>
                                     <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample">
                                        <div class="t-p t-pp">
                                           Yes, you are more than welcome to apply again! Importantly though, make sure that you have all the necessary documents and meet all the other required criteria before you re-apply so that you are not disappointed again. 
                                        </div>
                                     </div>
                                  </div>
                                  <div class="item">
                                     <div class="item-header" id="headingFive">
                                        <h2 class="mb-0">
                                           <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                              data-bs-target="#collapseFive" aria-expanded="false"
                                              aria-controls="collapseFive">
                                              5.What is the loan amount that I can get from Avanse?
                                           <i class="fa fa-angle-down"></i>
                                           </button>
                                        </h2>
                                     </div>
                                     <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                        data-bs-parent="#accordionExample">
                                        <div class="t-p t-pp">
                                           Well, this actually depends on your requirement of funds, and your/ your parents' capacity to pay back, we can offer you a minimum loan of Rs. 50,000/- to study in India and a minimum of Rs. 1,00,000/- to study abroad. 
                                        </div>
                                     </div>
                                  </div>
                                  <div class="item">
                                     <div class="item-header" id="headingsix">
                                        <h2 class="mb-0">
                                           <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                              data-bs-target="#collapsesix" aria-expanded="false"
                                              aria-controls="collapsesix">
                                              5.What expenses does the Avanse education loan cover?
                                           <i class="fa fa-angle-down"></i>
                                           </button>
                                        </h2>
                                     </div>
                                     <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                        data-bs-parent="#accordionExample">
                                        <div class="t-p t-pp">
                                           In a nutshell, everything! Allow us to elaborate. At Avanse, we offer the greatest education loan amount, which is 100% of your college costs! Whether it's tuition or living expenses, we've got you covered. The insurance covers up to 75% of total living expenditures, including books, computers, and project costs (but not more than 20 per cent of the total tuition fees payable for the complete course). Of course, we will pay for your tuition in full. Furthermore, we reimburse up to Rs 75,000 in travel expenses for students going abroad. Your insurance premium is also covered by us (if you take insurance from a provider that is preferred by Avanse). Your caution deposit and building fund (with supporting bills/receipts) are also covered by the loan. This, however, cannot exceed 10% of the overall tuition fees.
                                        </div>
                                     </div>
                                  </div> -->
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="co_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 padding">
                    <div class="footer footer-1">
                        <h2 class="footer-title">about us</h2>
                        <p>{{$footer_description}}</p>
                        <ul class="social-link">
                            @foreach($social_links as $sl)
                            <li><a href="{{$sl->facebook_url}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$sl->twitter_url}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$sl->linkedin_url}}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{$sl->instagram_url}}"><i class="fab fa-instagram"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 padding">
                    <div class="footer">
                        <h2 class="footer-title">Discover</h2>
                        <ul class="discover-link">
                            <li><a href="/host_home"><i class="fa-solid fa-angle-right"></i> Host A Home</a></li>
                            <li><a href="/faq"><i class="fa-solid fa-angle-right"></i> FAQs</a></li>
                            <li><a href="/education"><i class="fa-solid fa-angle-right"></i> Education loans</a></li>
                            <li><a href="/scholarship"><i class="fa-solid fa-angle-right"></i> Scholarships</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding">
                    <div class="footer">
                        <h2 class="footer-title">Company</h2>
                        <ul class="discover-link">
                        	<li><a href="/"><i class="fa-solid fa-angle-right"></i>Find My Acco</a></li>
                            <li><a href="/about_us"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
                            <li><a href="/contact_us"><i class="fa-solid fa-angle-right"></i> contact us</a></li>
                            <li><a href="/partner"><i class="fa-solid fa-angle-right"></i> partners</a></li>
                            <li><a href="/blog"><i class="fa-solid fa-angle-right"></i> blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padding">
                    <div class="footer">
                        <h2 class="footer-title">Contact Info</h2>
                        @foreach($admin_detail as $ad)
                        <ul class="con-home">
                            <li><i class="fa-solid fa-house-chimney"></i>
                                <div class="home-content">
                                    <h6>ADDRESS:</h6>
                                    <p>{{$ad->address}}</p>
                                </div>
                            </li>
                            <li><i class="fa-solid fa-envelope"></i>
                                <div class="home-content">
                                    <h6>EMAIL:</h6>
                                    <p><a href="mailto:{{$ad->email}}">{{$ad->email}}</a></p> 
                                </div>   
                            </li>
                            <li><i class="fa-solid fa-phone-flip"></i>
                                <div class="home-content">
                                    <h6>PHONE:</h6>
                                    <p><a href="tel: {{$ad->phone_no}}">{{$ad->phone_no}}</a></p>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <p>© 2022 Adventum Student Living Pvt. Ltd. All Rights Reserved | Made with  ♥</p>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <ul class="f-blink">
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy">
        <a class="up-btn show1" href="#"><i class="fas fa-angle-double-up"></i></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript">

		$(function() {
                 setTimeout(function() { $("#hideDiv").fadeOut(3000); }, 3000)

             });
	
	$(function(){
  
		  $('li.dropdown > a').on('click',function(event){
		    
		    event.preventDefault()
		    
		    $(this).parent().find('ul').first().toggle(300);
		    
		    $(this).parent().siblings().find('ul').hide(200);
		    $(this).parent().find('ul').mouseleave(function(){  
		      var thisUI = $(this);
		      $('html').click(function(){
		        thisUI.hide();
		        $('html').unbind('click');
		      });
		    });
		    
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


        $(document).ready(function(){
          
          $(function () {
            $('#startDate').datepicker({
           format: 'dd/mm/yyyy' 
          });
          });
             
        });

        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });
        

        $(".city-tab .nav-tabs a").click(function() {
          var position = $(this).parent().position();
          var width = $(this).parent().width();
            $(".city-tab .slider").css({"left":+ position.left,"width":width});
        });
        var actWidth = $(".city-tab .nav-tabs").find(".active").parent("li").width();
        var actPosition = $(".city-tab .nav-tabs .active").position();
        $(".city-tab .slider").css({"left":+ actPosition.left,"width": actWidth});

      
      $("#nav ul li a[href^='#']").on('click', function(e) {

         e.preventDefault();

         var hash = this.hash;

         $('html, body').animate({
             scrollTop: $(hash).offset().top
           }, 1000, function(){
             window.location.hash = hash;
           });

      });

		$(function(){
  
		  $('li.dropdown > a').on('click',function(event){
		    
		    event.preventDefault()
		    
		    $(this).parent().find('ul').first().toggle(300);
		    
		    $(this).parent().siblings().find('ul').hide(200);
		    $(this).parent().find('ul').mouseleave(function(){  
		      var thisUI = $(this);
		      $('html').click(function(){
		        thisUI.hide();
		        $('html').unbind('click');
		      });
		    });
		    
		  });
		  
		});
		
	
	</script>
</body>