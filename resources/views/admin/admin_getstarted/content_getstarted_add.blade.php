<div class="wrapper container-fluid">

    {!! Form::open(['url'=>route('getstartedAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="form-group">

        {!! Form::label('link','Название',['class'=>'cpl-xs-2 control-label'])!!}
        <div class="col-xs-8">
            {!! Form::text('link',old('link'),['class'=>'form-control','placeholder'=>'Введите название статьи'])!!}

        </div>
        @if( count($errors) > 0)

            <div class="validate_error">
                <ul>
                    @if($errors->has("link"))
                        @foreach ($errors->get('link') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                </ul>
            </div>

        @endif


    </div>
    <div class="form-group">

        {!! Form::label('text','Текст статьи',['class'=>'cpl-xs-2 control-label'])!!}
        <div class="col-xs-8">
            {!! Form::text('text',old('text'),['class'=>'form-control','placeholder'=>'Введите текст статьи'])!!}



        </div>
        @if( count($errors) > 0)

            <div class="validate_error">
                <ul>
                    @if($errors->has("text"))
                        @foreach ($errors->get('text') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                </ul>
            </div>

        @endif

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