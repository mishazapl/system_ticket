@extends('layouts.app')

@section('content')
    <div class="text-center" style="font-size: 30px;">
        Привет {{ Auth::user()->name }}
    </div>

        <table class="table">
            <thread>
                <tr>
                    <th>Тема</th>
                    <th>Сообщение</th>
                    <th>Статус</th>
                    <th>Можно редактировать</th>
                </tr>
            </thread>
            <tbody>
            @foreach($ticket as $k => $v)
                <tr>
                    <td>{{ $v['theme'] }}</td>
                    <td>{{ $v['message'] }}</td>
                    <td>{{ $v['status'] }}</td>
                    @if ($v['status'] == 'Новый')
                        <td class="success"><a href="#">Да</a></td>
                        @else
                        <td class="danger">Нет</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>


@stop