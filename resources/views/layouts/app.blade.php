<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')

    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="container">

    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="/todos">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="/new">Create Todo</a>
        </li>

    </ul>

    @if(session()->has('success'))
        <div class="alert alert-success">

            {{session()->get('success')}}

        </div>

    @endif

    @yield('content')



</div>


</body>
</html>
