@extends('layouts.app')

@section('content')

    <h1 class="text-center">Создать тикет</h1>

    <hr/>
    <div class="form-group text-center">

        {!! Form::open(['url' => '/tickets/add', 'files' => 'true']) !!}

        {!! Form::label('theme', 'Theme Message:') !!}
        {!! Form::text('theme') !!}

        <br/>

        {!! Form::label('categories[]', 'Select Category:') !!}

        @foreach($allCategories as $category)
            {!! Form::checkbox('categories[]', $category->id) !!}
            {!! $category->name !!}
        @endforeach

        <br/>

        {!! Form::label('message', 'Write message') !!}

        {!! Form::text('message') !!}

        <br/>
        <br/>

        {!! Form::file('photo[]', ['multiple' => true, 'size' => '10', 'style' => 'display: inline-block']); !!}

        <br/>
        <br/>

        {!! Form::select('status',['Новый' => 'Новый']); !!}

        <br/>
        <br/>

        {!! Form::submit('Добавить тикет', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

        <br />

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@stop