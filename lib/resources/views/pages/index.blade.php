@extends('layouts.app')

@section('content')
<link href="css/home.css" rel="stylesheet">
    <div class="home">
        <h3>Employers</h3>
        <div class="row">
<<<<<<< HEAD
  
            <div class="col-lg-3">
                <img src="https://www.w3schools.com/howto/img_avatar.png" style="width:100%;">
                <div class="container">
                    <h5><b>Name</b></h5>
                    <p style="color:red;"><span>5</span> Jobs</p>
                </div> 
            </div>
    
=======
            @foreach($com1 as $com2)
                <div class="col-lg-3">
                    <a href="{{asset('student/Company/'.$com2->id_com)}}" style="text-decoration:none">
                    <div class="container">
                        <img src="{{asset('lib/storage/app/avatar/'.$com2->logo)}}" style="width:100%; ">
                    </div>
                    <div class="container">
                        <h5><b>{{$com2->companyname}}</b></h5>
                    </div>
                    </a>
                </div>
            @endforeach
>>>>>>> 68798dc11cb5608bee6fc804bfa50202e5af07d6
        </div>
        <h3>Recent Jobs</h3>

    </div>
@endsection