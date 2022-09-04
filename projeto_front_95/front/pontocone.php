<?php
session_start();
$id = $_SESSION ["id_login"];
include ("pontocone.crud.php");
$hora_1 = $_POST["hora_1"];
$hora_2 = $_POST["hora_2"];
$hora_3 = $_POST["hora_3"];
$hora_4 = $_POST["hora_4"];
$hoje = date('y/m/d');
$verificacao = selectAllpontofuncionario($id,$hoje);
foreach ($verificacao as $dados){
   $hora_2 = $dados["hora_2"];
   $hora_3 = $dados["hora_3"];
   $hora_4 = $dados["hora_4"];
}
if($verificacao ==""){ 
   inserirpontofucionario($id);
}elseif ($hora_2 == ""){
    $hora = "hora_2";
   atualizarpontofuncionario($hora,$id);
}elseif ($hora_3 ==""){   
    $hora = "hora_3";
   atualizarpontofuncionario($hora,$id);
}elseif ($hora_4 ==""){   
   $hora = "hora_4";
  atualizarpontofuncionario($hora,$id);
}

//inserirpontofucionario($hora_1, $hora_2, $hora_3, $hora_4);


?>
 
