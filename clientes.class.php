<?
	class Cliente{
		public $nome;
		public $cpf;
		public $rg;
		public $telefone;

		public $array;


		public function getNome(){
			return $this->nome;
		}



		public function __construct(array $arguments = array()){
			$this -> array = $arguments;
			
			foreach ($arguments as $key => $row) {
					$this->nome = $row['nome'];
						
			}		


		}








	}//fim class


?>