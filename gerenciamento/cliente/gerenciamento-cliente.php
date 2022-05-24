<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home.php" style="color: white">Sistema de Gerenciamento | Cadastro de cliente</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header" style="background-color: blue;">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color:aliceblue">Gerenciamento Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <div style="text-align:left;margin-bottom:20px; margin-right:15px">
                    <button type="button" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg> <a href="../home.php" style="text-decoration:none ; color:white; ">Home</a></button>
                </div>
                    </ul>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastro
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="../funcionario/gerenciamento-funcionario.php">Gerenciamento de funcionário</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="../produto/gerenciamento-produto.php">Gerenciamento de produto</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="../entrada/gerenciamento-entrada.php">Gerenciamento de Entrada</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Relatorios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="gerenciamento-produto.php">Relatório de Vendas</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="gerenciamento-produto.php">Relatório de Entradas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div style="text-align:right;margin-bottom:20px; margin-right:15px">
                    <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                        </svg> <a href="../logout.php" style="text-decoration:none ; color:white; ">Sair</a></button>
                </div>

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("../config.php");
                switch (@$_REQUEST["page"]) {
                    case "novo":
                        include("novo-cliente.php");
                        break;
                    case "salvar":
                        include("salvar-cliente.php");
                        break;
                    default:
                        include("listar-cliente.php");
                        break;
                }
                ?>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>