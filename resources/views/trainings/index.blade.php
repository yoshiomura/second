<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title> 野球のトレーニング専用口コミサイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class=="antialiased">
        <h1>Training Name</h1>
        <a href='/trainings/create'>create</a>
        <div class='trainings'>
            @foreach ($trainings as $training)
                <div class='training'>
                    <a href="/trainings/{{ $training->id }}"><h2 class='name'>{{ $training->name }}</h2></a>
                    <p class='body'>{{ $training->body }}</p>
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
    </body>
</html>