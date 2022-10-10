<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Uniacco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="text/css" href="images/fevicon.png">
    <link rel="stylesheet" type="text/css" href="/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
</head>

<style type="text/css">
    
    div#message {
    color: white;
    background-color: #dfa920;
    text-align: center;
    
}
</style>
<body class="body">
    <div class="co_header">
        <div class="container">
            <div class="row row1">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="/image/logo.png"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <ul class="co_menu">
                        <li><a href="{{url('/about_us')}}">About Us</a></li>
                        <li><a href="{{url('/contact_us')}}">Contact us</a></li>
                        <li>
                            <div class="menu">
                                <button class="btn-1">Student Accommodation <i class="fa-solid fa-chevron-down"></i></button>
                                <div class="menu-dropdown">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="menu-name">
                                                <h2><i class="fa-solid fa-earth-africa"></i> Countries</h2>
                                                <div class="submenu">
                                                    <a href="#">UK</a>
                                                    <a href="#">Canada</a>
                                                    <a href="#">Ireland</a>
                                                    <a href="#">Australia</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="menu-name">
                                                <h2><i class="fa-solid fa-location-dot"></i> Cities</h2>
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
                                        <div class="col-lg-4 col-md-4">
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
                            </div>
                        </li>
                        <li><button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button></li>
                        <li>
                            @foreach($admin_detail as $ad)
                            <div class="call-box">
                                <div class="call-1">
                                    <a href="tel:{{$ad->phone_no}}"><img src="/image/whatsapp.png"></a>
                                </div>
                                <div class="call-1 call-2">
                                    <a href="#"><img src="/image/phone.png"></a>
                                    
                                    <div class="call-dropdown">
                                        <a href="tel:{{$ad->phone_no}}"><i class="fa-solid fa-phone"></i> {{$ad->phone_no}}</a>
                                        <a href="tel:{{$ad->phone_no}}"><i class="fa-solid fa-phone"></i> {{$ad->phone_no}}</a>
                                        <a href="melto:{{$ad->email}}"><i class="fa-regular fa-envelope"></i>{{$ad->email}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile_header">
        <div class="container">
            <div class="row row1">
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="logo">
                        <a href="index.html"><img src="/image/logo.png"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-6 con-menu">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-6 menux">
                                <ul class="contact">
                                    <li>
                                        <i class="icon1 fas fa-search"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-2 col-6 menux1">
                                <div class="mobile-menu">
                                    <div id="mySidepanel" class="sidepanel" style="width: 0px;">
                                        <div class="m_menu">
                                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-regular fa-circle-xmark"></i></a>
                                            <a class="link1" href="about us.html">About Us</a>
                                            <a class="link1" href="contact us.html">Contact Us</a>
                                            <nav class="animated bounceInDown">
                                              <ul>
                                                <li class="sub-menu link1"><a href="#">Student Accommodation </a><div class="fa fa-caret-down right"></div>
                                                  <ul>
                                                    <li>
                                                        <div class="mobile_sub">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="menu-name">
                                                                        <h2><i class="fa-solid fa-earth-africa"></i> Countries</h2>
                                                                        <div class="submenu">
                                                                            <a href="#">UK</a>
                                                                            <a href="#">Canada</a>
                                                                            <a href="#">Ireland</a>
                                                                            <a href="#">Australia</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="menu-name">
                                                                        <h2><i class="fa-solid fa-location-dot"></i> Cities</h2>
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
                                              </ul>
                                            </nav>
                                            <a class="link1" href="about us.html">whatsapp</a>
                                            <a class="link1" href="contact us.html">Call now</a>
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





    @yield('content')






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
    

    <div class="modal modal-address my-class" id="expert">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
              <!--   <div class="modal-header">
                    <h4 class="modal-title">need expert help!!</h4>
                  
                </div> -->
                <!-- Modal body -->
                <div class="modal-body">
                      <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="expert-form">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="exp-name">
                                                <input type="name" name="" value="" placeholder="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="exp-name">
                                                <input type="email" name="" value="" placeholder="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="exp-name">
                                                <input type="number" name="" value="" id="mobile_code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="exp-name">
                                                <input type="text" name="" value="" placeholder="university">
                                            </div>
                                        </div>

                                        <div class="exp-btn">
                                            <button type="submit">
                                                submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="expert-logo">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="/image/logo.png">
                                    </a>
                                </div>
                                <div class="expert-name">
                                    <h1>
                                        need expert help!!
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
    <script type="text/javascript" src="all-js.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
          $(".search-btn").click(function(){
            $(".search-popup").toggleClass('search-active');
          });
          $(".close-search").click(function(){
            $(".search-popup").removeClass('search-active');
          });
        });

    $(document).ready(function(){
          $(".btn-1").click(function(){
            $(".menu-dropdown").toggleClass('dropdown-scale');
          });
        });

    $(document).ready(function(){
          $(".call-1").click(function(){
            $(".call-dropdown").toggleClass('call-dropdown-scale');
          });
        });
</script>
</body>
</html>