@extends('layout.header')

@section('content')

<style type="text/css">
	
	div#message {
    color: white;
    background-color: #dfa920;
    text-align: center;
    
}
</style>
@foreach($banner_image as $bi)
<div class="co_banner1">
	<img src="/uploads/{{$bi->image}}">
	<div class="container">
		@foreach($partner_detail as $pd)
		<div class="inner-bcontent">
			<h2>{{$pd->title}}</h2>
			<ul>
				<li><a href="{{url('/')}}"><i class="fa-solid fa-house-chimney"></i> Home</a></li>
				<li><i class="fa-solid fa-angles-right"></i></li>
				<li><a href="#">Partners</a></li>
				<li class="bd"><i class="fa-solid fa-angles-right"></i></li>
				<li class="bd">{{$pd->title}}</li>
			</ul>
		</div>
		@endforeach
	</div>
</div>
@endforeach
<div class="co_partner-detail">
	<div class="container">
		@foreach($partner_detail as $pd)
		<div class="row">
		    <div class="col-lg-8 col-md-8">
				<div class="partner-details">
					<h2>{{$pd->title}}</h2>
					<p>{{$pd->description}}</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="partner-img">
					<img src="/uploads/{{$pd->image}}">
				</div>
			</div>
		</div>
		@endforeach
		<div class="partnet-filter">
			<div class="main-title">
				<h3>Popular Properties</h3>
			</div>
			<div class="partner-tab">
				<ul class="nav nav-tabs nav-justified" role="tablist">
                    <div class="slider"></div>
                    <li class="nav-item">
                        <a class="nav-link active" id="home1-tab" data-bs-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true">London</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home2-tab" data-bs-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="false">Sheffield</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home3-tab" data-bs-toggle="tab" href="#home3" role="tab" aria-controls="home3" aria-selected="false">Leicester</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home4-tab" data-bs-toggle="tab" href="#home4" role="tab" aria-controls="home4" aria-selected="false">Liverpool</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home5-tab" data-bs-toggle="tab" href="#home5" role="tab" aria-controls="home5" aria-selected="false">Birmingham</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home6-tab" data-bs-toggle="tab" href="#home6" role="tab" aria-controls="home6" aria-selected="false">Cardiff</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="home1" role="tabpanel" aria-labelledby="home1-tab">
                    	<div class="room-slider mb-0 row">
							<div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image1.jpg"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image2.avif"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image3.avif"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image4.avif"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image5.jpg"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image6.jpg"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
		                </div>
                    </div>
                    <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                    	<div class="room-slider mb-0 row">
							<div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image7.jpg"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image8.avif"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
		                </div>
                    </div>
                    <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home3-tab">
                    	<div class="room-slider mb-0 row">
							<div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image9.avif"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image10.avif"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image11.jpg"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image12.avif"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
		                </div>
                    </div>
                    <div class="tab-pane fade" id="home4" role="tabpanel" aria-labelledby="home4-tab">
                    	<div class="room-slider mb-0 row">
							<div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image13.jpg"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image14.jpg"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image15.jpg"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
		                </div>
                    </div>
                    <div class="tab-pane fade" id="home5" role="tabpanel" aria-labelledby="home5-tab">
                    	<div class="room-slider mb-0 row">
							<div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image16.avif"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image17.avif"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
		                </div>
		            </div>
                    <div class="tab-pane fade" id="home6" role="tabpanel" aria-labelledby="home6-tab">
                    	<div class="room-slider mb-0 row">
							<div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image18.jpg"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image19.jpg"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
				    	    <div class="col-lg-6 col-md-6">
								<div class="home-room">
									<div class="inner-hroom">
								    	<div class="hroom-img">
								    		<a href="#"><img src="/image/room_image20.avif"></a>
								    	</div>
								    	<div class="hroom-details">
								    		<h2><a href="#">iQ Shoreditch</a></h2>
								    		<p><i class="fa-solid fa-location-dot"></i> iQ Shoreditch, 2 Silicon Way, London N1 6AT United Kingdom</p>
								    		<ul>
								    			<li><i class="fa-solid fa-bed"></i> 3 bed</li>
								    			<li><i class="fa-solid fa-bath"></i> 2 bathroom</li>
								    			<li><i class="fa-solid fa-ruler-combined"></i> 500 sqft</li>
								    		</ul>
								    		<div class="view-btn">
								    		    <h6><i class="fa-solid fa-sterling-sign"></i> 340 - 586/week</h6>
								    		    <a href="#">view details</a>
								    		</div>
									    </div>
								    </div>
					    		</div>
				    	    </div>
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
                	@foreach($partner_acco_des as $pad)
                    <div class="content">
                        <h2> {{$pad->title}}</h2>
                        <h6>{{$pad->description}}</h6>
                        <ul>

                        	@foreach($partner_acco as $pa)
                            <li>
                                <i class="fa-solid fa-square-check"></i>
                                <p>{{$pa->advantage}}</p>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    @endforeach
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
        	@foreach($partner_faq_des as $pfd)
            <div class="col-lg-5 col-md-5">
                <div class="faq_detals">
                    <h6>Frequantly Ask Questions</h6>
                    <h3>{{$pfd->title}}</h3>
                    <p>{{$pfd->description}}</p>
                    <button><a href="#">Contact Us</a></button>
                </div>
            </div>
            @endforeach
            <div class="col-lg-7 col-md-7">
                <div class="accordion" id="accordionExample">
                @foreach($partner_faq as $key=>$pf)
                  <div class="item">
                     <div class="item-header" id="heading{{$pf->id}}">
                        <h2 class="mb-0">
                           <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse{{$pf->id}}" aria-expanded="true" aria-controls="collapse{{$pf->id}}">{{$key+1}}.{{$pf->question}}
                           <i class="fa fa-angle-down"></i>
                           </button>
                        </h2>
                     </div>

                     @if($key+1 ==1)
                     <div id="collapse{{$pf->id}}" class="collapse show" aria-labelledby="heading{{$pf->id}}"
                        data-bs-parent="#accordionExample">
                        <div class="t-p">
                           {{$pf->answer}}
                        </div>
                     </div>
                     @else
                     <div id="collapse{{$pf->id}}" class="collapse" aria-labelledby="heading{{$pf->id}}"
                        data-bs-parent="#accordionExample">
                        <div class="t-p">
                           {{$pf->answer}}
                        </div>
                     </div>
                     @endif
                  </div>
                  @endforeach
                  
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



   
   <!-------------- search-modal --------------->
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
    


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
	<script type="text/javascript" src="all-js.js"></script>
	<script type="text/javascript">



		  $(document).ready(function() {
        $("#submit1").click(function(e){
            e.preventDefault();

            
            var _token = $("input[name='_token']").val();  
            var email = $('#email').val();
            var name = $('#name').val();
            var mobile_no = $('#mobile_no').val();
            var university = $('#university').val();

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
	



		$(".partner-tab .nav-tabs a").click(function() {
		  var position = $(this).parent().position();
		  var width = $(this).parent().width();
		    $(".partner-tab .slider").css({"left":+ position.left,"width":width});
		});
		var actWidth = $(".partner-tab .nav-tabs").find(".active").parent("li").width();
		var actPosition = $(".partner-tab .nav-tabs .active").position();
		$(".partner-tab .slider").css({"left":+ actPosition.left,"width": actWidth});

		$("#mobile_code").intlTelInput({
			initialCountry: "in",
			separateDialCode: true,
			utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
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
        
        
		$(".city-tab .nav-tabs a").click(function() {
		  var position = $(this).parent().position();
		  var width = $(this).parent().width();
		    $(".city-tab .slider").css({"left":+ position.left,"width":width});
		});
		var actWidth = $(".city-tab .nav-tabs").find(".active").parent("li").width();
		var actPosition = $(".city-tab .nav-tabs .active").position();
		$(".city-tab .slider").css({"left":+ actPosition.left,"width": actWidth});
        
        
        
	</script>
</body>
</html>

@endsection