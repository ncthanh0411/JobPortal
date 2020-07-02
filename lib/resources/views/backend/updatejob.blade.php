@extends('backend.master')
@section('title','Company Profile')
@section('main')

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Job</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Job update</div>
					<div class="panel-body">
						<form method="post" action = "{{action('JobsController@update', $job_update->id)}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value = "PATCH"/>
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Job title</label>
                                        <input required type="text" name="name" class="form-control" value ="{{$job_update->title}}">
									</div>
									<div class="form-group" >
										<label>Salary</label>
										<input required type="number" name="price" class="form-control" value = "{{$job_update->Salary}}">
									</div>
									<div class="form-group" >
										<label>Description</label>
										<textarea class="ckeditor" required name="description"> {{$job_update->Job_description}}</textarea>
									</div>
									<div class="form-group" >
										<label>Requirement</label>
										<textarea class="ckeditor" required name="requirement"> {{$job_update->Requirement}}</textarea>
									</div>
									
									<div class="form-group" >
										<label>Expired date</label>
										<input required type="text" name="ex_date" class="form-control" value = " {{$job_update->Expired_date}}">
									</div>
								
									<div class="form-group" >
										<label>Category</label>
										<select required name="cate" class="form-control">
                                            @if($job_update->categories_id == 1)
                                                <option value="1" selected>Java</option>
                                            @else
                                                <option value="1">Java</option>
                                            @endif
                                            
                                            @if($job_update->categories_id == 2)
                                                <option value="2" selected>PHP</option>
                                            @else
                                                <option value="2">PHP</option>
                                            @endif

                                            @if($job_update->categories_id == 3)
                                                <option value="3" selected>Testing</option>
                                            @else
                                                <option value="3">Testing</option>
                                            @endif

                                            @if($job_update->categories_id == 4)
                                                <option value="4" selected>Python</option>
                                            @else
                                                <option value="4">Python</option>
                                            @endif
					                    </select>
									</div>
                                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
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