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
					<div class="panel-heading">List of jobs</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Job tilte</th>
											<th>Salary</th>
											<th>Expired date</th>
											<th>Category</th>
											<th>Status</th>
											<th>Option</th>
											
										</tr>
									</thead>
									<tbody>
									@foreach($joblist as $job )
										<tr>
											<td>{{$job->id_job}}</td>
											<td>{!!$job->title!!}</td>											</td>
											<td>{{$job->Salary}}</td>
											<td>{{$job->Expired_date}}</td>
											<td>{{$job->name}}</td>
											@if ($job->Status == 0)
												<td style="color:red">PENDING</td>
												
											@else 
												<td style="color:green">APPROVED</td>
											@endif
											<td style="text-align:center;">			
												<a href="{{asset('admin/watch/'.$job->id_job)}}" class="btn btn-danger" ><i class="fa fa-trash" aria-hidden="true" ></i> View</a>
											</td>
									@endforeach
										</tr>
										
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		  
@stop
	
