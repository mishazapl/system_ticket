@extends('layouts.app')

@section('content')

    <h1 class="text-center">Изменить тикет</h1>

    <hr/>
    <div class="form-group text-center">


        {!! Form::open(['url' => '/user/edit/'.request('id'), 'files' => 'true']) !!}

        {!! Form::label('theme', 'Theme Message:') !!}
        {!! Form::text('theme', $ticket->theme) !!}

        <br/>

        {!! Form::label('categories[]', 'Select Category:') !!}

        @foreach($allCatsArr as $catArr)
            <div class="hide">{{ $allCats[$catArr->id] = $catArr->name }}</div>

        @if($allCats[$catArr->id] == @$categUser[$catArr->id])
            {!! Form::checkbox('categories[]', count($allCats), ['checked' => true]) !!}
            {!! $allCats[$catArr->id] !!}
        @else
            {!! Form::checkbox('categories[]', count($allCats)) !!}
            {!! $allCats[$catArr->id] !!}
        @endif

        @endforeach


        <br/>

        {!! Form::label('message', 'Write message') !!}

        {!! Form::text('message', $ticket->message) !!}

        <br/>
        <br/>


        {!! Form::file('photo[]', ['multiple' => true, 'size' => '5', 'style' => 'display: inline-block']); !!}


        <br />
        <br />

        <div style="font-size: 20px;">Выберите фотографию которую вы желаете удалить.</div>
        @foreach($ticket->ticketsPhoto as $photo)
            {!! Form::checkbox('photoDel[]', $photo->link) !!}
            <div style="width: 150px; height: 150px; display: inline-block;"><img style="-webkit-background-size: cover;background-size: cover; width: 100%;" src="{{ asset($photo->link) }}" alt="фото">
            </div>
        @endforeach

        <br/>
        <br/>

        {!! Form::select('status',['1' => 'Новый']); !!}

        <br/>
        <br/>

        {!! Form::submit('Изменить тикет', ['class' => 'btn btn-primary']) !!}

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