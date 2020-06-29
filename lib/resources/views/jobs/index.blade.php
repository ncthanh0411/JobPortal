@extends('layouts.app')

@section('content')


<div class="bao">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" id="card-left">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="input-group md-form form-sm form-1 pl-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fa fa-search"
                                    aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                        <div class="card-text" id="text-cate">
                            <div class="row">
                                <div class="col-md-12" id="list-cate">
                                    <button type="button" class="btn btn-outline-dark" id="categories">Categories</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @foreach($jobss as $job)
                    <div class="card " id="list-right">
                        <div class="row">
                            <div class="col-md-4" id="col-img">
                                <img class="card-img" src="https://fpt.vn/storage/upload/images/site/fpt.png">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title" ><a href="#" id="title">{{$job->title}}</a></h3>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p class="card-text" id="salary"><i class="fa fa-dollar"><a href="#"> {{$job->Salary}}</a></i></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="card-text" id="city"><i class='fa fa-map-marker'></i> city</p>
                                        </div>
                                    </div>
                                    
                                    <p class="card-text" id="description"> {{$job->Job_description}}</p>
                                    <span id="{{$job->id}}">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </span>
                                    
                                </div>
                                
                                
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                $("#{{$job->id}}").click(function(){
                                    if($("#{{$job->id}}").hasClass("liked")){
                                        $("#{{$job->id}}").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
                                        $("#{{$job->id}}").removeClass("liked");
                                    }else{
                                        $("#{{$job->id}}").html('<i class="fa fa-heart" aria-hidden="true"></i>');
                                        $("#{{$job->id}}").addClass("liked");
                                    }
                                    });
                                });
                            </script>       
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
</div>
@endsection