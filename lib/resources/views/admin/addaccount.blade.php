@extends('admin.masterad')
@section('title','DashBoard')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		
		<div class="row">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Register For Student</div>
				<div class="panel-body">
					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
								{{$err}}<br>
							@endforeach
						</div>
					@endif

					@if(session('thanhcong'))
						<div class="alert alert-success">
							{{session('thanhcong')}}
						</div>
					@endif
					<form role="form"  method="POST">
						<input type="hidden" name="_token" value={{csrf_token()}}>
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Student name" name="studentname" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail student" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Student major" name="studentmajor" type="text" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>

							<div class="form-group">
								<input class="form-control" placeholder="Re-Password" name="re_password" type="password" value="">
							</div>
							<input type="submit" name="submit" value="Register" class="btn btn-primary" >
							
						</fieldset>
					</form>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

@stop