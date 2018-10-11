<section id="headerImg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="newsHeaderImg">
                    <img src="{{asset('assets/img/news/'.$news->img)}}" class="img-responsive" alt="{{$news->title}}">
                </div>
            </div>
        </div>
    </div>
</section><!--//headerImg  -->
<section id="newsList">
    <div class="container">
        <row>
            <div class="col-xs-12 col-md-6">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1 class="containerHeader">
                                    {{$news->title}}
                                </h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                {{strip_tags(html_entity_decode($news->content))}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                {{--<div class="newsListImg">--}}
                                    {{--<img src="/assets/img/{{$news->img}}" alt="{{$news->title}}" class="img-responsive">--}}
                                {{--</div>--}}
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">

            </div>
        </row>
    </div>
</section>
<!-- /#newsList -->
