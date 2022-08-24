@extends('layouts.app')

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <title>マイページ画面</title>
    </head>
    <body>
        <h1>マイページ画面</h1>
            @csrf
            <h2>お客様情報</h2>
            <div class="name">
                <p>氏名</p>

            </div>
            <div class="email">
                <p>E-mail adress</p>
         
            </div>
            <h2>現在の予約</h2>
            <div class="title">
                <p>タイトル</p>
                <p class = 'title'>{{ $schedule->title }}</p>
            </div>
             <div class="body">
                <p>内容</p>
                <p class = 'body'>{{ $schedule->body }}</p>
            </div>
            <div class="start_date">
                <P>開始日時</P>
                <p class = 'start_date'>{{ $schedule->start_date }}</p>
            </div>
              <div class="end_date">
                <P>終了日時</P>
                <p class = 'start_date'>{{ $schedule->start_date }}</p>
            </div>
        <div class="back">[<a href="/">Topに戻る</a>]</div>
    </body>
</html>
@endsection