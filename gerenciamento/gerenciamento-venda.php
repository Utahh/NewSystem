<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de funcionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php" style="color: white">Sistema de Gerenciamento | Vendas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Gerenciamento funcionario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="home.php" >Home</a>
                                </li>
                        </div>
                    </ul>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ferramentas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="?page=novo">Novo funcionario</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastro
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="gerenciamento-cliente.php">Gerenciamento de cliente</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="gerenciamento-produto.php">Gerenciamento de produto</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Relatorios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="gerenciamento-relatorios.php"></a>Relatorios</li>
                            </ul>
                        </li>
                    </ul>
                    <hr class="dropdown-divider">
                    <div class="form-inline my-2 my-lg-0">
                        <a href="index.php">Sair</a>

                    </div>
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
                        include("novo-cliente.php");
                        break;
                    case "salvar":
                        include("salvar-venda.php");
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