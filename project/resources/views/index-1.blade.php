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
    <big>(SENZA CONTROLLER)</big>

    {{-- /helloAll: saluta tutti gli utenti in inglese (statico, no variabili) --}}
    <div class="container">
        <h1>Hello everyone! (static)</h1>
    </div>

    {{-- /helloYou: saluta utente per nome (variabile) in inglese --}}
    <div class="container">
        <h1>{{$hello}} (variable)</h1>
    </div>

    {{-- /helloYou2: saluta utente per nome (stessa variabile, stessa view, ma nome diverso) in inglese --}}
    <div class="container">
        <h1>Hello {{$user}}!</h1>
    </div>

    <div class="container-a">
        <a href="http://localhost:8000/holaTodos">VAI A: SENZA CONTROLLER</a>
    </div>
  

</body>
</html> 