<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nFuncionario = $_POST["nome_funcionario"];
        $nCliente = $_POST["nome_cliente"];
        $data = $_POST["data_venda"];

        $sql = "INSERT INTO venda (nome_funcionario, nome_cliente, data_venda) VALUES ('{$nFuncionario}','{$nCliente}', '{$data}')";

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
        $sql = "DELETE FROM venda WHERE id_venda =" . $_REQUEST["id"];
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
