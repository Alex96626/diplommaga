<div class="wrapper container-fluid">
    {!! Form::open(['url'=>route('galleryEdit',array('gallery'=>$data['id'])),'class'=>'form_horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    {{-- <div class="form-group">
        {!! Form::hidden('id',$data['id']) !!}
        {!! Form::label('img','Картинка:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('img',$data['img'],['class'=>'form-control','placeholder'=>'Введите название статьи']) !!}
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
            {!! Form::label('old_images', 'Исходное Изображение:',['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-offset-2 col-xs-10" style="width:10%;margin:0px">
                {!! Html::image('assets/image/'.$data['img'],'',['class'=>'img-circle img-responsive']) !!}
                {!! Form::hidden('old_images', $data['img']) !!}
            </div>
        </div>
        
        <div class="form-group">
             {!! Form::label('img', 'Новое Изображение:',['class'=>'col-xs-2 control-label']) !!}
             <div class="col-xs-8">
                 {!! Form::file('img', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
             </div>
        </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Сохраниеть',['class'=>'btn btn-primary','type'=>'submit']) !!}
        </div>

    </div>

    {!! Form::close() !!}



</div>