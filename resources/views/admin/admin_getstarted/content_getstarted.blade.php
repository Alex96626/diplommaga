<div style="margin: 0px 50px 0px 50px">

    @if($getstarted)

        <table class="table table-hover table-striped">
            <thead>
            <tr class="no-bootstrap">
                <th>ID</th>
                <th>Ссылка</th>
                <th>Текст</th>

            </tr>
            </thead>
            <tbody>
            @foreach($getstarted as $k=>$getstart)
                {{--@php(dd($intr));--}}
                <tr >

                    <td>{{$getstart->id}}</td>
                    <td>{{$getstart->link}}</td>
                    {{--<td>{!!Html::link(route('introEdit',['intro'=>$intr->id]),$intr->title,['alt'=>$intr->title])!!}</td>--}}
                    <td>{{$getstart->text}}</td>

                    <td>
                        {!! Form::open(['url'=>route('getstartedEdit',['features'=>$getstart->id]),'class'=>'form-horizontal','method'=>'POST'])!!}

                        {!! method_field('DELETE') !!}
                        {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}



                        <button class="btn btn-danger">{!!Html::link(route('getstartedEdit',['getstarted'=>$getstart->id]),'Редактировать')!!}</button>
                    </td>

                </tr>

            @endforeach

            </tbody>


        </table>
    @endif


    {!! Form::open(['url'=>route('getstartedAdd')])!!}
    <button class="add-button">{!!Html::link(route('getstartedAdd'),'Новая запись')!!}</button>
    {!! Form::close() !!}  
    

</div>