<?php
class Alternativa
{
	private $id;
	private $texto;
	private $pontuacao;
	private $key_pergunta;
	private $key_casa;
	
	
	public function __construct($id)
	{
		$this->id- = $id;
	}
	
	public get_texto()
	{
		return $this->texto;
	}
	public get_pontuacao()
	{
		return $this->pontuacao;
	}
	public get_key_pergunta()
	{
		return $this->key_pergunta;
	}
	public get_key_casa()
	{
		return $this->key_casa;
	}
	public set_texto($texto)
	{
		$this->texto = $texto;
	}
	public set_pontuacao($pontuacao)
	{
		$this->pontuacao = $pontuacao;
	}
	public set_key_pergunta($key_pergunta)
	{
		$this->key_pergunta = $key_pergunta;
	}
	public set_key_casa($key_casa)
	{
		$this->key_casa = $key_casa;
	}
	
}



?>
