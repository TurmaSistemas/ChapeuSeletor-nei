<?php	

class Pergunta{

    private $id; 
	private $pergunta;
	private $alternativa;
	private $desempate;
	private $casa;

	public function __construct($id)
	{
		$this->id = $id;
		$this->alternativa = array();
	}
	
	
	public function set_pergunta($pergunta)
	{
		$this->pergunta = $pergunta;
	}
	public function get_pergunta()
	{
		return $this->pergunta;
	}
		
	
	public function set_alternativa($alternativa)
	{
		$this->alternativa = $alternativa;
	}
	public function get_alternativa()
	{
		return $this->alternativa;
	}
	public function add_alternativa($valor)
    {
        if(array_search($valor, $this->alternativa) === false)
            array_push($this->alternativa, $valor);
    }

	public function set_desempate($desempate)
	{
		$this->desempate = $desempate;
	}
	public function get_desempate()
	{
		return $this->desempate;
	}
	
	public function set_casa($casa)
	{
		$this->casa = $casa;
	}
	public function get_casa()
	{
		return $this->casa;
	}
	

}
?>
