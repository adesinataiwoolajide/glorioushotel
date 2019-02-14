@extends("layouts.newheader")
    @section("content")
    <div class="clearfix"></div>

	<div class="content-wrapper">
   		<div class="container-fluid">
   			<div class="row mt-3">
    			<div class="col-12 col-lg-6 col-xl-3">
		         	<div class="card gradient-deepblue">
		           		<div class="card-body">
		              		<h5 class="text-white mb-0">{{count($reservation)}} <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
		                	<div class="progress my-3" style="height:3px;">
		                   		<div class="progress-bar" style="width:55%"></div>
		                	</div>
		              		<p class="mb-0 text-white small-font">Reservation <span class="float-right">{{count($reservation)}}% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
		            	</div>
		         	</div> 
		       </div>
			    <div class="col-12 col-lg-6 col-xl-3">
			        <div class="card gradient-orange">
			            <div class="card-body">
			              	<h5 class="text-white mb-0">{{count($room)}}  <span class="float-right"><i class="fa fa-usd"></i></span></h5>
			                <div class="progress my-3" style="height:3px;">
			                   	<div class="progress-bar" style="width:55%"></div>
			                </div>
			              <p class="mb-0 text-white small-font">Hotel Rooms <span class="float-right">{{count($room)}} % <i class="zmdi zmdi-long-arrow-up"></i></span></p>
			            </div>
			         </div>
			    </div>
			    <div class="col-12 col-lg-6 col-xl-3">
			        <div class="card gradient-ohhappiness">
			            <div class="card-body">
			              	<h5 class="text-white mb-0">{{count($room_type)}}  <span class="float-right"><i class="fa fa-eye"></i></span></h5>
			                <div class="progress my-3" style="height:3px;">
			                   <div class="progress-bar" style="width:55%"></div>
			                </div>
			              <p class="mb-0 text-white small-font">Room Types <span class="float-right">{{count($room_type)}} % <i class="zmdi zmdi-long-arrow-up"></i></span></p>
			            </div>
			        </div>
			    </div>
			    <div class="col-12 col-lg-6 col-xl-3">
			        <div class="card gradient-ibiza">
			            <div class="card-body">
			              	<h5 class="text-white mb-0">{{count($payment)}}  <span class="float-right"><i class="fa fa-envira"></i></span></h5>
			                <div class="progress my-3" style="height:3px;">
			                   <div class="progress-bar" style="width:55%"></div>
			                </div>
			              	<p class="mb-0 text-white small-font">Payment <span class="float-right">{{count($payment)}} % <i class="zmdi zmdi-long-arrow-up"></i></span></p>
			            </div>
			        </div>
			    </div>

     		</div>
     		<div class="row">
     			@foreach($part as $types)
	                
	                <div class="col-12 col-lg-6 col-xl-3">
					  	<div class="card">
							<div class="card-body" align="center">
							 	<img src="{{asset('room_types/'.$types->type_banner)}}" alt="Card image cap" class="avatar-img rounded" style="width: 100px; height: 100px;" align="center">
							   <p align="">{{$types->type_name}}</p>
						  </div>
					  </div>
				   </div>

	            @endforeach
            </div>
    		<div class="row mt-3">
    			<div class="col-12 col-lg-6 col-xl-3">
		         	<div class="card gradient-deepblue">
		           		<div class="card-body">
		              		<h5 class="text-white mb-0">{{count($guest)}} <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
		                	<div class="progress my-3" style="height:3px;">
		                   		<div class="progress-bar" style="width:55%"></div>
		                	</div>
		              		<p class="mb-0 text-white small-font">Guest <span class="float-right">{{count($guest)}}% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
		            	</div>
		         	</div> 
		       </div>
			    <div class="col-12 col-lg-6 col-xl-3">
			        <div class="card gradient-orange">
			            <div class="card-body">
			              	<h5 class="text-white mb-0">{{count($hotel_facility)}}  <span class="float-right"><i class="fa fa-usd"></i></span></h5>
			                <div class="progress my-3" style="height:3px;">
			                   	<div class="progress-bar" style="width:55%"></div>
			                </div>
			              <p class="mb-0 text-white small-font">Hotel Facilities <span class="float-right">{{count($hotel_facility)}} % <i class="zmdi zmdi-long-arrow-up"></i></span></p>
			            </div>
			         </div>
			    </div>
			    <div class="col-12 col-lg-6 col-xl-3">
			        <div class="card gradient-ohhappiness">
			            <div class="card-body">
			              	<h5 class="text-white mb-0">{{count($room_facility)}}  <span class="float-right"><i class="fa fa-eye"></i></span></h5>
			                <div class="progress my-3" style="height:3px;">
			                   <div class="progress-bar" style="width:55%"></div>
			                </div>
			              <p class="mb-0 text-white small-font">Room Facilities <span class="float-right">{{count($room_facility)}} % <i class="zmdi zmdi-long-arrow-up"></i></span></p>
			            </div>
			        </div>
			    </div>
			    <div class="col-12 col-lg-6 col-xl-3">
			        <div class="card gradient-ibiza">
			            <div class="card-body">
			              	<h5 class="text-white mb-0">{{count($room_status)}}  <span class="float-right"><i class="fa fa-envira"></i></span></h5>
			                <div class="progress my-3" style="height:3px;">
			                   <div class="progress-bar" style="width:55%"></div>
			                </div>
			              	<p class="mb-0 text-white small-font">Room Status <span class="float-right">{{count($room_status)}} % <i class="zmdi zmdi-long-arrow-up"></i></span></p>
			            </div>
			        </div>
			    </div>

     		</div>
     		
     		
		    <div class="row mt-3">
			    <div class="col-12 col-lg-6 col-xl-3">
			      	<div class="card gradient-scooter">
			       		<div class="card-body">
			          		<div class="media align-items-center">
			            		<div class="w-icon"><i class="fa fa-users text-white"></i></div>
					            <div class="media-body ml-3 border-left-xs border-white-2">
					              	<h4 class="mb-0 ml-3 text-white">{{count($user)}} </h4>
					              	<p class="mb-0 ml-3 extra-small-font text-white">Users</p>
					            </div>
			          		</div>
			        	</div>
			      	</div>
			    </div>

			    <div class="col-12 col-lg-6 col-xl-3">
			      	<div class="card gradient-bloody">
			       		<div class="card-body">
			          		<div class="media align-items-center">
					            <div class="w-icon"><i class="fa fa-book text-white"></i></div>
					            <div class="media-body ml-3 border-left-xs border-white-2">
			              			<h4 class="mb-0 ml-3 text-white">{{count($reservation)}} </h4>
			              			<p class="mb-0 ml-3 extra-small-font text-white">Reservation</p>
			            		</div>
			          		</div>
			        	</div>
			      	</div>
			    </div>

			    <div class="col-12 col-lg-6 col-xl-3">
			      	<div class="card gradient-quepal">
			       		<div class="card-body">
			          		<div class="media align-items-center">
					            <div class="w-icon"><i class="fa fa-sitemap text-white"></i></div>
					            <div class="media-body ml-3 border-left-xs border-white-2">
					              	<h4 class="mb-0 ml-3 text-white">{{count($log)}} </h4>
			              			<p class="mb-0 ml-3 extra-small-font text-white">Staff Act Log</p>
			            		</div>
			          		</div>
			        	</div>
			      	</div>
			    </div>

			    <div class="col-12 col-lg-6 col-xl-3">
			      	<div class="card gradient-blooker">
			       		<div class="card-body">
					        <div class="media align-items-center">
					            <div class="w-icon"><i class="fa fa-money text-white"></i></div>
					            <div class="media-body ml-3 border-left-xs border-white-2">
			              			<h4 class="mb-0 ml-3 text-white">{{count($service)}}</h4>
			              			<p class="mb-0 ml-3 extra-small-font text-white">Our Services</p>
			            		</div>
			          		</div>
			        	</div>
			      	</div>
			    </div>

		   </div><!--End Row-->
		   
    	</div>
    
    </div>
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
@endsection