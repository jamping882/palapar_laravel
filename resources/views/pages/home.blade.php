<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Prelim Demo</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <h1>Laravel Demo</h1>
    Home | <a href="{{url('/profile')}}">Profile</a> | <a href="{{url('/extra')}}">Extra</a>
</body>
</html>