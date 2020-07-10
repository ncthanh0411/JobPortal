@extends('layouts.app')

@section('content')

<link href="css/cs.css" rel="stylesheet">

<div class="container mx-6">
  <div class="row">
    @include('include.profile-nav')
    <div class="col-md-8">
        <div class="card" id="wc">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Your CV</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <form method="post" action = "{{ asset('student/Cv')}}/{{$st->id_stu}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                        @if($st->CV == '')
                            <input type="file" name="cv" id="file" style="display:none" onchange="myFunction()" accept="application/pdf">
                            <label for="file" id="selector">Select file</label>
                            <p id ="btnSave"></p>
                    
                        @else
                            <input type="file" name="cv" id="file" style="display:none"onchange="myFunction()" accept="application/pdf" >
                            <label for="file" id="selector">Select file</label>
                            <p id ="btnSave"></p>
                            <p id ="showCV"><embed src="{{asset('lib/storage/app/cv/'.$st->CV)}}" width="100%" height="600px" /> </p>
                    
                            
                        @endif
                    </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  </div>
</div>
<script>
    function myFunction() {

        var f = document.getElementById("file");
        if(f.value != ""){
            console.log(f.value);
            document.getElementById("selector").innerHTML = f.value;
            document.getElementById("btnSave").innerHTML = " <input type='submit' name='submit' value='Update' class='btn btn-primary'>";

        }
    }
</script>



@endsection