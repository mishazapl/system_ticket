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
                    <th>Можно редактировать</th>
                </tr>
            </thread>
            <tbody>
            @foreach($user->tickets as $ticket)
                <tr>
                    <td>{{ $ticket['theme'] }}</td>
                    <td>{{ $ticket['message'] }}</td>
                    <td>{{ $ticket['status'] }}</td>

                    @foreach($tickets as $ticket2)

                        @if($ticket->id == $ticket2->id)
                            <td>
                            @foreach($ticket->categories as $category)
                                {{ $category->name }}

                            @endforeach
                            </td>
                        @endif

                    @endforeach

                    @if ($ticket['status'] == 'Новый')
                        <td class="success"><a href="#">Да</a></td>
                        @else
                        <td class="danger">Нет</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>


@stop