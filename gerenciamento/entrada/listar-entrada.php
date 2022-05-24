<div class="container" style="text-align: center; margin-top:10px">
<h1>Lista de Entrada de Produtos</center></h1>
</div>
<button onclick="location.href='?page=novo'" class='btn btn-success' style="margin-left: 93%; margin-bottom: 10px">Novo</button>
<?php
    $sql = "SELECT * FROM entrada_produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){

        print "<table class='table table-hover
        table-striped table-bordered'>" ;
        print "<tr>"; 
        print "<th>ID ENTRADA</th>";
        print "<th>NOME DO PRODUTO</th>";
        print "<th>VALOR DE ENTRADA</th>";
        print "<th>QUANTIDADE</th>";
        print "<th>NÚMERO DO PRODUTO</th>";
        print "<th>DATA DE ENTRADA</th>";
        print "<th>ACOES</th>";
        print "</tr>"; 
        while($row = $res->fetch_object()){
            print "<tr>"; 
            print "<td>".$row->id_entrada."</td>";
            print "<td>".$row->nome_produto."</td>";
            print "<td>".$row->valor_entrada."</td>";
            print "<td>".$row->id_produto."</td>";
            print "<td>".$row->quantidade_entrada."</td>";
            print "<td>".$row->data_entrada."</td>";
            print "<td>
            <button onclick=\"location.href='?page=editar&id=".$row->id_entrada."';\" class='btn btn-primary'>Editar</button>
            <button onclick=\"if(confirm ('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id_entrada."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>"; 
        }
        print"</table>";
    }else{
        print "<p class='alert alert-danger'> Nao foi localizado nenhum resultado!</p> ";
    }
?>