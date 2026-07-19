<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terrario — Un ecosistema en un frasco</title>
    <meta name="description" content="Terrarios cerrados y autosuficientes, listos en una caja. Sin regar, sin luz directa, sin complicaciones.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Work+Sans:wght@400;500&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="page">
    @yield('content')

    <script src="{{ asset('js/terrario.js') }}" defer></script>
</body>
</html>
