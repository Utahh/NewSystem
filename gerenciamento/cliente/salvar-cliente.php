<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["Cliente"];
        $cpf = $_POST["CPF"];
        $telefone = $_POST["Telefone"];

        $sql = "INSERT INTO cliente (nome_cliente, cpf_cliente, telefonecliente) VALUES ('{$nome}','{$cpf}', '{$telefone}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Nao foi possivel realizar o cadastro');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM cliente WHERE id_cliente =" . $_REQUEST["id"];
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
