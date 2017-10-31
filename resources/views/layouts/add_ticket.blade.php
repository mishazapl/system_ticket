<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Добавить статью') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/add_ticket.css') }}" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <form action="/" class="mainForm" enctype="multipart/form-data" method="POST" >

                <textarea name="theme" placeholder="Введите тему сообщения" id="theme" value="{{ old('theme') }}" required rows="2" cols="60"></textarea>

                    @for ($i = 0; $i < count($listCategories); $i++)
                        <input type="checkbox" name="categories[]" value="{{ $listCategories[$i]['id'] }}">{{ $listCategories[$i]['name'] }}
                    @endfor

                <textarea name="message" placeholder="Введите ваше сообщение" value="{{ old('message') }}" required rows="3" cols="60"></textarea>

                <input type="file" name="photo1" value="{{ old('photo1') }}">

                <input type="file" name="photo2" value="{{ old('photo2') }}">

                <select name="status[]" value="{{ old('status[]') }}" required>
                    <option name="new" value="Новый">Новый</option>
                </select>

                <input type="submit" name="submit">
            </form>
        </div>
    </div>
</div>

<?php

/**
 *
 *
 * Еще сохранение ссылки в тикет фото и генерация случайного имени фото
Login
1) Тему (обязательное поле)
2) Категорию
3) Сообщение
4) Файл, скриншот (jpg, png) (url: /uploads/users/номер_пользователя/номер-тикета/ )
5) Статус (пользователь не может его менять или задавать, по-умолчанию: Новый)
 *
 *
 */

?>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>