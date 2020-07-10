@extends('layouts.app')

@section('content')

<link href="css/cs.css" rel="stylesheet">

<div class="container mx-6">
@if(\Session::has('success'))
    <div class = "alert alert-success" role="alert">
       {{ session('success')}}
    </div>
@endif
  <div class="row">
    @include('include.profile-nav')
    <div class="col-md-8" id="left-pro">
        <div class="card">
            <div class="card-body">
            
                <div class="row">
                    <div class="col-md-12">
                        <h4>Your Profile</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                    <form method="post" action = "{{ asset('student/update-profile')}}/{{$st->id_stu}}">
                            {{ csrf_field() }}
                            
                        <div class="form-group row">

                                <label for="first_name" class="col-4 col-form-label">Your Name</label>
                            <div class="col-8">
                                <input type="text" class="form-control here" required="required" name="first_name" id="first_name" value="{{$st->name}}" title="enter your first name if any." >
                            </div>
                        </div>
                        
            
                        <div class="form-group row">
                            <label for="phone"class="col-4 col-form-label">Phone</label>
                            <div class="col-8">
                                <input type="text" class="form-control here" required="required" name="phone" id="phone" value="{{$st->phone}}" title="enter your phone number if any." >
                            </div>
                        </div>
            
                        
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email</label>
                            <div class="col-8">
                                <input type="email" class="form-control here" required="required" name="email" id="email" value="{{$st->email}}" title="enter your email." disabled>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="phone" class="col-4 col-form-label">Your Major</label>
                            <div class="col-8">
                                <input type="text" class="form-control here" required="required" name="phone" id="phone" value="{{$st->major}}" title="enter your phone number if any."disabled >
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                
                                <button class="btn btn-primary pull-right" type="submit"> Save</button>
                                
                            </div>
                        </div>
                        
                    </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  </div>
</div>



@endsection