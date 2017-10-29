@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="addArticle">
                        <br>
                        <a href="{{ url('tickets/add') }}" style="font-size: 20px;">Добавить тикет</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
