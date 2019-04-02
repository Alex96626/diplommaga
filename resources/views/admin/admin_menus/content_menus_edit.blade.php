<div class="wrapper container-fluid">
    {!! Form::open(['url'=>route('menusEdit',array('menus'=>$data['id'])),'class'=>'form_horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::hidden('id',$data['id']) !!}
        {!! Form::label('title','Название:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('title',$data['title'],['class'=>'form-control','placeholder'=>'Введите название статьи']) !!}
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
        {!! Form::hidden('id',$data['id']) !!}
        {!! Form::label('content_title','Название:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('content_title',$data['content_title'],['class'=>'form-control','placeholder'=>'Введите название заголовка страницы']) !!}
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
        {!! Form::hidden('id',$data['id']) !!}
        {!! Form::label('content_title_text','Текст статьи:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('content_title_text',$data['content_title_text'],['class'=>'form-control','placeholder'=>'Введите текст для заголовка страницы']) !!}
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
        {!! Form::hidden('id',$data['id']) !!}
        {!! Form::label('path','Название:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('path',$data['path'],['class'=>'form-control','placeholder'=>'Введите путь к странице']) !!}
        </div>
        @if( count($errors) > 0)

            <div class="validate_error">
                <ul>
                    @if($errors->has("path"))
                        @foreach ($errors->get('path') as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                </ul>
            </div>

        @endif

    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Сохраниеть',['class'=>'btn btn-primary','type'=>'submit']) !!}
        </div>

    </div>

    {!! Form::close() !!}



</div>