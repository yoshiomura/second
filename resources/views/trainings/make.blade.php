<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>トレーニング投稿画面</title>
    </head>
    <body>
        <h1>トレーニング投稿画面</h1>
        <form action="/trainings" method="POST">
            @csrf
            <div class="profile">
            <h2>トレーニング部位</h2>
            @foreach($profiles as $profile)
                  <h3 href={{ $profile->name }}></h3>
            @endforeach
            </select>
            </div>
            <input type="submit" value="保存"/>
            
        </form>
        <div class="footer">
            <a href="/">戻る</a>
            </div>
    </body>
</html>