<?php

require_once(dirname(__FILE__)."/../dal/dao.class.php");
require_once(dirname(__FILE__)."/../view/alternativa.class.php");

$dao= new $dao();

id_alt = ??????;//devo fazer um rand? ou comparar com o id da pergunta?

$alternativa = $dao->carrega_alternativa($id_alt); //Carrega uma alternativa aleatoria
$vAlternativa = new alternativa($alternativa); //Manda para a view o objeto alternativa
$vAlternativa->draw(); //Exibe

?>


