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
            <div class="name">
                <h2>名前</h2>
                <input type="text" name="training[name]" placeholder="名前" value="{{ old('training.name') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('training.name') }}</p>
            </div>
            <div class="title">
                <h2>トレーニング名</h2>
                <textarea name="training[title]" placeholder="トレーニング名">{{ old('training.title') }}</textarea>
                <p class="title__error" style="color:red">{{ $errors->first('training.title') }}</p>
            </div>
            <div class="objective">
                <h2>トレーニング目的</h2>
                <textarea name="training[objective]" placeholder="トレーニング内容">{{ old('training.objective') }}</textarea>
                <p class="objective__error" style="color:red">{{ $errors->first('training.objective') }}</p>
            </div>
            <div class="body">
                <h2>トレーニング内容</h2>
                <textarea name="training[body]" placeholder="口コミ内容">{{ old('training.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('training.body') }}</p>
            </div>
            <div class="movie">
                <h2>動画</h2>
                <textarea name="training[movie]" placeholder="">{{ old('training.movie') }}</textarea>
                <p class="movie__error" style="color:red">{{ $errors->first('training.movie') }}</p>
            </div>
            <div class="name">
            <h2>トレーニング部位</h2>
            <select name="training[name_id]">
            @foreach($names as $name)
                  <option value="{{ $name->id }}">{{ $name->exercise }}</option>
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