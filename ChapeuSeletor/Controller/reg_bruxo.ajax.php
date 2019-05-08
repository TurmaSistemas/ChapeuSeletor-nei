<?php
	
	$id = $_GET['id'];
	$nome = $_GET['nome'];
	$senha = $_GET['senha'];
	$apelido = $_GET['apelido'];
	$celular = $_GET['celular'];
	
	require_once(dirname(__FILE__)."/../model/Bruxo.class.php");
	require_once(dirname(__FILE__)."/../dal/dao.class.php");
	
	$bruxo = new Bruxo($id);
	
	$bruxo->set_nome($nome);
	$bruxo->set_senha($senha);
	$bruxo->set_apelido($apelido);
	$bruxo->set_celular($celular);
	
	$dao = new Dao();
	$dao->registra_bruxo($bruxo);
	
?>
