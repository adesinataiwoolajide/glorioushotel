@extends("layouts.newheader")
    @section("content")
    <div class="clearfix"></div>
    <div class="content-wrapper">
   		<div class="container-fluid">
   			<div class="row pt-2 pb-2">
		        <div class="col-sm-9">
				    <ol class="breadcrumb">
				    	<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
				    	<li class="breadcrumb-item"><a href="{{route('services.create')}}">Add Service</a></li>
			            <li class="breadcrumb-item active" aria-current="page">Saved Hotel Services</li>
			         </ol>
			   	</div>
			</div>
   			<div class="row">
		    	<div class="col-lg-12">

		    		@include('layouts.message')
		          	<div class="card">
		            	<div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add The Service Details</div>
	            		<div class="card-body">
	            			<form action="{{route('services.save')}}" method="POST" enctype="multipart/form-data">
	            				{{ csrf_field() }}
		            			
		            			<div class="form-group row ">
		            				
					                <div class="col-sm-4">
					                    <input type="text" class="form-control"  name="service_name" placeholder="Enter Service Name" min="4" required>
					                    <span style="color: red">** This Field is Required **</span>
					                     @if ($errors->has('service_name'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <div class="alert-icon contrast-alert">
										            <i class="fa fa-check"></i>
										        </div>
										        <div class="alert-message">
										            <span><strong>Error!</strong> {{ $errors->first('service_name') }} !</span>
										        </div>
										    </div>
                                        @endif  
					                </div>

					                <div class="col-sm-4"><?php
					                	$category= array("Indoor", "Outdoor", "Indoor And Outdoor"); ?>
					                    <select class="form-control" required="" name="service_category">
					                    	<option value="">-- Select The Facility Category --</option>
					                    	<option value=""></option>
					                    	@foreach($category as $list)
					                    		<option value="{{ $list}}">{{ $list}}</option>
					                    	@endforeach
					                    </select>
					                    <span style="color: red">** This Field is Required **</span>
					                     @if ($errors->has('service_category'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <div class="alert-icon contrast-alert">
										            <i class="fa fa-check"></i>
										        </div>
										        <div class="alert-message">
										            <span><strong>Error!</strong> {{ $errors->first('service_category') }} !</span>
										        </div>
										    </div>
                                        @endif  
					                </div>


					                <div class="col-sm-4">
					                	<input type="number" class="form-control"  name="amount" placeholder="Enter Amount" min="4" required>
					                    <span style="color: red">** This Field is Required **</span>
					                     @if ($errors->has('amount'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <div class="alert-icon contrast-alert">
										            <i class="fa fa-check"></i>
										        </div>
										        <div class="alert-message">
										            <span><strong>Error!</strong> {{ $errors->first('amount') }} !</span>
										        </div>
										    </div>
                                        @endif  
					                </div>

					                 <div class="col-sm-12" align="center">
					                      <button type="submit" class="btn btn-primary">ADD THE SERVICE DETAILS</button>
					                 </div>
						            
					            </div>
				            </form>
		            	</div>
		            </div>
		        </div>
		    </div>
			 <div class="row">
		    	<div class="col-lg-12">
		          	<div class="card">
		          		@if(count($service) ==0)
			            	<div class="card-header" align="center" style="color: red"><i class="fa fa-table"></i> The List is Empty
			            	</div>

			            @else
			            	<div class="card-header"><i class="fa fa-table"></i> List of Saved Hotel Services</div>
		            		<div class="card-body">
		              			<div class="table-responsive">
		              				<table id="example" class="table table-bordered">
		              					<thead>
						                   <tr>
						                        <th>S/N</th>
						                        <th>Service Name</th>
						                        <th>Service Category</th>
						                        <th>Amount</th>
						                    </tr>
						                </thead>

						                <tfoot>
						                    <tr>
						                        <th>S/N</th>
						                        <th>Service Name</th>
						                        <th>Service Category</th>
						                        <th>Amount</th>
						                    </tr>
						                </tfoot>
						                <tbody>
						                	<?php $number =1; ?>
						                	@foreach($service as $services)
							                    <tr>
							                        <td>{{$number}}
							                        	<a href="{{route('services.delete', $services->id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
							                        	<a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>
							                        </td>
							                        
							                        <td>{{$services->service_name}}</td>
							                        <td>{{$services->service_category}}</td>
							                        <td>&#8358;<?php echo number_format($services->amount) ?></td>
							                       
							                    </tr><?php
							                    $number++; ?>
							                @endforeach
						                </tbody>
						               
		              				</table>
		              			</div>
		              		</div>
		             	@endif
	              	</div>
	            </div>
	        </div>
	     </div>
	</div>


    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
@endsection