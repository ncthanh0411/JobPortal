@extends('backend.master')
@section('title','Company Profile')
@section('main')
			
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Company profile</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Company Image
						</div>
						<div class="panel-body">
							<div class="form-group">
							@if($item->logo=='')
								<img id="avatar" class="thumbnail" width="100%" src="img/upload-cloud.png">
							@else
								<img id="avatar" class="thumbnail" width="100%" src="{{asset('lib/storage/app/avatar/'.$item->logo)}}">
							@endif
							</div>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Company profile</div>
					<div class="panel-body">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3>{{$item->companyname}}</h3>
							<div class="row">
								
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									
									<p>Username: {{$item->username}}</p>
									<p>Location: {{$item->location}}</p> 
									@if($item->phone=='')
									<p>Phone: <span style="color:red">Update your phone number.<span></p>
									@else
									<p>Phone: {{$item->phone}}</p>
									@endif
									<p>Email: {{$item->email}}</p>
								</div>
							</div>							
						</div>
						<div id="product-detail">
							<h3>Introduction</h3>
							@if($item->introduction=='')
							<p class="text-justify">Update your introduction.</p>
							@else
							<p class="text-justify">{!!$item->introduction!!}</p>
							@endif
							
						</div>
						<p class="add-cart text-center" ><a class="btn btn-primary" href="{{asset('company/profile/EditProfile/'.$item->id_com)}}">Edit profile</a></p>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
