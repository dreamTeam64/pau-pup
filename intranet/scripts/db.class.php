<?php 
	class DB{

		private $host;
		private $username;
		private $password;
		private $database;
		private $db;

		public function __construct($host = null,$username = null,$password = null,$database = null){
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;

			try{
				$this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->username,$this->password);
			}
			catch(Exception $e){
				die('Erreur:'.$e->getMessage());
			}
		}

		public function del($id,$table){
			$req = $this->db -> prepare('DELETE FROM '.$table.' WHERE id = :id');
			$req -> execute(array(
				'id' => $id
			));
		}

		public function query($sql){
			$req = $this->db -> query("$sql");
			$donnee = $req->fetchall();
			return $donnee;
		}

		public function queryWithArguments($sql,$tab){
			$req = $this->db -> prepare("$sql");
			$req -> execute($tab);

			$rep = $req -> fetchall();
			return $rep;
		}

		public function helloWorld(){
			echo "hello world";
		}
	}
?>