<nav class="navbar navbar-default" role="navigation" id="menu">
    <div class="container">
        <!—Название сайта и кнопка раскрытия меню для мобильных-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{asset('assets/img/header_logo.png')}}" alt="Логотип Панский Выбор" class="img-responsive"></a>
        </div>

        <!—Само меню-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{trans('translate.about')}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('about')}}">{{trans('translate.about')}}</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('aboutShareholders')}}">{{trans('translate.acioner')}}</a></li>
                        <li><a href="{{route('aboutMissionAndValuess')}}">{{trans('translate.mission')}}</a></li>
                        <li><a href="{{route('aboutCorporateGovernance')}}">{{trans('translate.corporate')}}</a></li>

                    </ul>
                </li>
                <li><a href="{{route('buy')}}">{{trans('translate.buysell')}}</a></li>
                <li><a href="{{route('/')}}#products">{{trans('translate.produkciya')}}</a></li>
                <li><a href="{{route('/')}}#news">{{trans('translate.news')}}</a></li>
                <li><a href="{{route('/')}}#partners">{{trans('translate.partners')}}</a></li>

                <li><a href="{{route('/')}}#contacts">{{trans('translate.contacts')}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right ">
                <form class="navbar-form navbar-left" role="search"  action="{{URL::route('search')}}" method="POST">
                    <div class="inner-addon right-addon">
                        <i class="glyphicon glyphicon-search"></i>
                        <input type="text"  name="search" class="form-control" placeholder="{{trans('translate.search')}}" />
                    </div>
                    {{Form::token()}}
                </form>

                <form action="{{URL::route('language-chooser')}}" method="post" class="langForm">
                    <input type="submit" class="langBtn" value="УКР" name="ua" id="ua">
                    <input type="hidden" name="language" value="ua">
                    {{Form::token()}}
                </form>
                <form action="{{URL::route('language-chooser')}}" method="post" class="langForm">
                    <input type="submit" class="langBtn" value="РУС" name="language" id="ru">
                    <input type="hidden" name="language" value="ru">
                    {{Form::token()}}
                </form>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>