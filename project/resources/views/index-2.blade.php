<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Routing</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script> src="{{ asset('js/app.js') }}"</script>
</head>
<body>
    <big>(CON CONTROLLER)</big>

    {{-- /holaTodo: saluta tutti gli utenti in spagnolo --}}
    <div class="container">
        <h1>Hola a todos! (static)</h1>
    </div>

    {{-- /holaTu: saluta utente per nome (variabile) in spagnolo --}}
    <div class="container">
        <h1>{{$hello}} (variable)</h1>
    </div>

    {{-- /holaTu2: saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in spagnolo --}}
    <div class="container">
        <h1>Hola {{$user}}!</h1>
    </div>

    <div class="container-a">
        <a href="http://localhost:8000/helloAll">VAI A: SENZA CONTROLLER</a>
    </div>

</body>
</html> 