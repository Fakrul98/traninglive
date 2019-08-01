<?php
	require_once("Db.php");

	/**
	 * 
	 */
	class student{
		private $table = 'users';

	public function readAll(){

			$sql = "SELECT * FROM $this->table ";

			$stmt	= Db::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
	}
	}



?>