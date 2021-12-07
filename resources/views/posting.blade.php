<!DOCTYPE html>

<html lang="hu">



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
<section class="post-form">
    <h2>Blogbejegyzés írása</h2>
    <form id="post-form" method="post" action="/posting" >
    @csrf
        <table>
            <tr>
                <td><span>Név:</span></td>
                <td><label>
                        <input type="text" name="user">
                    </label></td>
                <td><span>Címke: </span></td>
                <td><label>
                        <input type="text" name="tag">
                    </label></td>
            </tr>

        </table>
        <p class="long-input-title">Szöveg:</p>
        <label>
            <textarea cols="70" rows="4" class="long-input" form="post-form" name="post"></textarea>
        </label>
        <input type="submit" value="Közzététel">
    </form>
</section>
</body>
</html>
<body>



