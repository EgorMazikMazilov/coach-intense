<section id="headerImg">
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="newsHeaderImg">
                    <img src="{{asset('assets/img/products_head_img.png')}}" class="img-responsive" alt="">
                </div>

            </div>
            <div class="col-xs-12 col-md-12">
                <div class="navbar-header">
                <div class="productsMenu hidden-md hidden-lg">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="categoryLine">
                        <h2>каталог продукции</h2>
                    </div>
                </div>
                </div>
                <div class="navbar-collapse collapse" id="navbar-collapse-1" style="height: 0px;">
                    <ul class="nav navbar-nav">
                        @foreach($categories as $item)
                            <li><a href="{{route('productsOneList',$item->cat_id)}}">{{$item->title}}</a></li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="productList">
    <div class="container">
        <div class="row">
            @foreach($categories as $item)

            <div class="col-xs-12 ccol-sm-6 col-md-4 ">
                <div class="productWrapp">
                    <div class="productImg"><img src="/assets/img/{{$item->category_img}}" class="img-responsive" alt=""></div>
                    <div class="productText">
                        <a href="{{route('productsOneList', $item->cat_id)}}"> <h2>{{$item->title}}</h2></a>
                    </div>

                </div>
            </div>
        @endforeach
            <!-- /.col-xs-12 col-md-3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#productList -->
