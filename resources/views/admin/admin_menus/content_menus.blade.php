<div style="margin: 0px 50px 0px 50px">

    @if($menus)

        <table class="table table-hover table-striped ">
            <thead>
            <tr class="no-bootstrap">
                <th>ID</th>
                <th>Заголовок меню</th>
                <th>Заголвка поля </th>
                <th>Текст заголовка поля</th>
                <th>Путь к полю</th>
            </tr>
            </thead>
            <tbody>
            @foreach($menus as $k=>$menu)
                {{--@php(dd($intr));--}}
                <tr>

                    <td>{{$menu->id}}</td>
                    <td>{{$menu->title}}</td>
                    <td>{{$menu->content_title}}</td>
                    {{--<td>{!!Html::link(route('introEdit',['intro'=>$intr->id]),$intr->title,['alt'=>$intr->title])!!}</td>--}}
                    <td>{{$menu->content_title_text}}</td>
                    <td>{{$menu->path}}</td>
                    <td>
                        {!! Form::open(['url'=>route('menusEdit',['menus'=>$menu->id]),'class'=>'form-horizontal','method'=>'POST'])!!}

                        {!! method_field('DELETE') !!}
                        {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}



                        <button class="btn btn-danger">{!!Html::link(route('menusEdit',['menus'=>$menu->id]),'Редактировать',['alt'=>$menu->title])!!}</button>
                    </td>

                </tr>

            @endforeach

            </tbody>


        </table>
    @endif

    {{-- {!!Html::link(route('menusAdd'),'Новая запись')!!} --}}

</div>