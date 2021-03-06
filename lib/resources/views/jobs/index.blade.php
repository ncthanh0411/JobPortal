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
            <div class="card overflow-auto" >
                <div class="card-body">
                @foreach($job as $job)
                @if ($job->Status == 1)    
                    <div class="card" id="list-right">
                        <div class="row">
                            
                            <div class="col-md-4" id="col-img" style="text-align:center; padding-top:5%; padding-bottom:5%">
                                <a href="{{asset('/jobs')}}/{{$job->id_job}}" id="title">
                                    <img class="card-img" src="{{asset('lib/storage/app/avatar/'.$job->logo)}}" style="margin:20px">
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
            </div>
            </div>
        </div>
    </div>
</div>
@endsection