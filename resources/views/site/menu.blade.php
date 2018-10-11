<header id="header" class="">
    @if(isset($menusList))
        <div class="container">
            {{--<!-- logo -->--}}
            <div class="header-logo" id="header-logo">
                <a href="/"><img src="assets/img/logo.png" alt=""/>коучинг интенсив</a>
            </div>
            {{--<!-- /logo -->--}}
            {{--<!-- MAIN MENU -->--}}
            <nav class="top-menu">
                <ul class="hd-list-menu">
                        @foreach($menusList as $item)
                            <li><a href="{{($item['phone'] != 1) ? '#':''}}{{ $item['anchor'] }}">{{ $item['name'] }}</a></li>
                        @endforeach

                    </ul>
            </nav>

            {{--<!-- /MAIN MENU -->--}}
        </div>
        @endif
</header>
{{--<!-- /Header
================================================== -->--}}