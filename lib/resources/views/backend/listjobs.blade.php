@extends('backend.master')
@section('title','Company Profile')
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
								<a href= "{{asset('company/listjob/addJob')}}" class="btn btn-primary">Add jobs</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Job tilte</th>
											<th>Salary</th>
											<th>Amount</th>
											<th>Category</th>
											<th>Status</th>
											<th>Edit</th>
											<th>Delete</th>
											
										</tr>
									</thead>
									<tbody>
										
										@foreach ($data as $job)
											<tr>
												<td>{!!$job->id!!}</td>
												<td>{!!$job->title!!}</td>											</td>
												<td>{{$job->Salary}}</td>
												<td>{{$job->Expired_date}}</td>
												@if ($job->categories_id == 1)
													<td>Java</td>
												@endif	
												@if ($job->categories_id == 2)
													<td>PHP</td>
												@endif
												@if ($job->categories_id == 3)
													<td>Testing</td>
												@endif
												@if ($job->categories_id == 4)
													<td>Python</td>
												@endif	
												@if ($job->Status == 0)
													<td style="color:red">PENDING</td>
												
												@else 
													<td style="color:green">APPROVED</td>
												@endif
												<td>

													<a href="#" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
												</td>
												<td>
													<form  method="POST" action="{{action('JobsController@destroy',$job->id)}}">
													{{csrf_field()}}
													<input type="hidden" name="_method" value="DELETE">
													<button type="submit" class="btn btn-danger"> Delete</button>
													</form>
													
												</td>
											</tr>
										@endforeach	
									</tbody>

									@if(\Session::has('success'))
										<div class = "alert alert-success">
											<p> {{ Session::get('success')}}</p>
										</div>
									@endif
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop