@extends('layouts.app')

@section('content')

<link href="css/cs.css" rel="stylesheet">

<div class="container mx-6">
  <div class="row">
    @include('include.profile-nav')
    <div class="col-md-8" id="left-pro">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Change Password</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Current Password</label> 
                                <div class="col-8">
                                    <input id="currentpass" name="currentpass" placeholder="Current Password" class="form-control here" required="required" type="text">
                                </div>
                                </div>

                                <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                <div class="col-8">
                                    <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
                                </div>
                                </div> 
                                <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Verify Password</label> 
                                <div class="col-8">
                                    <input id="verifypass" name="verifypass" placeholder="Verify Password" class="form-control here" type="text">
                                </div>
                                </div>
                                <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary pull-right">Save</button>
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