<?php
include_once'header.php';
?>
<form action="verificar.php" method="post">
    <label>Nome:</label>
    <input type="text" name = "txt_id_tarefa" required><br>
    <label for="">Senha:</label>
    <input type="text" name = "txt_desc_tarefa" required><br>
    <input type="submit" value="Acessar Tarefa" style="margin: 10px;">
</form>

<?php
include_once "footer.php";
?>