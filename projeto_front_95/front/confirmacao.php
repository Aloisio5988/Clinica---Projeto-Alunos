<?php

// Chamei meu crud de inserção, alterar, selecionar e excluir

include ("login_classe.php");
include ("pontocone.crud.php");

// Pego os dados via Post

$CPF = $_POST["usuario"];
$senha = $_POST["senha"];

// Executa a consulta no banco de dados

$confirmacao = selectAllLogin($CPF,$senha);
//echo($CPF."asas".$senha);
//die(var_dump($confirmacao));
if ($confirmacao != ""){
    session_start();
   
    foreach($confirmacao as $pessoa) { 
    $_SESSION["usuario"]=$pessoa["usuario"];
    $_SESSION["nome"]=$pessoa["nome"];
    $_SESSION["id_login"]=$pessoa["id_login"];
    }

    //die(var_dump($_SESSION));
    header('location:../front/principal.php');
}
else{
  $erro = "ACESSO NEGADO! <br> Usuário/Senha incorreto";
  header ("Location:index.php?erro=$erro");
}
