<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="footerImg">
                    <img src="{{asset('assets/img/header_logo.png')}}" alt="Логотип Панский Выбор" class="img-responsive"></a>
                </div>
            </div>

<div class="col-md-9 hidden-xs ">
    <ul class="footMenu text-right">
        <li><a href="{{route('buy')}}">{{trans('translate.buy')}}</a></li>
        <li class="footMenuLink1"><a href="#products">{{trans('translate.produkciya')}}</a></li>
        <li class="footMenuLink1"><a href="#news">{{trans('translate.news')}}</a></li>
        <li><a href="{{route('aboutCorporateGovernance')}}">{{trans('translate.corporate')}}</a></li>
        <li><a href="{{route('aboutShareholders')}}">{{trans('translate.acioner')}}</a></li>
        <li><a href="{{route('aboutMissionAndValuess')}}">{{trans('translate.mission')}}</a></li>
    </ul>
</div>
            <div class="row hidden-sm hidden-xs">
                <div class="col-md-12">
                    <div class="footerSocialXS footerSocialXSRight text-right">
                        <a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 hidden-lg hidden-md">
                <div class="footerSocialXS text-center">
                    <a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>

                </div>
            </div>
            {{--<div class="col-md-12 col-xs-12">--}}
                {{--<div class="developer text-center"><p class="developerText">develop with love by</p><a href="//uaitlab.com" target="_blank"><img src="{{asset('assets/img/uaitlab_logo.png')}}" alt="uaitlab" class="img-responsive"></a></div>--}}
            {{--</div>--}}
        </div>
    </div>
</footer>