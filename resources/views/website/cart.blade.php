@extends("layouts.web-head")
    @section("content")
    <?php $web_name = "Glorious Empire Hotels"; ?>

    <section id="hero_2">
		<div class="intro_title">
			<h1>Place your order</h1>
			<div class="bs-wizard row">

				<div class="col-4 bs-wizard-step active">
					<div class="text-center bs-wizard-stepnum">Your cart</div>
					<div class="progress">
						<div class="progress-bar"></div>
					</div>
					<a href="#" class="bs-wizard-dot"></a>
				</div>

				<div class="col-4 bs-wizard-step disabled">
					<div class="text-center bs-wizard-stepnum">Your details</div>
					<div class="progress">
						<div class="progress-bar"></div>
					</div>
					<a href="payment_hotel.html" class="bs-wizard-dot"></a>
				</div>

				<div class="col-4 bs-wizard-step disabled">
					<div class="text-center bs-wizard-stepnum">Finish!</div>
					<div class="progress">
						<div class="progress-bar"></div>
					</div>
					<a href="confirmation_hotel.html" class="bs-wizard-dot"></a>
				</div>

			</div>
			<!-- End bs-wizard -->
		</div>
		<!-- End intro-title -->
	</section>
	<!-- End Section hero_2 -->
	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a>
					</li>
					<li><a href="#">Category</a>
					</li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- End position -->


		<div class="container margin_60">
			<div class="row">
				@if (count($cart) > 0)
					<div class="col-lg-8">
					
                        <h2 style="font-size: 14px; margin-top: 50px; color: black; margin: auto;">
                            {{count($cart) }} item(s) in Booking Cart</h2>  
                        <hr>    
						<div class="alert alert-info" role="alert"><strong>Rooms available</strong> for the selected dates.
							<br>PLEASE SELECT YOUR QUANTITY.
						</div>
						<table class="table table-striped cart-list add_bottom_30">
							<thead>
								<tr>
									<th>Room Image</th>
									<th>Room Type</th>
									<th>Room Number</th>
									<th>Per night</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $total = 0 ?>
								@if(session('cart'))
									@foreach($cart as $id => $details)
										<?php $total += $details['price'] * $details['quantity'] ?>
										<tr>
											<td>
												<div class="thumb_cart">
													<a href="#" data-toggle="modal" data-target="#modal_single_room">
														@foreach(gettingRoomTypeName($details['type_name']) as $ban)
															<img src="{{asset('room_types/'.$ban->type_banner)}}" alt="{{$details['type_name']}}">
														@endforeach
													</a>
												</div>
												<span class="item_cart"><a href="#" data-toggle="modal" data-target="#modal_single_room"></a></span>
											</td>
											<td>{{$details['type_name']}}</td>
											<td>
												{{$details['roomnumber']}}
											</td>
											<td>
												<strong>&#8358;{{number_format($details['price'])}}</strong>
											</td>
											<td><a href="{{ route("cart.remove", $id) }}"> <i class="fa fa-trash-o">Remove </i></a></td>
										</tr>
									@endforeach
								@endif
							</tbody>
						</table>
						<!-- <table class="table table-striped options_cart">
							<thead>
								<tr>
									<th colspan="3">
										Add options / Services
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<i class="icon_set_1_icon-26"></i>
									</td>
									<td>
										Pick up service <strong>+$34*</strong>
									</td>
									<td>
										<label class="switch-light switch-ios float-right">
											<input type="checkbox" name="option_2" id="option_2" value="">
											<span>
	                    					<span>No</span>
											<span>Yes</span>
											</span>
											<a></a>
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<i class="icon_set_1_icon-15"></i>
									</td>
									<td>
										Welcome bottle <strong>+$24</strong>
									</td>
									<td>
										<label class="switch-light switch-ios float-right">
											<input type="checkbox" name="option_4" id="option_4" value="" checked>
											<span>
	                    					<span>No</span>
											<span>Yes</span>
											</span>
											<a></a>
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<i class="icon_set_1_icon-59"></i>
									</td>
									<td>
										Coffe break <strong>+$12*</strong>
									</td>
									<td>
										<label class="switch-light switch-ios float-right">
											<input type="checkbox" name="option_5" id="option_5" value="" checked>
											<span>
	                    					<span>No</span>
											<span>Yes</span>
											</span>
											<a></a>
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<i class="icon_set_1_icon-58"></i>
									</td>
									<td>
										Dinner <strong>+$26*</strong>
									</td>
									<td>
										<label class="switch-light switch-ios float-right">
											<input type="checkbox" name="option_6" id="option_6" value="">
											<span>
	                    					<span>No</span>
											<span>Yes</span>
											</span>
											<a></a>
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<i class="icon_set_1_icon-40"></i>
									</td>
									<td>
										Bike rent <strong>+$26*</strong>
									</td>
									<td>
										<label class="switch-light switch-ios float-right">
											<input type="checkbox" name="option_7" id="option_7" value="">
											<span>
	                    					<span>No</span>
											<span>Yes</span>
											</span>
											<a></a>
										</label>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="add_bottom_15"><small>* Prices for person.</small>
						</div> -->
					
					</div>

					<aside class="col-lg-4">
						
						@if(session('cart'))
							@foreach($cart as $id => $details)
								<?php 
								$total =+ $details['price'] * $details['quantity'];
								//array_push($total, $cal);
								 ?>
								<div class="box_style_1">
									<h3 class="inner">- Summary -</h3>
									<table class="table table_summary">
										<tbody>
											<tr>
												<td>
													Check in
												</td>
												<td class="text-right">
													{{$details['check_in']}}
												</td>
											</tr>
											<tr>
												<td>
													Check out
												</td>
												<td class="text-right">
													{{$details['check_in']}}
												</td>
											</tr>
											<tr>
												<td>
													Rooms
												</td>
												<td class="text-right">
													{{$details['room_number']}}
												</td>
											</tr>
											<tr>
												<td>
													Nights
												</td>
												<td class="text-right">2
												</td>
											</tr>
											<tr>
												<td>
													Adults
												</td>
												<td class="text-right">
													2
												</td>
											</tr>
											<tr>
												<td>
													Children
												</td>
												<td class="text-right">
													0
												</td>
											</tr>
											<tr>
												<td>
													Welcome bottle
												</td>
												<td class="text-right">
													$34
												</td>
											</tr>
											<tr class="total">
												<td>
													Total cost
												</td>
												<td class="text-right">
													{{(number_format($total))}}
												</td>
											</tr>
										</tbody>
									</table>
									<button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
			                        
									<a href="{{ route("cart.destroy") }}"  class="btn_full">
                                        CLEAR THE BOOKING CART
                                    </a>
									<a class="btn_full" href="payment_hotel.html">Book now</a>
									<a class="btn_full_outline" href="single_hotel.html"><i class="icon-right"></i> Modify your search</a>
								</div>
								<div class="box_style_4">
									<i class="icon_set_1_icon-57"></i>
									<h4>Need <span>Help?</span></h4>
									<a href="tel://004542344599" class="phone">+45 423 445 99</a>
									<small>Monday to Friday 9.00am - 7.30pm</small>
								</div>
							@endforeach
						@endif
					</aside>
				@else
					<div class="col-lg-12">
						<div class="alert alert-danger" role="alert">
							<p align="center"><strong>Booking Details</strong> Your Booking List is Empty </p>
							<a href="{{route('roomcategories')}}"></a>
						</div>
					</div>

				@endif
				<!-- End aside -->
			</div>
			<!--End row -->
		</div>
		<!--End container -->
		
	</main>
	
@endsection