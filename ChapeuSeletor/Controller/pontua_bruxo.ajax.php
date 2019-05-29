<?php
	$codigo = $_GET['codigo'];
	
	/*
	 * Puxa a alternativa através do código da pergunta
	 * */
	
	require_once(dirname(__FILE__)."/../model/Pergunta.class.php");
	require_once(dirname(__FILE__)."/../model/Alternativa.class.php"); 
		
	require_once(dirname(__FILE__)."/../dal/dao.class.php");
	$dao = new Dao();
	
	
	$alternativa = $dao->carrega_alternativa($codigo);
	
	
	
	
	
	
	
?>
