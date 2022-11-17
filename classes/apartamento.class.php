<?php 

/* 
Integrantes:
Bruno Tai da Cruz Wong
Gabriel de Melo Faustino Santos
Geraldo Vicente do Nascimento Neto
Igor de Almeida Fernandes Barreira 
Jonathan Bruno Tavares de Oliveira 
Matheus Lui Zago 	
*/

	include_once('imovel.class.php');

	class Apartamento extends Imovel{

		public $condominio;

		public function __construct($quartos,$valor,$endereco,$condominio, $descricao){

			parent::__construct($quartos,$valor,$endereco, $descricao);

			if (is_numeric($condominio)) {
				$this -> condominio = $condominio;
			} /*else {
				echo 'Algo deu errado!<br>';
			}*/
		}

		public function dadosApartamento(){
			echo ("O seu apartamento possui: <br>Quartos: {$this -> quartos}<br>Valor: {$this -> valor} reais<br>Endereco: {$this -> endereco}<br>O valor do condominio deste apartamento é de: {$this -> condominio}");
			echo '<hr>';
		}

	}

?>