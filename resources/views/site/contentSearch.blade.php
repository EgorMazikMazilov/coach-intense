@if (count($products) === 0)
    <div class="container" style="min-height: 26em;">
        <div class="row">
    <div class="alert alert-danger" role="alert" v-if="error">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        {{trans('translate.not_found')}}
    </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@elseif (count($products) >= 1)

    <div class="container" style="min-height: 24em;">
        <div class="row">
            <h1>{{trans('translate.search_results')}}</h1>
    @foreach($products as $item)

        <div class="item col-xs-3 col-lg-3" >

                <div class="productWrapp">
                    <div class="productImg"><img src="/assets/img/{{$item ->img_head}}" class="img-responsive" alt="{{$item -> title}}"></div>
                    <div class="productText">
                        <h2><a href="{{route('productsOneList',$item->alias)}}">{{$item -> title}}</a></h2>
                    </div>

                </div>

        </div>
    @endforeach
        </div>
        </div>
        <!-- /.container -->
@endif
<script src="{{asset ('assets/vendor/jquery-3.1.1.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.langForm').detach();
    });
</script>