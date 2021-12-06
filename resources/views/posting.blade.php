<!DOCTYPE html>
<html lang="hu">



<head>
    <title>My first laravel blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

</head>
<body>

<a href="../">Vissza</a>
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



