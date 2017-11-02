@extends('layouts.app')

@section('content')
<div class="text-center" style="font-size: 30px;">
    Привет {{ Auth::user()->name }}
</div>
@stop