<div style="margin: 0px 50px 0px 50px">

@if($intro)

    <table class="table table-hover table-striped">
        <thead>
            <tr class="no-bootstrap">
                <th>ID</th>
                <th>Заголовок</th>
                <th>Текст</th>
                <th>Класс иконки</th>
            </tr>
        </thead>
        <tbody>
        @foreach($intro as $k=>$intr)
            {{--@php(dd($intr));--}}
            <tr>

                <td>{{$intr->id}}</td>
                <td>{{$intr->title}}</td>
                {{--<td>{!!Html::link(route('introEdit',['intro'=>$intr->id]),$intr->title,['alt'=>$intr->title])!!}</td>--}}
                <td>{{$intr->text}}</td>
                <td>{{$intr->class_icon}}</td>
<td>
        {!! Form::open(['url'=>route('introEdit',['intro'=>$intr->id]),'class'=>'form-horizontal','method'=>'POST'])!!}

    {!! method_field('DELETE') !!}
        {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
        {!! Form::close() !!}



    <button class="btn btn-danger">{!!Html::link(route('introEdit',['intro'=>$intr->id]),'Редактировать',['alt'=>$intr->title])!!}</button>
</td>

            </tr>

            @endforeach

        </tbody>


    </table>
    @endif
    {!! Form::open(['url'=>route('introAdd')])!!}
    <button class="add-button">{!!Html::link(route('introAdd'),'Новая запись')!!}</button>
    {!! Form::close() !!} 
        

</div>