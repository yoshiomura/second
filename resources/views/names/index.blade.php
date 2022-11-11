<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title> 野球のトレーニング専用口コミサイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>トップ画面</h1>
        <a href='/trainings/create'>投稿</a>
        <div class='trainings'>
            @foreach ($trainings as $training)
                <div class='training'>
                    <h2 class='name'>名前   {{ $training->name }}</h2>
                    <h2 class='title'>トレーニング名   {{ $training->title }}</h2>
                    <h2 class='objective'>トレーニング目的   {{ $training->objective }}</h2>
                    <h2 class='body'>トレーニング内容   {{ $training->body }}</h2>
                    <h2 class='movie'>動画   {{ $training->movie }}</h2>
                    <h3 href="/names/{{ $training->Name->id }}">トレーニング部位　　　{{ $training->Name->exercise }}
                    <p><a href="/trainings/{{ $training->id }}">トレーニング投稿詳細</a></p>
                    <form action="/trainings/{{ $training->id }}" id="form_{{ $training->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteTraining({{ $training->id }})">delete</button>
                    </form>
                </div>
            @endforeach 
            
        </div>
        
        
        <div class='paginate'>{{ $trainings->links()}}</div>
        <script>
            function deleteTraining(id) {
                'use strict'
                
                if(confirm('削除すると復元できません。 \n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        </div>
    </body>
</html>