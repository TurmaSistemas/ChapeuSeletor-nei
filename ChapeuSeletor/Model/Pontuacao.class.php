<?php

{
	class Pontuacao 
		
		private $valor;
		private $key_bruxo;
		private $key_casa;
		
		
		public function __construct($bruxo,$casa)
		{
		$this->key_bruxo = $bruxo;
		$this->key_casa = $casa;
		}
	
		public function get_valor()
		{
		return $this->valor;
		}
	
		public function get_key_bruxo()
		{
		return $this->key_bruxo;
		}
	
		public function get_key_casa()
		{
		return $this->key_casa;
		}	
		
		
}
?>
	
