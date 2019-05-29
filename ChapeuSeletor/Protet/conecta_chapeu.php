<?php
function conecta_chapeu()
{
		$con = new PDO ("mysql:host=localhost; dbname=chapeu_seletor", "root", "root");
		if(!$con)
		
			return NULL;
			
			$q = $con ->prepare ("SET NAMES utf8");
			$q-> execute();
			return $con;
		
		
}

?>
