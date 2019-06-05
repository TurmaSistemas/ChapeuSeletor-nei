<?php

class Dao
{
	private $con;
	
	public function __construct()
	{
		require_once(dirname(__FILE__).
		"/../../../../protec/conecta_chapeu.php");
		$this->con = conecta_chapeu();
	}

	
	public function carrega_casa($id)
	{
		require_once(dirname(__FILE__)."/../model/Casa.class.php");
		
		$home = new Casa($id);
		
		$home_q = $this->con->prepare("SELECT nome, id FROM casa WHERE id=?");
		
		$home_q->bindParam(1, $id);
		$home_q->execute();
		
		if($home_q->rowCount() == 0)
			return NULL;
		
		$u = $home_q->fetch(PDO::FETCH_OBJ);
		$home->set_nome($u->nome);
	
		
		return $home;
	}
	
	public function registra_bruxo($bruxo)
    	{
		require_once(dirname(__FILE__)."/../model/Bruxo.class.php");

		$id = $bruxo->get_id();
		$nome = $bruxo->get_nome();
		$senha = $bruxo->get_senha();
		$apelido = $bruxo->get_apelido();
		$celular = $bruxo->get_celular();

		$bruxoNovo = $this->con->prepare("INSERT INTO bruxo VALUES (?, ?, ?, ?, ?)");
		$bruxoNovo->bindParam(1, $id);
		$bruxoNovo->bindParam(2, $nome);
		$bruxoNovo->bindParam(3, $senha);
		$bruxoNovo->bindParam(4, $apelido);
		$bruxoNovo->bindParam(5, $celular);

		if($bruxoNovo->execute())
			return 1;
		    return 0;
    	}

}
