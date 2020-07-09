<div class="card-body">
    <div class="card-title" >
        <div class="input-group md-form form-sm form-1 pl-0">
            <div class="input-group-prepend">
                <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fa fa-search"
                aria-hidden="true"></i></span>
            </div>
            <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
        </div>
    </div>
    
    <div class="card-text" id="text-cate" style="margin-top:5px">
        @foreach($categories as $cate)
        <a href="{{asset('jobs')}}/{{$cate->name}}" style="text-decoration: none">
            <div class="row">
                <div class="col-md-12" id="list-cate">
                    <button type="button" class="btn btn-outline-dark" id="categories">{{$cate->name}}</button>
                </div>
            </div>
        </a>
        @endforeach
    </div>
   
</div>