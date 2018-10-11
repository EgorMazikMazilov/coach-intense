@foreach($mission as $miss)
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6">

            <h1 class="containerHeader">
                {{trans('translate.mission_title')}}
            </h1>
            <p><img src="/assets/img/mission/{{$miss->mission_img}}" alt="{{str_limit($miss->mission_text,25)}}" class="img-responsive"></p>
            <p class="aboutText">

                @if(Session::get('locale') == 'ru')
                    {{$miss->mission_text}}
                    @else
                    {{$miss->mission_text_ua}}
                    @endif
            </p>
        </div>
        <div class="col-xs-12 col-md-6">
            <h1 class="containerHeader">
                {{trans('translate.cennosti_title')}}
            </h1>
            <p><img src="/assets/img/mission/{{$miss->cennosti_img}}" alt="{{str_limit($miss->cennosti_text,25)}}" class="img-responsive"></p>
            <p class="aboutText">

                @if(Session::get('locale') == 'ru')
                    {{$miss->cennosti_text}}
                @else
                    {{$miss->cennosti_text_ua}}
                @endif

            </p>
        </div>
    </div>
</div>
    @endforeach