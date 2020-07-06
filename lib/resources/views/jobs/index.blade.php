@extends('layouts.app')

@section('content')


<div class="bao">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" id="card-left">
                    @include('include.leftnav')
                </div>
            </div>
            <div class="col-md-8">
                @foreach($jobss as $job)
                @if ($job->Status == 1)    
                    <div class="card " id="list-right">
                        <div class="row">
                            <div class="col-md-4" id="col-img">
                                <img class="card-img" src="https://fpt.vn/storage/upload/images/site/fpt.png">
                            </div>
                            <div class="col-md-8">
                                
                                    <div class="card-body">
                                        <a href="{{asset('/jobs')}}/{{$job->id_job}}" id="title" style="color:black">   
                                            <h3 class="card-title">{{$job->title}}</h3>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="card-text" id="salary" style="color:black"><i class="fa fa-dollar"> {{$job->Salary}}</i></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text" id="city"><i class='fa fa-map-marker'></i> city</p>
                                                </div>
                                            </div>
                                            
                                            <p class="card-text" id="description"> {{$job->Job_description}}</p>
                                        </a>
                                        <span id="{{$job->id_job}}">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        </span>
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
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        </div>
</div>
@endsection