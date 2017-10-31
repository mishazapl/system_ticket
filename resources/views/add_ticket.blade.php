@extends('layouts.app')

@section('content')

    <h1 class="text-center">Создать тикет</h1>

    <hr/>
    <div class="text-center">

    {!! Form::open(['url' => '/tickets/add', 'action' => 'tickets\AddController@sendData']) !!}

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name') !!}

    {!! Form::close() !!}

    </div>
@stop