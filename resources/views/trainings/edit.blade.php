<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trainings</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>Training name</h1>
        <form action="/trainings/{{ $training->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='name'>
                <h2>タイトル</h2>
                <input type='text' name=training[name] placeholder="タイトル" value="{{ $training->name }}">
                <p class='title__error' style="color:red">{{ $errors->first('training.title') }}</p>
            </div>
            <div class='body'>
                <h2>本文</h2>
                <textarea name='training[body]' placeholder="今日も1日お疲れさまでした。">{{ $training->body }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('training.body') }}</p>
            </div>
            <input type="submit" value="update">
        </form>
        <div class='footer'>
            <a href="/trainings/{{ $training->id }}">戻る</a>
    </div>
</body>
</html>