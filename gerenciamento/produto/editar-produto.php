<div style="text-align: center; margin-top:15px">
<h1>Editar Produtos</h1>
</div>
<?php
$sql = "SELECT * FROM produtos WHERE id_produtos=".
$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php
     print $row->id_produtos; ?>">
    <div class="mb-3">
        <label>Nome do Produto</label>
        <input type="text" name="nome" value="<?php print $row->nome_produto; ?>" class="form-control">
    </div><br>
    <div class="mb-3">
        <label>Categoria Produto</label>
        <input type="text" name="categoria" value="<?php print $row->categoria_produto; ?>"class="form-control">
    </div><br>
    <div class="mb-3">
        <label>Preço do Produto</label>
        <input type="number" name="preco" value="<?php print $row->preco_produto; ?>"class="form-control">
    </div><br>
    <center>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </center>
</form>