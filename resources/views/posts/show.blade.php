<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <x-app-layout>
            <x-slot neme="header">
                Index
            </x-slot>
            <h1 class="title">Blog</h1>
                {{ $post->title }}
            <div class='content'>
                   <div class='content_post'>
                       <h3>本文</h3>
                        <p class='body'>{{ $post->body }}</p>
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    </div>
            </div>
            <div class="edit">
                <a href="/posts/{{ $post->id }}/edit">edit</a>
            </div>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </x-app-layout>
    </body>
</html>
