<?php
 require_once("Db.php");
	/**
	 * 
	 */
	class Insert 
	{
		
		private $name;
		private $email;
		private $pass;
		private $table = 'users';

		public function setName($name){
			$this->name =$name;

		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function setPass($pass){
			$this->pass = $pass;
		}

		public function insertData(){
			$sql = "INSERT INTO $this->table(name,email,password) VALUES(:name,:email,:pass)";

			$stmt =Db::prepare($sql);
			$stmt->bindparam(':name',$this->name);
			$stmt->bindparam(':email',$this->email);
			$stmt->bindparam(':pass',$this->pass);

			return $stmt->execute();


		}
	}
?>