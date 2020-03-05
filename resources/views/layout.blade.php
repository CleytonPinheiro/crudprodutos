<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ---SolPac CRUD---</title>
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" integrity="sha384-wxqG4glGB3nlqX0bi23nmgwCSjWIW13BdLUEYC4VIMehfbcro/ATkyDsF/AbIOVe" crossorigin="anonymous">

</head>
<body>
<div class="jumbotron jumbotron-fluid">
    <div class="container">

        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="/categorias">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbanav-itemrNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav-item collapse navbar-collapse" id="navbarNav"active>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/categorias">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>

                </ul>
            </div>
        </nav>

        <h1>@yield('cabecalho')</h1>

    </div>

    @yield('conteudo')

</div>
</body>
</html>
