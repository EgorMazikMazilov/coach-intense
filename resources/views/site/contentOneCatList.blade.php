<section id="headerImg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="newsHeaderImg">
                    <img src="{{asset('assets/img/products_head_img.png')}}" class="img-responsive" alt="">
                </div>

            </div>
            <div class="col-xs-12 col-md-12 hidden-md hidden-lg secondMenu">
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
                            <li class="{{Request::path() == 'category/'.$item->alias ? 'active' : ''}}"><a href="{{route('categoriesOne',$item->cat_id)}}">{{$item->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-12 hidden-xs hidden-sm">
                <div class="categoryBigMenuWrap">
                    <div class="menuHeader">
                        <p>каталог продукции</p>
                    </div>
                    <div class="categoryBigMenu">
                        @foreach($val as $item => $k)
                            <li><a href="{{route('categoriesOne',$k)}}">{{$item}}</a></li>
                        @endforeach
                    </div>
                </div>
                <!-- /.categoryBigMenu -->
            </div>
            <!-- /.col-md-12 -->
        </div>
    </div>
</section>
<section id="allItem">
    <div class="container">
        @foreach($val2 as $item => $k)
        <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h1 class="containerHeader">
                            {{$item}}

                        </h1>

                        @foreach($getOne as $info)
                            @if($info->cat_id == $k)

                            <div class="col-xs-12 col-md-3">
                                <div class="productWrapp">
                                    <div class="productImg"><img src="/assets/img/{{$info->img_head}}" class="img-responsive" alt=""></div>
                                    <div class="productText">
                                        <a href="{{route('productsOneList',$info->alias)}}"> <h2>{{$info->title}}</h2></a>

                                    </div>

                                </div>
                            </div>
                            @endif
                            @endforeach
                        <div class="newsDevider"></div>

                        <!-- /.col-md-3 -->
                    </div>
        </div><!-- /row -->
            <div class="row">

            </div>
        @endforeach

        <!-- /.row -->
    </div><!-- /.container -->
</section><!-- /#allItem -->