a<?php
if(!isset($_SESSION)){
    session_start();//Checa se a seção existe
}
session_destroy();//Enx=cerra a sesação
header('Location:Tabela.php');//Leva o ususario para a seção inicial
die();
?>
