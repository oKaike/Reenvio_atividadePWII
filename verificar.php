<?php //coneão com outros aruquivos php 
include_once "header.php";
include_once "conexoes.php";
if(isset($_POST['txt_id_tarefa'],$_POST['txt_desc_tarefa'])){
 //filtragem de dados
    $identificacao = filter_input(INPUT_POST, 'txt_id_tarefa');;
   $desc_tarefa = filter_input(INPUT_POST, 'txt_desc_tarefa');
   //selecionar tabela
   $informacoes=$conexao->query("SELECT * FROM Tarefa WHERE usuario_nome  ='$identificacao'&& senha_usuario ='$desc_tarefa'") or die ($mysql->error);//verificar login e senha
   $linha=$informacoes->rowCount();//Conta a quantidade de respostas
// Se a primeira linha de conteudo for verdadeira, o if sera executado.
   if($linha==1){

    $row=$informacoes->fetch(PDO::FETCH_OBJ);//Transforma o conteudo em objeto.
    echo $row->id_tarefa;
    if(!isset($_SESSION['tarefa'])){//checa se a sesação usuario existe.
        session_start();
    }    
      $_SESSION['tarefa']=[//cria vetores por onde passara o conteudo do banco de dados, e sera armazenado em uma variavel(que usaremos posteriormente.
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
