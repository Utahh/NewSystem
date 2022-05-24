<?php
require 'config.php';

if (isset($_POST['usuario']) || isset($_POST['senha'])) {

    if (strlen($_POST['usuario']) == 0) {
        echo "Preencha o usuário";
    } else if (strlen($_POST['senha']) == 0)
        echo "Preencha a senha";
} else {

    $usuario = $conn->real_escape_string($_POST['usuario']);
    $senha = $conn->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM funcionario WHERE usuario= '$usuario' AND senha='$senha'";
    $sql_query = $conn->query($sql_code) or die("Falha na execução no banco de dados");

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['usuario'] = $usuario['usuario'];

        header("Location: home.php");
    } else {
        echo "falha ao logar! E-mail ou senha incorretos";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <h1 style="margin-top: 10%; text-align:center; margin-left:40px">Tela de Acesso</h1>
    <div class="container" style="text-align:center">


        <form action="" method="POST">
            <br>
            <p>
                <label>Usuário</label>
                <input type="text" name="usuario">
            </p>

            <p>
                <label>Senha</label>
                <input type="password" name="senha" style="margin-left:10px">
            </p>
    </div>
    <div style="text-align:center;margin-left:5%">
        <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
            </svg> <a href="home.php" style="text-decoration:none ; color:white; ">Entrar</a></button>
    </div>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>