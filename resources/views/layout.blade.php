<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('plugins/bootstrap-4/css/bootstrap.min.css')}}"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-icons/font/bootstrap-icons.min.css')}}"  crossorigin="anonymous">
    <title>Employee Information </title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class="navbar-brand" href="#"> <i class="bi bi-people-fill"></i> Employee Information System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
{{--                <a class="nav-link" href="">Create</a>--}}
            </li>
        </ul>
    </div>
</nav>
<div class="container">

    @yield('page-content')
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="{{asset('plugins/bootstrap-4/js/bootstrap.min.js')}}" crossorigin="anonymous"></script>
</body>
</html>
