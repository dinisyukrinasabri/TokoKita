<?php

class PelangganModel {
	
	private $table = 'pelanggan'; 
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPelanggan()
	{
		$this->db->query('SELECT * FROM pelanggan ORDER BY IdPelanggan ASC');
		return $this->db->resultSet();
	}

	// public function getAllSupplier()
	// {
	// 	$this->db->query('SELECT * FROM pengguna JOIN hakakses ON pengguna.IdAkses = hakakses.IdAkses WHERE hakakses.IdAkses = 7 ORDER BY IdPengguna ASC');
	// 	return $this->db->resultSet();
	// }

	// public function getAllCustomer()
	// {
	// 	$this->db->query('SELECT * FROM pengguna JOIN hakakses ON pengguna.IdAkses = hakakses.IdAkses WHERE hakakses.IdAkses = 10 ORDER BY IdPengguna ASC');
	// 	return $this->db->resultSet();
	// }

	// public function getPenggunaById($id)
	// {
	// 	$this->db->query('SELECT * FROM ' . $this->table . ' WHERE IdPengguna=:IdPengguna');
	// 	$this->db->bind('IdPengguna',$id);
	// 	return $this->db->single();
	// }

	// public function tambahPengguna($data)
	// {
	// 	$query = "INSERT INTO pengguna (NamaPengguna,Password,NamaDepan,NamaBelakang,NoHP,Alamat,IdAkses) VALUES(:NamaPengguna,:Password,:NamaDepan,:NamaBelakang,:NoHP,:Alamat,:IdAkses)";
	// 	$this->db->query($query);
	// 	$this->db->bind('NamaPengguna',$data['NamaPengguna']);
	// 	$this->db->bind('Password', md5($data['Password']));
	// 	$this->db->bind('NamaDepan',$data['NamaDepan']);
	// 	$this->db->bind('NamaBelakang',$data['NamaBelakang']);
	// 	$this->db->bind('NoHP',$data['NoHP']);
	// 	$this->db->bind('Alamat',$data['Alamat']);
	// 	$this->db->bind('IdAkses',$data['IdAkses']);
	// 	$this->db->execute();

	// 	return $this->db->rowCount();
	// }

	// public function cekUsername(){
	// 	$NamaPengguna = $_POST['NamaPengguna'];
	// 	$this->db->query("SELECT * FROM pengguna WHERE NamaPengguna = :NamaPengguna");
	// 	$this->db->bind('NamaPengguna', $NamaPengguna);
	// 	return $this->db->single();
	// }

	// public function updateDataPengguna($data)
	// {
	// 	if(empty($_POST['Password'])) {
	// 		$query = "UPDATE pengguna SET NamaPengguna=:NamaPengguna, NamaDepan=:NamaDepan, NamaBelakang=:NamaBelakang, NoHP=:NoHP, Alamat=:Alamat, IdAkses=:IdAkses WHERE IdPengguna=:IdPengguna";
	// 		$this->db->query($query);
	// 		$this->db->bind('IdPengguna',$data['IdPengguna']);
	// 		$this->db->bind('NamaPengguna',$data['NamaPengguna']);
	// 		$this->db->bind('NamaDepan',$data['NamaDepan']);
	// 		$this->db->bind('NamaBelakang',$data['NamaBelakang']);
	// 		$this->db->bind('NoHP',$data['NoHP']);
	// 		$this->db->bind('Alamat',$data['Alamat']);
	// 		$this->db->bind('IdAkses',$data['IdAkses']);
	// 	} else {
	// 		$query = "UPDATE pengguna SET NamaPengguna=:NamaPengguna, Password=:Password, NamaDepan=:NamaDepan, NamaBelakang=:NamaBelakang, NoHP=:NoHP, Alamat=:Alamat, IdAkses=:IdAkses WHERE IdPengguna=:IdPengguna";
	// 		$this->db->query($query);
	// 		$this->db->bind('IdPengguna',$data['IdPengguna']);
	// 		$this->db->bind('NamaPengguna',$data['NamaPengguna']);
	// 		$this->db->bind('Password', md5($data['Password']));
	// 		$this->db->bind('NamaDepan',$data['NamaDepan']);
	// 		$this->db->bind('NamaBelakang',$data['NamaBelakang']);
	// 		$this->db->bind('NoHP',$data['NoHP']);
	// 		$this->db->bind('Alamat',$data['Alamat']);
	// 		$this->db->bind('IdAkses',$data['IdAkses']);
	// 	}
		
	// 	$this->db->execute();

	// 	return $this->db->rowCount();
	// }

	// public function deletePengguna($id)
	// {
	// 	$this->db->query('DELETE FROM ' . $this->table . ' WHERE IdPengguna=:IdPengguna');
	// 	$this->db->bind('IdPengguna',$id);
	// 	$this->db->execute();

	// 	return $this->db->rowCount();
	// }
}