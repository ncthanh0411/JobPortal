@extends('layouts.app')

@section('content')
    <h1> Jobs</h1>
    <div class='chobao'>
        @if (count($jobs) > 1)
            @foreach ($jobs as $job)
                <div class = "well">
                    <h3> <a href="{{asset('jobs/'.$job->id)}}"> {{$job->title}}</h3></a>
                    <p>{{$job->Job_description}}</p>
                    <p>Expired date: {{$job->Expired_date}}</p>
                    <p>{{$job->Salary}}</p>
                </div>
            @endforeach
        @else
            <p>No jobs found</p>
        @endif
    </div>
@endsection