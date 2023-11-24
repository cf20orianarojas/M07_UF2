<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessión</title>
</head>
<body>
    <h1> {{ $titolLog }} </h1> <!-- Titol de la view amb els parametres de l'url definits al controlador -->
    <form action="{{ route('usuaris') }}" method="post">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <div>    
            <label for="password">Contrassenya</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="checkbox">
            <label> Remember me </label>
        </div><br>
        <div>
            <button type="submit" class="btn btn-primary" name="submit"> Enviar </button><br>
        </div>
        <div>
            <a href="{{ route('signin') }}">Crear d'usuari nou</a>
        </div>
    </form>
</body>
</html>