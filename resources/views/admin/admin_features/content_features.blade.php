<div style="margin: 0px 50px 0px 50px">

    @if($features)

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
            @foreach($features as $k=>$feature)
                {{--@php(dd($intr));--}}
                <tr>

                    <td>{{$feature->id}}</td>
                    <td>{{$feature->title}}</td>
                    {{--<td>{!!Html::link(route('introEdit',['intro'=>$intr->id]),$intr->title,['alt'=>$intr->title])!!}</td>--}}
                    <td>{{$feature->text}}</td>
                    <td>{{$feature->class_icon}}</td>
                    <td>
                        {!! Form::open(['url'=>route('featuresEdit',['features'=>$feature->id]),'class'=>'form-horizontal','method'=>'POST'])!!}

                        {!! method_field('DELETE') !!}
                        {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}



                        <button class="btn btn-danger">{!!Html::link(route('featuresEdit',['features'=>$feature->id]),'Редактировать',['alt'=>$feature->title])!!}</button>
                    </td>

                </tr>

            @endforeach

            </tbody>


        </table>
    @endif

    

    {!! Form::open(['url'=>route('featuresAdd')])!!}
    <button class="add-button">{!!Html::link(route('featuresAdd'),'Новая запись')!!}</button>
    {!! Form::close() !!}  

</div>