<div class="col-md-4 ">
    <div class="card" id="right" >
        <div class="card-body">
            <div class="text-center">

            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="rounded-circle" alt="avatar">
            <br><br>
            <h1 style="font-size: 28px;">{{$st->name}}</h1>
            </div>
            <div class="list-group " >
               
                <a href="{{asset('student/profile')}}" class="list-group-item list-group-item-action borderless"><i class="fas fa-address-card"></i>    Profile</a>
               
                <a href="{{asset('student/changePwd')}}" class="list-group-item list-group-item-action borderless"><i class="fa fa-key" aria-hidden="true"></i>    Change Password</a>
                
                <a href="{{asset('student/Wishlist')}}" class="list-group-item list-group-item-action borderless"><i class="fas fa-heart"></i>    Wish List</a>
                <a href="{{asset('student/Cv')}}" class="list-group-item list-group-item-action borderless"><i class="fa fa-cloud-upload" aria-hidden="true"></i>    CV</a>

            </div>
        </div>
        
        
    </div>
</div>

<script>
    $(document).ready(function() {
        $('a').click(function() {
            $('a.active').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>

