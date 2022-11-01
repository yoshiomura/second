<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trainings</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h2 class='name'>名前   {{ $training->name }}</h2>
                    <h2 class='title'>トレーニング名   {{ $training->title }}</h2>
                    <h2 class='objective'>トレーニング目的   {{ $training->objective }}</h2>
                    <h2 class='body'>口コミ内容   {{ $training->body }}</h2>
                    <h2 class='review'>レビュー   {{ $training->review }}</h2>
                    <h2 class='movie'>動画   {{ $training->movie }}</h2>
                    <h3 href="/names/{{ $training->Name->id }}">トレーニング部位　　　{{ $training->Name->exercise }}
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>