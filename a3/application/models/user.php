<?php
class User extends Model{

	function getUser($email){

		$sql =  'SELECT uID, email, password, first_name, last_name FROM users WHERE email = ?';

		// perform query
		$results = $this->db->getrow($sql, array($email));

		$user = $results;

		return $user;

	}

	public function getAllUsers($limit = 0){

		if($limit > 0){

			$numusers = ' LIMIT '.$limit;
		}

		$sql =  'SELECT uID, email, password, first_name, last_name FROM users'.$numusers;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}

		return $users;

	}

	public function addUser($data){
		$sql = 'INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)'; 
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
	}

	public function updateUser($data) {

		$sql='UPDATE users (first_name, last_name, email, password) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post updated.';
		return $message;

	}


}
