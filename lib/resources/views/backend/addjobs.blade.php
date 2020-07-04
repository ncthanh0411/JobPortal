@extends('backend.master')
@section('title','Company Profile')
@section('main')

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add New Jobs</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Job addition</div>
					<div class="panel-body">
						<form method="post" action = "{{url('jobs')}}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Job title</label>
										<input required type="text" name="name" class="form-control">
									</div>
									<div class="form-group" >
										<label>Salary</label>
										<input required type="number" name="price" class="form-control">
									</div>
									<div class="form-group" >
										<label>Description</label>
										<textarea class="ckeditor" required name="description"></textarea>
									</div>
									<div class="form-group" >
										<label>Requirement</label>
										<textarea class="ckeditor" required name="requirement"></textarea>
									</div>
									
									<div class="form-group" >
										<label>Expired date</label>
										<input required type="text" name="ex_date" class="form-control">
									</div>
								
									<div class="form-group" >
										<label>Category</label>
										<select required name="cate" class="form-control">
											<option value="1">Java</option>
											<option value="2">PHP</option>
											<option value="3">Testing</option>
											<option value="4">Python</option>
					                    </select>
									</div>
									<input type="submit" name="submit" value="Add" class="btn btn-primary">
									<a href="{{asset('admin/listjob')}}" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->


@stop