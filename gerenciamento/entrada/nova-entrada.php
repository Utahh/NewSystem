<div class="container" style="margin-top: 15px">
<h1 style="text-align:center">Nova Entrada</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div><br>
    <div class="mb-3">
        <label>Usuário</label>
        <input type="text" name="usuario" class="form-control" require>
    </div><br>
    <center>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </center>
    </div>
</form>
</div>