<div class="wrapper container-fluid">
    {!! Form::open(['url'=>route('getstartedEdit',array('getstarted'=>$data['id'])),'class'=>'form_horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::hidden('id',$data['id']) !!}
        {!! Form::label('link','Название:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('link',$data['link'],['class'=>'form-control','placeholder'=>'Введите ссылку']) !!}
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
        {!! Form::hidden('id',$data['id']) !!}
        {!! Form::label('text','Текст статьи:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text',$data['text'],['class'=>'form-control','placeholder'=>'Введите текст ссылки']) !!}
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
            {!! Form::button('Сохраниеть',['class'=>'btn btn-primary','type'=>'submit']) !!}
        </div>

    </div>

    {!! Form::close() !!}



</div>