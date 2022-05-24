<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php" style="color: white">Sistema de Gerenciamento | Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="color:rgba(34, 123, 248, 0.8)">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header" style="background-color: blue;">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color:aliceblue">Tela de Gerenciamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black">
                                Gerenciamento
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="cliente/gerenciamento-cliente.php">Gerenciamento de Cliente</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="funcionario/gerenciamento-funcionario.php">Gerenciamento de Funcionario</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="produto/gerenciamento-produto.php">Gerenciamento de Produto</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="entrada/gerenciamento-entrada.php">Gerenciamento de Entrada</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black">
                                Relatorios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="#">Relatorio de Vendas</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="#">Relatorio de Entradas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div style="text-align:right;margin-bottom:20px; margin-right:15px">
                    <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                        </svg> <a href="logout.php" style="text-decoration:none ; color:white; ">Sair</a></button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
                switch (@$_REQUEST["page"]) {
                    case "novo":
                        include("nova-venda.php");
                        break;
                    case "salvar":
                        include("salvar-venda.php");
                        break;
                    case "editar":
                        include("editar-venda.php");
                        break;
                    default:
                        include("listar-venda.php");
                        break;
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>