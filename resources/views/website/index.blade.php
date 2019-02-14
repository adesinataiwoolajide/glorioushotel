@extends("layouts.web-head")
    @section("content")
    <?php $web_name = "Glorious Empire Hotels"; ?>
	<main>
		<!-- Slider -->
		<div id="full-slider-wrapper">
			<div id="layerslider" style="width:100%;height:600px;">
				<!-- first slide -->
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
					<img src="{{asset('website/img/slides/slide_1.jpg')}}" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Welsome To The Official Website of </h3>
					<h4><p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">{{$web_name}}</p></h4>
					<a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href="{{ route('aboutus')}}">Read more</a>
				</div>

				<!-- second slide -->
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
					<img src="{{asset('website/img/slides/slide_2.jpg')}}" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">More than {{count($room)}} Rooms available</h3>
					<p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						@foreach($part as $tap) {{$tap->type_name . ", "}} @endforeach
					</p>
					<a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href="{{ route('roomcategories')}}">Read more</a>
				</div>

				<!-- third slide -->
				<div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
					<img src="{{asset('website/img/slides/slide_3.jpg')}}" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Our Facilities and Services are Incomparabke</h3>
					<p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">We offer a variety of services and options</p>
					<a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href="{{ route('webfacilities')}}">Read more</a>
				</div>

				<!-- fourth slide -->
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:14;">
					<img src="{{asset('website/img/slides/slide_4.jpg')}}" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">CityTours provides tour guides</h3>
					<p class="ls-l slide_typo_2" style="top:52%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">Visit museum with a dedicated tour guide</p>
					<a class="ls-l button_intro_2 outline" style="top:370px; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='all_tour_list.html'>Read more</a>
				</div>

			</div>
		</div>
		<!-- End layerslider -->

		<div class="container margin_60">

			<div class="main_title">
				<h2>{{$web_name}} <span>Top</span> Rooms</h2>
				<p>PleaseKindly Preview Our Rooms Below.</p>
			</div>

			<div class="row">
				@foreach($part as $parting)
					<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
						<div class="tour_container">
							<div class="ribbon_3 popular"><span>{!! substr($parting->type_name, 0,7) !!} ...</span></div>
							<div class="img_container">
								<a href="{{route('roomdetails', $parting->id)}}">
									<img src="{{asset('room_types/'.$parting->type_banner)}}" style="widows: 500px; height: 233px;" class="img-fluid" alt="image">
									<div class="short_info">
										<i class="icon_set_1_icon-44"></i>{{$parting->type_name}}<span class="price"><sup>&#8358;</sup><?php echo number_format($parting->amount) ?></span>
									</div>
								</a>
							</div>
							<div class="tour_title">
								<h3><strong>Max Guest</strong> {{$parting->max_guest}}</h3>
								<div class="rating">
									<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
								</div>
								<!-- end rating -->
								<div class="wishlist">
									<a class="tooltip_flip tooltip-effect-1" href="{{route('roomdetails', $parting->id)}}">+<span class="tooltip-content-flip"><span class="tooltip-back">View Room Details</span></span></a>
								</div>
								<div class="wishlist">
									<a class="tooltip_flip tooltip-effect-1" href="{{route('roomdetails', $parting->id)}}">+<span class="tooltip-content-flip"><span class="tooltip-back">View Room Details</span></span></a>
								</div>  
								<!-- End wish list-->
							</div>
						</div>
						<!-- End box tour -->
					</div>
					<!-- End col -->
				@endforeach

			</div>
			<!-- End row -->
			
			<p class="text-center add_bottom_30">
				<a href="{{route('roomcategories')}}" class="btn_1 medium"><i class="icon-eye-7"></i>View all Rooms Categories {{count($room_type)}} </a>
			</p>

			<hr>

		</div>
		<!-- End container -->
		<div class="banner colored">
			<h4>Discover our Top Rooms <span>from &#8358;<?php echo number_format(30000) ?></span></h4>
			<p>
				@foreach($part as $tap) {{$tap->type_name . ", "}} @endforeach
				e.t.c
			</p>
			<a href="{{route('roomcategories')}}" class="btn_1 white">Read more</a>
		</div>
		<div class="white_bg">
			<div class="container margin_60">
				<div class="main_title">
					<h2>Services <span>And </span> Facilities</h2>
					<p>
						Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
					</p>
				</div>
				<div class="row add_bottom_45">
					<div class="col-lg-4 other_tours">
						<ul>@foreach($service as $serve)
								<li>
									<a href="#"><i class="icon_set_1_icon-3"></i>{{$serve->service_name}}<span class="other_tours_price">&#8358;<?php echo number_format($serve->amount) ?></span></a>
								</li>
							@endforeach
							
						</ul>
					</div>
					<div class="col-lg-4 other_tours">
						<ul>@foreach($hotel_facility_lim as $fac)
								<li><a href="#"><i class="icon_set_1_icon-1"></i>{{$fac->facility_name}}<span class="other_tours_price">{{$fac->facility_category}}</span></a>
								</li>
							@endforeach
						</ul>
					</div>
					<div class="col-lg-4 other_tours">
						<ul>
							@foreach($hotel_faciliti_lim as $fac)
								<li><a href="#"><i class="icon_set_1_icon-37"></i>{{$fac->facility_name}}<span class="other_tours_price">{{$fac->facility_category}}</span></a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
				<!-- End row -->

				<div class="banner colored">
					<h4>Discover our Top Rooms <span>from &#8358;<?php echo number_format(30000) ?></span></h4>
					<p>
						@foreach($part as $tap) {{$tap->type_name . ", "}} @endforeach
						e.t.c
					</p>
					<a href="{{route('roomcategories')}}" class="btn_1 white">Read more</a>
				</div>
				
				<div class="row">
					<div class="col-lg-3 col-md-6 text-center">
						<p>
							<a href="#"><img src="{{asset('website/img/bus.jpg')}}" alt="Pic" class="img-fluid"></a>
						</p>
						<h4><span>Hotel </span> Reservation</h4>
						<p>
							Reservation Content Here
						</p>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<p>
							<a href="#"><img src="{{asset('website/img/transfer.jpg')}}" alt="Pic" class="img-fluid"></a>
						</p>
						<h4><span>Airport</span> Pick Up</h4>
						<p>
							Payment Content Here
						</p>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<p>
							<a href="#"><img src="{{asset('website/img/guide.jpg')}}" alt="Pic" class="img-fluid"></a>
						</p>
						<h4><span>Events Booking</span> and Planning </h4>
						<p>
							Download Booking Guide Here
						</p>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<p>
							<a href="#"><img src="{{asset('website/img/hotel.jpg')}}" alt="Pic" class="img-fluid"></a>
						</p>
						<h4><span>Tourist</span> Management</h4>
						<p>
							Booking Details Here
						</p>
					</div>
				</div>
				<!-- End row -->
				
			</div>
			<!-- End container -->
		</div>
		<!-- End white_bg -->

		<!-- <section class="promo_full">
			<div class="promo_full_wp magnific">
				<div>
					<h3>BELONG ANYWHERE</h3>
					<p>
						Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
					</p>
					<a href="https://www.youtube.com/watch?v=Zz5cu72Gv5Y" class="video"><i class="icon-play-circled2-1"></i></a>
				</div>
			</div>
		</section> -->
		<!-- End section -->

		<div class="container margin_60">

			<div class="main_title">
				<h2>Some <span>good</span> reasons</h2>
				<p>
					Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
				</p>
			</div>

			<div class="row">

				<div class="col-lg-4 wow zoomIn" data-wow-delay="0.2s">
					<div class="feature_home">
						<i class="icon_set_1_icon-41"></i>
						<h3><span>{{count($room)}}</span> Rooms</h3>
						<p>
							Total Rooms
						</p>
						<a href="{{route('roomcategories')}}" class="btn_1 outline">Read more</a>
					</div>
				</div>

				<div class="col-lg-4 wow zoomIn" data-wow-delay="0.4s">
					<div class="feature_home">
						<i class="icon_set_1_icon-30"></i>
						<h3><span>{{count($user)}}</span> Customers</h3>
						<p>
							Total Customers.
						</p>
						<a href="{{route('aboutus')}}" class="btn_1 outline">Read more</a>
					</div>
				</div>

				<div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
					<div class="feature_home">
						<i class="icon_set_1_icon-57"></i>
						<h3><span>H24 </span> Support</h3>
						<p>
							Our Customer Care Service are Always Available
						</p>
						<a href="{{route('aboutus')}}" class="btn_1 outline">Read more</a>
					</div>
				</div>

			</div>
			<!--End row -->

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
					<a href="all_tour_list.html" class="btn_1">Start now</a>
				</div>
			</div>
			<!-- End row -->

		</div>
		<!-- End container -->
	</main>



@endsection