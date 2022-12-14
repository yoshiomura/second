<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> 野球のトレーニング専用口コミサイト</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body class="antialiased">
        <x-app-layout>
        <x-slot name="header">
            トップ画面
            </x-slot>
    　　<div class="kakomi-box3">
        <a href='/trainings/create'>投稿</a>
        </div>
        <div class="kakomi-box1">
        <div class="toukou">MovieTheater</div>
        <div class='trainings'>
            <div class="kakomi-box2">
            @foreach ($trainings as $training)
                <div class='training'>
                    <h2>名前　　　{{ $training->name }}</h2>
                    <h2 class='title'>トレーニング名   {{ $training->title }}</h2>
                    <h2 class='objective'>トレーニング目的   {{ $training->objective }}</h2>
                    <h2 class='body'>トレーニング内容   {{ $training->body }}</h2>
                    <h2 class='movie'>動画   {{ $training->movie }}</h2>
                    <h3 href="/names/{{ $training->Name->id }}">トレーニング部位　　　{{ $training->Name->exercise }}
                    <p><a href="/trainings/{{ $training->id }}">トレーニング投稿詳細</a></p>
                    <button onclick="like({{ $training->id }})">いいね</button>
                    <button onclick="unlike({{ $training->id }})">いいね解除</button>
                   </form>
                  
                    <form action="/trainings/{{ $training->id }}" id="form_{{ $training->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteTraining({{ $training->id }})">delete</button>
                    </form>
                </div>
                </div>
            @endforeach 
            </div>
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
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="{{ asset('/js/like.js') }}"></script>
        <script src="{{ asset('/js/unlike.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('/css/index.css')  }}" >
        </div>
        </x-app-layout>
    </body>
</html>