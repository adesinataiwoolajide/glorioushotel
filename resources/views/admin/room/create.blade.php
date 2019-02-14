@extends("layouts.newheader")
    @section("content")
    <div class="clearfix"></div>
    <div class="content-wrapper">
   		<div class="container-fluid">
   			<div class="row pt-2 pb-2">
		        <div class="col-sm-9">
				    <ol class="breadcrumb">
				    	<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
				    	<li class="breadcrumb-item"><a href="{{route('room.create')}}">Add Room</a></li>
				    	<li class="breadcrumb-item"><a href="{{route('type.create')}}">Add Room Type</a></li>
			            <li class="breadcrumb-item active" aria-current="page">Saved Rooms</li>
			         </ol>
			   	</div>
			</div>
   			<div class="row">
		    	<div class="col-lg-12">

		    		@include('layouts.message')
		          	<div class="card">
		            	<div class="card-header"><i class="fa fa-table"></i> Please Fill The Below Form To Add The Room Type Details</div>
	            		<div class="card-body">
	            			<form action="{{route('room.save')}}" method="POST" enctype="multipart/form-data">
	            				{{ csrf_field() }}
		            			
		            			<div class="form-group row ">
		            				<div class="col-sm-5">
					                    <input type="number" class="form-control" name="room_number" required placeholder="Enter Number">
					                    <span style="color: red">** This Field is Required **</span>
					                     @if ($errors->has('room_number'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <div class="alert-icon contrast-alert">
										            <i class="fa fa-check"></i>
										        </div>
										        <div class="alert-message">
										            <span><strong>Error!</strong> {{ $errors->first('room_number') }} !</span>
										        </div>
										    </div>
                                        @endif  
					                 </div>
					                <div class="col-sm-4">
					                    <select class="form-control" required="" name="type_id">
					                    	<option value="">-- Select The Room Type --</option>
					                    	<option value=""></option>
					                    	@foreach($type as $list)
					                    		<option value="{{ $list->id}}">{{ $list->type_name}}</option>
					                    	@endforeach
					                    </select>
					                    <span style="color: red">** This Field is Required **</span>
					                     @if ($errors->has('type_id'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
										        <button type="button" class="close" data-dismiss="alert">&times;</button>
										        <div class="alert-icon contrast-alert">
										            <i class="fa fa-check"></i>
										        </div>
										        <div class="alert-message">
										            <span><strong>Error!</strong> {{ $errors->first('type_id') }} !</span>
										        </div>
										    </div>
                                        @endif  
					                </div>

					                
					                 <div class="col-sm-3" align="center">
					                      <button type="submit" class="btn btn-primary">ADD THE ROOM DETAILS</button>
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
		          		@if(count($room) ==0)
			            	<div class="card-header" align="center" style="color: red"><i class="fa fa-table"></i> The List is Empty
			            	</div>

			            @else
			            	<div class="card-header"><i class="fa fa-table"></i> List of Saved Rooms</div>
		            		<div class="card-body">
		              			<div class="table-responsive">
		              				<table id="example" class="table table-bordered">
		              					<thead>
						                    <tr>
						                        <th>S/N</th>
						                        <th>Room Number</th>
						                        <th>Type Name</th>
						                    </tr>
						                </thead>

						                <tfoot>
						                    <tr>
						                        <th>S/N</th>
						                        <th>Room Number</th>
						                        <th>Type Name</th>
						                    </tr>
						                </tfoot>
						                <tbody>
						                	<?php $number =1; ?>
						                	@foreach($room as $rooms)
							                    <tr>
							                        <td>{{$number}}
							                        	<a href="{{route('room.delete', $rooms->id)}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
							                        	<a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>
							                        </td>
							                        <td>{{$rooms->room_number}}</td>
							                        <td>
							                        	@foreach(gettingRoomType($rooms->type_id) as $low)
							                        		{{$low->type_name}}
							                        	@endforeach
							                        </td>
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