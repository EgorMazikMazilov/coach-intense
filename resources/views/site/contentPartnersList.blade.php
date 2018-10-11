<section id="partnerList">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-7">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="containerHeader">

                            {{$partners ['0']->title}}
                        </h1>
                        <div class="partnerListImg">
                            <img src="/assets/img/{{$partners ['0']->img}}" class="img-responsive" alt="{{$partners ['0']->title}}">
                        </div>
                        <div class="partnerListContent">
                            {{$partners ['0']->content}}
                        </div>
                    </div>
                        </div>
                    </div><!-- //col-xs-12 col-md-6 -->
            <div class="col-xs-12 col-md-5">
                <div class="partnerListLogo">
                    <img src="/assets/img/{{$partners ['0']->img_logo}}" class="img-responsive" alt="{{$partners ['0']->title}}">
                </div>
                <div class="partnersListDevider"></div>
                <div class="partnerListContacts">
                    {{--{{$partners ['0']->partner_contacts}}--}}

                </div>
                @if($partners ['0']->img_certificate)
                <div class="partnersListDevider"></div>

                <div class="certificate">
                <h2 class="containerHeader">
                    сертификаты
                </h2>
                @foreach($partners as $item)


                    @if(count($item->img_certificate)>2)
                        <div class='col-xs-12 col-md-4'>
                            @else
                                <div class='col-xs-12 col-md-6'>
                                @endif
                                    <img src="/assets/img/{{$item->img_cetificate}}"  class="img-responsive" alt="">
                                    <p class="certificate_text">{{$item->certificate_text}}</p>
                                </div>

                @endforeach
            </div><!-- //col-xs-12 col-md-6 -->
            </div>
                @endif
                </div>
            </div>

        </div>
    </div>
</section><!-- /#partnerList -->
<div class="partnersPageDevidor"></div>
<section id="recommends">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="containerHeader">
                    так же рекомендуем
                </h1>
            </div>

            @foreach($partnersRecomend as $item)

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