@foreach($buy as $item)
    <section id="buy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="containerHeader">
                    {{trans('translate.we_buy')}}
                </h1>
                <div class="newsDevider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>{{trans('translate.we_buy_head')}}</h2>
            </div>
            <div class="col-md-6">
<h3>@if(Session::get('locale') == 'ru'){{$buy[0]->title_left}}@else {{$buy[0]->title_left_ua}} @endif</h3>
                @php
                    $phone_left = explode(', ', $buy[0]->tel_left);
                    $phone_right = explode(', ', $buy[0]->tel_right);

                @endphp
                @foreach($phone_left as $phonNumb)
                    <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{preg_replace('#\D+#', '', $phonNumb)}}">{{$phonNumb}}</a></p>
                    @endforeach

                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:{{$buy[0]->email_left}}">{{$buy[0]->email_left}}</a></p>
            </div>
            <!-- /.col-md-16 -->
            <div class="col-md-6">
                <h3>@if(Session::get('locale') == 'ru'){{$buy[0]->title_right}}@else {{$buy[0]->title_right_ua}} @endif</h3>
                @foreach($phone_right as $phonNumb)
                    <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{preg_replace('#\D+#', '', $phonNumb)}}">{{$phonNumb}}</a></p>
                @endforeach
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:{{$buy[0]->email_right}}">{{$buy[0]->email_right}}</a></p>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- /#buy -->
    @endforeach