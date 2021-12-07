<!DOCTYPE html>

<head>
    <title>My first laravel blog</title>
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


<body>
<a href="../">Vissza</a>
<section class="post-form">
    <h2>Blogbejegyzés szerkesztése(crud)</h2>
    <form method="post" action="{{url('crud/'.$post->id)}}" accept-charset="utf-8">
    @csrf <!-- {{ csrf_field() }} -->
    @method('PUT')
        <table>
            <tr>
                <td><span>Név:</span></td>
                <td><label for="user">
                        <input type="text" name="user" value="{{$post->user}}">
                    </label></td>
                <td><span>Címke: </span></td>
                <td><label for="tag">
                        <input type="text" name="tag">
                    </label></td>
            </tr>

        </table>
        <p class="long-input-title">Szöveg:</p>
        <label>
            <textarea cols="70" rows="4" class="long-input" form="post-form" name="post"></textarea>
        </label>
        <input type="submit" value="Mentés">
    </form>
</section>



</body>
