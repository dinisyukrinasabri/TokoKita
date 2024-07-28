<?php
class Penjualan extends Controller
{
	public function __construct()
	{
		if ($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
			header('location: ' . base_url . '/login');
			exit;
		}
	}
	public function index()
	{
		$data['title'] = 'Data Penjualan';
		$data['penjualan'] = $this->model('PenjualanModel')->getAllPenjualan();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('penjualan/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Pelanggan';
		$data['pelanggan'] = $this->model('PelangganModel')->getPelangganById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pelanggan/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Pelanggan';
		$data['pengguna'] = $this->model('PenggunaModel')->getAllSupplier();
		$data['barang'] = $this->model('BarangModel')->getAllBarang();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('penjualan/create', $data);
		$this->view('templates/footer');
	}

	public function simpanPenjualan()
	{
		if ($this->model('PenjualanModel')->tambahPenjualan($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . base_url . '/penjualan');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . base_url . '/penjualan');
			exit;
		}
	}

	public function updatePelanggan()
	{
		if ($this->model('PelangganModel')->updateDataPelanggan($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'diupdate', 'success');
			header('location: ' . base_url . '/pelanggan');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'diupdate', 'danger');
			header('location: ' . base_url . '/pelanggan');
			exit;
		}
	}

	public function hapus($id)
	{
		if ($this->model('PelangganModel')->deletePelanggan($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location: ' . base_url . '/pelanggan');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location: ' . base_url . '/pelanggan');
			exit;
		}
	}
}
