
<div class="box box-primary">
    <div class="box-header with-border">

    </div>
    <!-- /.box-header -->
    <!-- form start -->

    {!! Form::open (['url'=>(isset($itemInfo->id)) ? route('admin.items.update',['item'=>$itemInfo->id]) : route('admin.items.store'),'class'=>"form-horizontal", 'enctype'=>'multipart/form-data'])!!}
    <div class="box-body">
        <div class="form-group">
            {!! Form::label('title','Название товара',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('title', isset($itemInfo->title) ? $itemInfo->title :old('title'), ['placeholder'=>'Введите название товара', 'class'=>'form-control','required'=>'required', 'id'=>'title', 'onkeyup'=>'translit()']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('title_ua','Название товара UA',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('title_ua', isset($itemInfo->title_ua) ? $itemInfo->title_ua :old('title_ua'), ['placeholder'=>'Введите название товара UA', 'class'=>'form-control','required'=>'required', 'id'=>'title_ua']) !!}
            </div>
        </div><!-- //form-group -->


        {!! Form::hidden('alias', isset($itemInfo->alias) ? $itemInfo->alias :old('alias'), ['placeholder'=>'автозаполняемое поле', 'class'=>'form-control','required'=>'required', 'id'=>'alias']) !!}
        {{Form::hidden('old_alias', isset($itemInfos['old_alias']) ? $itemInfos['old_alias'] :'',['class'=>'form-control','required'=>'required', 'id'=>'old_alias'])}}

        {{--        ОПИСАНИЕ        --}}
        <div class="form-group">
            {!! Form::label('description','Описание товара',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::textarea('description', isset($itemInfo->description) ? $itemInfo->description :old('description'), ['placeholder'=>'Описание товара', 'class'=>'form-control','required'=>'required', 'id'=>'editor']) !!}
            </div>
        </div><!-- //form-group -->

        <div class="form-group">
            {!! Form::label('description_ua','Описание товара UA',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::textarea('description_ua', isset($itemInfo->description_ua) ? $itemInfo->description_ua :old('description_ua'), ['placeholder'=>'Описание товара UA', 'class'=>'form-control','required'=>'required', 'id'=>'editor1']) !!}
            </div>
        </div>
        <!-- //form-group -->

        {{--       ОПИСАНИЕ        --}}
        <div class="form-group">
            {!! Form::label('content','Контент',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::textarea('content', isset($itemInfo->content) ? $itemInfo->content :old('content'), ['placeholder'=>'Контент', 'class'=>'form-control','required'=>'required', 'id'=>'editor1']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('content_ua','Контент UA',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::textarea('content_ua', isset($itemInfo->content_ua) ? $itemInfo->content_ua :old('content_ua'), ['placeholder'=>'Контент UA', 'class'=>'form-control','required'=>'required', 'id'=>'editor1']) !!}
            </div>
        </div>

        {{--       // ОПИСАНИЕ        --}}
        {{--       // IMG        --}}

        @if(isset($itemInfo->img_head))
            <div class="form-group">
                {!! Form::label('img_head','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">

                    {{Html::image(asset('/assets/img/'.$itemInfo->img_head))}}
                    {{Form::hidden('old_image', $itemInfo->img_head)}}
                </div>
            </div>
        @endif
        <div class="form-group">
            {!! Form::label('img_head','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::file('img_head',['class'=>'filestyle','data-buttonText'=>'Выберете файл','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не выбран', isset($itemInfo->img_head) ? '' :'required="required"']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('is_active','Показывать на сайте?',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                @if(isset($itemInfo->is_active) && $itemInfo->is_active == 0)
                    {!! Form::checkbox('is_active',0)!!}
                @else
                    {!! Form::checkbox('is_active',1, true)!!}
                @endif
            </div>
        </div>

        <div class="form-group">

            {!! Form::label('list_id','Подкатегория товара',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::select('list_id', $lists, isset($lists->list_id) ? $lists->title : '') !!}
            </div>

        </div>

        @if(isset($itemInfo->id))
            <input type="hidden" name="_method" value="PUT">
        @endif
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
            </div>
        </div>


    </div><!-- //box-body -->

    <div class="box-footer">
    </div>
    {{Form::close()}}
</div>


<script>
    setTimeout(function(){
        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor1');
        //console.log("added");
    }, 500);
</script>
<script>
    function translit(){
// Символ, на который будут заменяться все спецсимволы
        var space = '-';
// Берем значение из нужного поля и переводим в нижний регистр
        var text = $('#title').val().toLowerCase();
// Массив для транслитерации
        var transl = {
            'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'e', 'є': 'e', 'ж': 'zh',
            'з': 'z', 'и': 'i', 'і': 'i', 'ї': 'ji', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n',
            'о': 'o', 'п': 'p', 'р': 'r','с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h',
            'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'sh','ъ': space, 'ы': 'y', 'ь': space, 'э': 'e', 'ю': 'yu', 'я': 'ya',
            ' ': space, '_': space, '`': space, '~': space, '!': space, '@': space,
            '#': space, '$': space, '%': space, '^': space, '&': space, '*': space,
            '(': space, ')': space,'-': space, '\=': space, '+': space, '[': space,
            ']': space, '\\': space, '|': space, '/': space,'.': space, ',': space,
            '{': space, '}': space, '\'': space, '"': space, ';': space, ':': space,
            '?': space, '<': space, '>': space, '№':space
        }
        var result = '';
        var curent_sim = '';
        for(i=0; i < text.length; i++) {
            // Если символ найден в массиве то меняем его
            if(transl[text[i]] != undefined) {
                if(curent_sim != transl[text[i]] || curent_sim != space){
                    result += transl[text[i]];
                    curent_sim = transl[text[i]];
                }
            }
            // Если нет, то оставляем так как есть
            else {
                result += text[i];
                curent_sim = text[i];
            }
        }
        result = TrimStr(result);
// Выводим результат

        $('#alias').val(result);

    }
    function TrimStr(s) {
        s = s.replace(/^-/, '');
        return s.replace(/-$/, '');
    }
    // Выполняем транслитерацию при вводе текста в поле
    $(function(){
        $('#title').keyup(function(){
            translit();
            return false;
        });
    });
</script>