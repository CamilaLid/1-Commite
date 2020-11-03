<?php

include_once "paginas/includes/header.php"; //HEADER



//PÁGINAS 

$paginas = isset($_GET['pg']);


if ($paginas) {

    switch ($_GET['pg']) {
        case 'inicial':
            include_once "paginas/inicial.php";
            break;
            case 'cadastro':
            include_once "paginas/cadastro.php";
            break;
            case 'contato':
            include_once "paginas/contato.php";
            break;
            case 'produtos':
            include_once "paginas/produtos.php";
            break;
            case 'sobre':
            include_once "paginas/sobre.php";
            break;
            case 'carrinho':
            include_once "paginas/carrinho.php";
            break;
            case 'confirmacao':
            include_once "paginas/confirmacao.php";
            break;
        
        default:
            # code...
            break;
    }
} else {
    include_once "paginas/inicial.php";
}



include_once "paginas/includes/footer.php"; //FOOTER
