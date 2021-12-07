<!DOCTYPE html>

<head>
    <title>My first laravel blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<header>
    <div class="menu">
        <a href="/" class="navbutton"><br>Kezdőlap<br><br></a>
        <a href="/allposts" class="navbutton"><br>Blogbejegyzések<br><br></a>
        <a href="/posting" class="navbutton"><br>Blogbejegyzések létrehozása<br><br></a>
        <a href="/crud/listing" class="navbutton"><br>Blogbejegyzések listázása címke szerint<br><br></a>

    </div>
</header>
<br><br><br><br><br><br>
<body>
<h1>Blogbejegyzések</h1>


@foreach($data as $post)
    <div class="postview">
        <table>
            <tr>
                <td>{{$post->id}}.</td>
                <td>{{$post->user}}</td>
            </tr>
        </table>
        <p>{{$post->post}}</p>
        <h6>Címkék: {{$post->tag}}</h6>
        <a href="{{url('crud/show')}}" class="button is-warning is-small">Megtekintés</a><br>
        <a href="{{url('crud/'.$post->id.'/edit')}}" class="button is-primary is-small">Szerkesztés</a>
        <form action="{{url('crud/'.$post->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="button is-danger is-small" type="submit">Törlés</button>
        </form>
    </div>
@endforeach



</body>
