
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center sticky-top" style="background: linear-gradient(to left, #0062E6, #33AEFF); margin-bottom: 40px">
    <!-- Brand/logo -->
    
        <a class="navbar-brand lefts" href="{{asset('/')}}">JobWork</a>
        
        <!-- Links -->
    
        <ul class="navbar-nav left">
            <li class="nav-item">
                <a class="nav-link" href="{{asset('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('/jobs')}}">Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('/about')}}">About</a>
            </li>
        </ul>


        <!-- Right -->
        <ul class="navbar-nav ml-auto right" >
            <li class="nav-item">

                @if(isset(Auth::guard('student')->user()->id))
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        {{Auth::guard('student')->user()->name}}
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Link 1</a>
                      <a class="dropdown-item" href="#">Link 2</a>
                      <a class="dropdown-item" href="{{asset('logouts')}}"> Logout</a>
                    </div>
                </div>

                @else
                    <a class="nav-link" href="{{asset('/choose')}}">Login</a>
                @endif
            </li>
        </ul>
   
</nav>