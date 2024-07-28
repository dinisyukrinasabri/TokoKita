<?php

class LoginModel
{

	private $table = 'pengguna';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function checkLogin($data)
	{
		$query = "SELECT * FROM pengguna WHERE NamaPengguna = :NamaPengguna AND Password = :Password";
		$this->db->query($query);
		$this->db->bind('NamaPengguna', $data['NamaPengguna']);
		$this->db->bind('Password', md5($data['Password']));
		$data =  $this->db->single();
		return $data;
	}
}
