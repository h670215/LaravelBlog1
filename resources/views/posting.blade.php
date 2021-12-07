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
    <p class="title is-3">Blogbejegyzés létrehozása</p>



    <form method="post" action="/posting" >
    @csrf
        <div class="field">
            <table>
                <tr>
                    <td><label class="label" >Név: </label></td>
                    <div class="control">
                        <td><input class="input is-link" type="text" name="user"></td>
                    </div>

                    <td><label class="label" >Címke: </label></td>
                    <div class="control">
                        <td><input class="input is-link" type="text" name="tag"></td>
                    </div>
                </tr>

            </table>

            <label class="label">Szöveg:</label>
            <textarea cols="70" rows="4" class="long-input" form="post-form" name="post"></textarea>
            <table>
                <tr>
                    <div class="control">
                    <td><input class="input is-link" type="submit" value="Közzététel"></td>
                    </div>
                </tr>

            </table>
        </div>
    </form>
</section>
</body>
</html>
<body>


