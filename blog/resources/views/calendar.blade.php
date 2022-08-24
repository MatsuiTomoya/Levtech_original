@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Calendar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div id='calendar'></div>
        <script src="{{ mix('js/calendar.js') }}"></script>
        <div class="back">[<a href="/">トップに戻る</a>]</div>
    </body>
</html>
@endsection