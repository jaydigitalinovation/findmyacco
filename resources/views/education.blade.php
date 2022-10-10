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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<style type="text/css">
	
	div#message1 {
    color: white;
    background-color: #dfa920;
    text-align: center;
    
}
div#message {
    color: white;
    background-color: #143d59;
    text-align: center;
    
}
</style>
<body class="body">
	<div class="uni_menu" id="dynamic">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="uni_logo">
						<a href="{{url('/education')}}"><img src="image/logo3.png"></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
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
	<div class="mobile_header">
		<div class="container">
			<div class="row row1">
				<div class="col-lg-3 col-md-3 col-6">
					<div class="logo">
						<a href="{{url('/education')}}"><img src="image/logo3.png"></a>
					</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-6 con-menu">
				    <div class="item">
					    <div class="row">
						    <div class="col-lg-5 col-md-2 col-6 menux1">
							    <div class="mobile-menu">
                                    <div id="mySidepanel" class="sidepanel" style="width: 0px;">
                                        <div class="m_menu">
                                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-regular fa-circle-xmark"></i></a>
                                            <nav class="animated bounceInDown">
                                             <ul>
                                                <li class="sub-menu link1"><a href="#">Student Loan</a><div class="fa fa-caret-down right"></div>
                                                  <ul>
                                                    <li>
                                                    	<div class="mobile_sub">
																	    	<div class="row">
																	    		<div class="col-lg-12">
																	    			<div class="menu-name">
																	    				<div class="submenu">
																	    					  <a href="{{url('/education_studentloan')}}">Avanse Education Loan</a>
													                                <a href="{{url('/education_studentloan')}}">Incred Education Loan</a>
													                                <a href="{{url('/education_studentloan')}}">HDFC Education Loan</a>
													                                <a href="{{url('/education_studentloan')}}">Axis Bank Education Loan</a>
													                                <a href="{{url('/education_studentloan')}}">Auxilo Education Loan</a>
													                                <a href="{{url('/education_studentloan')}}">Leap Finance Education Loan</a>
													                                <a href="{{url('/education_studentloan')}}">ICICI Bank Study Abroad Loan</a>
													                                <a href="{{url('/education_studentloan')}}">Bank of Baroda Education Loan</a>
													                                <a href="{{url('/education_studentloan')}}">Prodigy Finance Education Loan</a>
													                                <a href="{{url('/education_studentloan')}}">Mpower Education Loan</a>
													                                <a href="{{url('/education_studentloan')}}">Credenc Education Loan</a>
													                                <a href="{{url('/education_studentloan')}}">IDFC Education Loan</a>
																	    				</div>
																	    			</div>
																	    		</div>
																	    		<div class="col-lg-12">
																	    			<div class="menu-name">
																	    				<div class="submenu">
																	    					<a href="#">London</a>
																							<a href="#">Glasgow</a>
																							<a href="#">Coventry</a>
																							<a href="#">Birmingham</a>
																							<a href="#">Manchester</a>
																							<a href="#">Leicester</a>
																							<a href="#">Nottingham</a>
																							<a href="#">Leeds</a>
																							<a href="#">Edinburgh</a>
																							<a href="#">Preston</a>
																	    				</div>
																	    			</div>
																	    		</div>
																	    		<div class="col-lg-12">
																	    			<div class="menu-name">
																	    				<h2><i class="fa-solid fa-city"></i> Universities</h2>
																	    				<div class="submenu">
																	    					<a href="#">University of Glasgow</a>
																							<a href="#">University of Manchester</a>
																							<a href="#">Nottingham Trent University</a>
																							<a href="#">University of Strathclyde</a>
																							<a href="#">Coventry University</a>
																							<a href="#">University of Essex</a>
																							<a href="#">Birmingham City University</a>
																							<a href="#">Brunel University London</a>
																							<a href="#">University of Chester Queens Park Campus</a>
																							<a href="#">York St John University London Campus</a>
																	    				</div>
																	    			</div>
																	    		</div>
																	    	</div>
																	    </div>
                                                    </li>
                                                  </ul>
                                                </li>
                                                <li class="sub-menu link1"><a href="#">contact us</a><div class="fa fa-caret-down right"></div>
                                                  <ul>
                                                    <li>
                                                    	<div class="mobile_sub">
																	    	<div class="row">
																	    		<div class="col-lg-12">
																	    			<div class="menu-name">
																	    				<div class="submenu">
																	    					  <a href="#">WhatsApp</a>
																	    					  	<a href="tel:000 800 040 3523"><i class="fa-solid fa-phone"></i> 000 800 040 3523</a>
						        	                                             <a href="tel:+44 808 501 5198"><i class="fa-solid fa-phone"></i> +44 808 501 5198</a>
						        	                                             <a href="melto:contact@uniacco.com"><i class="fa-regular fa-envelope"></i>contact@uniacco.com</a>
																	    				</div>
																	    			</div>
																	    		</div>
																	    	</div>
																	    </div>
                                                    </li>
                                                  </ul>
                                                </li>
                                              </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <button class="openbtn" onclick="openNav()"><i class="fa-solid fa-bars"></i></button> 
                                </div>
						    </div>     
					    </div> 
				    </div>
				</div>
			</div>
		</div>
        <div class="search-box1">
            <form>
                <input type="text" placeholder="search &amp; enter" name="search" value="">
            </form>
            <a class="srh-btn"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
	</div>
	@foreach($banner_image as $bi)
	<div class="uni_banner">
		<img src="/uploads/{{$bi->image}}">
		<div class="banner_details">
			<h3><span>{{$bi->title}}</span></h3>
			<p>{{$bi->description}}</p>
             <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">Request Callback</button>
		</div>
	</div>
	@endforeach
	<div class="uni_country">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					@foreach($education_country_des as $ecd)
					<div class="coun_detils">
						<h3>Countries</h3>
						<p>{{$ecd->description}}</p>
						<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">Apply Now</button>
					</div>
					@endforeach
				</div>
				<div class="col-lg-8 col-md-8">
					<div class="country_name">
						<ul>
							@foreach($education_country as $ec)
							<li>
								<img src="/uploads/{{$ec->flag}}">
								<p>{{$ec->name}}</p>
							</li>
							@endforeach
							
						</ul>
					</div>
				</div>
			</div>
		</div>
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
		@foreach($education_partner_des as $ep)
		<div class="container">
			<h3>Our Patner</h3>
			<p>{{$ep->description}}</p>
			<div class="row">
				<div class="col-lg-5 col-md-4">
					<div class="patner_image">
						<img src="/uploads/{{$ep->image}}">
					</div>
				</div>
				<div class="col-lg-7 col-md-8">
					<div class="patner_logo">
						@foreach($education_partner as $ee)
						<div class="ed_img">
			               <a href="{{url('/education_partner_detail')}}"><img src="/uploads/{{$ee->image}}"></a>      
			            </div>
			            @endforeach
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
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
                            <a href="service-detail.html">{{$ec->title}}</a>
                         </h4>
                         <p>{{$ec->description}}</p>
                      </div>
                      <div class="service-icon">
                         {!!$ec->icon!!}
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
                            <a href="service-detail.html">{{$ec->title}}</a>
                         </h4>
                         <p>{{$ec->description}}</p>
                      </div>
                      <div class="service-icon">
                         {!!$ec->icon!!}
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
   <!-- <div class="uni_patner bg-multi-partner">
		<div class="container">
			<div class="multi-partner-title">
				<h2>Our Partners</h2>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="multi-partner-img">
						<div class="inner-partner-img">
							<a href="educationpatner.html"><img src="image/patner1.png"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="multi-partner-img">
						<div class="inner-partner-img">
							<a href="educationpatner.html"><img src="image/patner2.png"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="multi-partner-img">
						<div class="inner-partner-img">
							<a href="educationpatner.html"><img src="image/patner3.png"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="multi-partner-img">
						<div class="inner-partner-img">
							<a href="educationpatner.html"><img src="image/patner4.png"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="multi-partner-img">
						<div class="inner-partner-img">
							<a href="educationpatner.html"><img src="image/patner5.png"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="multi-partner-img">
						<div class="inner-partner-img">
							<a href="educationpatner.html"><img src="image/patner6.png"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="multi-partner-img">
						<div class="inner-partner-img">
							<a href="educationpatner.html"><img src="image//patner7.png"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="multi-partner-img">
						<div class="inner-partner-img">
							<a href="educationpatner.html"><img src="image//patner8.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="contact_form">
		<div class="container">
			<div class="con_img">
				<img src="/uploads/{{$education_form_image}}">
				<div class="cin_form">
					<div class="row">
               <div class="col-lg-7 col-md-6 col-12 padding-1 padding-3">
                    <div class="get_img">
                       <img src="/uploads/{{$education_form_side_image}}">
                    </div>
               </div>
               <div class="col-lg-5 col-md-6 col-12 padding-2 padding-3">
                   <div class="get_form">
                    <div id="message"></div>
                       <h3>Need Help with Abroad Education?</h3>
                       <form class="form12" method="post">

                        <!-- <input type="hidden" name="_token" value="OXHKXgzRCeG4ZrDWqPJYiyAcEmFK4Sbbzza4LN4x">                           <div class="hs_firstname hs-firstname hs-fieldtype-text field hs-form-field"> -->
                                <label class="" placeholder="Enter your">
                                    <span></span>
                                </label>
                                <legend class="hs-field-desc" style="display:none;"></legend>
                                <div class="input">
                                    <input class="hs-input invalid error" type="text" name="name" required="" value="" placeholder="NAME*" autocomplete="given-name" inputmode="text" id="name2">
                                    <span class="text-danger error-text name_err"></span>
                                </div>
                                <div class="input" data-reactid=".hbspt-forms-0.1:$1.$email">
                                    <input class="hs-input invalid error" type="email" name="email" required="" placeholder="EMAIL*" value="" autocomplete="email" inputmode="email" id="email2">
                                    <span class="text-danger error-text email_err"></span>
                                </div>
                                <div class="hs-input hs-fieldtype-intl-phone">
                                    <select required="" name="country" class="hs-input invalid error" id="country2">
                                  <option value="India">India</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="British Virgin Islands">British Virgin Islands</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Caribbean Netherlands">Caribbean Netherlands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica"> Costa Rica</option>
                                        <option value="Côte d’Ivoire">Côte d’Ivoire</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland </option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq </option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Kuwait">Kuwait </option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    
                                    <input class="hs-input invalid error" type="tel" name="mobileno" required="" value="" placeholder="PHONE*" autocomplete="tel" inputmode="tel" id="phone_no2">
                                    <span class="text-danger error-text phone_no_err"></span>
                                </div>
                                <div class="input">
                                   <textarea class="hs-input invalid error" name="message" value="required=" "="" placeholder="MESSAGE*" id="message2"></textarea>
                                   <span class="text-danger error-text message_err"></span>
                               </div>
                               <div class="hs_submit hs-submit">
                                    <div class="hs-field-desc" style="display:none;"></div>
                                    <div class="actions">
                                        <button class="hs-button" id="submit" style="color: black"><a href="#">Appy Now</a></button>
                                    </div>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
					<!-- <div class="row">
						<div class="col-lg-7">
							<div class="contect_details">
								<form>
									<div class="fo_form">
										<img src="image/logo.png">
										<h3>NEED EXPERT HELP</h3>
									</div>
									<div class="row">
										<div class="col-md-6 uni_check">
				                      <input type="text" placeholder="First Name" name="name">
				                  </div>
				                  <div class="col-md-6 uni_check">
				                      <input type="text" placeholder="Last Name" name="name">
				                  </div>
				                  <div class="col-md-6 uni_check">
				                      <input type="number" placeholder="phone number" name="name">
				                  </div>
				                  <div class="col-md-6 uni_check">
	                            <input type="email" placeholder="Email address" name="name">
	                           </div>
	                           <div class="col-md-12 uni_check">
				                      <input type="text" name="" value="" placeholder="university">
				                  </div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="fo_image">
								<img src="image/student.png">
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="co_cities co_inner-city">
	    <div class="container">
	      <div class="main-title uni_ci">
	        <h3>Popular Universities</h3>
	      </div>
	      <div class="row">
	        <div class="col-lg-3 col-md-6">
	          <a href="#">
	                        <div class="cities-img">
	                            <img src="image/ucity-1.jpg">
	                            <div class="city-content">
	                              <h2>Cardiff University</h2>
	                            </div>
	                        </div>
	                    </a>
	        </div>
	        <div class="col-lg-3 col-md-6">
	          <a href="#">
	                        <div class="cities-img">
	                            <img src="image/ucity-2.jpg">
	                            <div class="city-content">
	                              <h2>chatham university</h2>
	                            </div> 
	                        </div>
	                    </a>
	        </div> 
	        <div class="col-lg-3 col-md-6">
	          <a href="#">
	                        <div class="cities-img">
	                            <img src="image/ucity-3.jpg">
	                            <div class="city-content">
	                              <h2>syracuse university</h2>
	                            </div>  
	                        </div>
	                    </a>
	        </div>
	        <div class="col-lg-3 col-md-6">
	          <a href="#">
	                        <div class="cities-img">
	                            <img src="image/ucity-4.jpg">
	                            <div class="city-content">
	                              <h2>liberty university</h2>
	                            </div>     
	                        </div>
	                    </a>
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

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Fill in your Information</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      	<div id="message1"></div>
        <form class="b-detail" method="POST"  id="sendmessage">
        	{{ csrf_field() }}
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 uni_check">
                            <input type="text" placeholder="Name" name="name" id="name">
                            <span class="text-danger error-text name_err"></span>
                        </div>
                        <div class="col-md-6 uni_check">
                            <input type="text" placeholder="Phone number" name="phone_no">
                            <span class="text-danger error-text phone_no_err"></span>
                        </div>
                        <div class="col-md-6 uni_check">
                            <input type="email" placeholder="Email address" name="email" id="email">
                            <span class="text-danger error-text email_err"></span>
                        </div>
                        <div class="col-md-6 uni_check">
                            <input type="text" placeholder="Loan Amount (INR)" name="amount">
                            <span class="text-danger error-text amount_err"></span>
                        </div>
                        <div class="col-md-6 uni_check">
                            <div class="t-dropdown-block">
                              <div class="t-dropdown-select">
                                <input type="text" name="country" class="t-dropdown-input" placeholder="Preferred Destination Country" />
                                <span class="text-danger error-text country_err"></span>
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
                        <div class="col-md-6 uni_check">
                            <input type="text" placeholder="Admission Status" name="status">
                            <span class="text-danger error-text status_err"></span>
                        </div>
                        <div class="col-md-6 uni_check">
                            <input type="text" placeholder="Permanent City" name="city">
                            <span class="text-danger error-text city_err"></span>
                        </div>
                        <div class="col-md-6 uni_check">
                            <div class='input-group date' id='startDate'>
                                <input type='text' class="input-group-addon input-group-text" class="fa fa-calendar" placeholder="Appointment Date" name="startDate" />
                                <span class="text-danger error-text startDate_err"></span>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="image_model">
                         <img src="image/RST32.png">
                     </div>
                 </div>
                 
            </div>
            <button id="submit1" class="btn_acele btn_black">submit</button>
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
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {
        $("#submit1").click(function(e){
            e.preventDefault();

            
            var _token = $("input[name='_token']").val();  
         /*   var email = $('#email').val();
            var name = $('#name').val();
            var mobileno = $('#mobile_no').val();
            var university = $('#university').val();*/

            var email= $('#email').val();
                  var name= $('#name').val();
                  var phone_no= $('input[name="phone_no"]').val();
                  var amount= $('input[name="amount"]').val();
                  var country= $('input[name="country"]').val();
               
                  var status= $('input[name="status"]').val();
                  var city= $('input[name="city"]').val();
                  var startDate= $('input[name="startDate"]').val();

                  /*var email= $(this).find('input[name="email"]').val();
                  var fname= $(this).find('input[name="fname"]').val();
                  var lname= $(this).find('input[name="lname"]').val();
                  var mobile_no= $(this).find('input[name="mobile_no"]').val();
                  var partner_name= $(this).find('input[name="partner_name"]').val();
               
                  var website= $(this).find('input[name="website"]').val();
                  var message= $(this).find('textarea[name="message"]').val();*/
  			

            $.ajax({
                url: '/education_request',
                type:'POST',
              data: {_token: @json(csrf_token()),email:email,name:name,phone_no:phone_no,amount:amount,country:country,status:status,city:city,startDate:startDate,},
                success: function(data) {
                  console.log(data.error)
                    if($.isEmptyObject(data.error)){

                    $("#message1").empty();
                     $("#message1").append("<b>your message submit sucessfully!!!</b>");
                     $("#message1").css("display","block");
                     $('#message1').delay(3000).fadeOut(3000);    
                     

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




		$(document).ready(function() {
        $("#submit").click(function(e){
            e.preventDefault();

            
            var _token = $("input[name='_token']").val();  
         /*   var email = $('#email').val();
            var name = $('#name').val();
            var mobileno = $('#mobile_no').val();
            var university = $('#university').val();*/

            var email= $('#email2').val();
                  var name= $('#name2').val();
                  var phone_no= $('#phone_no2').val();
                  var country= $('#country2').val();
               
                  var message= $('#message2').val();
                    			

            $.ajax({
                url: '/education_apply',
                type:'POST',
              data: {_token: @json(csrf_token()),email:email,name:name,phone_no:phone_no,country:country,message:message,},
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

		 $('.partner-slider').slick({
        	autoplay: true,
        	autoplaySpeed: 1500,
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            focusOnSelect: true,
            // prevArrow: '<div class="service-arrow slide-arrow prev-arrow"><i class="far fa-chevron-left"></i></div>',
            // nextArrow: '<div class="service-arrow slide-arrow next-arrow"><i class="far fa-chevron-right"></i></div>',
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow:3,
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

        $(document).ready(function(){

            $('ul.tabs li').click(function(){
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs li').removeClass('current');
                $('.tab-content').removeClass('current');

                $(this).addClass('current');
                $("#"+tab_id).addClass('current');
            })

        })  


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