<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body class="app">
    <header class="main-header mb-5 text-center">
        <div class="container">
            <h1>My website</h1>
            <p>First project with Laravel</p>
        </div>
    </header>
    
    <main class="main-main">
        @yield('content')
    </main>

    <footer class="main-footer text-right">
        <div class=container>
            <p>Made by Thang</p>
        </div>
    </footer>

</body>
</html>