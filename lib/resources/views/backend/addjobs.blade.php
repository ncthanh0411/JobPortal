<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Addproduct | Kachi shop</title>
<base href="{{asset('public/layout/backend')}}/">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/lumino.glyphs.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
					<div class="panel-heading">Job addition</div>
					<div class="panel-body">
						<form method="post" action = "{{url('jobs')}}" enctype="multipart/form-data">
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
										<textarea required name="description"></textarea>
									</div>
									<div class="form-group" >
										<label>Requirement</label>
										<input required type="text" name="requirement" class="form-control">
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
