@extends('admin.masterad')
@section('title','DashBoard')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Jobs</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Job detail</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
									@foreach($joblist as $job)
										<label>Job title</label>
										<p>{{$job->title}}</p>
									</div>
									<div class="form-group" >
										<label>Salary</label>
										<p>{{$job->Salary}}</p>
									</div>
									<div class="form-group" >
										<label>Expired date</label>
										<p>{{$job->Expired_date}}</p>
									</div>
									
									<div class="form-group" >
										<label>Requirement</label>
										<p class="text-justify">{!!$job->Requirement!!}</p>
									</div>
									
									<div class="form-group" >
										<label>Description</label>
										<p class="text-justify">{!!$job->Job_description!!}</p>
									</div>
									<div class="form-group" >
										<label>Category</label>
										<p>{{$job->name}}</p>
									</div>
									
									<input type="submit" name="submit" value="Check" class="btn btn-primary">
									<a href="{{asset('admin/home')}}" class="btn btn-danger">Cancel</a>
									@endforeach
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
	