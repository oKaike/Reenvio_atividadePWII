<?php
include_once 'header.php';
if(!isset($_SESSION['tarefa'])){
    session_start();
}
include_once 'footer.php';
?>
<h2><?php echo $_SESSION['tarefa']['nome_tarefa'];?></h2>
<table class="tabela-excel">
<tr >
<th><h2>Data de Inicio:</h2><?php echo $_SESSION['tarefa']['cod_tarefa'];?></th>
<th><h2>Data de Fim:</h2><?php echo $_SESSION['teste']['desc_tarefa'];?></th>
</tr>
</table>

<?php
include_once 'footer.php'
?>
</div>