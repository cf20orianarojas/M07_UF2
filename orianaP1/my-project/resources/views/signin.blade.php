<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessión</title>
</head>
<body>
    <!-- Formulari de Inici de sessió -->
    <form action='{{ route("usuaris") }}' method="post">
        @csrf
        <br>
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
            <a href="{{ route('signup') }}">Sign up</a>
        </div>
    </form>
</body>
</html>