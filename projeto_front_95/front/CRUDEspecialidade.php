<?php

// Verifica se o POST existe antes de inserir uma nova profissão
if (isset($_POST["acao"])) {
	if ($_POST["acao"] == "inserir") {
		inserirespecialidade($nome);
	}
	if ($_POST["acao"] == "alterar") {
		alterarespecialidade();
	}
	if ($_POST["acao"] == "excluir") {
		excluirespecialidade();
	}
}

// Responsável por criar uma conexão com meu banco
include("abrirbanco.php");

// Função responsável inseir uma profissão no meu banco de dados
function inserirespecialidade($nome)
{
	$banco = abrirBanco();
	$sql = "INSERT INTO especialidade (nome) VALUES ('{$nome}')";
	$banco->query($sql);
	$banco->close();
	voltarIndex();
}

// Função responsável editar uma profissão no meu banco de dados
function alterarespecialidade() {
	$banco = abrirBanco();
	$sql = "UPDATE especialidade SET nome='{$_POST["nome"]}' WHERE id='{$_POST["id"]}'";
	$banco->query($sql);
	$banco->close();
	voltarIndex();
}

// Função responsável excluir uma profissão no meu banco de dados
function excluirespecialidade() {
	$banco = abrirBanco();
	$sql = "DELETE FROM especialidade WHERE id='{$_POST["id"]}'";
	$banco->query($sql);
	$banco->close();
	voltarIndex();
}
function selectAllEspecialidade() {
	$banco = abrirBanco();
	
	$sql = "SELECT * FROM especialidade ORDER BY nome";
	$resultado = $banco->query($sql);
   
	
	$banco->close();
	
	while($row = mysqli_fetch_array($resultado)) {
		$grupo[] = $row;
	}
	return $grupo;
}
// Após inserir uma nova pessoa, retorna para a página principal
function voltarIndex()
{
	header("Location:principal.php?msg=Cadastrado");
}

?>