<!DOCTYPE html>
<title>My first laravel blog</title>

<link rel="stylesheet" href="../css/app.css">



<body>
<h1>Blogbejegyzések címke szerint listázva</h1>


@foreach($data as $post)
    <table>
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user}}</td>
        </tr>
    </table>
    <p>{{$post->post}}</p>
    <h6>{{$post->tag}}</h6>
@endforeach



</body>



<?php
/*
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["id"]. "<br>". $row["user"]. "<br>" . $row["post"]."<br>. "Címkék: "." $row["post"];
}
} else {
echo "0 results";
}*/
?>

