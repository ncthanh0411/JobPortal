@extends('layouts.app')

@section('content')
<link href="css/home.css" rel="stylesheet">
    <div class="home">
        <h3>Employers</h3>
        <div class="row">
            @foreach($com as $com2)
                <div class="col-lg-3">
                    <a href="{{asset('student/Company/'.$com2->id_com)}}" style="text-decoration:none">
                        <div class="col-lg-12" style="height: 60%; ">
                            <div class="container" id="logo" style="text-align:center; ">
                                <img src="{{asset('lib/storage/app/avatar/'.$com2->logo)}}" style="width:100%; ">
                            </div>    
                        </div>
                    
                        <br>
                        <div class="container">
                            <h5 style="text-align:center"><b>{{$com2->companyname}}</b></h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <h3>Recent Jobs</h3>
        @foreach($job as $job)
            @if ($job->Status == 1)    
                <div class="card" id="list-right">
                    <div class="row">
                        
                        <div class="col-md-4" id="col-img" style="text-align:center; padding-top:5%; padding-bottom:5%">
                            <a href="{{asset('/jobs')}}/{{$job->id_job}}" id="title">
                                <img class="card-img" src="{{asset('lib/storage/app/avatar/'.$job->logo)}}">
                            </a>
                        </div>

                        
                        <div class="col-md-8">
                            <div class="card-body" >
                                <a href="{{asset('/jobs')}}/{{$job->id_job}}" id="title">
                                    <h4 class="card-title"><b>{{$job->title}}</b></h4>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p class="card-text" id="salary"><i class="fa fa-dollar"> {{$job->Salary}}</i></p>
                                        </div>

                                        <div class="col-md-9">
                                            <p class="card-text" id="city"><i class='fa fa-map-marker'></i> {{$job->location}}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <p class="card-text" id="description"> {{strip_tags($job->Job_description)}}</p>
                                </a>
                                <span id="{{$job->id_job}}">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div> 
                    
                        
                    </div>    
                    
                        <script type="text/javascript">
                            $(document).ready(function(){
                            $("#{{$job->id_job}}").click(function(){
                                if($("#{{$job->id_job}}").hasClass("liked")){
                                    $("#{{$job->id_job}}").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
                                    $("#{{$job->id_job}}").removeClass("liked");
                                }else{
                                    $("#{{$job->id_job}}").html('<i class="fa fa-heart" aria-hidden="true"></i>');
                                    $("#{{$job->id_job}}").addClass("liked");
                                }
                                });
                            });
                        </script>       
                    
                </div>
            @endif
        @endforeach
    </div>
@endsection