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
        <x-app-layout>
        <x-slot name="header">
            トレーニング詳細画面
            </x-slot>
             <div class="kakomi-box1">
        <h2 class='name'>名前   {{ $training->name }}</h2>
                    <h2 class='title'>トレーニング名   {{ $training->title }}</h2>
                    <h2 class='objective'>トレーニング目的   {{ $training->objective }}</h2>
                    <h2 class='body'>トレーニング内容   {{ $training->body }}</h2>
                    <h2 class='movie'>動画   {{ $training->movie }}</h2>
                    <h2 href="/names/{{ $training->Name->id }}">トレーニング部位　　　{{ $training->Name->exercise }}</h2>
                    <h3>コメント</h3>
                    @foreach ($reviews as $review)
                    <p>{{ $review->review }}</p>
                    @endforeach
                    
                    <form action="/trainings/{{ $training->id }}" method="POST">
                        @csrf
                        <textarea name="review[review]" placeholder="コメント"></textarea>
                        <input type="hidden" name="review[training_id]" value={{ $training->id }}>
                        <input type="submit" value="保存">
                    </form>
                    <div>
                    </div>
        <div class="footer">
            <a href="/">戻る</a>
            <link rel="stylesheet" href="{{ asset('/css/show.css')  }}" >
        </div>
        </div>
        </x-app-layout>
    </body>
</html>