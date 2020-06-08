<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/3780101a68.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>VideoTube</h2>
            <ul>
                <li><a href="{{ url('/') }}"><i class="far fa-file"></i>Documentação</a></li>
                <li><a href="{{route('videos.index')}}"><i class="fas fa-home"></i>Museu</a></li>
                <li><a href="{{route('usuarios')}}"><i class="far fa-user"></i>Usuários</a></li>
            </ul>
            <div class="social-media">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main-content" id="main">
            @yield('content')
        </div>
    </div>
</body>


</html>
