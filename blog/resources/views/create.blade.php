<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>新規予約画面</title>
    </head>
    <body>
        <h1>新規予約</h1>
        <form action="/" method="GET">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="schedule[event_name]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>内容</h2>
                <textarea name="schedule[body]" placeholder="備考など"></textarea>
            </div>
            <!-- <h2>利用時間</h2>-->
            <!-- <div class="start_date">-->
            <!--     <h2>開始日時</h2>-->
            <!--     <input type="text" name="schedule[start_date]" placeholder="2022/01/01 00:00"/>-->
            <!--</div>-->
            <!--<div class="end_date">-->
            <!--     <h2>終了日時</h2>-->
            <!--     <input type="text" name="schedule[end_date]" placeholder="2022/01/01 00:00"/>-->
            <!--</div>-->
            <br>
            <input type="submit" value="新規予約する"/>
        </form>
        <br>
        <div class="back">[<a href="/">Topに戻る</a>]</div>
    </body>
</html>