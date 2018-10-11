<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                @if($prices)
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Цена со скидкой</th>
                        <th>Дата действия скидки</th>
                        <th>Цена со второй скидкой</th>
                        <th>Дата действия второй скидки</th>
                        <th>Полная стоимость</th>
                        <th>Даты мероприятия</th>
                        <th>ВКЛ / ВЫКЛ</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prices as $key => $price )
                        <tr>
                            <td>{{$price->id}}</td>
                            <td>{{$price->discount_price}}</td>
                            <td>{{$price->discount_date}}</td>
                            <td>{{$price->discount_price_2}}</td>
                            <td>{{$price->discount_date_2}}</td>
                            <td>{{$price->full_price}}</td>
                            <td>{{$price->event_date}}</td>
                            <td>{{($price->is_active) ? 'Да' : 'Нет'}}</td>
                            <td>{!! Html::link(route('pricesEdit',['price'=>$price->id]), 'редактировать',['alt'=>'Редактировать пункт '.'"'.$price->id.'"'])!!}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>