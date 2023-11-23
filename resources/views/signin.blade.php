<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <form method="POST">
        <label for="user">Usuario</label><br>
        <input type="text" id="user"><br><br>
        <label for="password">Contraseña</label><br>
        <input type="password" id="password"><br><br>
        <input type="submit" value="Iniciar session">
    </form>
    <br>
    <a href="{{ url('/sign/signup')}}"><input type="submit" value="Crear cuenta"></a>

</body>
</html>