
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center sticky-top" style="background: linear-gradient(to left, #0062E6, #33AEFF); margin-bottom: 40px">
    <!-- Brand/logo -->
    
        <a class="navbar-brand lefts" href="{{asset('/')}}">JobPortal</a>
        
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
        <ul class="navbar-nav ml-auto right" style = "margin-right: 10%;" >
            <li class="nav-item">

                @if(isset(Auth::guard('student')->user()->id_stu))
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user-circle"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{asset('/student/profile')}}"><i class="fas fa-address-card"></i>  {{Auth::guard('student')->user()->name}}</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-heart"></i>  Wish List</a>
                      <a class="dropdown-item" href="{{asset('logouts')}}"><i class="fas fa-sign-out-alt"></i>  Logout</a>
                    </div>
                </div>
                @elseif(isset(Auth::guard('admin')->user()->id))
               
                    <a class="nav-link" href="{{asset('admin/home')}}"><i class="fas fa-desktop"></i></a>
                @elseif(isset(auth()->user()->id_com))
               
                    <a class="nav-link" href="{{asset('company/home')}}"><i class="fas fa-laptop"></i></a>
   
                
        
                @else
                    <a class="nav-link" href="{{asset('/choose')}}"><i class="fas fa-sign-in-alt"></i> Login</a>
                @endif
            </li>
        </ul>
   
</nav>