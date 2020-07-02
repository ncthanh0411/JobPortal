<!DOCTYPE html>
<html>
<head>
<base href="{{asset('public/layout/backend')}}/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Addproduct | Kachi shop</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/lumino.glyphs.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Company Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li><a href="#"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="active"><a href="#"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> List of jobs</a></li>
			<li><a href="#"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Profile</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Jobs</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Job detail</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Job title</label>
										<p>Java Developer</p>
									</div>
									<div class="form-group" >
										<label>Salary</label>
										<p>30.000.000 VND</p>
									</div>
									<div class="form-group" >
										<label>Expired date</label>
										<p>25/08/2020</p>
									</div>
									<div class="form-group" >
										<label>Amount</label>
										<p>10</p>
									</div>
									<div class="form-group" >
										<label>Requirement</label>
										<p class="text-justify">LILOTECH Technology Solution Company specializes in providing information technology software, solutions and services at the request of customers. 
											LILOTECH products and services are built by experienced IT professionals and experts in deploying services and solutions for domestic and foreign businesses. 
											Come to LILOTECH, customers will be consulted fully and in detail about IT products and services provided by LILOTECH based on customers' requirements. 
											LILOTECH believes in its knowledge and experience to bring the best quality of service and satisfaction to our customers.</p>
									</div>
									
									<div class="form-group" >
										<label>Description</label>
										<p class="text-justify">LILOTECH Technology Solution Company specializes in providing information technology software, solutions and services at the request of customers. 
											LILOTECH products and services are built by experienced IT professionals and experts in deploying services and solutions for domestic and foreign businesses. 
											Come to LILOTECH, customers will be consulted fully and in detail about IT products and services provided by LILOTECH based on customers' requirements. 
											LILOTECH believes in its knowledge and experience to bring the best quality of service and satisfaction to our customers.</p>
									</div>
									<div class="form-group" >
										<label>Category</label>
										<p>Java</p>
									</div>
									<a href="#" class="btn btn-danger">Cancel</a>
								</div>
							</div>
						</form>
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
		});
		function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		        var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#img').click();
		    });
		});
	</script>	
</body>

</html>
