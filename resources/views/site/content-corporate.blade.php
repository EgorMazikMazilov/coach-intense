@foreach($corporate as $corp)
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="containerHeader">
                @if(Session::get('locale') == 'ru')
                    {{$corp->corporation_title}}
                @else
                    {{$corp->corporation_title_ua}}
                @endif
            </h1>
            <h3>
                @if(Session::get('locale') == 'ru')
                    {{$corp->corporate_head_text}}
                @else
                    {{$corp->corporate_head_text_ua}}
                @endif</h3>
            <p><img src="/assets/img/corporate/{{$corp->corporation_img}}" alt="{{str_limit($corp->corporation_content,25)}}" class="img-responsive contentDifImg"></p>
            <p class="aboutText">
                @if(Session::get('locale') == 'ru')
                    {{$corp->corporation_content}}
                @else
                    {{$corp->corporation_content_ua}}
                @endif
            </p>
        </div>
    </div>
</div>
@endforeach