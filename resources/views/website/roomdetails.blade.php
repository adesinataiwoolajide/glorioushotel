@extends("layouts.web-head")
    @section("content")
    <?php $web_name = "Glorious Empire Hotels"; ?>

	<section id="hero_2" style=" height: 300px;" >
		<div class="intro_title">
			<h1>{{$roomdetails->type_name}} Room Details</h1>
			<!-- End bs-wizard -->
		</div>
		<!-- End intro-title -->
	</section>
	
	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="{{route('index')}}">Home</a></li>
					<li><a href="{{route('roomdetails', $roomdetails->id)}}">Room Details</a></li>
					<li><a href="{{route('roomcategories')}}">Room Categories</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- End Position -->
	    <div class="container margin_60">
		    <div class="row">
		        <div class="col-lg-8" id="single_tour_desc">
					<div id="single_tour_feat">
						<ul>
							<li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
							<li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
							<li><i class="icon_set_2_icon-110"></i>Poll</li>
							<li><i class="icon_set_1_icon-59"></i>Breakfast</li>
							<li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
							<li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
							<li><i class="icon_set_1_icon-27"></i>Parking</li>
						</ul>
					</div>
					<p class="d-none d-md-block d-block d-lg-none"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
					</p>
					<!-- Map button for tablets/mobiles -->
					<div id="Img_carousel" class="slider-pro">
						<div class="sp-slides">
							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="{{asset('website/css/images/blank.gif')}}" data-src="{{asset('room_types/'.$roomdetails->type_banner)}}" data-small="{{asset('room_types/'.$roomdetails->type_banner)}}" data-medium="{{asset('room_types/'.$roomdetails->type_banner)}}" data-large="{{asset('room_types/'.$roomdetails->type_banner)}}" data-retina="{{asset('room_types/'.$roomdetails->type_banner)}}">
							</div>
							
							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="{{asset('website/css/images/blank.gif')}}" data-src="{{asset('room_types/'.$roomdetails->type_banner)}}" data-small="{{asset('room_types/'.$roomdetails->type_banner)}}" data-medium="{{asset('room_types/'.$roomdetails->type_banner)}}" data-large="{{asset('room_types/'.$roomdetails->type_banner)}}" data-retina="{{asset('room_types/'.$roomdetails->type_banner)}}">
							</div>
							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="{{asset('website/css/images/blank.gif')}}" data-src="{{asset('room_types/'.$roomdetails->type_banner)}}" data-small="{{asset('room_types/'.$roomdetails->type_banner)}}" data-medium="{{asset('room_types/'.$roomdetails->type_banner)}}" data-large="{{asset('room_types/'.$roomdetails->type_banner)}}" data-retina="{{asset('room_types/'.$roomdetails->type_banner)}}">
							</div>
							
							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="{{asset('website/css/images/blank.gif')}}" data-src="{{asset('room_types/'.$roomdetails->type_banner)}}" data-small="{{asset('room_types/'.$roomdetails->type_banner)}}" data-medium="{{asset('room_types/'.$roomdetails->type_banner)}}" data-large="{{asset('room_types/'.$roomdetails->type_banner)}}" data-retina="{{asset('room_types/'.$roomdetails->type_banner)}}">
							</div>
							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="{{asset('website/css/images/blank.gif')}}" data-src="{{asset('room_types/'.$roomdetails->type_banner)}}" data-small="{{asset('room_types/'.$roomdetails->type_banner)}}" data-medium="{{asset('room_types/'.$roomdetails->type_banner)}}" data-large="{{asset('room_types/'.$roomdetails->type_banner)}}" data-retina="{{asset('room_types/'.$roomdetails->type_banner)}}">
							</div>
							
							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="{{asset('website/css/images/blank.gif')}}" data-src="{{asset('room_types/'.$roomdetails->type_banner)}}" data-small="{{asset('room_types/'.$roomdetails->type_banner)}}" data-medium="{{asset('room_types/'.$roomdetails->type_banner)}}" data-large="{{asset('room_types/'.$roomdetails->type_banner)}}" data-retina="{{asset('room_types/'.$roomdetails->type_banner)}}">
							</div>
							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="{{asset('website/css/images/blank.gif')}}" data-src="{{asset('room_types/'.$roomdetails->type_banner)}}" data-small="{{asset('room_types/'.$roomdetails->type_banner)}}" data-medium="{{asset('room_types/'.$roomdetails->type_banner)}}" data-large="{{asset('room_types/'.$roomdetails->type_banner)}}" data-retina="{{asset('room_types/'.$roomdetails->type_banner)}}">
							</div>
							
							<div class="sp-slide">
								<img alt="Image" class="sp-image" src="{{asset('website/css/images/blank.gif')}}" data-src="{{asset('room_types/'.$roomdetails->type_banner)}}" data-small="{{asset('room_types/'.$roomdetails->type_banner)}}" data-medium="{{asset('room_types/'.$roomdetails->type_banner)}}" data-large="{{asset('room_types/'.$roomdetails->type_banner)}}" data-retina="{{asset('room_types/'.$roomdetails->type_banner)}}">
							</div>
						</div>
						<div class="sp-thumbnails">
							<img alt="Image" class="sp-thumbnail" src="{{asset('room_types/'.$roomdetails->type_banner)}}">
							<img alt="Image" class="sp-thumbnail" src="{{asset('room_types/'.$roomdetails->type_banner)}}">
							<img alt="Image" class="sp-thumbnail" src="{{asset('room_types/'.$roomdetails->type_banner)}}">
							<img alt="Image" class="sp-thumbnail" src="{{asset('room_types/'.$roomdetails->type_banner)}}">
							<img alt="Image" class="sp-thumbnail" src="{{asset('room_types/'.$roomdetails->type_banner)}}">
							<img alt="Image" class="sp-thumbnail" src="{{asset('room_types/'.$roomdetails->type_banner)}}">
							<img alt="Image" class="sp-thumbnail" src="{{asset('room_types/'.$roomdetails->type_banner)}}">
							<img alt="Image" class="sp-thumbnail" src="{{asset('room_types/'.$roomdetails->type_banner)}}">
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-lg-3">
							<h3>Description</h3>
						</div>
						<div class="col-lg-9">
							<p>
								{{$roomdetails->description}}
							</p>
							<h4>Hotel facilities</h4>
							<p>
								Our Facilities Below
							</p>
							<div class="row">
								<div class="col-md-6">
									<ul class="list_ok">
										@foreach($hotel_facility as $facilities)
											<li>{{$facilities->facility_name}}</li>
										@endforeach
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list_ok">
										@foreach($hotel_faci as $facilities)
											<li>{{$facilities->facility_name}}</li>
										@endforeach
									</ul>
								</div>
							</div>
							<!-- End row  -->
						</div>
						<!-- End col-md-9  -->
					</div>
					<!-- End row  -->

					<hr>

				</div>
				<!--End  single_tour_desc-->

		        <aside class="col-lg-4">
		       		@include('layouts.message')
			        <div class="box_style_1 expose">
			           <form action="{{route('addCart', $roomdetails->id)}}" id="booking_hotel" method="POST">
			           		@csrf
				            <h3 class="inner">Book Room</h3>
				            
			                <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Room Category</label>
										<input class="form-control required" name="" id="name_hotel_booking" type="text" value="{{$roomdetails->type_name}}" readonly>
									</div>
								</div>
								<input type="hidden" name="type_name" id="type_name" value="{{$roomdetails->type_name}}">
								<input type="hidden" name="amount" id="amount" value="{{$roomdetails->amount}}">
								<input type="hidden" name="type_id" id="type_id" value="{{$roomdetails->id}}">
								<!-- <input type="hidden" name="check_in" id="check_in" value="{{$roomdetails->check_in}}">
								<input type="hidden" name="check_out" id="check_out" value="{{$roomdetails->check_out}}"> -->
								<div class="col-md-6">
									<div class="form-group">
										<label>Amount Per Night</label>
										<input class="form-control required" name="" id="" type="text" value="&#8358;<?php echo number_format($roomdetails->amount) ?>" readonly>
									</div>
								</div>
								<hr>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Max Guest</label>
										<input class="form-control required" name="" id="" type="text" value="<?php echo number_format($roomdetails->max_guest) ?>" readonly>
									</div>
								</div>
				                <!-- <div class="col-md-6">
				                    <div class="form-group">
				                        <label><i class="icon-calendar-7"></i> Check in</label>
				                        <input class="date-pick form-control required" data-date-format="M d, D" type="date" name="" id="check_in_hotel">
				                    </div>
				                </div>
				                <hr>
				                <div class="col-md-6">
				                     <div class="form-group">
				                        <label><i class="icon-calendar-7"></i> Check out</label>
				                        <input class="date-pick form-control required" data-date-format="M d, D" type="date" name="" id="check_out_hotel">
				                    </div>
				                </div>		 -->		                
				                <hr>
								@if(count(gettingRooms($roomdetails->id)) >0 )
									<div class="col-md-6">
						               	<div class="form-group" style="position:relative">
											<label>Room Number</label>
											<select class="form-control required" name="room_number">
												<option value="">-- Room Number --</option>
												<option value=""> </option>
												@foreach(gettingRooms($roomdetails->id) as $number)
													<option value="{{$number->room_number}}">Room {{$number->room_number}}</option>
												@endforeach
											</select>
										</div>
									</div>
									</div><br>
						            
						            <button type="submit" class="btn_full">BOOK THE ROOM</button>
						        @else
						        	<h6><b><p style="color: red">All The Rooms in {{$roomdetails->type_name}} Category are Booked Already</p></b></h6>
						        @endif
					            <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
					            <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to Favourite</a>
			            </form>
			            		<!-- END SEND MAIL SCRIPT -->   
			        </div><!--/box_style_1 -->
			        
			        <div class="box_style_4">
			            <i class="icon_set_1_icon-90"></i>
			            <h4><span>Book</span> by phone</h4>
			            <a href="tel://004542344599" class="phone">+234 8138 139 333 <br> +234 9072 281 206</a>
			            <small>Monday to Sunday 24/7 Support</small>
			            <small>support@glorioushotel.com.ng</small>
			        </div>

			        <!-- <div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Full Name</label>
											<input class="form-control required" name="full_name" id="name_hotel_booking" type="text">
										</div>
									</div>
								</div> -->

								<!-- <div class="form-group" style="position:relative">
									<label>Email</label>
									<input class="form-control required" type="email" name="email_hotel_booking" id="email_hotel_booking" name="email">
								</div>
								<div class="form-group" style="position:relative">
									<label>Telephone</label>
									<input class="form-control required" type="text" name="phone_number" id="phone_hotel_booking">
								</div> -->
			        
			    </aside>
			     
			    </div><!--End row -->
		    </div><!--End container -->
	    <div id="overlay"></div><!-- Mask on input focus --> 
    </main><!-- End main -->
@endsection