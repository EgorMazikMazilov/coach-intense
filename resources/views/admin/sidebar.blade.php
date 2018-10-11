<section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">Навигация по сайту</li>
        <li>
            <a href="/admin">
                <i class="fa fa-th"></i> <span>Общая информация</span>
            </a>
        </li>
        <li class="header">Настройки сайта</li>
        <li><a href="{{route('menus')}}"><i class="fa fa-circle-o text-red"></i> <span>Меню</span></a></li>
        <li><a href="{{route('prices')}}"><i class="fa fa-circle-o text-red"></i> <span>Цены и даты</span></a></li>
        <li><a href="{{route('videos')}}"><i class="fa fa-circle-o text-red"></i> <span>Видео отзывы</span></a></li>
        <li><a href="{{route('programs')}}"><i class="fa fa-circle-o text-red"></i> <span>Программа</span></a></li>
        <hr>
        <li class="header">Зарегистрировавщиеся</li>
        <li><a href="{{route('registrations')}}"><i class="fa fa-circle-o text-red"></i> <span>Участники</span></a></li>
        <li><a href="{{route('speakers')}}"><i class="fa fa-circle-o text-red"></i> <span>Спикеры</span></a></li>

    </ul>
</section>