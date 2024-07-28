<?php
class Pembelian extends Controller
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
		$data['pembelian'] = $this->model('PembelianModel')->getAllPembelian();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pembelian/index', $data);
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
		$this->view('pembelian/create', $data);
		$this->view('templates/footer');
	}

	public function simpanPembelian()
	{
		if ($this->model('PembelianModel')->tambahPembelian($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . base_url . '/pembelian');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . base_url . '/pembelian');
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
