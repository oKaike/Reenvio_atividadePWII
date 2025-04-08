<?php
include_once "header.php";
include_once "conexoes.php";
if(isset($_POST['txt_id_tarefa'],$_POST['txt_desc_tarefa'])){
 
    $identificacao = filter_input(INPUT_POST, 'txt_id_tarefa');;
   $desc_tarefa = filter_input(INPUT_POST, 'txt_desc_tarefa');
   
   $informacoes=$conexao->query("SELECT * FROM Tarefa WHERE usuario_nome  ='$identificacao'&& senha_usuario ='$desc_tarefa'") or die ($mysql->error);//verificar login e senha
   $linha=$informacoes->rowCount();

   if($linha==1){

    $row=$informacoes->fetch(PDO::FETCH_OBJ);
    echo $row->id_tarefa;
    if(!isset($_SESSION['licao'])){
        session_start();
    }    
      $_SESSION['tarefa']=[
       'cod_tarefa'=>$row->data_inicio_tarefa,
        'nome_tarefa'=>$row->descricao_tarefa,
      ];
      $_SESSION['teste']=[
        'desc_tarefa'=>$row->data_fim_tarefa,
      
       ];
      header( 'Location:infos.php');
   }
   else{
    header('Location:Tabela.php');
 }
}