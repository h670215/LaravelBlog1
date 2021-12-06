<!DOCTYPE html>
<title>My first laravel blog</title>

<link rel="stylesheet" href="../css/app.css">



<body>
<a href="../"></a>
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
    <a href="{{url('crud/show')}}" class="button">Megtekintés</a>
    <a href="{{url('crud/'.$post->id.'/edit')}}" class="button">Szerkesztés</a>
    <!--<a href="{{url('crud/delete')}}" class="button">Törlés</a>-->
    <form action="{{url('crud/'.$post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Törlés</button>

    </form>
@endforeach



</body>
