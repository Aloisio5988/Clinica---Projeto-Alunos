<?php
//Chamei meu crud de inserção, alterar, selecionar e excluir
include ("paciente_conexao.php");
//1º: pego os valores via post
$nome = $_POST["nome"];
$nascimento = $_POST["nascimento"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$CPF = $_POST["cpf"];
$telefone = $_POST["telefone"];
$RG = $_POST["RG"];
$endereco = $_POST["endereco"];
$filiacao = $_POST["filiacqo"];
$pai = $_POST["npai"];
$mae = $_POST["nmae"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];

$estado_civil = $_POST["estado_civil"];
$doenca_cronica = $_POST["doenca_cronica"];

//Gerar Senha aleatoria
$comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$pass = array();
$combLen = strlen($comb) - 1;
for ($i = 0; $i < 6; $i++) {
$n = rand(0, $combLen);
$pass[] = $comb[$n];
}
$senha=(implode($pass));
//echo(md5($senha));

//die (var_dump($_POST));


//2º: Valido se estão ok
if($nome == ""){
    $erro = "Campo nome vazio";
    header ("Location:paciente_tela.php?erro=$erro");
}if($nascimento == ""){
    $erro = "Campo nascimento vazio";
    header ("Location:paciente_tela.php?erro=$erro");
}if($email == ""){
    $erro = "Campo email vazio";
    header ("Location:paciente_tela.php?erro=$erro");
}if($senha == ""){
    $erro = "Campo senha vazio";
    header ("Location:paciente_tela.php?erro=$erro");
}if($CPF == ""){
    $erro = "Campo CPF vazio";
    header ("Location:paciente_tela.php?erro=$erro");
}if($telefone == ""){
    $erro = "Campo telefone vazio";
    header ("Location:paciente_tela.php?erro=$erro");
}if($RG == ""){
    $erro = "Campo RG vazio";
    header ("Location:paciente_tela.php?erro=$erro");
}if($estado_civil == ""){
    $erro = "Campo estado civil vazio";
    header ("Location:paciente_tela.php?erro=$erro");
}if($doenca_cronica == ""){
    $erro = "Campo doença cronica vazio";
    header ("Location:paciente_tela.php?erro=$erro");
}

//3º: realizo a ação no crud

inserirPaciente($nome, $nascimento, $email, $senha, $CPF, $telefone, $RG, $pai, $mae, $estado_civil, $doenca_cronica, $cidade, $bairro, $rua, $numero);
//inserirLogin($CPF, $senha);