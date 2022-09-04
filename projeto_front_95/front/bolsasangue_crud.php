<?php

// Responsável por criar uma conexão com meu banco
include("abrirbanco.php");

// Função responsável inseir uma pessoa no meu banco de dados
    function inserirbancosangue($nome, $tipo_sanguineo) {
        $banco = abrirBanco();
        $sql = "INSERT INTO banco_sangue (nome, tipo_sanguineo) 
        VALUES ('{$nome}','{$tipo_sanguineo}')";
        //die ($sql);
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }
    function alterarbancosangue() {
        $banco = abrirBanco();
        $sql = "UPDATE banco_sangue SET nome='{$_POST["nome"]}',nascimento='{$_POST["nascimento"]}}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }


    function excluirbancosangue() {
        $banco = abrirBanco();
        $sql = "DELETE FROM banco_sangue WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

    function voltarIndex(){
        header("Location:principal.php?msg=Cadastrado");
    }
    function selectAllbancosangue() {
        $banco = abrirBanco();
        
        $sql = "SELECT * FROM banco_sangue ORDER BY nome";
        $resultado = $banco->query($sql);
       
        
        $banco->close();
        
        while($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

?>