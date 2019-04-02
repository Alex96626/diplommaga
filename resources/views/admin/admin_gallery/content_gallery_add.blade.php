<div class="wrapper container-fluid">

    {!! Form::open(['url'=>route('galleryAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

    {{-- <div class="form-group">
        
        {!! Form::label('img','Название картинки',['class'=>'cpl-xs-2 control-label'])!!}
        <div class="col-xs-8">
            {!! Form::text('img',old('img'),['class'=>'form-control','placeholder'=>'Введите имя картинки','value'=>'rgtgdg'])!!}
            
        </div>
        @if( count($errors) > 0)

            <div class="validate_error">
                <ul>
                    @if($errors->has("img"))
                        @foreach ($errors->get('img') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                </ul>
            </div>

        @endif


    </div> --}}

    <div class="form-group">

        {!! Form::label('img','Изображение:',['class' => 'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('img', ['class'=>'filestyle','data-buttonText'=>'Выберите изображение','data=buttonName'=>'btn-primary','data-placeholder'=>'Файла нет']) !!}
                {{-- {!! Form::text('img',old('img'),['class'=>'form-control','placeholder'=>'Введите имя картинки','value'=>'rgtgdg'])!!} --}}
        </div>


    </div>


    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!!Form::button('Сохранить',['class'=>'btn btn-primary','type'=>'submit']) !!}


        </div>

        {!! Form::close() !!}

        {{--<script>--}}

        {{--CKEDITOR.replace('editor')--}}

        {{--</script>--}}

    </div>
</div>