@extends("layouts.web-head")
    @section("content")
    <?php $web_name = "Glorious Empire Hotels"; ?>

    <section id="hero_2" class="restaurant_bg" style="width: ; height: 300px;">
		<div class="intro_title">
			<h1>Room Categories</h1>
			<!-- End bs-wizard -->
		</div>
		<!-- End intro-title -->
	</section>
	<main>

		<div id="position">
			<div class="container">
				<ul>
					<li><a href="{{route('index')}}">Home</a></li>
					<li><a href="{{route('roomcategories')}}">Room Categories</a></li>
					<li>List of Room Categories</li>
				</ul>
			</div>
		</div>
		<!-- End Map -->
		<div class="container margin_60">
			<div class="row">
				<div class="col-lg-9">
					<div class="shop-section">

						<div class="items-sorting">
							<div class="row">
								<div class="col-6">
									<div class="results_shop">
										Showing 1–9 of {{count($room_types)}} results
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<select name="sort-by">
											<option>Sorting by</option>
											<option>Order</option>
											<option>Price</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<!--End Sort By-->

						<div class="row">
							@foreach($room_types as $typo)
								<div class="shop-item col-lg-4 col-md-6 col-sm-6">
									<div class="ribbon_3 popular">
										<span>
											{!! substr($typo->type_name, 0,7) !!} ...
										</span>
									</div>
									<div class="inner-box">
										<div class="image-box">
											<figure class="image">
												<a href="{{route('roomdetails', $typo->id)}}"><img src="{{asset('room_types/'.$typo->type_banner)}}" style="height: 200px;" alt="">
												</a>
											</figure>
											<div class="item-options clearfix">
												<a href="{{route('roomdetails', $typo->id)}}" class="btn_shop"><span class="icon-basket"></span>
	                                            <div class="tool-tip">
	                                                Book Room
	                                            </div>
	                                            </a>
												<a href="{{route('roomdetails', $typo->id)}}" class="btn_shop"><span class="icon-heart-8"></span>
	                                            <div class="tool-tip">
	                                                Add to Fav
	                                            </div>
	                                            </a>
												<a href="{{route('roomdetails', $typo->id)}}" class="btn_shop"><span class="icon-eye"></span>
	                                            <div class="tool-tip">
	                                                View
	                                            </div>
	                                            </a>
											</div>
										</div>
										<div class="product_description">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
											</div>
											<h3><a href="{{route('roomdetails', $typo->id)}}">{{$typo->type_name}}</a></h3>
											<div class="price">
												<span class="offer"><?php
													$money =  (20/100)*$typo->amount; ?>
													&#8358;<b><?php echo number_format($money + $typo->amount); ?></b>
												</span><b><small>*From/Per night</small></b><b>
													 &#8358;<?php echo number_format($typo->amount) ?></b>

											</div><b>Maximum Guest: {{$typo->max_guest}}</b>
											<ul class="add_info">
											<li>
												<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
											</li>
											<li>
												<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
											</li>
											<li>
												<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
											</li>
											<li>
												<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
											</li>
											<li>
												<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
											</li>
										</ul>
										</div>
									</div>
								</div>
							@endforeach
						</div>

						<hr>

						<nav aria-label="Page navigation">
							<ul class="pagination justify-content-center">
								{{$room_types->links()}}
							</ul>
						</nav>
						<!-- end pagination-->
						
					</div>
					<!-- End row -->
				</div>
				<!-- End col -->

				<!--Sidebar-->
				<div class="col-lg-3">
					<aside class="sidebar">
											<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters</a>
						<div class="collapse show" id="collapseFilters">
							<div class="filter_type">
								<h6>Price</h6>
								<input type="text" id="range" name="range" value="">
							</div>
							<div class="filter_type">
								<h6>Star Category</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox"><span class="rating">
											<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i>
											</span>(15)
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox"><span class="rating">
											<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i>
											</span>(45)
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox"><span class="rating">
											<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
											</span>(35)
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox"><span class="rating">
											<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
											</span>(25)
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox"><span class="rating">
											<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
											</span>(15)
										</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
								<h6>Review Score</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox">Superb: 9+ (77)
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Very good: 8+ (552)
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Good: 7+ (909)
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Pleasant: 6+ (1196)
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">No rating (198)
										</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
								<h6>Facility</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox">Pet allowed
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Wifi
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Spa
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Restaurant
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Pool
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Parking
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Fitness center
										</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
								<h6>District</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox">Paris Centre
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">La Defance
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">La Marais
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Latin Quarter
										</label>
									</li>
								</ul>
							</div>
						</div>
						<!--End collapse -->
					</div>
						<div class="box_style_2">
							<i class="icon_set_1_icon-57"></i>
							<h4>Need <span>Help?</span></h4>
							<a href="tel://08138139333" class="phone">08138139333</a>
							<small>Monday to Sunday 24/7 Support</small>
						</div>
						
					</aside>
				</div>
				<!--Sidebar-->
			</div>
		</div>

		
	</main>


@endsection