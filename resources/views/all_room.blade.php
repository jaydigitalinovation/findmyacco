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
                    <li><i class="fa-solid fa-angles-right"></i></li>
                    <li><a href="#">Australia</a></li>
                    <li class="bd"><i class="fa-solid fa-angles-right"></i></li>
                    <li class="bd">{{$bi->title}}</li>
                </ul>
            </div>
        </div>
    </div>
@endforeach
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="set-part-2">
                        <div class="blog-search">
                            <form>
                                <input type="text" placeholder="Search..." name="search" value="">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="blog-search">
                            <div class="function-1 main-menu">
                                <h2>Price / week (£)</h2>
                            </div>
                            <div id="collapseTwo" class="collapse s
                            how" aria-labelledby="headingTwo" style="">
                                <div class="card-body">
                                    <div id="slider"></div>
                                        <div class="range">
                                            <span>$<input type="text" name="min"></span>
                                            <span class="right1">$<input type="text" name="max"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-search">
                            <div class="function-1 main-menu">
                                <h2>CATEGORIES</h2>
                            </div>
                            <div class="blog-move">
                                <div class='input-group date' id='startDate'>
                                    <span class="input-group-addon input-group-text"><span class="fa fa-calendar"></span></span>
                                    <input type='text' class="form-control" name="startDate" />
                                </div>  
                            </div>
                        </div>
                        <div class="blog-search">
                            <div class="function-1 main-menu">
                                <h2>Room Type</h2>
                            </div>
                            <div class="card-body">
                                   <label class="control control--checkbox">Ensuite
                                        <input type="checkbox" checked="checked">
                                        <div class="control__indicator"></div>
                                    </label>
                                    <label class="control control--checkbox">Non-Ensuite
                                        <input type="checkbox">
                                        <div class="control__indicator"></div>
                                    </label>
                                    <label class="control control--checkbox">Twin-Ensuite
                                        <input type="checkbox">
                                        <div class="control__indicator"></div>
                                    </label>
                                    <label class="control control--checkbox">Studio
                                        <input type="checkbox">
                                        <div class="control__indicator"></div>
                                    </label>
                                    <div class="read-more-content">
                                        <label class="control control--checkbox">Twin-Studio
                                            <input type="checkbox">
                                            <div class="control__indicator"></div>
                                        </label>
                                        <label class="control control--checkbox">One Bed Apartment
                                            <input type="checkbox">
                                            <div class="control__indicator"></div>
                                        </label>
                                        <label class="control control--checkbox">Two Bed Apartment
                                            <input type="checkbox">
                                            <div class="control__indicator"></div>
                                        </label>
                                         <label class="control control--checkbox">Three Bed Apartment
                                            <input type="checkbox">
                                            <div class="control__indicator"></div>
                                        </label>
                                        <label class="control control--checkbox">Twodio
                                            <input type="checkbox">
                                            <div class="control__indicator"></div>
                                        </label>
                                        <label class="control control--checkbox">Threedio
                                            <input type="checkbox">
                                            <div class="control__indicator"></div>
                                        </label>
                                    </div>
                                    <a href="javascript:void(0);" class="read-more" title="Read More">Read More</a>
                            </div>
                        </div>
                        <div class="blog-search">
                            <div class="function-1 main-menu">
                                <h2>Sharing</h2>
                            </div>
                            <div class="card-body">
                                <div class="control-group">
                                    <label class="control control--checkbox">Private Bathroom
                                        <input type="checkbox" checked="checked">
                                        <div class="control__indicator"></div>
                                    </label>
                                    <label class="control control--checkbox">Private Bathroom
                                        <input type="checkbox">
                                        <div class="control__indicator"></div>
                                    </label>
                                    <label class="control control--checkbox">Private Bathroom
                                        <input type="checkbox">
                                        <div class="control__indicator"></div>
                                    </label>
                                    <label class="control control--checkbox">Private Bathroom
                                        <input type="checkbox">
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="blog-search">
                            <div class="function-1 main-menu">
                                <h2>Lease Type</h2>
                            </div>
                            <div class="r_btn"> 
                                <form action="#">
                                  <p>
                                    <input type="radio" id="test1" name="radio-group" checked>
                                    <label for="test1">Summary/Short Stay 8-12 weeks</label>
                                  </p>
                                  <p>
                                    <input type="radio" id="test2" name="radio-group">
                                    <label for="test2">Semester Stay 12-24 weeks</label>
                                  </p>
                                  <p>
                                    <input type="radio" id="test3" name="radio-group">
                                    <label for="test3">Stay 24-36 weeks</label>
                                  </p>
                                  <p>
                                    <input type="radio" id="test4" name="radio-group">
                                    <label for="test4">Full Year Stay 36-44 Weeks</label>
                                  </p>
                                  <p>
                                    <input type="radio" id="test5" name="radio-group">
                                    <label for="test5">Complete Education Stay 50-52 weeks</label>
                                  </p>
                                </form>
                            </div>
                        </div>
                        <div class="blog-search">
                            <div class="function-1 main-menu">
                                <h2>Availability</h2>
                            </div>
                            <div class="card-body">
                               <label class="control control--checkbox">Exclude Sold Out
                                    <input type="checkbox" checked="checked">
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="right_head">
                        <h5>Accommodations you may like</h5>
                    </div>
                    <div class="row row_1">
                        <div class="col-lg-6 col-md-12">
                            <div class="home">
                                <div class="home_slider">
                                    <img src="image/home1.avif">
                                    <img src="image/home2.avif">
                                    <img src="image/home3.avif">
                                    <img src="image/home4.avif">
                                </div>
                                <div class="home_detail">
                                    <h3>iQ Shoreditch</h3>
                                    <div class="add">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        <p>iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
                                    </div>
                                    <div class="tag-detail">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-kitchen-set"></i>
                                                <p>kitchen</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-film"></i>
                                                <p>Cinema</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bicycle"></i>
                                                <p>Bicycle Storage</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="enquire">
                                        <div class="week">
                                            <h5>£340 - 586<span>/week</span></h5>
                                        </div>
                                        <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                             <span class="btn-title">Enquire</span>
                                              <span></span><span></span><span></span><span></span><span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="home">
                                <div class="home_slider">
                                    <img src="image/home5.avif">
                                    <img src="image/home6.avif">
                                    <img src="image/home7.avif">
                                    <img src="image/home8.avif">
                                    <img src="image/home9.avif">
                                </div>
                                <div class="home_detail">
                                    <h3>iQ Tufnell House</h3>
                                    <div class="add">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        <p>144 Huddleston Rd, London N7 0EG, United Kingdom</p>
                                    </div>
                                    <div class="tag-detail">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-dumbbell"></i>
                                                <p>Gym</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-couch"></i>
                                                <p>Sofa</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-people-group"></i>
                                                <p>Support Team</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="enquire">
                                        <div class="week">
                                            <h5>£295 - 487<span>/week</span></h5>
                                        </div>
                                        <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                             <span class="btn-title">Enquire</span>
                                              <span></span><span></span><span></span><span></span><span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="home">
                                <div class="home_slider">
                                    <img src="image/home10.avif">
                                    <img src="image/home11.avif">
                                    <img src="image/home12.avif">
                                    <img src="image/home13.avif">
                                    <img src="image/home14.avif">
                                </div>
                                <div class="home_detail">
                                    <h3>iQ Highbury</h3>
                                    <div class="add">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        <p>201 Isledon Road London N7 7JR United Kingdom</p>
                                    </div>
                                    <div class="tag-detail">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-dumbbell"></i>
                                                <p>Gym</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-couch"></i>
                                                <p>Sofa</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-people-group"></i>
                                                <p>Support Team</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="enquire">
                                        <div class="week">
                                            <h5>£251 - 378<span>/week</span></h5>
                                        </div>
                                        <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                             <span class="btn-title">Enquire</span>
                                              <span></span><span></span><span></span><span></span><span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="home">
                                <div class="home_slider">
                                    <img src="image/home11.avif">
                                    <img src="image/home10.avif">
                                    <img src="image/home12.avif">
                                    <img src="image/home13.avif">
                                    <img src="image/home14.avif">
                                </div>
                                <div class="home_detail">
                                    <h3>iQ Bankside</h3>
                                    <div class="add">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        <p>51 Ewer St London SE1 0NR United Kingdom</p>
                                    </div>
                                    <div class="tag-detail">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-kitchen-set"></i>
                                                <p>kitchen</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-film"></i>
                                                <p>Cinema</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bicycle"></i>
                                                <p>Bicycle Storage</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="enquire">
                                        <div class="week">
                                            <h5>£429 - 603<span>/week</span></h5>
                                        </div>
                                        <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                             <span class="btn-title">Enquire</span>
                                              <span></span><span></span><span></span><span></span><span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="home">
                                <div class="home_slider">
                                    <img src="image/home15.avif">
                                    <img src="image/home11.avif">
                                    <img src="image/home12.avif">
                                    <img src="image/home13.avif">
                                    <img src="image/home14.avif">
                                </div>
                                <div class="home_detail">
                                    <h3>The Valentine</h3>
                                    <div class="add">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        <p>27 – 37 Perth Road  Gants Hill  London, IG2 6BX</p>
                                    </div>
                                    <div class="tag-detail">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-dumbbell"></i>
                                                <p>Gym</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-couch"></i>
                                                <p>Sofa</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-people-group"></i>
                                                <p>Support Team</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="enquire">
                                        <div class="week">
                                            <h5>£215 - 345<span>/week</span></h5>
                                        </div>
                                        <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                             <span class="btn-title">Enquire</span>
                                              <span></span><span></span><span></span><span></span><span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="home">
                                <div class="home_slider">
                                    <img src="image/home16.avif">
                                    <img src="image/home10.avif">
                                    <img src="image/home12.avif">
                                    <img src="image/home13.avif">
                                    <img src="image/home14.avif">
                                </div>
                                <div class="home_detail">
                                    <h3>Stratford ONE</h3>
                                    <div class="add">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        <p>Stratford one, 1 International Way, London E20 1GS, United Kingdom</p>
                                    </div>
                                    <div class="tag-detail">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-kitchen-set"></i>
                                                <p>kitchen</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-film"></i>
                                                <p>Cinema</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bicycle"></i>
                                                <p>Bicycle Storage</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="enquire">
                                        <div class="week">
                                            <h5>£244 - 599<span>/week</span></h5>
                                        </div>
                                        <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                             <span class="btn-title">Enquire</span>
                                              <span></span><span></span><span></span><span></span><span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="home">
                                <div class="home_slider">
                                    <img src="image/home17.avif">
                                    <img src="image/home10.avif">
                                    <img src="image/home12.avif">
                                    <img src="image/home13.avif">
                                    <img src="image/home14.avif">
                                </div>
                                <div class="home_detail">
                                    <h3>GoBritanya - Lewisham Residence</h3>
                                    <div class="add">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        <p>Lewisham, 46 Thurston Road, London, SE13 7SD</p>
                                    </div>
                                    <div class="tag-detail">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-kitchen-set"></i>
                                                <p>kitchen</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-film"></i>
                                                <p>Cinema</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-bicycle"></i>
                                                <p>Bicycle Storage</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="enquire">
                                        <div class="week">
                                            <h5>£240 - 355<span>/week</span></h5>
                                        </div>
                                        <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                             <span class="btn-title">Enquire</span>
                                              <span></span><span></span><span></span><span></span><span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="home">
                                <div class="home_slider">
                                    <img src="image/home18.avif">
                                    <img src="image/home11.avif">
                                    <img src="image/home12.avif">
                                    <img src="image/home13.avif">
                                    <img src="image/home14.avif">
                                </div>
                                <div class="home_detail">
                                    <h3>Camden</h3>
                                    <div class="add">
                                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        <p>34 Chalk Farm Road, NW1 8AJ</p>
                                    </div>
                                    <div class="tag-detail">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-dumbbell"></i>
                                                <p>Gym</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-couch"></i>
                                                <p>Sofa</p>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-people-group"></i>
                                                <p>Support Team</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="enquire">
                                        <div class="week">
                                            <h5>£345 - 509<span>/week</span></h5>
                                        </div>
                                        <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                             <span class="btn-title">Enquire</span>
                                              <span></span><span></span><span></span><span></span><span></span>
                                        </button>
                                        <!-- <div class="e_now">
                                            <button><a href="#">Enquire</a></button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="room_one room1">
        <div class="container">
            <div class="main-title1">
                <h3>Recently Viewed</h3>
            </div>
            <div class="room_one_silder mb-0">
                <div class="hroom-slider1">
                    <div class="home">
                        <div class="home_slider">
                            <img src="image/home1.avif">
                            <img src="image/home2.avif">
                            <img src="image/home3.avif">
                            <img src="image/home4.avif">
                        </div>
                        <div class="home_detail">
                            <h3>iQ Shoreditch</h3>
                            <div class="add">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <p>iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
                            </div>
                            <div class="tag-detail">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-kitchen-set"></i>
                                        <p>kitchen</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-film"></i>
                                        <p>Cinema</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-bicycle"></i>
                                        <p>Bicycle Storage</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="enquire">
                                <div class="week">
                                    <h5>£340 - 586<span>/week</span></h5>
                                </div>
                                <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                     <span class="btn-title">Enquire</span>
                                      <span></span><span></span><span></span><span></span><span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hroom-slider1">
                    <div class="home">
                        <div class="home_slider">
                            <img src="image/home15.avif">
                            <img src="image/home11.avif">
                            <img src="image/home12.avif">
                            <img src="image/home13.avif">
                            <img src="image/home14.avif">
                        </div>
                        <div class="home_detail">
                            <h3>The Valentine</h3>
                            <div class="add">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <p>27 – 37 Perth Road  Gants Hill  London, IG2 6BX</p>
                            </div>
                            <div class="tag-detail">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-dumbbell"></i>
                                        <p>Gym</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-couch"></i>
                                        <p>Sofa</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-people-group"></i>
                                        <p>Support Team</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="enquire">
                                <div class="week">
                                    <h5>£215 - 345<span>/week</span></h5>
                                </div>
                                <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                     <span class="btn-title">Enquire</span>
                                      <span></span><span></span><span></span><span></span><span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hroom-slider1">
                    <div class="home">
                        <div class="home_slider">
                            <img src="image/home1.avif">
                            <img src="image/home2.avif">
                            <img src="image/home3.avif">
                            <img src="image/home4.avif">
                        </div>
                        <div class="home_detail">
                            <h3>iQ Shoreditch</h3>
                            <div class="add">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <p>iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
                            </div>
                            <div class="tag-detail">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-kitchen-set"></i>
                                        <p>kitchen</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-film"></i>
                                        <p>Cinema</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-bicycle"></i>
                                        <p>Bicycle Storage</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="enquire">
                                <div class="week">
                                    <h5>£340 - 586<span>/week</span></h5>
                                </div>
                                <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                     <span class="btn-title">Enquire</span>
                                     <span></span><span></span><span></span><span></span><span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hroom-slider1">
                    <div class="home">
                        <div class="home_slider">
                            <img src="image/home15.avif">
                            <img src="image/home11.avif">
                            <img src="image/home12.avif">
                            <img src="image/home13.avif">
                            <img src="image/home14.avif">
                        </div>
                        <div class="home_detail">
                            <h3>The Valentine</h3>
                            <div class="add">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <p>27 – 37 Perth Road  Gants Hill  London, IG2 6BX</p>
                            </div>
                            <div class="tag-detail">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-dumbbell"></i>
                                        <p>Gym</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-couch"></i>
                                        <p>Sofa</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-people-group"></i>
                                        <p>Support Team</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="enquire">
                                <div class="week">
                                    <h5>£215 - 345<span>/week</span></h5>
                                </div>
                                <button class="banner-btn theme-btn" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight">
                                    <span class="btn-title">Enquire</span>
                                    <span></span><span></span><span></span><span></span><span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="co_details">
                        <div class="content">
                            <h2> Want accommodation of your choice?</h2>
                            <h6>Receive personalized recommendations based on your preferences like rent, distance from university and budget</h6>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-square-check"></i>
                                    <p>Verified Properties</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-square-check"></i>
                                    <p>Price-Match Guarantee</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-square-check"></i>
                                    <p>24x7 Personal Assistance</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
               	<div class="col-lg-6 col-md-6">
					<div class="co_form1 ma_1">

						<div id="message"></div>
						<form method="post"  id="sendmessage">

                       {{ csrf_field() }}
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<span class="your-name">
											<input type="text" name="name" value="" id="name" size="40" placeholder="Name">
											<span class="text-danger error-text name_err"></span>
										</span><br>
										<span class="alert-error"></span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<span class="email">
											<input type="email" name="email" id="email"  value="" size="40" placeholder="Email">
											    <span class="text-danger error-text email_err"></span>
										</span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="f-name">
											<input type="number" name="mobile_no" value="" placeholder="your number" id="mobile_no">
											<span class="text-danger error-text mobile_no_err"></span>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<span class="your-name">
											<input type="text" name="university" value=""  id="university" size="40" placeholder="University">
											   <span class="text-danger error-text university_err"></span>
										</span>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="co_btn">
										<p>By submitting you agree to our <span>terms</span> and <span>privacy policy</span>.</p>
										<button id ="submit1"><a>Get Expert Help!</a></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
    <div class="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="faq_detals">
                        <h6>Frequantly Ask Questions</h6>
                        <h3>Do you have any questions?</h3>
                        <p>Explore affordable to luxury student accommodation Sydney on UniAcco, where you can compare student housing Sydney basis price, amenities, distance from your uni, features, and more. Feel free to consult our super-friendly team of experts over a call, chat, or email who can suggest you the best options as per your requirements. Choose from over 5000+ options across Sydney student accommodation. Whether you are looking for private student studios Sydney, student halls Sydney, or Sydney flats to share with other students, we have got it covered.</p>
                        <button><a href="#">Contact Us</a></button>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="accordion" id="accordionExample">
                      <div class="item">
                         <div class="item-header" id="headingOne">
                            <h2 class="mb-0">
                               <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1. When will I be given my room number?
                               <i class="fa fa-angle-down"></i>
                               </button>
                            </h2>
                         </div>
                         <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="t-p">
                               When you check-in, the receptionist will inform you about your room number. You can ask your sales agent to get more information. 
                            </div>
                         </div>
                      </div>
                      <div class="item">
                         <div class="item-header" id="headingTwo">
                            <h2 class="mb-0">
                               <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. When there is something needs to be fixed, whom do I need to contact?
                                    <i class="fa fa-angle-down"></i>
                               </button>
                            </h2>
                         </div>
                         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="t-p">
                                Before check-in, you will receive an email with the contact details of their operation team. You can contact them in case of a maintenance issue. 
                            </div>
                         </div>
                      </div>
                      <div class="item">
                         <div class="item-header" id="headingThree">
                            <h2 class="mb-0">
                               <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseThree" aria-expanded="false"
                                  aria-controls="collapseThree">
                                   3. Who will assist me for the check-in?
                               <i class="fa fa-angle-down"></i>
                               </button>
                            </h2>
                         </div>
                         <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="t-p">
                                 Receptionists of the residence will be assisting you for the check-in. 
                            </div>
                         </div>
                      </div>
                      <div class="item">
                         <div class="item-header" id="headingFour">
                            <h2 class="mb-0">
                               <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseFour" aria-expanded="false"
                                  aria-controls="collapseFour">
                                  4. Do I need to inform anyone before check-out?
                               <i class="fa fa-angle-down"></i>
                               </button>
                            </h2>
                         </div>
                         <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="t-p">
                               No, you do not need to. You should leave your key at the reception. 
                            </div>
                         </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-city-tab">
        <div class="container">
            <div class="city-heading">
                <h2>
                    near by location
                </h2>
            </div>
            <div class="city-tab">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <div class="slider"></div>
                    <li class="nav-item">
                        <a class="nav-link active" id="home1-tab" data-bs-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true">near by cities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home2-tab" data-bs-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="false">near by areas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home3-tab" data-bs-toggle="tab" href="#home3" role="tab" aria-controls="home3" aria-selected="false">near by university</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home4-tab" data-bs-toggle="tab" href="#home4" role="tab" aria-controls="home4" aria-selected="false">best student accomendation</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home1-tab">
                        <div class="city">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Sydney</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Morisset–Cooranbong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Nowra–Bomaderry</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Newcastle–Maitland</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Singleton</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Morisset–Cooranbong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Newcastle–Maitland</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Nowra–Bomaderry</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Lithgow</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                        <div class="city">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Sydney</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Morisset–Cooranbong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Nowra–Bomaderry</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Newcastle–Maitland</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Singleton</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Morisset–Cooranbong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Newcastle–Maitland</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Nowra–Bomaderry</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Lithgow</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home3-tab">
                        <div class="city">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Sydney</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Morisset–Cooranbong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Nowra–Bomaderry</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Newcastle–Maitland</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Singleton</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Morisset–Cooranbong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Newcastle–Maitland</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Nowra–Bomaderry</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Lithgow</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="home4" role="tabpanel" aria-labelledby="home4-tab">
                        <div class="city">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Sydney</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Morisset–Cooranbong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Nowra–Bomaderry</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Newcastle–Maitland</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Singleton</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Morisset–Cooranbong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Newcastle–Maitland</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Nowra–Bomaderry</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Wollongong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Bowral–Mittagong</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="city-list">
                                        <p>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <a href="#">Lithgow</a>
                                        </p>
                                    </div>
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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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

              var email= $(this).find('input[name="email"]').val();
               var name= $(this).find('input[name="name"]').val();
                var mobile_no= $(this).find('input[name="mobile_no"]').val();
                 var university= $(this).find('input[name="university"]').val();
  


            $.ajax({
                url: '/getinquiry',
                type:'POST',
              data: {_token:_token,email:email,name:name,mobile_no:mobile_no,university:university},
                success: function(data) {
                  console.log(data.error)
                    if($.isEmptyObject(data.error)){


                     $("#sendmessage").reset();

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
			$('ul.tabs li').click(function(){
				var tab_id = $(this).attr('data-tab');

				$('ul.tabs li').removeClass('current');
				$('.tab-content').removeClass('current');

				$(this).addClass('current');
				$("#"+tab_id).addClass('current');
			});
		});

		$('.home_slider').slick({
        	autoplay: false,
        	autoplaySpeed: 1500,
            slidesToShow:1,
            slidesToScroll: 1,
            dots: false,
            arrows:true,
            focusOnSelect: true,
            prevArrow: '<div class="room-arrow1 slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></div>',
             nextArrow: '<div class="room-arrow1 slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></div>',
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

        $('.room_one_silder').slick({
        	autoplay: false,
        	autoplaySpeed: 1500,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows:true,
            focusOnSelect: true,
            prevArrow: '<div class="room-arrow slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></div>',
             nextArrow: '<div class="room-arrow slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></div>',
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 2,
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

		 $('.read-more').click(function() {
        $(this).prev().slideToggle();
        if (($(this).text()) == "Read More") {
            $(this).text("Read Less");
        } else {
            $(this).text("Read More");
        }
    }); 

		$(document).ready(function(){
		  
		  $(function () {
			$('#startDate').datepicker({
		   format: 'dd/mm/yyyy' 
		  });
		  });
			 
		});

		 $("#slider").slider({
            range: true,
            max: 70,
            values: [0, 70],
            slide: function(event, ui) {
              var min = ui.values[0];
              var max = ui.values[1];
              $("[name=min]").val(min);
              $("[name=max]").val(max);
            }
        });


        $('.f-product').slick({
           slidesToShow: 1,
           slidesToScroll: 1,
           dots: false,
           focusOnSelect: true,
            prevArrow: '<div class="f-arrow slide-arrow prev-arrow"><i class="far fa-angle-left"></i></div>',
            nextArrow: '<div class="f-arrow slide-arrow next-arrow"><i class="far fa-angle-right"></i></div>',
        });

        $("#mobile_code").intlTelInput({
			initialCountry: "in",
			separateDialCode: true,
			utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
		});
     
     
     
		$(".city-tab .nav-tabs a").click(function() {
		  var position = $(this).parent().position();
		  var width = $(this).parent().width();
		    $(".city-tab .slider").css({"left":+ position.left,"width":width});
		});
		var actWidth = $(".city-tab .nav-tabs").find(".active").parent("li").width();
		var actPosition = $(".city-tab .nav-tabs .active").position();
		$(".city-tab .slider").css({"left":+ actPosition.left,"width": actWidth});


       
	</script>



@endsection