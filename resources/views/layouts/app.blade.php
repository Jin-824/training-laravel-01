<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>商品管理アプリ</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,600" type="text/css">
    <link rel="stylesheet" href="{{ asset('CSS/app.css') }}">
</head>
<body>
<div class="container">
    <header>
        <h1>@yield('title','')</h1>
    </header>

    @yield('content')
</div>
</body>
</html>