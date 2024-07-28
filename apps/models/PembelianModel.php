<?php

class PembelianModel {
	
	private $table = 'penjualan'; 
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPembelian()
	{
		$this->db->query('SELECT * FROM pembelian ORDER BY IdPembelian ASC');
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

	public function getPelangganById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE IdPelanggan=:IdPelanggan');
		$this->db->bind('IdPelanggan', $id);
		return $this->db->single();
	}

	public function tambahPembelian($data)
	{
		$query = "INSERT INTO pembelian (IdPembelian,JumlahPembelian,HargaBeli,IdPengguna,IdBarang) VALUES(:IdPembelian,:JumlahPembelian,:HargaBeli,:IdPengguna,:IdBarang)";
		$this->db->query($query);
		$this->db->bind('IdPembelian',$data['IdPembelian']);
		$this->db->bind('JumlahPembelian', $data['JumlahPembelian']);
		$this->db->bind('HargaBeli',$data['HargaBeli']);
		$this->db->bind('IdPengguna',$data['IdPengguna']);
		$this->db->bind('IdBarang',$data['IdBarang']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	// public function cekUsername(){
	// 	$NamaPengguna = $_POST['NamaPengguna'];
	// 	$this->db->query("SELECT * FROM pengguna WHERE NamaPengguna = :NamaPengguna");
	// 	$this->db->bind('NamaPengguna', $NamaPengguna);
	// 	return $this->db->single();
	// }

	public function updateDataPelanggan($data)
	{
		$query = "UPDATE pelanggan SET NamaPelanggan=:NamaPelanggan, NamaDepan=:NamaDepan, NamaBelakang=:NamaBelakang, NoHP=:NoHP, Alamat=:Alamat WHERE IdPelanggan=:IdPelanggan";
		$this->db->query($query);
		$this->db->bind('NamaPelanggan', $data['NamaPelanggan']);
		$this->db->bind('NamaDepan', $data['NamaDepan']);
		$this->db->bind('NamaBelakang', $data['NamaBelakang']);
		$this->db->bind('NoHP', $data['NoHP']);
		$this->db->bind('Alamat', $data['Alamat']);
		$this->db->bind('IdPelanggan', $data['IdPelanggan']);
		$this->db->execute();

		return $this->db->rowCount();
	}
		
	// 	$this->db->execute();

	// 	return $this->db->rowCount();
	// }

	public function deletePelanggan($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE IdPelanggan=:IdPelanggan');
		$this->db->bind('IdPelanggan', $id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}