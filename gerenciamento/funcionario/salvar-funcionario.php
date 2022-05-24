<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $adm = $_POST["adm"];
        $senha = md5($_POST["senha"]);

        $sql = "INSERT INTO funcionario (nome_funcionario, usuario, adm ,senha) VALUES ('{$nome}','{$usuario}', '{$adm}', '{$senha}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Nao foi possivel realizar o cadastro');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        break;
    case 'editar':
        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $adm = $_POST["adm"];
        $senha = md5($_POST["senha"]);

        $sql = "UPDATE funcionario SET nome_funcionario='$nome', usuario='$usuario', adm='$adm', senha='$senha'
        WHERE id_funcionario=" . $_POST['id'];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Nao foi possivel editar');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM funcionario WHERE id_funcionario =" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Nao foi possivel excluir');</script>";
            print "<script>location.href='?page=listar'</script>";
        }

        break;
}
