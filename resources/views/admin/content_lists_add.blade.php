
<div class="box box-primary">
    <div class="box-header with-border">

    </div>
    <!-- /.box-header -->
    <!-- form start -->

    {!! Form::open (['url'=>(isset($lists->id)) ? route('admin.lists.update',['lists'=>$lists->id]) : route('admin.lists.store'),'class'=>"form-horizontal", 'enctype'=>'multipart/form-data'])!!}
    <div class="box-body">
        <div class="form-group">
            {!! Form::label('title','Название группы товаров',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('title', isset($lists->title) ? $lists->title :old('title'), ['placeholder'=>'Введите название группы товаров', 'class'=>'form-control','required'=>'required', 'id'=>'title', 'onkeyup'=>'translit()']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('title_ua','Название группы товаров UA',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('title_ua', isset($lists->title_ua) ? $lists->title_ua :old('title_ua'), ['placeholder'=>'Введите название группы товаров UA', 'class'=>'form-control','required'=>'required', 'id'=>'title_ua']) !!}
            </div>
        </div><!-- //form-group -->


        {!! Form::hidden('alias', isset($lists->alias) ? $lists->alias :old('alias'), ['placeholder'=>'автозаполняемое поле', 'class'=>'form-control','required'=>'required', 'id'=>'alias']) !!}
        {{Form::hidden('old_alias',isset($lists->alias) ? $lists->alias :'')}}


        {{--        ОПИСАНИЕ        --}}
        <div class="form-group">
            {!! Form::label('description','Описание',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::textarea('description', isset($lists->description) ? $lists->description :old('description'), ['placeholder'=>'автозаполняемое поле', 'class'=>'form-control','required'=>'required', 'id'=>'editor']) !!}
            </div>
        </div><!-- //form-group -->

        <div class="form-group">
            {!! Form::label('description_ua','Описание UA',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::textarea('description_ua', isset($lists->description_ua) ? $lists->description_ua :old('description_ua'), ['placeholder'=>'Описание UA', 'class'=>'form-control','required'=>'required', 'id'=>'editor1']) !!}
            </div>
        </div>
        <!-- //form-group -->
        {{--       // ОПИСАНИЕ        --}}

        @if(isset($lists->head_img))
            <div class="form-group">
                {!! Form::label('head_img','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">

                    {{Html::image(asset('/assets/img').'/list_img/'.$lists->head_img)}}
                    {{Form::hidden('old_image', $lists->head_img)}}

                </div>
            </div>
        @endif
        <div class="form-group">
            {!! Form::label('head_img','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::file('head_img',['class'=>'filestyle','data-buttonText'=>'Выберете файл','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не выбран', isset($lists->head_img) ? '' :'required="required"']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('is_active','Показывать на сайте?',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                @if(isset($lists->is_active) && $lists->is_active == 0)
                    {!! Form::checkbox('is_active',0)!!}
                @else
                    {!! Form::checkbox('is_active',1, true)!!}
                @endif
            </div>
        </div>
        @if(isset($lists->id))
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