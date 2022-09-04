<?php
//Chamei meu crud de inserção, alterar, selecionar e excluir
include ("funcionario_crud.php");
//1º: pego os valores via post

$nome = $_POST["nome"];
$nascimento = $_POST["nascimento"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$telefone = $_POST["telefone"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$mae = $_POST["mae"];
$pai = $_POST["pai"];
$estado_civil = $_POST["estado_civil"];
$numero = $_POST ["numero"];
$especialidade = $_POST["especialidade"];
$genero = $_POST ["genero"];

$comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$pass = array();
$combLen = strlen($comb) - 1;
for ($i = 0; $i < 6; $i++) {
$n = rand(0, $combLen);
$pass[] = $comb[$n];
}
$senha=(implode($pass));

//2º: Valido se estão ok
/*if($nome == ""){
    $erro = "Campo nome vazio";
    header ("Location:funcionario_tela.php?erro=$erro");
}if($nascimento == ""){
    $erro = "Campo nascimento vazio";
    header ("Location:funcionario_tela.php?erro=$erro");
}if($email == ""){
    $erro = "Campo email vazio";
    header ("Location:funcionario_tela.php?erro=$erro");
}if($senha == ""){
    $erro = "Campo senha vazio";
    header ("Location:funcionario_tela.php?erro=$erro");
}if($cpf == ""){
    $erro = "Campo cpf vazio";
    header ("Location:funcionario_tela.php?erro=$erro");
}if($rg == ""){
    $erro = "Campo rg vazio";
    header ("Location:funcionario_tela.php?erro=$erro");
}if($telefone == ""){
    $erro = "Campo telefone vazio";
    header ("Location:funcionario_tela.php?erro=$erro");
}if($endereco == ""){
    $erro = "Campo  vazio";
    header ("Location:funcionario_tela.php?erro=$erro");
}if($filiacao == ""){
    $erro = "Campo filiaçao vazio";
    header ("Location:funcionario_tela.php?erro=$erro");
}if($estado_civil == ""){
    $erro = "Campo estado civil vazio";
    header ("Location:funcionario_tela.php?erro=$erro");
}if($especialidade == ""){
    $erro = "Campo especialidade vazio";
    header ("Location:funcionario_tela.php?erro=$erro");
}
*/

//3º: realizo a ação no crud
inserirFuncionario($nome, $nascimento, $email, $cpf, $telefone, $rg ,$cidade, $rua,$bairro, $numero, $mae, $pai, $estado_civil, $genero,$senha);


?>