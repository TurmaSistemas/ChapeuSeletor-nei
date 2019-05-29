<?php
require_once(dirname(__FILE__)."/../dal/dao.class.php");
require_once(dirname(__FILE__)."/../view/pergunta.class.php");


$dao = new $dao();
$id_per = rand(0, 10);

$pergunta = $dao->carrega_pergunta($id_per); //Carrega uma pergunta aleatoria

$vPergunta = new pergunta($pergunta); //Manda para a view o objeto pergunta
$vPergunta->draw(); //Exibe

?>
