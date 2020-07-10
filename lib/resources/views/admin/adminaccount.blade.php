@extends('admin.masterad')
@section('title','DashBoard')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Manage Account</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">List of students</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/CreateAccount/')}}" class="btn btn-primary">Create Account</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Student name</th>
											<th>Student email</th>
											<th>Student major</th>
											
											<th>Option</th>
											
										</tr>
									</thead>
									<tbody>
									@foreach($studentlist as $student)
										<tr>
											<td>{{$student->id_stu}}</td>
											<td>{{$student->name}}</td>											
											<td>{{$student->email}}</td>
											<td>{{$student->major}}</td>
											
											
											<td style="text-align:center">
												<a href="{{asset('admin/watchcv/'.$student->id_stu)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Watch CV</a>
												<a onclick="return confirm('Are you sure?')" href="{{asset('admin/delete/'.$student->id_stu)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
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