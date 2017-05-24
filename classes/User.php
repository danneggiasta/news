<?php

class User
{
	private $db = null,
		$userData;

	public function __construct()
	{
		$this->db = Database::getInstance();
	}

	public function found($user)
	{
		$field = (is_numeric($user)) ? 'id' : 'username';
		$userCheck = $this->db->get('users', [$field, '=', $user]);
		if ($userCheck->count()) {
			$this->userData = $userCheck->first();

			return true;
		}

		return false;
	}

	public function register($values = array())
	{
		if ($this->db->insert('users', $values)) {
			return true;
		}

		return false;
	}


	public function userData()
	{
		return $this->userData;
	}

	public function dataExists()
	{
		return (!empty($this->userData)) ? true : false;
	}

	public function login($username, $password)
	{

		if ($this->found($username)) {

			if ($password == $this->userData()->pass) {

				$_SESSION['username'] = $this->userData()->username;
				$_SESSION['id'] = $this->userData()->id;
			}
		}

	}

}