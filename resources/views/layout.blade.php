<?php


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body>
    <div id="app">
        <header class="h-15vh bg-emerald-300 border-4 flex flex-row justify-between content-center">
            <img src="{{asset("images/logo.png")}}" alt="logo">
            <h1>Datos de ddddddempresa</h1>
            @guest
                <form action="login" method="POST">
                    @method('post') <!--Em este caso no hace falta pero pa acostumbrarse-->
                    @csrf <!--Protegerse de ataques de inyección-->
                    <label for="email">Email</label><input type="text" name="email" id="email"><br />
                    <label for="pass">Password</label><input type="text" name="password" id="pass"><br />
                    <input type="submit" value="Login">
                    <a href="register">Registrarse</a>
                </form>
            @endguest
            @auth
                Conectado como {{auth()->User()->name}}
                <form action="logout" method="post">
                    @csrf
                    <input type="submit" value="Logout">
                </form>
            @endauth
        </header>
        <nav class="h-10vh bg-blue-700">
            <a class="bg-gray-500" href="{{route("alumnos.index")}}">Alumnos</a>
            <a class="bg-gray-500" href="{{route("productos.index")}}">Productos</a>
        </nav>
        <main class="h-fit bg-red-700">
            @yield('contenido')
        </main>
        <footer class="h-15vh bg-yellow-500">
            @copyright pero copia lo que quieras...
        </footer>
    </div>
</body>
</html>
