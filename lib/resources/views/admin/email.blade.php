<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('public/layout/frontend')}}/">
	<meta charset="utf-8">
	
					<div id="wrap-inner">
						<div id="khach-hang">
							<h3>Account Information</h3>
							<p>
								<span class="info">Student: </span>
								{{$info['studentname']}}
							</p>
							<p>
								<span class="info">Email: </span>
								{{$info['email']}}
							</p>
							<p>
								<span class="info">Phone: Please enter your phone number after login successfull</span>
							</p>
							<p>
								<span class="info">Major: </span>
								{{$info['studentmajor']}}
							</p>
							<p>
								<span class="info">CV: Please update your CV after login successfull </span>
								
							</p>
							<p>
								<span class="info">password: </span>
								{{$info['password']}}
							</p>
						</div>						
						
						
	<!-- endfooter -->
</body>
</html>