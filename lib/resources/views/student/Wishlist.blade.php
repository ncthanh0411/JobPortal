@extends('layouts.app')

@section('content')

<link href="css/cs.css" rel="stylesheet">

<div class="container mx-6">
  <div class="row">
    @include('include.profile-nav')
    <div class="col-md-8" id="left-2">
    	<div class="card overflow-auto" id="wc">
    		<div class="card-body " >
    			<div class="row">
                    <div class="col-md-12">
                        <h4>Your WishList</h4>
                        <hr>
                    </div>
                </div>
		        <div class="card" id="list-right">

					<div class="row">

						<div class="col-md-4" id="col-img">
							<img class="card-img" src="https://fpt.vn/storage/upload/images/site/fpt.png">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h3 class="card-title" ><a href="#" id="title">10 Senior SAP ABAP Developer</a></h3>
								<div class="row">
									<div class="col-md-2">
										<p class="card-text" id="salary"><i class="fa fa-dollar"><a href="#"> details</a></i></p>
									</div>
									<div class="col-md-3">
										<p class="card-text" id="city"><i class='fa fa-map-marker'></i> city</p>
									</div>
								</div>
								
								<p class="card-text" id="description">Offshore or onsite ABAP development for implementation/roll-out/development/AMS projects
								Review functional specification (FS) and suggest appropriate technical solution
								Write technical specification (TS) based on FS
								Strictly adhere to development guidelines for ABAP development
								Conduct peer review to guarantee adherence to guidelines and templates.</p>
								<span id="heart">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
								</span>
								
							</div>
							
							
						</div>
						
						<script type="text/javascript">
							$(document).ready(function(){
								$("#heart").click(function(){
								if($("#heart").hasClass("liked")){
									$("#heart").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
									$("#heart").removeClass("liked");
								}else{
									$("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
									$("#heart").addClass("liked");
								}
								});
							});
						</script>
						
					</div>
				</div>
                
				
				
			</div>
		</div>
        
    </div>
        
  </div>
</div>



@endsection