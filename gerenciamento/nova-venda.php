<?php
require 'config.php';
$query = mysqli_query($conn, "SELECT * FROM produtos");
?>
<div class="container" style="margin-top: 15px">
    <h1 style="text-align:center">Nova Venda</h1>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <select class="form-select" aria-label="Default select example" name="produto" require style="margin-top:15px ;">
            <option selected>Nome do Produto</option>
            <?php while ($prod = mysqli_fetch_array($query)) { ?>
                <option value="<?php echo $prod['id_produtos'] ?>"><?php echo $prod['nome_produto'] ?></option>
            <?php } ?>
        </select><br>
        <div class="mb-3">
            <label>Data da Venda</label>
            <input type="date" name="data" class="form-control" require>
        </div><br>
        <div class="mb-3">
            <label>Quantidade</label>
            <input type="number" name="nFuncionario" class="form-control" require>
        </div><br>
        <div class="mb-3">
            <label>Valor da Venda</label>
            <input type="number" name="nFuncionario" class="form-control" require>
        </div><br>
        <center>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </center>
</div>
</form>
</div>