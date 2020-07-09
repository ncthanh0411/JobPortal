<div class="card-body">
    <div class="card-title" >
        <div class="input-group md-form form-sm form-1 pl-0">
            <form action="{{asset('/search')}}" method="get">
                <div class="form-group">
                    <div class="row">
                        <div class = "col-sm-8">
                            <input  class="form-control my-0 py-1" type="search" name = "search" placeholder="Search" aria-label="Search">
                        </div>
                        <div class = "col-sm-4">
                            <button type="submit" class="btn" >
                            <span class="input-group-text purple lighten-3 form-group-btn" id="basic-text1"><i class="fa fa-search"
                                aria-hidden="true"> </i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
           
        </div>
    </div>
    
    <div class="card-text" id="text-cate" style="margin-top:5px">
        @foreach($categories as $cate)
        <a href="{{asset('/')}}{{$cate->name}}" style="text-decoration: none">
            <div class="row">
                <div class="col-md-12" id="list-cate">
                    <button type="button" class="btn btn-outline-dark" id="categories">{{$cate->name}}</button>
                </div>
            </div>
        </a>
        @endforeach
    </div>
   
</div>