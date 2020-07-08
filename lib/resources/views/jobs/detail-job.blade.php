@extends('layouts.app')

@section('content')
<style>
    .detail-job #logo {
        width: 100%;
    }

    .detail-job .info {
        background-color: rgb(97, 199, 230);
        color: white;
        padding: 10px;
        border-radius: 20px;
        margin-bottom: 20px;
    }

    .detail-job .buttons {
    text-align: center;
    }

    .detail-job .btn-hover {
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

    .detail-job .btn-hover:hover {
        background-position: 100% 0;
        /* moz-transition: all .4s ease-in-out; */
        -o-transition: all .4s ease-in-out;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
    }

    .detail-job .btn-hover:focus {
        outline: none;
    }

    .detail-job .btn-hover.color-1 {
        background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
        box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
    }

    .detail-job .bi {
        margin-right: 7px;
    }

    .detail-job .btn {
        text-align: right;
    }

    .detail-job #description {
        text-overflow: ellipsis;
        overflow: hidden;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
    }
    
</style>

@if(\Session::has('success'))
    <script type='text/javascript'>alert('{{ Session::get('success')}}');</script>
@endif


<div class="detail-job">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 style="font-weight: bold;">{{$job_t->title}}</h2>
                <a href="{{asset('student/Company/'.$job_t->id_com)}}" style="color: gray;">{{$job_t->companyname}}</a>
                <hr style="border-top: 3px dashed #bbb;">
                <div class="col-lg-12">
                    <h4><b>Job Description</b></h4>
                    <p>{!!$job_t->Job_description!!}</p>
                </div>

                <div class="col-lg-12">
                    <h4><b>Job Requirement</b></h4>
                    <p>{!!$job_t->Requirement!!}</p>
                </div>
            </div>

            <div class="col-lg-4">
                <img id="logo" src="{{asset('lib/storage/app/avatar/'.$job_t->logo)}}">
                <div class="buttons">
                @if(isset(Auth::guard('student')->user()->id_stu))
                    @foreach ($manage as $ma)
                        @if($ma->jobs_id == $job_t->id_job)
                            <p hidden>{{$temp = 1}}</p>
                            <button id = "btnalready" class="btn-hover color-1" onclick="myFunction()">Apply</button>
                        @endif
                    @endforeach
                    @if( $temp == 0)
                        <form method="post" action = "{{url('addCV')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" id = "jobID" name = "jobID" value = "{{ $job_t->id_job }}">
                            <input type="hidden" id = "studentID" name = "studentID" value = "{{ Auth::guard('student')->user()->id_stu }}">
                            <input type="submit" name="submit" value="APPLY" class="btn-hover color-1">
                        </form>
                    @endif
                @elseif(isset(Auth::guard('admin')->user()->id) == false and isset(auth()->user()->id_com) == false)
                    <a href="{{asset('student/login')}}"><button class="btn-hover color-1">APPLY</button></a>
                @endif
                </div>
                <div class="info">
                    <h4 style="text-align: center; font-weight: bold;">Job Info</h4>
                    <hr style="border-top: 3px solid rgb(211, 211, 211);">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Location:</p>
                            <p>Technology:</p>
                            <p>Salary:</p>
                            <p>Expired Date:</p>
                        </div>
                        <div class="col-lg-6">
                            <p>{{$job_t->location}}</p>
                            <p>{{$job_t->name}}</p>
                            <p>{{$job_t->Salary}}<span> $</span></p>
                            <p>{{$job_t->Expired_date}}</p>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <h4 style="text-align: center; font-weight: bold;">About Company</h4>
                    <hr style="border-top: 3px solid rgb(211, 211, 211);">

                    <p><svg width="1rem" height="1rem" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                        <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                    </svg> {{$job_t->location}}</p>

                    <p><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                    </svg> {{$job_t->phone}}</p>

                    <p><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                    </svg> {{$job_t->email}}</p>

                    <p id="description"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                        <circle cx="8" cy="4.5" r="1"/>
                    </svg>{{$job_t->introduction}}</p>
                    
                    <div style="width: 100%; text-align: right;">
                        <button type="button" class="btn btn-light"><a href="{{asset('student/Company/'.$job_t->id_com)}}" style="text-decoration: none">See more</a></button>
                    </div>
                </div>
            </div>
        </div>
 
    </div>
</div>

<script>
    	function myFunction() {
		
      alert('You have already apply CV to this job');
    }
</script>

@endsection