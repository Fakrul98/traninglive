<?php
	require_once('Db.php');
	/**
	 * 
	 */
	class UpdateUser
	{
		private $table = 'users';

		public function updatebyId($id){

			$sql = "SELECT * FROM $this->table WHERE id = :id";

			$stmt = Db::prepare($sql);
			$stmt->bindparam(':id',$id);
			$stmt->execute();
			return $stmt->fetch();

		}


	}

?>