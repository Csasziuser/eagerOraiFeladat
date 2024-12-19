<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poszt részletei</title>
</head>
<body>
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>

    <h3>Kommentek:</h3>
    @forelse($post->comments as $comment)
        <p><strong>{{$comment->user->name}}</strong> - {{$comment->comment}}</p>
    @empty
        <p>Még nincs a popszthoz megjeleníthető komment.</p>
    @endforelse

    @auth
        <h4>Komment hozzáfűzése</h4>
        <form action="{{route('comments.store', $post->id)}}" method="POST">
            @csrf
            <textarea name="comment" placeholder="komment helye" required></textarea>
            <button>Küldés</button>
        </form>
    @else
        <p>Komment írásához <a href="{{route('login')}}">jelentkezz be.</a></p>
    @endauth
</body>
</html>
