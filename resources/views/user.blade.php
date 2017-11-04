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
            @foreach($user->tickets as $ticket)
                <tr>
                    <td>{{ $ticket['theme'] }}</td>
                    <td>{{ $ticket['message'] }}</td>
                    <td>{{ $ticket['status'] }}</td>

                    <td>
                        @foreach($ticket->categories as $category)

                            {{ $category->name }}

                        @endforeach
                    </td>

                    <td>

                    @foreach($ticket->ticketsPhoto as $photo)
                            <div style="width: 200px;height: 200px;"><img style="-webkit-background-size: cover;background-size: cover; width: 100%;" src="{{ asset($photo->link) }}" alt="фото"></div>
                    @endforeach

                    </td>


                    @if ($ticket['status'] == 'Новый')
                        <td class="success"><a href="{{ url('/user/edit/'.$ticket['id']) }}">Да</a></td>
                        <td class="success"><a href="{{ url('/user/delete/'.$ticket['id']) }}">Удалить</a></td>
                        @else
                        <td class="danger">Нет</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>


@stop