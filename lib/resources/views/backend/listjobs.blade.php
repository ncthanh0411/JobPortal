<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Product | Kachi shop</title>
<base href="{{asset('public/layout/backend')}}/">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	
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
								<a href="#" class="btn btn-primary">Add jobs</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Job tilte</th>
											<th>Salary</th>
											<th>Amount</th>
											<th>Category</th>
											<th>Status</th>
											<th>Option</th>
											
										</tr>
									</thead>
									<tbody>
										
										@foreach ($data as $job)
											<tr>
												<td>{{$job->title}}</td>
												<td>{{$job->Job_description}}</td>											</td>
												<td>{{$job->Salary}}</td>
												<td>{{$job->Expired_date}}</td>
												<td>Fullstack</td>
												<td>{{$job->status}}</td>
												<td>
													<a href="#" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
													<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
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
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});
		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
