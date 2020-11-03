<div class="container">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
    <a class="navbar-brand" href="#"><span class="Mila-home"></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicial <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="sobre.html">
                    <span class="Mila-info"></span>Sobre
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <span class="Mila-paragraph-left"></span> Serviços
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="produtos.html">
                    <span class="Mila-cart"></span> Produtos
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contato.html">
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
<div class="container py-5">
<div class="row">
    <div class="col text-center">
        <img src="public/img/roupacarrinho2.jpg" alt="" class="img-thumbnail">
    </div>
    <div class="col">
        <h3>
            Cropped de Malha <br>
            <small class="text-muted">azul com estampa</small>
        </h3>
        <p class="lead">Veja os tamanhos desponíveis:</p>

        <form>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preferência</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>Tamanhos:</option>
                  <option value="1">P</option>
                  <option value="2">M</option>
                  <option value="3">G</option>
                  <option value="4">GG</option>
                </select>
                </div>
        </form>
        <br> <br>
        </div>
        <p>Valor <span style="color: rgb(255, 0, 0);"> R$65,00</span></p>
        <a href="confirmacao.html">
            <button class="btn btn-success py-3">Comprar</button>
        </a>
    </div>
</div>
</div>