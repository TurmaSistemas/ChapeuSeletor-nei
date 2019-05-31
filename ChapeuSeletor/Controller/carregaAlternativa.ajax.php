<?php

require_once(dirname(__FILE__)."/../dal/dao.class.php");
require_once(dirname(__FILE__)."/../view/alternativa.class.php");

$dao= new $dao();

id_alt = rand(0, 25);

$alternativa = $dao->carrega_alternativa($id_alt); //Carrega uma alternativa aleatoria
$vAlternativa = new alternativa($alternativa); //Manda para a view o objeto alternativa
$vAlternativa->draw(); //Exibe

?>


