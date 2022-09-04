<?php

include("abrirbanco.php");

function inserirpontofucionario($profi) {
    $banco = abrirBanco(); 
    $hoje = date('y/m/d');
    $sql = "INSERT INTO ponto_funcionario (id_funcionario,hora_1,data)
    VALUES ($profi,now(),'".$hoje."')";
    //die ($sql);
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function atualizarpontofuncionario($hora_2,$id) {
    $banco = abrirBanco();
    $sql = "UPDATE ponto_funcionario SET ".$hora_2."= now() where id_funcionario = ".$id;
    //die($sql);
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectAllpontofuncionario($id_funcionario) {
    $banco = abrirBanco();
    $hoje = date('y/m/d');
    $sql = "SELECT * FROM ponto_funcionario where id_funcionario = ".$id_funcionario." and data='".$hoje." '";
    $resultado = $banco->query($sql);
    $banco->close();
    
    while($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

    function voltarIndex(){
	header("Location:ponto.php?msg=ponto marcado");
}


?>