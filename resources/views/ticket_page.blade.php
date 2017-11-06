@extends('layouts.app')

@section('content')

    <table class="table-bordered table">

        <thread>
            <tr>
                <th>Тема</th>
                <th>Статус</th>
                <th>Пользователь</th>
            </tr>
        </thread>
        <tbody>
        <tr>
            <td>{{ $ticket->theme }}</td>
            @foreach($ticket->status as $status)
                <td>{{ $status->name }}</td>
            @endforeach
            <td>{{ $ticket->user->name }}</td>
        </tr>
        </tbody>
    </table>

@endsection