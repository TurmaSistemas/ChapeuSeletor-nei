<?php	

class Bruxo{

    	private $id; 
	private $nome;
	private $senha;
	private $apelido;
	private $celular;

	public function __construct($id)
	{
		$this->id = $id;
	}
	
	
	public function set_nome($nome)
	{
		$this->nome = $nome;
	}
	public function get_nome()
	{
		return $this->nome;
	}
	
	
	
	public function set_senha($senha)
	{
		$this->senha = $senha;
	}
	public function get_senha()
	{
		return $this->senha;
	}
	
	
	
	public function set_apelido($apelido)
	{
		$this->apelido = $apelido;
	}
	public function get_apelido()
	{
		return $this->apelido;
	}
	
	
	
	public function set_celular($celular)
	{
		$this -> celular = $celular;
	}
	public function get_celular()
	{
		return $this->celular;
	}
	
	//192.168.100.197/site

}
?>
