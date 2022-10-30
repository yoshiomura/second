<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trainig</title>
    </head>
    <body>
        <h1>Training Name</h1>
        <form action="/trainings" method="POST">
            @csrf
            <div class="name">
                <h2>Name</h2>
                <input type="text" name="training[name]" placeholder="タイトル" value="{{ old('name.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('name.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="training[body]" placeholder="今日も1日お疲れさまでした。">{{ old('training.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('training.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
            </div>
    </body>
</html>