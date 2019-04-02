<div style="margin: 0px 50px 0px 50px">

    @if($highlights)

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
            @foreach($highlights as $k=>$highlight)
                {{--@php(dd($intr));--}}
                <tr>

                    <td>{{$highlight->id}}</td>
                    <td>{{$highlight->title}}</td>
                    {{--<td>{!!Html::link(route('introEdit',['intro'=>$intr->id]),$intr->title,['alt'=>$intr->title])!!}</td>--}}
                    <td>{{$highlight->text}}</td>
                    <td>{{$highlight->class_icon}}</td>
                    <td>
                        {!! Form::open(['url'=>route('highlightsEdit',['highlights'=>$highlight->id]),'class'=>'form-horizontal','method'=>'POST'])!!}

                        {!! method_field('DELETE') !!}
                        {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}



                        <button class="btn btn-danger">{!!Html::link(route('highlightsEdit',['highlights'=>$highlight->id]),'Редактировать',['alt'=>$highlight->title])!!}</button>
                    </td>

                </tr>

            @endforeach

            </tbody>


        </table>
    @endif

    {!! Form::open(['url'=>route('highlightsAdd')])!!}
    <button class="add-button">{!!Html::link(route('highlightsAdd'),'Новая запись')!!}</button>
    {!! Form::close() !!}  
    

</div>