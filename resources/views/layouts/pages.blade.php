<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <!-- SEO -->
    <meta name="description" content="{{$description or null}}">
    <meta name="keywords" content="{{$keywords or null}}">
    <meta name="author" content="{{$author or null}}">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
@yield('content')
</body>
</html>