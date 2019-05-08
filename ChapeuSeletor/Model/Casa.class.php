<?php
	
class Casa{
	
	private $id;
	private $nome;
	
	public function __construct($id = 0)
	{		
		$this->id = $id;	
	}	
		
	public function get_id()
	{
		return $this->id;
	}
	
	public function get_nome()
	{
		return $this->nome;
	}
	
	public function set_nome($nome)
	{
		$this->nome = $nome;
	}
}


?>
