@extends('backend.master')
@section('title','Edit Company Profile')
@section('main')
			
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Profile</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Profile Editing</div>
					<div class="panel-body">
						@include('errors.note')
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Username</label>
										<input required type="text" name="Username" class="form-control" value="{{$profile->username}}">
									</div>
									<div class="form-group" >
										<label>Company name</label>
										<input required type="text" name="Companyname" class="form-control" value="{{$profile->companyname}}">
									</div>
									<div class="form-group" >
										<label>logo</label>
										@if($profile->logo=='')
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
										<img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
										@else
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
										<img id="avatar" class="thumbnail" width="300px" src="{{asset('lib/storage/app/avatar/'.$profile->logo)}}">
										@endif

									</div>
									<div class="form-group" >
										<label>Location</label>
										<input required type="text" name="Location" class="form-control" value="{{$profile->location}}">
									</div>
									<div class="form-group" >
										<label>Phone</label>
										<input required type="text" name="Phone" class="form-control" value="{{$profile->phone}}">
									</div>
									<div class="form-group" >
										<label>Email</label>
										<input required type="email" name="Email" class="form-control" value="{{$profile->email}}">
									</div>
									<div class="form-group" >
										<label>Introduction</label>
										<textarea class="ckeditor" required name="Introduction">{{$profile->introduction}}</textarea>
									</div>
									<input type="submit" name="submit" value="Update" class="btn btn-primary">
									<a href="{{asset('company/profile')}}" class="btn btn-danger">Cancel</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
