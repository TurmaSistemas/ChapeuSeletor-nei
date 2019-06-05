<?php

  $apelido = $_GET['apelido'];
  $senha = $_GET['senha'];
  
  require_once(dirname(__FILE__)."/../dal/dao.class.php");
  require_once(dirname(__FILE__)."/../model/Bruxo.class.php");
  
  $dao = new Dao();
  
  $b = new Bruxo();
  $b = $dao->carrega_bruxo($apelido);
  
  if ($apelido == $b->get_apelido() && $senha == $b->get_senha())
  {
      require_once(dirname(__FILE__)."/../view/Questionario.class.php");	
      $questionario = new Questionario($b);
      $questionario->draw();
  }
  else
  {
      require_once(dirname(__FILE__)."/../view/Cadastro.class.php");
      $cadastro = new Cadastro();
      $cadastro->draw();
      
      //Volta para a index (login). ???
  }

?>
