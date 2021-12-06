<!DOCTYPE html>
<title>My first laravel blog</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">



<body>
<h1>Blogbejegyzések címke szerint listázva</h1>

<br>
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
    </div>

</form>

</body>


