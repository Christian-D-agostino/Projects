<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diventa revisore</title>
</head>
<body>
    <h1>Un utente ha chiesto di lavorare con noi</h1>
    <h2>Ecco i suoi dati:</h2>
    <p>nome: {{$name}}</p>
    <p>email: {{$email}}</p>
    <p>Se vuoi rendere revisor clicca qui : </p>
    <a href="{{route('make.revisor', compact('user'))}}">Rendi revisor</a>
</body>