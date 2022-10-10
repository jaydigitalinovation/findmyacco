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


<div class="co_blog1">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 bg_1">
                <div class="set-part-2">
                    <div class="blog-search1">
                        <form>
                            <input type="text" placeholder="Search..." name="search" value="">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="post1">
                        <h3 class="post">Recent Post</h3>
                        <div class="latest-news">
                            <div>
                                @foreach($blog_detail_slide1 as $bds1)
                                <div class="inner_blog">
                                    <a href="#" class="img1"><img src="/uploads/{{$bds1->image}}"></a>
                                    <div class="blog-info">
                                        <h4><a href="#">{{$bds1->title}}</a></h4>
                                        <span>
                                            <?php 
                                                echo date("j M , Y",strtotime($bds1->date));
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                @endforeach
                                <!-- <div class="inner_blog">
                                    <a href="#" class="img1"><img src="image/blog2.jpg"></a>
                                    <div class="blog-info">
                                        <h4><a href="#">Lorem Ipsum is simply dummy text</a></h4>
                                        <span>Feb 20, 2021</span>
                                    </div>
                                </div>
                                <div class="inner_blog">
                                    <a href="#" class="img1"><img src="image/blog3.jpeg"></a>
                                    <div class="blog-info">
                                        <h4><a href="#">Lorem Ipsum is simply dummy text</a></h4>
                                        <span>Feb 20, 2021</span>
                                    </div>
                                </div> -->
                            </div>
                            <div>
                                @foreach($blog_detail_slide2 as $bds2)
                                <div class="inner_blog">
                                    <a href="#" class="img1"><img src="/uploads/{{$bds2->image}}"></a>
                                    <div class="blog-info">
                                        <h4><a href="#">{{$bds2->title}}</a></h4>
                                        <span>
                                        <?php 
                                            echo date("j M , Y",strtotime($bds2->date));
                                        ?>
                                        </span>
                                    </div>
                                </div>
                                @endforeach
                                <!-- <div class="inner_blog">
                                    <a href="#" class="img1"><img src="images/blog1.jpg"></a>
                                    <div class="blog-info">
                                        <h4><a href="#">Lorem Ipsum is simply dummy text</a></h4>
                                        <span>Feb 20, 2021</span>
                                    </div>
                                </div>
                                <div class="inner_blog">
                                    <a href="#" class="img1"><img src="images/blog1.jpg"></a>
                                    <div class="blog-info">
                                        <h4><a href="#">Lorem Ipsum is simply dummy text</a></h4>
                                        <span>Feb 20, 2021</span>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="archive">
                        <h3 class="post">Archives</h3>
                        <ul class="item1">
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">March 2021</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 bg_2">
                <div class="row">

                    @foreach($blog_detail as $bd)
                    <div class="col-lg-6 col-md-6 blog_1">
                        <div class="set-blog">
                            <div class="img_">
                                <img src="/uploads/{{$bd->image}}">
                                <div class="co_calender">
                                    <div class="blog-calender">
                                        <span class="blog-date1">
                                            <?php
                                                echo date("j",strtotime($bd->date));
                                            ?>
                                        </span>
                                        <span class="blog-month">
                                            <?php
                                                echo date("M",strtotime($bd->date));
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="detail">
                                <ul class="blog-date">
                                   
                                    <li><i class="far fa-calendar-alt"></i><span>

                                    <?php
                                     echo date("j M Y", strtotime($bd->date));
                                    ?>

                                       </span></li>
                                    <!-- <li class="com"><i class="far fa-comments"></i><span>18 comments</span></li> -->
                                </ul>
                                <h3><a href="blog-detail.html">{{$bd->title}}</a></h3>
                                <p>{{$bd->description}}</p>
                                <div class="blog-bottom-link">
                                    <a href="blog-detail.html">+ Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="product-filter product-filter1">
                        <div class="row row1">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="showing">
                                    <p>Showing 1 to 9 of 12 (1 Pages)</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link active" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">...</li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">10</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
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

    $('.latest-news').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            focusOnSelect: true
        });

</script>
</body>
</html>


@endsection






