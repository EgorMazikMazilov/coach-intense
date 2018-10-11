<div class="col-md-4">
    <div class="small-box bg-green">
        <div class="inner">
            <h3>{{$usersCount}}</h3>

            <p>Зарегистривовашихся участников</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('registrations')}}" class="small-box-footer">
            Подробнее <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>
<div class="col-md-4">
    <div class="small-box bg-yellow">
        <div class="inner">
            <h3>{{$speakerCount}}</h3>

            <p>Зарегистривовашихся спикеров</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('speakers')}}" class="small-box-footer">
            Подробнее <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>