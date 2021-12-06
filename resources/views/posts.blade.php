<!DOCTYPE html>
<title>My first laravel blog</title>

<!--<link href="bulma/css/bulma.min.css" rel="stylesheet">-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">


<body>
<a href="../">Vissza</a>
<h1>Blogbejegyzések</h1>


@foreach($data as $post)
    <table>
        <tr>
            <td>{{$post->id}}.</td>
            <td>{{$post->user}}</td>
        </tr>
    </table>
    <p>{{$post->post}}</p>
    <h6>Címkék: {{$post->tag}}</h6>
    <a href="{{url('crud/show')}}" class="button is-warning is-small">Megtekintés</a>
    <a href="{{url('crud/'.$post->id.'/edit')}}" class="button is-primary is-small">Szerkesztés</a>
    <!--<a href="{{url('crud/delete')}}" class="button">Törlés</a>-->
    <form action="{{url('crud/'.$post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="button is-danger is-small" type="submit">Törlés</button>
    </form>
@endforeach



</body>
