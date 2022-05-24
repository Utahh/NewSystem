<div class="container" style="text-align: center; margin-top:10px">
<h1>Funcionários Cadastrados</center></h1>
</div>
<button onclick="location.href='?page=novo'" class='btn btn-success' style="margin-left: 93%; margin-bottom: 10px">Novo</button>
<?php
    $sql = "SELECT * FROM funcionario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){

        print "<table class='table table-hover
        table-striped table-bordered'>" ;
        print "<tr>"; 
        print "<th>ID</th>";
        print "<th>NOME</th>";
        print "<th>USUARIO</th>";
        print "<th>ADM</th>";
        print "<th>ACOES</th>";
        print "</tr>"; 
        while($row = $res->fetch_object()){
            print "<tr>"; 
            print "<td>".$row->id_funcionario."</td>";
            print "<td>".$row->nome_funcionario."</td>";
            print "<td>".$row->usuario."</td>";
            print "<td>".$row->adm."</td>";
            print "<td>
            <button onclick=\"location.href='?page=editar&id=".$row->id_funcionario."';\" class='btn btn-primary'>Editar</button>
            <button onclick=\"if(confirm ('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id_funcionario."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>"; 
        }
        print"</table>";
    }else{
        print "<p class='alert alert-danger'> Nao foi localizado nenhum resultado!</p> ";
    }
?>