<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>{{$title}}</h2>

    <form method="POST">


        <label for="user">Nom usuari</label>
        <input type="text" id="user"><br><br>

        <label for="contrasenya">Contrasenya</label>
        <input type="text" id="contrasenya"><br><br>

        <input type="submit">
    </form>
    <br>
    <a href="{{ url('/sign/signin')}}"><input type="submit" value="¿Tienes cuenta?"></a>

</body>
</html>