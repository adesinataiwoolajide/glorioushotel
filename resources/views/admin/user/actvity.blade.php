@extends("layouts.newheader")
    @section("content")
    <div class="clearfix"></div>
    <div class="content-wrapper">
   		<div class="container-fluid">
   			<div class="row pt-2 pb-2">
		        <div class="col-sm-9">
				    <ol class="breadcrumb">
				    	<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
				    	<li class="breadcrumb-item"><a href="{{route('user.activity')}}"> User Activities</a></li>
			            <li class="breadcrumb-item active" aria-current="page">Saved Users</li>
			         </ol>
			   	</div>
			</div>
   			
			 <div class="row">
		    	<div class="col-lg-12">
		          	<div class="card">
		          		@if(count($act) ==0)
			            	<div class="card-header" align="center" style="color: red"><i class="fa fa-table"></i> The Activity List is Empty
			            	</div>

			            @else
			            	<div class="card-header"><i class="fa fa-table"></i> List of Saved User Activities</div>
		            		<div class="card-body">
		              			<div class="table-responsive">
		              				<table id="example" class="table table-bordered">
		              					<thead>
						                    <tr>
						                        <th>S/N</th>
						                        <th>Action</th>
						                        <th>User </th>
						                        <th>Time </th>
						                    </tr>
						                </thead>

						                <tfoot>
						                    <tr>
						                        <th>S/N</th>
						                        <th>Action</th>
						                        <th>User </th>
						                        <th>Time </th>
						                    </tr>
						                </tfoot>
						                <tbody>
						                	<?php $number =1; ?>
						                	@foreach($act as $acts)
							                    <tr>
							                        <td>{{$number}}</td>
							                        <td>{{$acts->action}}</td>
							                        <td>{{$acts->user_details}}</td>
							                        <td>{{$acts->created_at}}</td>
							                       
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