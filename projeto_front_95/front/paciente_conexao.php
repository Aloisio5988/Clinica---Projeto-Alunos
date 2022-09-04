<?php


// Verifica se o POST existe antes de inserir uma nova pessoa
if(isset($_POST["acao"])){
   if($_POST["acao"]=="excluir"){
        excluirPaciente();
    }
}


// Responsável por criar uma conexão com meu banco
include("abrirbanco.php");

// Função responsável inseir uma pessoa no meu banco de dados
    function inserirPaciente($nome, $nascimento, $email, $senha, $CPF, $telefone, $RG, $pai, $mae, $estado_civil, $doenca_cronica, $cidade, $bairro, $rua, $numero) {
        $banco = abrirBanco();
        $sql = "INSERT INTO paciente(nome, nascimento, email, cpf, telefone, RG, pai, mae, estado_civil, doenca_cronica,  cidade, bairro, rua, numero) 
        VALUES ('{$nome}','{$nascimento}','{$email}','{$CPF}','{$telefone}','{$RG}','{$pai}', '{$mae}','{$estado_civil}','{$doenca_cronica}','{$cidade}', '{$bairro}','{$rua}','{$numero}')";
        //die ($sql);
        $banco->query($sql);
        $banco->close();
        inserirLogin($CPF, $senha);      
        voltarIndex();
    }

    function inserirLogin($CPF, $senha)
    {
        $banco = abrirBanco();
        $sql = "INSERT INTO login(usuario, senha) 
        VALUES ('{$CPF}','{$senha}')";
        //die ($sql);
        $banco->query($sql);
        $banco->close();
       // voltarIndex();
    }
    
    // Função responsável editar uma pessoa no meu banco de dados
    function alterarPaciente() {
        $banco = abrirBanco();
        session_start();
        $sql = "UPDATE paciente SET nome='{$_POST["nome"]}',nascimento='{$_POST["nascimento"]}',email='{$_POST["email"]}',senha='{$_POST["senha"]}',CPF='{$_POST["CPF"]}',telefone='{$_POST["telefone"]}',RG='{$_POST["RG"]}', endereco='{$_POST["endereco"]}',filiacao='{$_POST["filiacao"]}',estado_civil='{$_POST["estado_civil"]}'doenca_cronica='{$_POST["doenca_cronica"]}' WHERE id_pacientte ='{$_POST["id_paciente"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }
    // Função responsável excluir uma pessoa no meu banco de dados
    function excluirPaciente() {
        $banco = abrirBanco();
        $sql = "DELETE FROM paciente WHERE id_paciente='{$_POST["id_paciente"]}'"; 
        //die ($sql);
        $banco->query($sql);
        $banco->close();
        $msg="Paciente excluído com sucesso";
        header("Location:paciente_lista.php?msg=$msg");
    }

    function selectAllPessoa() {
        $banco = abrirBanco();
        
        $sql = "SELECT * FROM paciente ORDER BY nome";
        $resultado = $banco->query($sql);
       
        //die (var_dump($resultado));
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        while($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

// Após inserir uma nova pessoa, retorna para a página principal
    function voltarIndex(){
        $msg="Paciente cadastrado com sucesso";
        header("Location:paciente_lista.php?msg=$msg");
    }
