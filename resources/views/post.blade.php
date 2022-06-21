<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <article>
        <h1>{{$post->title;}}</h1>
        <p>{!! $post->body; !!}</p>
    </article>
    <p><a href="/posts">go back</a></p>
</body>

</html>