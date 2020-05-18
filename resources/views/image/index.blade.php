<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title','RandomImages')</title>
    <link rel="icon" type="image/png" href="img/logo.png" />
</head>
<body>
    <div id="app">
        <h2>{{$server_ip}}</h2>
        <img src="{{$url}}" alt="" width="500" height="600">
    </div>
</body>
</html>