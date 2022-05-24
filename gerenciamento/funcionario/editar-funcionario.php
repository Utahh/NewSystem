<h1>Editar funcionario</h1>
<?php
$sql = "SELECT * FROM funcionario WHERE id_funcionario=".
$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php
     print $row->id_funcionario; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome_funcionario; ?>" class="form-control">
    </div><br>
    <div class="mb-3">
        <label>Usuario</label>
        <input type="text" name="usuario" value="<?php print $row->usuario; ?>"class="form-control">
    </div><br>
    <select class="form-select" aria-label="Default select example" value="
        <?php print $row->adm; ?>"name="adm" >
        <option selected>Nivel de acesso no sistema</option>
        <option value="0">Usuario</option>
        <option value="1">Administrador</option>
    </select><br>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" 
        class="form-control">
    </div><br>
    <center>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </center>
</form>