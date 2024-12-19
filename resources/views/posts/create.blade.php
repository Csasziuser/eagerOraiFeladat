<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poszt létrehozása</title>
</head>
<body>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Cím" required> <br><br>
        <textarea name="content" placeholder="Tartalom"></textarea> <br><br>
        <button>Poszt létrehozása</button>
    </form>
</body>
</html>
