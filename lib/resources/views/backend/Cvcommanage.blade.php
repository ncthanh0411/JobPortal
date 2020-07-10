@extends('backend.master')
@section('title','Company Profile')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Manage CV apply</h1> 
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">List of CV applied</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<!-- <th>ID</th> -->
											<th width="30%">Job tilte</th>
											<th>Name Student</th>
											<th>Day Create</th>
											
											<th>Watch CV</th>
											
										</tr>
									</thead>
									<tbody>
										
										@foreach ($data as $job)
											<tr>
												<!-- <td>{!!$job->id_job!!}</td> -->
												<td>{!!$job->title!!}</td>											
												<td>{{$job->name}}</td>
												<td>{{$job->Expired_date}}</td>

												<!-- @if ($job->status == 0)
													<td style="color:red">PENDING</td>
												
												@else 
													<td style="color:green">APPROVED</td>
												@endif -->

												<td style="text-align:center">

													<a href="{{asset('company/watchcv/student')}}/{{$job->student_id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Watch CV</a>
												</td>

											</tr>
										@endforeach	
									</tbody>

	
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