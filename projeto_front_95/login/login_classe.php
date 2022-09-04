<?php

// Responsável por criar uma conexão com meu banco
include("../front/abrirbanco.php");

    function selectAllLogin($usuario,$senha) {
        $banco = abrirBanco();
        
        $sql = "SELECT * FROM login as l
        inner join paciente as p on p.cpf = l.usuario where l.usuario ='".$usuario."' and l.senha ='".$senha."'";
        $resultado = $banco->query($sql);  
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        while($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }
?>