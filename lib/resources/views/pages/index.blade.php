@extends('layouts.app')

@section('content')
<link href="css/home.css" rel="stylesheet">
    <div class="home">
        <h3>Employers</h3>
        <div class="row">
            @foreach
            <div class="col-lg-3">
                <img src="https://www.w3schools.com/howto/img_avatar.png" style="width:100%;">
                <div class="container">
                    <h5><b>Name</b></h5>
                    <p style="color:red;"><span>5</span> Jobs</p>
                </div> 
            </div>
            @endforeach
        </div>
    </div>
@endsection