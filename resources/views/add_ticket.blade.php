@extends('layouts.app')

@section('content')

    <h1 class="text-center">Создать тикет</h1>

    <hr/>
    <div class="form-group text-center">

    {!! Form::open(['url' => '/tickets/add', 'action' => 'tickets\AddController@sendData', 'files' => 'true']) !!}

        {!! Form::label('theme', 'Theme Message:') !!}
        {!! Form::text('theme') !!}

        <br />

        {!! Form::label('category[]', 'Select Category:') !!}

        @for ($i = 0; $i < count($listCategories); $i++)
        {!! Form::checkbox('category[]', $listCategories[$i]['id']) !!}
            {!! $listCategories[$i]['name'] !!}
        @endfor

        <br />

        {!! Form::label('message', 'Write message') !!}

        {!! Form::text('message') !!}

        <br />
        <br />

        {!! Form::file('image1', ['style' => 'display: inline-block']); !!}
        {!! Form::file('image2', ['style' => 'display: inline-block']); !!}

        <br />
        <br />

        {!! Form::select('status[]',['Новый' => 'Новый']); !!}

        <br />
        <br />

        {!! Form::submit() !!}

    {!! Form::close() !!}

    </div>
@stop