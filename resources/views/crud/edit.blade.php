<!DOCTYPE html>
<title>My first laravel blog</title>

<link rel="stylesheet" href="../css/app.css">



<body>

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
