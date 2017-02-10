<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eventbrote</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
    @include('layouts.partials._nav')

    <div class="container">
        @if(session()->has('notification.message'))
        <div class="alert alert-{{ session('notification.type') }}">
            {{ session('notification.message') }}
        </div>
        @endif

        @yield('content')
    </div>

    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    @include('flashy::message')
</body>
</html>