<div style="margin: 0px 50px 0px 50px">

    @if($gallery)

        <table class="table table-hover table-striped">
            <thead>
            <tr class="no-bootstrap">
                <th>ID</th>
                <th>Картинка</th>
            </tr>
            </thead>
            <tbody>
            @foreach($gallery as $k=>$gall)
                {{--@php(dd($intr));--}}
                <tr>

                    <td>{{$gall->id}}</td>
                    <td>{{$gall->img}}</td>
                    {{--<td>{!!Html::link(route('introEdit',['intro'=>$intr->id]),$intr->title,['alt'=>$intr->title])!!}</td>--}}

                    <td>
                        {!! Form::open(['url'=>route('galleryEdit',['gallery'=>$gall->id]),'class'=>'form-horizontal','method'=>'POST'])!!}

                        {!! method_field('DELETE') !!}
                        {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}



                        <button class="btn btn-danger">{!!Html::link(route('galleryEdit',['gallery'=>$gall->id]),'Редактировать')!!}</button>
                    </td>

                </tr>

            @endforeach

            </tbody>


        </table>
    @endif

    {!! Form::open(['url'=>route('galleryAdd')])!!}
    <button class="add-button">{!!Html::link(route('galleryAdd'),'Новая запись')!!}</button>
    {!! Form::close() !!}   

</div>
