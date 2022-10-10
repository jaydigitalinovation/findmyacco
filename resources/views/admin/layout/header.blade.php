<html>
<head>
  <title>admin</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="/css/admin_home.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css">
</head>
<style type="text/css">
   .logo h1 {
   font-size: 35px;
   font-weight: 800;
   margin: 0;
   text-transform: uppercase;
}
.logo h1 a{
   color:#df453e;
}
.logo h1 a span{
   color:#1b3e41;
}
.logo h1 a:hover{
   text-decoration: none;
}

.text{

   font-weight: 400;
}
.text th{

   text-align: left;

   border: none !important;
}
.error_mes{

   color: red;
}
</style>
<body>  
   <header class="page-header">
      <nav class="main-menu">
         <!-- <div class="logo">
               <h1><a href="{{url('admin/home')}}">rent<span>al</span></a></h1>
         </div> -->
         <a href="{{url('/admin/home')}}"class="logo"><img src="/image/logo.png" alt="img"></a>
         <ul class="menu main_drop">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span> <i class="fa-solid fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('/admin/home')}}">Dashboard 1</a></li>
                  <li><a href="{{url('/admin/inquiry_data')}}">Inquiry</a></li>
                  <li><a href="{{url('/admin/contact_admin_data')}}">Contact_admin</a></li>
                  <li><a href="{{url('/admin/host_home_admin_data')}}">Host_home_admin</a></li>
                  <li><a href="{{url('/admin/education_studentloan_admin_data')}}">Education_studentloan_admin</a></li>
                  <li><a href="{{url('/admin/partner_application_data')}}">Partner_application</a></li>
                  <li><a href="{{url('/admin/education_request_data')}}">Education_request</a></li>
                  <li><a href="{{url('/admin/education_apply_data')}}">Education_apply</a></li>
               </ul>
            </li>
             <li><a href="#"><i class="fas fa-home"></i><span>Home</span> <i class="fa-solid fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('admin/home_banner')}}">Home page banner</a></li>
                  <li><a href="{{url('admin/allroom_banner')}}">All Room page banner</a></li>
                  <li><a href="{{url('admin/country_banner')}}">Country page banner</a></li>
                   <li><a href="{{url('admin/home_counter')}}">Home counter</a></li>
                   <li><a href="{{url('admin/home_work')}}">Home work</a></li>
                   <li><a href="{{url('admin/home_choose')}}">Home Choose US</a></li>
                   <li><a href="{{url('admin/home_testimonial')}}">Home Testimonial</a></li>
                   <li><a href="{{url('admin/home_notch')}}">Home Notch</a></li>
                 <li><a href="{{url('admin/countries')}}">Countries</a></li>
                 <li><a href="{{url('admin/cities')}}">Cities</a></li>
                 <li><a href="{{url('admin/universities')}}">Universities</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fas fa-file-alt"></i> <span>About</span> <i class="fa-solid fa-chevron-down"></i></a>
               <ul class="drp-menu">
                 
                  <li><a href="{{url('admin/aboutus_banner')}}">About us Page Banner</a></li>
                  <li><a href="{{url('admin/aboutus_about')}}">About us</a></li>
                  <li><a href="{{url('admin/aboutus_mission_vision')}}">Mission-Vision </a></li>
                  <li><a href="{{url('admin/aboutus_counter')}}">Counter </a></li>
                  <li><a href="{{url('admin/aboutus_team')}}">Our Team </a></li>
                  <li><a href="{{url('admin/aboutus_timeline')}}">Our Timeline </a></li>
               </ul>
            </li>

             <li><a href="#"><i class="fa-solid fa-graduation-cap"></i> <span>Education</span> <i class="fa-solid fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('admin/education_banner')}}">Education page Banner</a></li>
                  <li><a href="{{url('admin/education_country')}}">Education country</a></li>
                  <li><a href="{{url('admin/education_work')}}">Education_work</a></li>
                  <li><a href="{{url('admin/education_choose')}}">Education_choose</a></li>
                  <li><a href="{{url('admin/education_form')}}">Education_form</a></li>
                  <li><a href="{{url('admin/education_partner')}}">Education_partner</a></li>
                  <li><a href="{{url('admin/education_partner_detail')}}">Education_partner_detail</a></li>
                  <li><a href="{{url('admin/education_faq')}}">Education_FAQ</a></li>
                  <li><a href="{{url('admin/education_studentloan')}}">Education_studentloan</a></li>
               </ul>
            </li>

            <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> <span>Scholarship</span> <i class="fa-solid fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('admin/scholarship_banner')}}">Scholarship Banner Page</a></li>
                  <li><a href="{{url('admin/scholarship_about')}}">Scholarship About</a></li>
                  <li><a href="{{url('admin/scholarship_journey')}}">Scholarship Journey</a></li>
                  <li><a href="{{url('admin/scholarship_service')}}">Scholarship Service</a></li>
                  <li><a href="{{url('admin/scholarship_future')}}">Scholarship Future</a></li>
                  <li><a href="{{url('admin/scholarship_detail')}}">Scholarship Detail</a></li>
                  <li><a href="{{url('admin/scholarship_available')}}">Scholarship Available</a></li>
                  <li><a href="{{url('admin/scholarship_faq')}}">Scholarship FAQ</a></li>
               </ul>
            </li>

            <li><a href="#"><i class="fa-regular fa-handshake"></i><span>Partner</span> <i class="fa-solid fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('admin/partner_banner')}}">Patner Page Banner</a></li>
                  <li><a href="{{url('admin/partner_info')}}">Patner Info</a></li>
                  <li><a href="{{url('admin/partner_form')}}">Patner Form</a></li>
                  <li><a href="{{url('admin/partner_detail')}}">Patner Detail</a></li>
                  <li><a href="{{url('admin/partner_acco')}}">Patner Accommodation</a></li>
                  <li><a href="{{url('admin/partner_faq')}}">Patner FAQ</a></li>
               </ul>
            </li>

            <li><a href="#"><i class="fa-solid fa-clipboard-question"></i><span>FAQ</span> <i class="fa-solid fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('admin/faq_banner')}}">FAQ banner</a></li>
                  <li><a href="{{url('admin/faq_section')}}">FAQ Section</a></li>
               </ul>
            </li>

             <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> <span>Blog</span> <i class="fa-solid fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('admin/blog_banner')}}">Blog Banner</a></li>
                  <li><a href="{{url('admin/blog_detail')}}">Blog Detail</a></li>
               </ul>
            </li>

            <li><a href="#"><i class="fas fa-phone-alt"></i> <span>Contact</span> <i class="fa-solid fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('admin/contact_banner')}}">Contact Banner</a></li>
                  <li><a href="{{url('admin/host_home_banner')}}">Host Home Banner</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fas fa-table"></i><span>Header-Footer</span> <i class="fa-solid fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('admin/header_offer')}}">Header offer</a></li>
                  <li><a href="{{url('/admin/header_contact')}}">Header Contact</a></li>
                  <li><a href="{{url('/admin/admin_detail')}}">Admin Detail</a></li>
                  <li><a href="{{url('/admin/footer_description')}}">Footer Deacription</a></li>
                  <li><a href="{{url('/admin/social_links')}}">Social Links</a></li>
               </ul>
            </li>
            <!-- <li><a href="login-registration.html"><i class="fas fa-fas fa-user"></i> <span>Login-Registration</span></a></li> -->
         </ul>
      </nav>
   </header>
   <section class="mobile_manu">
        <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-6">
                 <div class="mobile_logo">
                   <a href="{{url('/admin/home')}}"><img src="/image/logo.png"></a>
                 </div>
               </div>
               <div class="col-lg-6 col-md-6 col-6">
                  <div class="admin-profile">
                  <div class="login">
                    <div class="dropdown1">
                      <button id="myBtn1">
                        <i class="dropbtn1 fas fa-user"></i>
                     </button>
                        <div id="myDropdown1" class="dropdown-content1">
                          <a href="{{url('admin/changepassword')}}">Change Password</a>
                          <a href="{{url('admin/logout')}}"><i class="fas fa-lock"></i>Logout</a>
                        </div>
                    </div>
                  </div>
                  <div class="mobile-menu">
                     <div id="mySidepanel" class="sidepanel">
                        <div class="m_menu main-menu">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
                           <ul class="menu main_drop">
                              <li><a href="#"><span>Dashboard</span> <i class="fa-solid fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('/admin/home')}}">Dashboard 1</a></li>
                                    <li><a href="{{url('/admin/inquiry_data')}}">Inquiry</a></li>
                                    <li><a href="{{url('/admin/contact_admin_data')}}">Contact_admin</a></li>
                                    <li><a href="{{url('/admin/host_home_admin_data')}}">Host_home_admin</a></li>
                                    <li><a href="{{url('/admin/education_studentloan_admin_data')}}">Education_studentloan_admin</a></li>
                                    <li><a href="{{url('/admin/partner_application_data')}}">Partner_application</a></li>
                                    <li><a href="{{url('/admin/education_request_data')}}">Education_request</a></li>
                                    <li><a href="{{url('/admin/education_apply_data')}}">Education_apply</a></li>
                                 </ul>
                              </li>
                              <li><a href="#"><span>Home</span> <i class="fa-solid fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('admin/home_banner')}}">Home page banner</a></li>
                                    <li><a href="{{url('admin/allroom_banner')}}">All Room page banner</a></li>
                                    <li><a href="{{url('admin/country_banner')}}">Country page banner</a></li>
                                    <li><a href="{{url('admin/home_counter')}}">Home counter</a></li>
                                    <li><a href="{{url('admin/home_work')}}">Home work</a></li>
                                    <li><a href="{{url('admin/home_choose')}}">Home Choose US</a></li>
                                    <li><a href="{{url('admin/home_testimonial')}}">Home Testimonial</a></li>
                                    <li><a href="{{url('admin/home_notch')}}">Home Notch</a></li>
                                   <li><a href="{{url('admin/countries')}}">Countries</a></li>
                                   <li><a href="{{url('admin/cities')}}">Cities</a></li>
                                   <li><a href="{{url('admin/universities')}}">Universities</a></li>
                                 </ul>
                              </li>
                              <li><a href="#"><span>About</span> <i class="fa-solid fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('admin/aboutus_banner')}}">About us Page Banner</a></li>
                                    <li><a href="{{url('admin/aboutus_about')}}">About us</a></li>
                                    <li><a href="{{url('admin/aboutus_mission_vision')}}">Mission-Vision </a></li>
                                    <li><a href="{{url('admin/aboutus_counter')}}">Counter </a></li>
                                    <li><a href="{{url('admin/aboutus_team')}}">Our Team </a></li>
                                    <li><a href="{{url('admin/aboutus_timeline')}}">Our Timeline </a></li>
                                 </ul>
                              </li>
                              <li><a href="#"><span>Education</span> <i class="fa-solid fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('admin/education_banner')}}">Education page Banner</a></li>
                                    <li><a href="{{url('admin/education_country')}}">Education country</a></li>
                                    <li><a href="{{url('admin/education_work')}}">Education_work</a></li>
                                    <li><a href="{{url('admin/education_choose')}}">Education_choose</a></li>
                                    <li><a href="{{url('admin/education_form')}}">Education_form</a></li>
                                    <li><a href="{{url('admin/education_partner')}}">Education_partner</a></li>
                                    <li><a href="{{url('admin/education_partner_detail')}}">Education_partner_detail</a></li>
                                    <li><a href="{{url('admin/education_faq')}}">Education_FAQ</a></li>
                                    <li><a href="{{url('admin/education_studentloan')}}">Education_studentloan</a></li>
                                 </ul>
                              </li>
                              <li><a href="#"><span>Scholarship</span> <i class="fa-solid fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('admin/scholarship_banner')}}">Scholarship Banner Page</a></li>
                                    <li><a href="{{url('admin/scholarship_about')}}">Scholarship About</a></li>
                                    <li><a href="{{url('admin/scholarship_journey')}}">Scholarship Journey</a></li>
                                    <li><a href="{{url('admin/scholarship_service')}}">Scholarship Service</a></li>
                                    <li><a href="{{url('admin/scholarship_future')}}">Scholarship Future</a></li>
                                    <li><a href="{{url('admin/scholarship_detail')}}">Scholarship Detail</a></li>
                                    <li><a href="{{url('admin/scholarship_available')}}">Scholarship Available</a></li>
                                    <li><a href="{{url('admin/scholarship_faq')}}">Scholarship FAQ</a></li>
                                 </ul>
                              </li>
                              <li><a href="#"><span>Partner</span> <i class="fa-solid fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('admin/partner_banner')}}">Patner Page Banner</a></li>
                                    <li><a href="{{url('admin/partner_info')}}">Patner Info</a></li>
                                    <li><a href="{{url('admin/partner_form')}}">Patner Form</a></li>
                                    <li><a href="{{url('admin/partner_detail')}}">Patner Detail</a></li>
                                    <li><a href="{{url('admin/partner_acco')}}">Patner Accommodation</a></li>
                                    <li><a href="{{url('admin/partner_faq')}}">Patner FAQ</a></li>
                                 </ul>
                              </li>
                              <li><a href="#"><span>FAQ</span> <i class="fa-solid fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('admin/faq_banner')}}">FAQ banner</a></li>
                                    <li><a href="{{url('admin/faq_section')}}">FAQ Section</a></li>
                                 </ul>
                              </li>

                              <li><a href="#"><span>Blog</span> <i class="fa-solid fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('admin/blog_banner')}}">Blog Banner</a></li>
                                    <li><a href="{{url('admin/blog_detail')}}">Blog Detail</a></li>
                                 </ul>
                              </li>


                              <li><a href="#"><span>Contact</span> <i class="fa-solid fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('admin/contact_banner')}}">Contact Banner</a></li>
                                    <li><a href="{{url('admin/host_home_banner')}}">Host Home Banner</a></li>
                                 </ul>
                              </li>

                              <li><a href="#"><span>Header-Footer</span> <i class="fa-solid fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('admin/header_offer')}}">Header offer</a></li>
                                    <li><a href="{{url('/admin/header_contact')}}">Header Contact</a></li>
                                    <li><a href="{{url('/admin/admin_detail')}}">Admin Detail</a></li>
                                    <li><a href="{{url('/admin/footer_description')}}">Footer Deacription</a></li>
                                    <li><a href="{{url('/admin/social_links')}}">Social Links</a></li>
                                 </ul>
                              </li>

                           </ul>                
                        </div>
                     </div>
                     <button class="openbtn" onclick="openNav()"><i class="fas fa-bars"></i></button> 
                  </div>
                      </div>
                   </div>
              </div>
          </div>
        </div>
   </section>
   <section class="page-content">
      <div class="search-and-user">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
                  <ul class="admin-menu">
                    <li>
                       <div class="switch">
                         <label for="mode">
                         </label>
                       </div>
                       <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
                         <i class="fas fa-bars"></i>
                         <span>Collapse</span>
                       </button>
                    </li>
                 </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
                 <div class="admin-profile">
                     <div class="login">
                       <div class="dropdown1">
                         <button id="myBtn1">
                           <span class="greeting">John Doe</span>
                           <i class="dropbtn1 fas fa-user"></i>
                        </button>
                           <div id="myDropdown1" class="dropdown-content1">
                             <a href="{{url('admin/changepassword')}}">Change Password</a>
                             <a href="{{url('admin/logout')}}"><i class="fas fa-lock"></i>Logout</a>
                           </div>
                       </div>
                     </div>
                 </div>
            </div>
         </div>
      </div>
      <div>

             @if ($message = Session::get('error'))
            <div  id="hideDiv" class="alert alert-success alert-block" >
                <!--     <input type="text" class="close" data-dismiss="alert"></input> -->
                <strong style="padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
             </div>
           @endif
         @yield('content')
      </div>



   </section>



   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script type="text/javascript">
      $('.main-menu>ul>li>a, .main-menu ul.drp-menu>li>a').on('click', function(e) {
      var element = $(this).parent('li');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('li').removeClass('open');
        element.find('ul').slideUp(500,"swing");
      }
      else {
        element.addClass('open');
        element.children('ul').slideDown(800,"swing");
        element.siblings('li').children('ul').slideUp(800,"swing");
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul').slideUp(1000,"swing");
      }
      });

        $('.dropdown1').click(function(){
        $('.dropdown-content1').toggle();
        });

      function openNav() {
            document.getElementById("mySidepanel").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }

    </script>
   <script type="text/javascript">
      const html = document.documentElement;
      const body = document.body;
      const menuLinks = document.querySelectorAll(".admin-menu a");
      const collapseBtn = document.querySelector(".admin-menu .collapse-btn");
      const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
      const switchInput = document.querySelector(".switch input");
      const switchLabel = document.querySelector(".switch label");
      const switchLabelText = switchLabel.querySelector("span:last-child");
      const collapsedClass = "collapsed";
      const lightModeClass = "light-mode";

      collapseBtn.addEventListener("click", function () {
        body.classList.toggle(collapsedClass);
        this.getAttribute("aria-expanded") == "true"
          ? this.setAttribute("aria-expanded", "false")
          : this.setAttribute("aria-expanded", "true");
        this.getAttribute("aria-label") == "collapse menu"
          ? this.setAttribute("aria-label", "expand menu")
          : this.setAttribute("aria-label", "collapse menu");
      });

      toggleMobileMenu.addEventListener("click", function () {
        body.classList.toggle("mob-menu-opened");
        this.getAttribute("aria-expanded") == "true"
          ? this.setAttribute("aria-expanded", "false")
          : this.setAttribute("aria-expanded", "true");
        this.getAttribute("aria-label") == "open menu"
          ? this.setAttribute("aria-label", "close menu")
          : this.setAttribute("aria-label", "open menu");
      });

      for (const link of menuLinks) {
        link.addEventListener("mouseenter", function () {
          if (
            body.classList.contains(collapsedClass) &&
            window.matchMedia("(min-width: 768px)").matches
          ) {
            const tooltip = this.querySelector("span").textContent;
            this.setAttribute("title", tooltip);
          } else {
            this.removeAttribute("title");
          }
        });
      }

      if (localStorage.getItem("dark-mode") === "false") {
        html.classList.add(lightModeClass);
        switchInput.checked = false;
        switchLabelText.textContent = "Light";
      }

      switchInput.addEventListener("input", function () {
        html.classList.toggle(lightModeClass);
        if (html.classList.contains(lightModeClass)) {
          switchLabelText.textContent = "Light";
          localStorage.setItem("dark-mode", "false");
        } else {
          switchLabelText.textContent = "Dark";
          localStorage.setItem("dark-mode", "true");
        }
      });
    </script>
    
    
</body>
</html>

 