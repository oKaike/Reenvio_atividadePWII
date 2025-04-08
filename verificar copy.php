<?php
include_once "header.php";
include_once "conexao.php";
$informacoes=$conexao->query('SELECT * FROM Tarefa');
while($row=$informacoes->fetch(PDO::FETCH_OBJ)){
   echo $row->id_tarefa.'<br>';
}
include_once "footer.php";
 
?>