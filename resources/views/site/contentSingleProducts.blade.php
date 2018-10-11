<section id="headerImg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="newsHeaderImg">
                    <img src="{{asset('assets/img/products_head_img.png')}}" class="img-responsive" alt="">
                </div>

            </div>


            <div class="col-md-12">
                <div class="categoryBigMenuWrap">
                    <div class="menuHeader">
                        <p>каталог продукции</p>
                    </div>
                    <div class="categoryBigMenu">

                        @foreach($categories as $item)
                            <li class="{{Request::path() == 'category/'.$item->alias ? 'active' : ''}}"><a href="{{route('categoriesOne',$item->cat_id)}}">{{$item->title}}</a></li>
                        @endforeach
                    </div>
                </div>
                <!-- /.categoryBigMenu -->
            </div>
            <!-- /.col-md-12 -->
        </div>
    </div>
</section>
<section id="productList">
    <div class="container">
        <div class="row">
            <h1 class="containerHeader">
                {{stripcslashes($prodinfo[0] -> title)}}
            </h1>
            @foreach($products as $item)

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="productWrapp">
                        <div class="productImg"><img src="/assets/img/{{$item->img_head}}" class="img-responsive" alt="{{$item->title}}"></div>
                        <div class="productText">
                            <a href="{{route('productsOneList', $item->alias)}}"> <h2>{{$item->title}}</h2></a>
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
