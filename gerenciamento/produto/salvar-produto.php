<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $categoria = $_POST["categoria"];
        $preco = $_POST["preco"];

        $sql = "INSERT INTO produtos (nome_produto, categoria_produto, preco_produto) VALUES ('{$nome}','{$categoria}', '{$preco}')";

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
        $categoria = $_POST["categoria"];
        $preco = $_POST["preco"];

        $sql = "UPDATE produtos SET nome_produto='$nome', categoria_produto='$categoria', preco_produto='$preco',
        WHERE id_produtos=" . $_POST['id'];

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
        $sql = "DELETE FROM produtos WHERE id_produtos=" . $_REQUEST["id"];
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
