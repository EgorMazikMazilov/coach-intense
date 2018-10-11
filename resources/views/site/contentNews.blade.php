<section id="headerImg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="newsHeaderImg">
                    <img src="{{asset('assets/img/newsHeaderImg.jpg')}}" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /#headerImg -->
<section id="newsList">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="containerHeader">
                    новости
                </h1>
            </div>
        </div>
        @if($news->count())
            @foreach($news as $item)
                @if($item->is_active == 1)

                <div class="row">
                    <div class="col-xs-12 col-md-3 col-md-offset-1">
                        <div class="newsImg">
                            <img src="assets/img/{{$item->img}}" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <div class="newsDate">{{$item->date}}</div>
                        <div class="newsListHeader">{{$item->title}}</div>
                        <div class="newsPrevText">
                            {{strip_tags(html_entity_decode(str_limit($item->content,150)))}}
                            <div class="newsLink">
                                <a href="{{route('get-post', $item->alias)}}" class="btn">Подробнее</a>
                            </div>
                        </div>
                        <div class="newsListDevidor"></div>

                    </div>

                </div>
                @endif
            @endforeach
            @endif



    </div>
</section>
<!-- /#newsList -->