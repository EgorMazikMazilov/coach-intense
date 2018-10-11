@if(isset($data['theme']))
<h1>Новый СПИКЕР на сайте intensive.coach-school.com.ua</h1>
@else
<h1>Новая регистрация на intensive.coach-school.com.ua</h1>
@endif
<h2>{{$data['name']}}</h2>
<h2>{{$data ['email']}}</h2>
<h2>{{$data ['phone']}}</h2>
@if(isset($data ['theme']))
<h2>{{$data ['theme']}}</h2>
@endif
