<div class="wrapper container-fluid">

    {!! Form::open(['url'=>route('menusAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="form-group">

        {!! Form::label('title','Название',['class'=>'cpl-xs-2 control-label'])!!}
        <div class="col-xs-8">
            {!! Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'Введите название пункта меню'])!!}

        </div>
        @if( count($errors) > 0)

            <div class="validate_error">
                <ul>
                    @if($errors->has("title"))
                        @foreach ($errors->get('title') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                </ul>
            </div>

        @endif


    </div>
    <div class="form-group">

        {!! Form::label('content_title','Название',['class'=>'cpl-xs-2 control-label'])!!}
        <div class="col-xs-8">
            {!! Form::text('content_title',old('content_title'),['class'=>'form-control','placeholder'=>'Введите название заголовка страницы'])!!}

        </div>
        @if( count($errors) > 0)

            <div class="validate_error">
                <ul>
                    @if($errors->has("content_title"))
                        @foreach ($errors->get('content_title') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                </ul>
            </div>

        @endif


    </div>
    <div class="form-group">

        {!! Form::label('content_title_text','Текст статьи',['class'=>'cpl-xs-2 control-label'])!!}
        <div class="col-xs-8">
            {!! Form::text('content_title_text',old('content_title_text'),['class'=>'form-control','placeholder'=>'Введите текст для заголовка страницы'])!!}



        </div>
        @if( count($errors) > 0)

            <div class="validate_error">
                <ul>
                    @if($errors->has("content_title_text"))
                        @foreach ($errors->get('content_title_text') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                </ul>
            </div>

        @endif

    </div>
    <div class="form-group">

        {!! Form::label('path','Текст статьи',['class'=>'cpl-xs-2 control-label'])!!}
        <div class="col-xs-8">
            {!! Form::text('path',old('class_icon'),['class'=>'form-control','placeholder'=>'Введите путь к страниц'])!!}



        </div>
        @if( count($errors) > 0)

            <div class="validate_error">
                <ul>
                    @if($errors->has("class_icon"))
                        @foreach ($errors->get('class_icon') as $error)
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