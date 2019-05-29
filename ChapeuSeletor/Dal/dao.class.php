<?php

class Dao
{
	private $con;
	
	public function __construct()
	{
		require_once(dirname(__FILE__).
		"/../../../../protec/conecta_chapeu.php");
		$this->con = conecta_site();
	}

	
	public function carrega_casa($id)
	{
		require_once(dirname(__FILE__)."/../model/casa.class.php");
		
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
}
