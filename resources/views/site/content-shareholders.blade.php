@foreach($shares as $share)
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="containerHeader">
                    @if(Session::get('locale') == 'ru')
                        {{$share->title}}
                    @else
                        {{$share->title_ua}}
                    @endif
                </h1>
                <p><img src="/assets/img/shares/{{$share->share_img}}" alt="{{str_limit($share->content,25)}}" class="img-responsive contentDifImg"></p>
                <p class="aboutText">
                    @if(Session::get('locale') == 'ru')
                        {{$share->content}}
                    @else
                        {{$share->content_ua}}
                    @endif
                </p>

            </div>
        </div>
    </div>
@endforeach