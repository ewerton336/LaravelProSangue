<!-- View Master - Base para outras View construidas por extenção desta. -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" >
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>


</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #FF5C5C;">
    <a class="navbar-brand" href="/">Home</a>
    <a class="nav-link text-light" href="/doador">Doador</a>
    <a class="nav-link text-light" href="/entidadeColetora">Entidade Coletora</a>
    <a class="nav-link text-light" href="/cedenteLocal">Cedente Local</a>
    <a class="nav-link text-light" href="/calendarioEvento">Calendario de Eventos</a>
    <a class="nav-link text-light" href="/administrador">Administrador</a>
    <a class="nav-link text-light" href="/usuario">Usuario</a>
    <a class="nav-link text-light" href="/adminEvento">Eventos X Administradores (N para N)</a>
</nav>

<div class="container">
<!-- As views filhas incluem conteúdo aqui e no outro Arrobayield acima -->
@yield('corpo')
</body>
</html>
</div>