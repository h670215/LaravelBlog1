<!DOCTYPE html>

<head>
    <title>My first laravel blog</title>
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
<h1>Blogbejegyzések címke szerint listázva</h1>

<br>
<form  method="post" action="/crud/listing" >
    <label>Címke kiválasztása</label><br>
    <div class="select is-rounded select is-primary">
        <label>
            <select>
                <option>Címkék</option>
                @foreach($listedtag as $posttag)
                    <option>{{$posttag->tag}}</option>
                @endforeach
            </select>
        </label>
        <br>
        <button type="submit" class="select is-rounded select is-primary">Listázás</button>
    </div>

</form>

</body>


