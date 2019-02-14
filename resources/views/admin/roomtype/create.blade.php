@extends("layouts.newheader")
    @section("content")
    <div class="clearfix"></div>
    <div class="content-wrapper">
   		<div class="container-fluid">
   			<div class="row pt-2 pb-2">
		        <div class="col-sm-9">
				    <ol class="breadcrumb">
				    	<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
				    	<li class="breadcrumb-item"><a href="{{route('type.create')}}">Add Room Type</a></li>
				    	<li class="breadcrumb-item"><a href="{{route('room.create')}}">Add Room</a></li>
			            <li class="breadcrumb-item active" aria-current="page">Saved Room Types</li>
			         </ol>
			   	</div>
			</div>
   			<div class="row">
		    	<div class="col-lg-12">

		    		@include('layouts.message')
		          	<div class="card">
		            	<div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add The Room Type Details</div>
	            		<div class="card-body">
	            			<form action="{{route('type.save')}}" method="POST" enctype="multipart/form-data">
	            				{{ csrf_field() }}
		            			
		            			<div class="form-group row ">
		            				<div class="col-sm-4">
					                    <input type="file" class="form-control" name="type_banner" required placeholder="Enter Name">
					                    <span style="color: red">** This Field is Required **</span>
					                     @if ($errors->has('type_banner'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <div class="alert-icon contrast-alert">
										            <i class="fa fa-check"></i>
										        </div>
										        <div class="alert-message">
										            <span><strong>Error!</strong> {{ $errors->first('type_banner') }} !</span>
										        </div>
										    </div>
                                        @endif  
					                 </div>
					                <div class="col-sm-4">
					                    <input type="text" class="form-control"  name="type_name" placeholder="Enter Type Name" min="4" required>
					                    <span style="color: red">** This Field is Required **</span>
					                     @if ($errors->has('type_name'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <div class="alert-icon contrast-alert">
										            <i class="fa fa-check"></i>
										        </div>
										        <div class="alert-message">
										            <span><strong>Error!</strong> {{ $errors->first('type_name') }} !</span>
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

					                <div class="col-sm-4">
					                    <input type="number" class="form-control" name="max_guest" required placeholder="Enter Max Guest">
					                    <span style="color: red">** This Field is Required **</span>
					                     @if ($errors->has('max_guest'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <div class="alert-icon contrast-alert">
										            <i class="fa fa-check"></i>
										        </div>
										        <div class="alert-message">
										            <span><strong>Error!</strong> {{ $errors->first('max_guest') }} !</span>
										        </div>
										    </div>
                                        @endif  
					                 </div>
					                 <div class="col-sm-4">
					                    <textarea  class="form-control" cols="2" name="description"></textarea>
					                    <span style="color: red">** This Field is Required **</span>
					                     @if ($errors->has('description'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <div class="alert-icon contrast-alert">
										            <i class="fa fa-check"></i>
										        </div>
										        <div class="alert-message">
										            <span><strong>Error!</strong> {{ $errors->first('description') }} !</span>
										        </div>
										    </div>
                                        @endif  
					                 </div>
					                 <input type="hidden" name="status" value="1">
					                 <div class="col-sm-4" align="center">
					                      <button type="submit" class="btn btn-primary">ADD THE ROOM TYPE DETAILS</button>
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
		          		@if(count($type) ==0)
			            	<div class="card-header" align="center" style="color: red"><i class="fa fa-table"></i> The List is Empty
			            	</div>

			            @else
			            	<div class="card-header"><i class="fa fa-table"></i> List of Saved Room Types</div>
		            		<div class="card-body">
		              			<div class="table-responsive">
		              				<table id="example" class="table table-bordered">
		              					<thead>
						                    <tr>
						                        <th>S/N</th>
						                        <th>Type Banner</th>
						                        <th>Type Name</th>
						                        <th>Max Guest</th>
						                        <th>Amount</th>
						                        <th>Description</th>
						                    </tr>
						                </thead>

						                <tfoot>
						                    <tr>
						                        <th>S/N</th>
						                        <th>Type Banner</th>
						                        <th>Type Name</th>
						                        <th>Max Guest</th>
						                        <th>Amount</th>
						                        <th>Description</th>
						                    </tr>
						                </tfoot>
						                <tbody>
						                	<?php $number =1; ?>
						                	@foreach($type as $types)
							                    <tr>
							                        <td>{{$number}}
							                        	<a href="{{route('type.delete', $types->id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
							                        	<a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>
							                        </td>
							                        <td><img src="{{asset('room_types/'.$types->type_banner)}}" class="logo-icon" alt="logo icon" style="width: 50px; height: 50px"> </td>
							                        <td>{{$types->type_name}}</td>
							                        <td>{{$types->max_guest}}</td>
							                        <td>&#8358;<?php echo number_format($types->amount) ?></td>
							                        <td>{{$types->description}}</td>
							                       
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