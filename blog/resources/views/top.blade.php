<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>トップ画面</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>共有パソコン予約管理システム</h1>
        [<a href='/calendar'>予約管理</a>]
        [<a href='/mypage'>マイページ</a>]
        [<a href='/login'>ログイン</a>]
        [<a href='/register'>新規登録</a>]
        <h2>共有パソコンをご利用のお客様へ</h2>
        <div class = 'schedules'>
            @foreach ($schedules as $schedule)
            <div class = 'schedule'>
                <h2 class = 'title'>{{ $schedule->event_name }}</h2>
                <p class = 'body'>{{ $schedule->body }}</h2>
                <p class = 'start_date'>{{ $schedule->start_date->format('Y-m-d G:i') }}</p>
                <p class = 'id'>{{ $schedule->id }}</p>
            </div>
            @endforeach
        </div>
    　　<h3>・予約時のルール</h3>
    　　<p>・予約は何日前までにとか</p>
        <h3>・予約登録のやり方</h3>
        <p>1.予約管理画面に行く</p>
        <p>2.希望の日時の範囲をドラッグして選択する</p>
        <p>3.タイトル（字まで）、備考を入力する(字まで)</p>
        <h3>・予約削除のやり方</h3>
        <p>1.予約管理画面に行く</p>
        <p>2.削除したい予約をクリックして削除する</p>
    </body>
</html>
