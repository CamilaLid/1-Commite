<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">

    <!-- meu icomoon -->
    <link rel="stylesheet" href="public/fonts/icomoon/icomoon.css">

    <!-- Meu css -->
    <link rel="stylesheet" href="public/meuCssAula9.css">


    <title>Inicial</title>
</head>

<body class="alert alert-info">

    <header class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="public/img/fotoslide1.gif" alt="Primeiro Slide" class="rounded img-fluid">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/img/fotoslide2.jpg" alt="Segundo Slide" class="rounded img-fluid">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/img/fotoslide3.png" alt="Terceiro Slide" class="rounded img-fluid">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        <div class="container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
        <a class="navbar-brand" href="#"><span class="Mila-home"></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?pg=inicial">Inicial <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pg=sobre">
                        <span class="Mila-info"></span>Sobre
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                    <span class="Mila-paragraph-left"></span> Serviços
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?pg=produtos">
                        <span class="Mila-cart"></span> Produtos
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?pg=contato">
                        <span class="Mila-phone"></span> Contato
                    </a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>

            <ul class="navbar-nav text-lg-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button class="btn btn-danger">
                            <span class="Mila-profile-female"></span>
                        </button>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                            <span class="Mila-cogs"></span> Meu Perfil
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="Mila-lock2"></span> Mudar Senha
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="Mila-truck1"></span> Meus Pedidos
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="Mila-redo2"></span> Sair
                        </a>

                    </div>
                </li>
            </ul>

        </div>
    </nav>
</div>
    </header>