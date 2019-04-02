<div class="wrapper container-fluid">
    {!! Form::open(['url'=>route('highlightsEdit',array('highlights'=>$data['id'])),'class'=>'form_horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
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
        {!! Form::label('text','Текст статьи:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text',$data['text'],['class'=>'form-control','placeholder'=>'Введите текст статьи']) !!}
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
        {!! Form::hidden('id',$data['id']) !!}
        {!! Form::label('class_icon','Название:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('class_icon',$data['class_icon'],['class'=>'form-control','placeholder'=>'Введите класс картинки']) !!}
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
            {!! Form::button('Сохраниеть',['class'=>'btn btn-primary','type'=>'submit']) !!}
        </div>

    </div>

    {!! Form::close() !!}



</div>