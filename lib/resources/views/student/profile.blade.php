@extends('layouts.app')

@section('content')


<link href="css/profile.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>




<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1>{{$st->name}}</h1></div>
        
    </div>
    
    <div class="row">
        <div class="col-sm-3"><!--left col-->
                

            <div class="text-center">
            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
           
            </div></hr><br>
            

        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
                <li><a data-toggle="tab" href="#changePwd">Change Password</a></li>
                <li><a data-toggle="tab" href="#cv">CV</a></li>
                
                </ul>

                
            <div class="tab-content">
            <div class="tab-pane active" id="home">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">
                            
                            <div class="col-xs-12">
                                <label for="first_name"><h4>Your name</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" value="{{$st->name}}" title="enter your first name if any.">
                            </div>
                        </div>
                        
            
                        <div class="form-group">
                            
                            <div class="col-xs-12">
                                <label for="phone"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" value="{{$st->phone}}" title="enter your phone number if any." >
                            </div>
                        </div>
            
                        
                        <div class="form-group">
                            
                            <div class="col-xs-12">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email" value="{{$st->email}}" title="enter your email." disabled>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            
                            <div class="col-xs-12">
                                <label for="phone"><h4>Your major</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" value="{{$st->major}}" title="enter your phone number if any." >
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                
                            </div>
                        </div>
                </form>
                    </div>
                </div>
                    
                
            
                
            </div>
            <div class="tab-pane" id="changePwd">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">
                                
                                <div class="col-xs-12">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">
                                
                                <div class="col-xs-12">
                                <label for="password2"><h4>Verify</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Re-password" title="enter your password2.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="tab-pane" id="cv">
                <input type="file" name="cv" id="file" style="display:none" >
                <label for="file" id="selector">Select file</label>
                <!-- <embed src="selector.pdf" width="100%" height="600px" /> -->
                
            </div>
            
            </div>

        </div>
    </div>
</div>
                                                      


@endsection