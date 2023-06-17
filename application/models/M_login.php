<?php
class M_login extends CI_Model{
	public function __construct()
	{
		parent::__construct();

	}
	function login_validation($username, $password)
	{
		$sql    = "SELECT * FROM users where username = '" . $username . "' AND password = '" . $password . "'";
		$query  = $this->db->query($sql);
		$rows   = $query-> row_array();
		return $rows;
	}
	function checkUsername($username)
	{
		$sql    = "SELECT * FROM users where username = '" . $username . "'";
		$query  = $this->db->query($sql);
		$rows   = $query-> row_array();
		return $rows;
	}
}