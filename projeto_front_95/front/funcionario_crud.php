<?php

// Responsável por criar uma conexão com meu banco
include("abrirbanco.php");

// Função responsável inseir uma pessoa no meu banco de dados
    function inserirFuncionario($nome, $nascimento, $email, $cpf, $telefone, $rg , $rua,$bairro, $numero, $cidade ,$mae, $pai, $estado_civil, $genero,$senha ) {
        $banco = abrirBanco(); 
        $sql = "INSERT INTO base_profissional (nome, nascimento, email, cpf, telefone, rg, cidade, rua, bairro, numero, mae, pai, estado_civil, genero ) 
        VALUES ('{$nome}','{$nascimento}','{$email} ',' {$cpf} ',' {$telefone}','{$rg} ',' {$cidade} ',' {$rua} ',' {$bairro} ',' {$numero} ',' {$mae} ',' {$pai} ',' {$estado_civil} ','{$genero}')";
        //die($sql); 
        $banco->query($sql);
        $banco->close();
        inserirLogin($cpf, $senha); 
        voltarIndex();
    }

    function inserirLogin($CPF, $senha){
        $banco = abrirBanco();
        $sql = "INSERT INTO login(usuario, senha) 
        VALUES ('{$CPF}','{$senha}')";
        //die ($sql);
        $banco->query($sql);
        $banco->close();
       // voltarIndex();
    }
    function alterarFuncionario() {
        $banco = abrirBanco();
        $sql = "UPDATE base_profissional SET nome='{$_POST["nome"]}' nascimento='{$_POST["nascimento"]} 'email='{$_POST["email"]}'senha='{$_POST["senha"]}'cpf='{$_POST["cpf"]}'telefone='{$_POST["telefone"]}'rg='{$_POST["rg"]}'cidade='{$_POST["cidade"]}'rua='{$_POST["rua"]}' , 'bairro'{$_POST["bairro"]}' ,'numero,'{$_POST["numero"]}','mae'{$_POST["mae"]}','pai'{$_POST["pai"]}','estado_civil'{$_POST["estado_civil"]}','especialidade'{$_POST["especialidade"]}',''{$_POST[""]}', WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }


    function excluirFuncionario() {
        $banco = abrirBanco();
        $sql = "DELETE FROM base_profissional WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

    function voltarIndex(){
        header("Location:principal.php?msg=Cadastrado");
    }
    function selectAllFuncionario() {
        $banco = abrirBanco();
        
        $sql = "SELECT * FROM base_profissional ORDER BY nome";
        $resultado = $banco->query($sql);
       
        
        $banco->close();
        
        while($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

?>