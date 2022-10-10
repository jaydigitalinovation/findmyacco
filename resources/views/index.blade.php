@extends('layout.header')

@section('content')





<div class="co_banner">
    <div class="main-img">
        <div class="d_flex">
            @foreach($home_banner as $hb)
            <div class="col-lg-6 col-md-6 col-12">
                <div class="inner-content">
                    <div class="banner-content">
                        <h1>{{$hb->title}}
                        <p>{{$hb->description}}</p>
                        <form>
                            <div class="info-form">
                                <div class="info1">
                                    <div class="select">
                                        <div class="selectBtn">search city or university</div>
                                        <div class="selectDropdown">
                                            <label><i class="fa-solid fa-location-dot"></i> Popular Cities</label>
                                            <div class="option">London, United Kingdom</div>
                                            <div class="option">Edinburgh, United Kingdom</div>
                                            <div class="option">Glasgow, United Kingdom</div>
                                            <div class="option">Nottingham, United Kingdom</div>
                                            <div class="option">Birmingham, United Kingdom</div>
                                            <div class="option">Sydney, Australia</div>
                                            <div class="option">Melbourne, Australia</div>
                                            <div class="option">Dublin, Ireland</div>
                                            <label class="drop-1"><i class="fa-solid fa-city"></i> Popular Universities</label>
                                            <div class="option">Nottingham Trent University, Nottingham, United Kingdom</div>
                                            <div class="option">Manchester Metropolitan University, Manchester, United Kingdom</div>
                                            <div class="option">University of Nottingham, Nottingham, United Kingdom</div>
                                            <div class="option">Northumbria University London, London, United Kingdom</div>
                                            <div class="option">Birmingham City University, Birmingham, United Kingdom</div>
                                            <div class="option">University of Strathclyde, Glasgow, United Kingdom</div>
                                            <div class="option">Cardiff University, Cardiff, United Kingdom</div>
                                            <div class="option">Victoria University, Melbourne, Australia</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                    <span class="btn-title"><i class="fa-solid fa-magnifying-glass"></i> search</span>
                                    <span></span><span></span><span></span><span></span><span></span>
                                </button>
                            </div>
                        </form>
                        <div class="co_rate">
                            <div class="inner-rate">
                                <img src="image/trust-pilot.avif" class="trust-img">
                            </div>
                            <div class="inner-rate inner-rate1">
                                <img src="image/g_review.avif">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-12">
                <div class="banner-img-slider mb-0">
                    @foreach($home_banner_image as $hbi)
                    <div class="banner-img">
                        <img src="/uploads/{{$hbi->image}}">
                    </div>
                    @endforeach
                </div>
            </div>
           @endforeach 
        </div>
    </div>
</div>
<div class="co_counter">
    <div class="container">
        <div class="row row1">

            @foreach($home_counter as $hc)
            <div class="col-lg-3 col-md-6 col-6 padding">
                <div class="d-flex padding">
                    <div class="count-icon">
                        {!!$hc->icon!!}
                    </div>
                    <div class="count">
                        <div class="count-up">
                            <p><span class="counter-count">{{$hc->count}}</span> M+</p>
                            <h3>{{$hc->name}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<div class="co_cater">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="main-title d-block">
                    <h3>Discover unique places in popular areas</h3>
                    <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-bs-toggle="modal" data-bs-target="#expert" data-animation-out="animate-out bounceOutRight">
                        <span class="btn-title"><i class="fa-solid fa-bolt"></i> Get Expert Help!</span>
                        <span></span><span></span><span></span><span></span><span></span>
                    </button>
                </div>
            </div>
            @foreach($countries as $c)
            <div class="col-lg-3 col-md-6">
                <div class="grid-1">
                    <a href="{{url('/country_data')}}/{{$c->id}}">
                        <div class="cater-img">
                            <img src="/uploads/{{$c->image}}">
                            <h3>{{$c->name}}</h3>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-md-6">
                <div class="grid-1">
                    <a href="single-country.html">
                        <div class="cater-img">
                            <img src="image/cater-2.jpg">
                            <h3>Australia</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="grid-1">
                    <a href="single-country.html">
                        <div class="cater-img">
                            <img src="image/cater-4.jpg">
                            <h3>France</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="grid-1">
                    <a href="single-country.html">
                        <div class="cater-img">
                            <img src="image/cater-5.jpg">
                            <h3>Canada</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="grid-1">
                    <a href="single-country.html">
                        <div class="cater-img">
                            <img src="image/cater-6.jpg">
                            <h3>Germany</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="grid-1">
                    <a href="single-country.html">
                        <div class="cater-img">
                            <img src="image/cater-7.jpg">
                            <h3>italy</h3>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="co_cities">
    <div class="container">
        <div class="main-title">
            <h3>Go Hunting In Popular Cities</h3>
            <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight" data-bs-toggle="modal" data-bs-target="#expert">
                <span class="btn-title"><i class="fa-solid fa-bolt"></i> Get Expert Help!</span>
                <span></span><span></span><span></span><span></span><span></span>
            </button>
        </div>
        <div class="row">
            @foreach($cities as $cs)
            <div class="col-lg-3 col-md-6 padding">
                <a href="{{url('/all_room')}}">
                    <div class="cities-img">
                        <img src="/uploads/{{$cs->image}}">
                        <div class="overlay-box"></div>
                        <div class="upload">
                            <div class="city-content">
                                <h2>{{$cs->name}}</h2>
                                <h6><i class="fa-solid fa-house"></i> 218+ Properties</h6>
                            </div>
                        </div>       
                    </div>
                </a>
            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-md-6 padding">
                <a href="all-room.html">
                    <div class="cities-img">
                        <img src="image/city-2.jpg">
                        <div class="overlay-box"></div>
                        <div class="upload">
                            <div class="city-content">
                                <h2>glasgow</h2>
                                <h6><i class="fa-solid fa-house"></i> 28+ Properties</h6>
                            </div>
                        </div>       
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="all-room.html">
                    <div class="cities-img">
                        <img src="image/city-3.jpg">
                        <div class="overlay-box"></div>
                        <div class="upload">
                            <div class="city-content">
                                <h2>Edinburgh</h2>
                                <h6><i class="fa-solid fa-house"></i> 28+ Properties</h6>
                            </div>
                        </div>       
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="all-room.html">
                    <div class="cities-img">
                        <img src="image/city-4.jpg">
                        <div class="overlay-box"></div>
                        <div class="upload">
                            <div class="city-content">
                                <h2>Sydney</h2>
                                <h6><i class="fa-solid fa-house"></i> 36+ Properties</h6>
                            </div>
                        </div>       
                    </div>
                </a>
            </div> -->
        </div>
    </div>
</div>
<div class="co_room">
    <div class="container">
        <div class="main-title">
            <h3>A Sneak Peek Into Our Rooms</h3>
        </div>
        <!-- <div class="room-slider mb-0">
            <div class="hroom-slider">
                <div class="home-room">
                    <a href="#">
                        <div class="hroom-img">
                            <img src="image/room-1.avif">
                        </div>
                        <div class="hroom-details">
                            <h2>Studio</h2>
                            <p>A self-contained flat housing everything you need in one room.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="hroom-slider">
                <div class="home-room">
                    <div class="hroom-img">
                        <img src="image/room-2.avif">
                    </div>
                    <div class="hroom-details">
                        <h2>Non-Ensuite</h2>
                        <p>A self-contained flat housing everything you need in one room.</p>
                    </div>
                </div>
            </div>
            <div class="hroom-slider">
                <div class="home-room">
                    <div class="hroom-img">
                        <img src="image/room-3.avif">
                    </div>
                    <div class="hroom-details">
                        <h2>Ensuite</h2>
                        <p>A self-contained flat housing everything you need in one room.</p>
                    </div>
                </div>
            </div>
            <div class="hroom-slider">
                <div class="home-room">
                    <div class="hroom-img">
                        <img src="image/room-4.avif">
                    </div>
                    <div class="hroom-details">
                        <h2>Twin Studio</h2>
                        <p>A self-contained flat housing everything you need in one room.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="room-slider mb-0 row">
            <div class="col-lg-6 col-md-12 col-12 hroom-slider">
                <div class="home-room">
                    <div class="inner-hroom">
                        <div class="hroom-img">
                            <a href="#"><img src="image/room-1.avif"></a>
                        </div>
                        <div class="hroom-details">
                            <h2><a href="{{url('/room_detail')}}">iQ Shoreditch</a></h2>
                            <p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
                            <ul>
                                <li><i class="fa-solid fa-bed"></i> 3 bed</li>
                                <li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
                                <li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
                            </ul>
                            <div class="view-btn">
                                <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
                                <a href="{{url('/room_detail')}}">view details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 hroom-slider">
                <div class="home-room">
                    <div class="inner-hroom">
                        <div class="hroom-img">
                            <a href="#"><img src="image/room_image1.jpg"></a>
                        </div>
                        <div class="hroom-details">
                            <h2><a href="{{url('/room_detail')}}">iQ Shoreditch</a></h2>
                            <p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
                            <ul>
                                <li><i class="fa-solid fa-bed"></i> 3 bed</li>
                                <li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
                                <li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
                            </ul>
                            <div class="view-btn">
                                <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
                                <a href="{{url('/room_detail')}}">view details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 hroom-slider">
                <div class="home-room">
                    <div class="inner-hroom">
                        <div class="hroom-img">
                            <a href="#"><img src="image/room_image22.jpg"></a>
                        </div>
                        <div class="hroom-details">
                            <h2><a href="{{url('/room_detail')}}">iQ Shoreditch</a></h2>
                            <p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
                            <ul>
                                <li><i class="fa-solid fa-bed"></i> 3 bed</li>
                                <li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
                                <li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
                            </ul>
                            <div class="view-btn">
                                <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
                                <a href="{{url('/room_detail')}}">view details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 hroom-slider">
                <div class="home-room">
                    <div class="inner-hroom">
                        <div class="hroom-img">
                            <a href="#"><img src="image/room_image33.jpg"></a>
                        </div>
                        <div class="hroom-details">
                            <h2><a href="{{url('/room_detail')}}">iQ Shoreditch</a></h2>
                            <p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
                            <ul>
                                <li><i class="fa-solid fa-bed"></i> 3 bed</li>
                                <li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
                                <li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
                            </ul>
                            <div class="view-btn">
                                <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
                                <a href="{{url('/room_detail')}}">view details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 hroom-slider">
                <div class="home-room">
                    <div class="inner-hroom">
                        <div class="hroom-img">
                            <a href="#"><img src="image/room_image44.jpg"></a>
                        </div>
                        <div class="hroom-details">
                            <h2><a href="{{url('/room_detail')}}">iQ Shoreditch</a></h2>
                            <p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
                            <ul>
                                <li><i class="fa-solid fa-bed"></i> 3 bed</li>
                                <li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
                                <li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
                            </ul>
                            <div class="view-btn">
                                <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
                                <a href="{{url('/room_detail')}}">view details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 hroom-slider">
                <div class="home-room">
                    <div class="inner-hroom">
                        <div class="hroom-img">
                            <a href="#"><img src="image/room_image55.jpg"></a>
                        </div>
                        <div class="hroom-details">
                            <h2><a href="{{url('/room_detail')}}">iQ Shoreditch</a></h2>
                            <p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
                            <ul>
                                <li><i class="fa-solid fa-bed"></i> 3 bed</li>
                                <li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
                                <li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
                            </ul>
                            <div class="view-btn">
                                <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
                                <a href="{{url('/room_detail')}}">view details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-why-us">
    <div class="container">
        <div class="main-title justify-content-center">
            <h3>why choose us?</h3>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="why-heading">
                    <div class="thumb">
                      @foreach($home_choose_image as $hch)
                        <img src="/uploads/{{$hch->image1}}" alt="Thumb">
                        <img src="/uploads/{{$hch->image2}}" alt="Thumb">
                      @endforeach
                      
                   </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="why-detail">
                    <div class="row">
                        @foreach($home_choose as $hc)
                        <div class="col-lg-6 col-md-6">
                            <div class="inner-why">
                                {!!$hc->icon!!}
                                <h4>{{$hc->title}}</h4>
                                <p>{{$hc->description}}
                                </p>    
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="co_notch">
    <div class="container">
        <div class="main-title">
            <h3>Let's Take It Up A Notch</h3>
        </div>
        <div class="row row1">

            @foreach($home_notch as $hn)
            <div class="col-lg-4 col-md-6 d-notch">
                <div class="notch">
                    <div class="inner-notch">
                        <div class="notch-icon">
                            <img src="/uploads/{{$hn->image}}">
                        </div>
                        <div class="notch-prg">
                            <h4>{{$hn->title}}</h4>
                            <p>{{$hn->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<div class="co_work">
    <div class="container">
        <div class="main-title justify-content-center">
            <h3>How to Work</h3>
        </div>
        <div class="inner-work">
            <div class="row">

                @foreach($home_work as $hw)
                <div class="col-lg-4 col-md-6 col-12 main-work">
                    <div class="set-work">
                        <div class="work-img">
                            <img src="/uploads/{{$hw->image}}">
                            <div class="process-num"><span class="number">01</span></div>
                        </div>
                        <div class="work-content">
                            <h5>{{$hw->title}}</h5>
                            <p>{{$hw->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
<div class="co_testimonial">
    <div class="container">
        <div class="testimonial-items">
            <div class="row row1">
                @foreach($home_testimonial_description as $htd)
                <div class="col-lg-5">
                    <div class="testi-title">
                        <h3>Testimonial</h3>
                        <h4>{{$htd->title}}</h4>
                        <p>{{$htd->description}}</p>
                        <img src="image/Group 101.png">
                        <form>

                              <input type="hidden" name="play" value="{{$htd->link}}" id="play">
                            <a id="play-video" class="video-play-button" ><span></span></a>
                            
                        </form>
                          
                        
                        <div id="video-overlay" class="video-overlay">
                             <a class="video-overlay-close">&times;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testi-slider mb-0">

                        @foreach($home_testimonial as $ht)
                        <div class="inner-testi">
                            <div class="testi-content">
                                <i class="quote fa-solid fa-quote-left"></i>
                                <p>{{$ht->description}}</p>
                                <div class="testi-img">
                                    <img src="/uploads/{{$ht->image}}">
                                    <div class="testi-name">
                                        <h4>{{$ht->name}}</h4>
                                        <h6>{{$ht->profession}}</h6>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
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
                                

                        <div id="message"></div>
                                <form method="post"  id="sendmessage">

                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="exp-name">
                                                <input type="name" name="name" value="" placeholder="name" id="name">
                                                <span class="text-danger error-text name_err"></span>
                                        <br>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="exp-name">
                                                <input type="email" name="email" value="" placeholder="email" id="email">
                                                <span class="text-danger error-text email_err"></span>
                                        <br>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="exp-name">
                                                <input type="number" name="mobile_no" value="" id="mobile_code">
                                                <span class="text-danger error-text mobile_code_err"></span>
                                        <br>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="exp-name">
                                                <input type="text" name="university" value="" placeholder="university" id="university">
                                                <span class="text-danger error-text university_err"></span>
                                        <br>
                                                
                                            </div>
                                        </div>

                                        <div class="exp-btn">
                                            <button type="submit" id="submit1">
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
                                    <a href="{{url('/')}}">
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



      $(document).ready(function() {
        $("#submit1").click(function(e){
            e.preventDefault();

            
            var _token = $("input[name='_token']").val();  
            var email = $('#email').val();
            var name = $('#name').val();
            var mobile_no = $('#mobile_code').val();
            var university = $('#university').val();

            /*alert(email);
            alert(name);
            alert(mobile_no);
            alert(university);*/
            

              /*var email= $(this).find('input[name="email"]').val();
               var name= $(this).find('input[name="name"]').val();
                var mobile_no= $(this).find('input[name="mobile_no"]').val();
                 var university= $(this).find('input[name="university"]').val();*/
  


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
   $('#play-video').click(function(){

       var video =$('#play').val();

        var video_url='<iframe width="560" height="315" src="'+video+'" frameborder="0" allowfullscreen></iframe>';  

       
          $('#video-overlay').addClass('open');
          $("#video-overlay").append(video_url);

         

   



  });
});






  /*  $('#play-video').on('click', function(e){

          e.preventDefault();

        
          var video =$('#play').val();

          alert(video);

          var video_url='<iframe width="560" height="315" src="'.+video+.'"frameborder="0" allowfullscreen></iframe>'
         
         alert();
          $('#video-overlay').addClass('open');
          $("#video-overlay").append(video_url);
        });*/



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


      /*  $('#play-video').on('click', function(e){
          e.preventDefault();
          $('#video-overlay').addClass('open');
          $("#video-overlay").append('<iframe width="560" height="315" src="https://www.youtube.com/embed/ngElkyQ6Rhs" frameborder="0" allowfullscreen></iframe>');
        });
*/
        $('.video-overlay, .video-overlay-close').on('click', function(e){
          e.preventDefault();
          close_video();
        });

        $(document).keyup(function(e){
          if(e.keyCode === 27) { close_video(); }
        });

        function close_video() {
          $('.video-overlay.open').removeClass('open').find('iframe').remove();
        };

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

        $('.counter-count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
                }, {          
                //chnage count up speed here
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

        $('.room-slider').slick({
            autoplay: false,
            autoplaySpeed: 1500,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            arrows:true,
            vertical: true,
            focusOnSelect: true,
            prevArrow: '<div class="room-arrow slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></div>',
             nextArrow: '<div class="room-arrow slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></div>',
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

        $('.banner-img-slider').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            fade: true,
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                  },
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                  },
                },
            ],
        });

        $('.testi-slider').slick({
            autoplay: false,
            autoplaySpeed: 1500,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows:true,
            focusOnSelect: true,
            prevArrow: '<div class="testi-arrow slide-arrow prev-arrow"><i class="fa-solid fa-arrow-left-long"></i></div>',
             nextArrow: '<div class="testi-arrow slide-arrow next-arrow"><i class="fa-solid fa-arrow-right-long"></i></div>',
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                  },
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                  },
                },
            ],
        });

        $(function() {
            $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });


        $("#mobile_code").intlTelInput({
    initialCountry: "in",
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
});

</script>


    




@endsection

