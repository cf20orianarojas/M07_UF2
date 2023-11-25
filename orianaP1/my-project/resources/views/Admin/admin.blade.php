<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BENVINGUT/DA ADMIN</h1>
    <div>
        <a href="{{ route('centres') }}">CENTRES</a>
        <a href="#">PROFESSORAT</a>
        <a href="#">ALUMNAT</a>
    </div><br>
    <a href="{{ route('signin') }}">Log out</a>
</body>
</html>