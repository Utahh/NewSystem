<div class="container" style="text-align: center; margin-top:10px">
<h1>Produtos Cadastrados</center></h1>
</div>
<button onclick="location.href='?page=novo'" class='btn btn-success' style="margin-left: 93%; margin-bottom: 10px">Novo</button>
<?php
    $sql = "SELECT * FROM produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){

        print "<table class='table table-hover
        table-striped table-bordered'>" ;
        print "<tr>"; 
        print "<th>ID DO PRODUTO</th>";
        print "<th>NOME DO PRODUTO</th>";
        print "<th>CATEGORIA</th>";
        print "<th>PREÇO</th>";
        print "<th>ACOES</th>";
        print "</tr>"; 
        while($row = $res->fetch_object()){
            print "<tr>"; 
            print "<td>".$row->id_produtos."</td>";
            print "<td>".$row->nome_produto."</td>";
            print "<td>".$row->categoria_produto."</td>";
            print "<td>".$row->preco_produto."</td>";
            print "<td>
            <button onclick=\"location.href='?page=editar&id=".$row->id_produtos."';\" class='btn btn-primary'>Editar</button>
            <button onclick=\"if(confirm ('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id_produtos."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>"; 
        }
        print"</table>";
    }else{
        print "<p class='alert alert-danger'> Nao foi localizado nenhum resultado!</p> ";
    }
?>