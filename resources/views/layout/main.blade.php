<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/app.css">
    <title>Document</title>
</head>
<body class="app">
    <header class="main-header">
        <h1>My website</h1>
        <p>First project with Laravel</p>
    </header>
    
    <main class="main-main">
        @yield('content')
    </main>

    <footer class="main-footer">
        <p>Made by Thang</p>
    </footer>
</body>
</html>