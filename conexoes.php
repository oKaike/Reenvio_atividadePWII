<?php
$host="localhost"; // Computador que iresmos acessar
$port="3306"; // Porta de acesso para  a Tarefa
$user="root"; //Administrador
$senha="root"; //Senha de acesso a a tarefa
$banco="Agenda";

try{//try irá acionar o banco, caso as informaçoes n batam irá parar no catch
$conexao =new PDO('mysql:host = '.$host.';port='.$port.//$conn é o objeto q faz a conexão

';dbname='.$banco, $user,$senha); //configuração de acesso ao banco de dados

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Configuração caso ocorra um erro
}
catch(PDOException $e){
 echo 'ERROR: '.$e->getMessage();
}
?>
