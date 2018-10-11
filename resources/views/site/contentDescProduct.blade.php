<section id="productList">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-md-6">

                    <div class="singleProduct">
                        <div class="productText">
                            @if(Session::get('locale') == 'ru')
                                <h2>{{$products [0]->title}}</h2>
                            @else
                                <h2>{{$products [0]->title_ua}}</h2>
                            @endif

                        </div>
                    </div>
                <div class="headProductSlider">
                @foreach($products_img as $item)

                        <div class="slider"><img src="/assets/img/{{$item->img}}" alt="" class="img-responsive"></div>
                        @endforeach
                </div>
                    <div class="productBottomText">

                    </div>

            </div>
            <!-- /.col-xs-12 col-md-3 -->
            <div class="col-xs-12 col-md-6">
                <div class="productdescText">
                    <h3>Описание:</h3>
                    @if(Session::get('locale') == 'ru')
                        <p>{!! $products ['0']->description!!}</p>
                    @else
                        <p>{!! $products ['0']->description_ua!!}</p>
                    @endif

                </div>
                <div class="productdescText">
                    <h3>{{trans('translate.see_more')}}:</h3>
                    @if(Session::get('locale') == 'ru')
                        <p>{!! $products ['0']->content!!}</p>
                    @else
                        <p>{!! $products ['0']->content_ua!!}</p>
                    @endif

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#productList -->
<div class="partnersPageDevidor"></div>
<section id="recommends">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="containerHeader">
                    так же рекомендуем
                </h1>
            </div>
            @foreach($sameProducts as $item)
                <div class="col-xs-12 col-md-3">
                    <div class="productWrapp">
                        <div class="productImg"><img src="/assets/img/{{$item->img_head}}" class="img-responsive" alt=""></div>
                        <div class="productText">
                            <a href="{{route('productsOneList', $item->alias)}}"> <h2>{{$item->title}}</h2></a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section><!-- /#recommends -->
