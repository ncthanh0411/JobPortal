@extends('backend.master')
@section('title','Company Profile')
@section('main')

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">CV Student</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">CV Student</div>
					<div class="panel-body">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Student</label>
										<input required type="text" name="name" class="form-control" value="{{$data->name}}" disabled>
									</div>
									<div class="form-group" >
										<label>Email</label>
                                        <input required type="text" name="name" class="form-control" value="{{$data->email}}" disabled>
                                    </div>
                                    <div class="form-group" >
										<label>Phone</label>
                                        <input required type="text" name="name" class="form-control" value="{{$data->phone}}" disabled>
                                    </div>
                                    <div class="form-group" >
										<label>Major</label>
                                        <input required type="text" name="name" class="form-control" value="{{$data->major}}" disabled>
									</div>
                                    <embed src="{{asset('lib/storage/app/cv/'.$data->CV)}}" width="100%" height="700px" />
								</div>
							</div>
				
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->


@stop