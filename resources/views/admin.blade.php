@extends('layouts.app')

@section('content')
    <div class="text-center" style="font-size: 30px;">
        Привет {{ Auth::user()->name }}
    </div>

    <table class="table-bordered table">
        <thread>
            <tr>
                <th>Тема</th>
                <th>Сообщение</th>
                <th>Статус</th>
                <th>Категории</th>
                <th>Фотографии</th>
                <th>Можно редактировать</th>
                <th>Можно удалить</th>
            </tr>
        </thread>
        <tbody>
        @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket['theme'] }}</td>
                <td>{{ $ticket['message'] }}</td>

                @foreach($ticket->status as $status)

                    <td>{{ $status->name }}</td>

                @endforeach

                <td>
                    @foreach($ticket->categories as $category)

                        {{ $category->name }}

                    @endforeach
                </td>

                <td>

                    @foreach($ticket->ticketsPhoto as $photo)
                        <a href="{{ url('/uploads/users/'.$ticket->user->id.'/'.$ticket->id) }}"><div style="width: 50px;height: 50px; display: inline-block;"><img style="-webkit-background-size: cover;background-size: cover; width: 100%;" src="{{ asset($photo->link) }}" alt="фото"></div></a>
                    @endforeach

                </td>

                    <td class="success"><a href="{{ url('/admin/edit/'.$ticket['id']) }}">Да</a></td>
                    <td class="success"><a href="{{ url('/admin/delete/'.$ticket['id']) }}">Удалить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>


@stop