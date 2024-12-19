<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posztok</title>
</head>
<body>
    @foreach ($posts as $post)
        <h1>{{$post->user->name}} - {{$post->title}}</h1>
        <p>{{$post->content}}</p>
        <a href="{{route('posts.show', $post->id)}}">
            <button>Részletek</button>
        </a>
    @endforeach
</body>
</html>
