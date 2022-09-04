<?php
//Chamei meu crud de inserção, alterar, selecionar e excluir
include ("bolsasangue_crud.php");

//1º: pego os valores via post
$nome = $_POST["nome"];
$tsangue = $_POST["tipo_sanguineo"];

//2º: Valido se estão ok
if($nome == ""){
    $erro = "Campo nome vazio";
    header ("Location:sangue.php?erro=$erro");
}if($tsangue == ""){
    $erro = "Campo nascimento vazio";
    header ("Location:sangue.php?erro=$erro");

}
//3º: realizo a ação no crud
inserirbancosangue($nome, $tsangue);


?>