@extends('layouts.app')

@section('content')
<style>
    #logo {
        width: 100%;
    }

    .info {
        background-color: rgb(97, 199, 230);
        color: white;
        padding: 10px;
        border-radius: 20px;
        margin-bottom: 20px;
    }

     .buttons {
    text-align: center;
    }

    .btn-hover {
        width: 200px;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
        margin: 20px;
        height: 55px;
        text-align:center;
        border: none;
        background-size: 300% 100%;

        border-radius: 50px;
        /* moz-transition: all .4s ease-in-out; */
        -o-transition: all .4s ease-in-out;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
    }

    .btn-hover:hover {
        background-position: 100% 0;
        /* moz-transition: all .4s ease-in-out; */
        -o-transition: all .4s ease-in-out;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
    }

    .btn-hover:focus {
        outline: none;
    }

    .btn-hover.color-1 {
        background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
        box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
    }

    .bi {
        margin-right: 7px;
    }

    .btn {
        text-align: right;
    }

     #description {
        text-overflow: ellipsis;
        overflow: hidden;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
    }
    .card {
        margin: 20px;
        margin-left: 100px;
        margin-right: 100px;
        margin-bottom: 20px;
        height:50%;
        border: 1px solid;
        text-decoration: none;
        margin-top: 10px;
        box-shadow: 0 1px 2px rgba(0,0,0,0.15);
        transition: box-shadow 0.3s ease-in-out;
        cursor: pointer;
    }
    .card:hover{
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
    .card-title {
        text-overflow: ellipsis;
        overflow: hidden;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
    }
    .card-title:hover{
        color:red;
    }
    
</style>
<link href="css/home.css" rel="stylesheet">
    <div class="home">
        <h3><b>Employers</b></h3>
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
        <hr style="border: dashed 3px gray">
        <a style="float: right" href="{{asset('/jobs')}}">See more</a>
        <h3><b>Recent Jobs</b></h3>
        
        <br>
        @foreach($job as $job)
            @if ($job->Status == 1)    
                <div class="card" id="list-right">
                    <div class="row">
                        
                        <div class="col-md-4" id="col-img" style="text-align:center; padding-top:5%; padding-bottom:5%">
                            <a href="{{asset('/jobs')}}/{{$job->id_job}}" id="title">
                                <img class="card-img" src="{{asset('lib/storage/app/avatar/'.$job->logo)}}">
                            </a>
                        </div>
                        
                        <div class="col-md-8" >
                            <div class="card-body" >
                                <a href="{{asset('/jobs')}}/{{$job->id_job}}" id="title" style="text-decoration: none; color:black">
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