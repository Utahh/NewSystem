<div class="container" style="margin-top: 15px">
<h1 style="text-align:center">Novo Cliente</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Cliente</label>
        <input type="text" name="Cliente" class="form-control">
    </div><br>
    <div class="mb-3">
        <label>CPF do cliente</label>
        <input type="text" name="CPF" class="form-control" require>
    </div><br>
    <div class="mb-3">
        <label>Telefone do cliente</label>
        <input type="text" name="Telefone" class="form-control" require>
    </div><br>

    <center>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </center>
    </div>
</form>
</div>