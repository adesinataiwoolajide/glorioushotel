@extends("layouts.web-head")
    @section("content")
    <?php $web_name = "Glorious Empire Hotels"; ?>

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('website/img/header_bghh.jpg')}}" data-natural-width="1400" data-natural-height="270">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>About Us</h1>
				<p>About {{$web_name}}.</p>
			</div>
		</div>
	</section>
	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="{{ route('index')}}">Home</a>
					</li>
					<li><a href="{{ route('aboutus')}}">About Us</a>
					</li>
					<li>About {{$web_name}}</li>
				</ul>
			</div>
		</div>
		<!-- End Position -->

		<div class="container margin_60">

			<div class="main_title">
				<h2>Some <span>good </span>reasons</h2>
				<p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
			</div>
			
				<div class="row">@foreach($room_type as $typo)
					<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
						<div class="feature">
							<i class="icon_set_1_icon-30"></i>
							<h3><span><a href="{{route('roomdetails', $typo->id)}}" class="btn_1">{{$typo->type_name}}</a>&#8358;
								<b><?php echo number_format($typo->amount) ?> Per Night</b></span>
							</h3>
						</div>
					</div>
					@endforeach
				</div>
			<!-- End row -->
			<hr>
			<div class="row">
				<div class="col-lg-6">
					<h4>Services</h4>
					
					<div class="general_icons">
						<ul>
							<li><i class="icon_set_1_icon-59"></i>Breakfast</li>
							<li><i class="icon_set_1_icon-8"></i>Dinner</li>
							<li><i class="icon_set_1_icon-32"></i>Photo collection</li>
							<li><i class="icon_set_1_icon-50"></i>Personal shopper</li>
							<li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
							<li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
							<li><i class="icon_set_2_icon-110"></i>Poll</li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<h4>Facilities</h4>
					
					<div class="general_icons">
						<ul>
							<li><i class="icon_set_1_icon-98"></i>Audio guide</li>
							<li><i class="icon_set_1_icon-27"></i>Parking</li>
							<li><i class="icon_set_1_icon-36"></i>Exchange</li>
							<li><i class="icon_set_1_icon-63"></i>Mobile</li>
							<li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
							<li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
							<li><i class="icon_set_1_icon-27"></i>Parking</li>
							<li><i class="icon_set_1_icon-99"></i>Vides guide</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->

		<div class="container margin_60">

			<div class="main_title">
				<h2>What <span>customers </span>says</h2>
				<p>Our Loyal Customers.</p>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="review_strip">
						<img src="{{asset('website/img/avatar1.jpg')}}" alt="Image" class="rounded-circle">
						<h4>Sesan</h4>
						<p>
							"Testimony."
						</p>
						<div class="rating">
							<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
						</div>
					</div>
					<!-- End review strip -->
				</div>

				<div class="col-lg-6">
					<div class="review_strip">
						<img src="{{asset('website/img/avatar2.jpg')}}" alt="Image" class="rounded-circle">
						<h4>Ojo</h4>
						<p>
							"Testimony"
						</p>
						<div class="rating">
							<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
						</div>
					</div>
					<!-- End review strip -->
				</div>
			</div>
			

			<hr>

			<div class="row">
				<div class="col-md-6">
					<img src="{{asset('website/img/laptop.png')}}" alt="Laptop" class="img-fluid laptop">
				</div>
				<div class="col-md-6">
					<h3><span>Get started</span> with {{$web_name}}</h3>
					<p>
						Conditions for Booking and Reservation
					</p>
					<ul class="list_order">
						<li><span>1</span>Select your preferred Room Type</li>
						<li><span>2</span>Make Your Payment</li>
						<li><span>3</span>The Room is Yours</li>
					</ul>
					<a href="{{ route('roomcategories')}}" class="btn_1">Start now</a>
				</div>
			</div>
			<!-- End row -->
			
		</div>
		<!-- End Container -->
	</main>


@endsection