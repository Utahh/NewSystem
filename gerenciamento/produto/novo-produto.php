<div class="container" style="margin-top: 15px">
<h1 style="text-align:center">Novo Produto</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome Produto</label>
        <input type="text" name="nome" class="form-control">
    </div><br>
    <div class="mb-3">
        <label>Categoria</label>
        <input type="text" name="categoria" class="form-control" require>
    </div><br>
    <div class="mb-3">
        <label>Valor do Produto</label>
        <input type="number" name="preco" class="form-control" require>
    </div><br>
    <center>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </center>
    </div>
</form>
</div>