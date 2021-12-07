<!DOCTYPE html>

<head>
    <title>My first laravel blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {background-color: powderblue;}
        h1   {color: blue;}
        p    {color: red;}
    </style>
    background-image: url('w3css.gif');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;




</head>
<header>
    <div class="menu">
        <a href="/" class="navbutton"><br>Kezdőlap<br><br></a>
        <a href="/allposts" class="navbutton"><br>Blogbejegyzések<br><br></a>
        <a href="/posting" class="navbutton"><br>Blogbejegyzések létrehozása<br><br></a>
        <a href="/crud/listing" class="navbutton"><br>Blogbejegyzések listázása címke szerint<br><br></a>

    </div>
</header>

<body class="welcome">
<img src="{{asset('images/blog_welcome.jpg')}}" width="1400" height="50">
</body>


