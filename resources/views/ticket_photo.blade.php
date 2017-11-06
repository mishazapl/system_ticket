@extends('layouts.app')

@section('content')

    <div style="text-align: center;">

        @foreach($ticketPhotoAll as $photo)

            <div style="display: inline-block; width: 200px; height: 200px;">
                <img style="width: 100%; -webkit-background-size: cover;background-size: cover;" src="{{ asset($photo->link) }}" alt="фото юзера">
            </div>

        @endforeach

    </div>

@endsection