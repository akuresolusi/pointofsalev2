<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelunasanjual extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pelunasanjual_model');
		$this->load->model('master_model');
		$this->load->model('penjualan_model');
		$uid = $this->session->userdata('id');
		if($uid == ""){
			redirect('welcome/logout');
		}
	}

	public function index(){
		$data['list'] = $this->pelunasanjual_model->list_pelunasan();
		$data['isi'] = "pelunasanjual/page-pelunasan";
		$data['subtitle'] = "Penjualan";
		$data['title'] = 'Data Pelunasan';
		$this->load->view('layout',$data);
	}

	public function details(){
		$data['isi'] = "pelunasanjual/view-pelunasan";
		$data['subtitle'] = "Penjualan";
		$data['title'] = 'Detail Pelunasan';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['list_bank'] = $this->master_model->list_bank();
		$data['list_rekening'] = $this->master_model->list_rekening();
		$data['isi'] =  "pelunasanjual/tambah-pelunasan";
		$data['subtitle'] = "Penjualan";
		$data['title'] = 'Tambah Pelunasan';
		$this->load->view('layout',$data);	
	}

	public function cek_hutang_faktur($faktur){
		$penjualan = $this->penjualan_model->detail_penjualan($faktur);
		
		$items = $this->pelunasanjual_model->get_penjualan_items($faktur);
		$harga = 0;
		foreach ($items as $item) {
			$harga = $harga + ($item['qty'] * $item['harga']);	
		}

		$pajak = ($harga / 100) * $penjualan['pajak'];
		$diskon = $penjualan['diskon'];

		$a = ($harga - $diskon) + $pajak;

		$harga_retur = 0;
		$items_retur = $this->pelunasanjual_model->get_items_retur($faktur);
		foreach ($items_retur as $retur) {
			$harga_retur = $harga_retur + ($retur['qty'] * $retur['harga']);
		}

		$lunas = 0;
		$cek_pelunasan = $this->pelunasanjual_model->cek_items_pelunasan($faktur);
		foreach ($cek_pelunasan as $items) {
			$lunas = $lunas + $items['jumlah'];
		}

		return $hutang = ($a - $harga_retur) - $lunas;
	}

	public function cari_faktur(){
		$faktur = $this->pelunasanjual_model->get_penjualan_pelanggan($this->input->post_get('pelanggan'));
		foreach ($faktur as $value) {
			$items = $this->pelunasanjual_model->get_penjualan_items($value['faktur']);
			$harga = 0;
			foreach ($items as $item) {
				$harga = $harga + ($item['qty'] * $item['harga']);	
			}

			$pajak = ($harga / 100) * $value['pajak'];
			$diskon = ($harga / 100) * $value['diskon'];

			$a = ($harga + $pajak) - $diskon;

			$harga_retur = 0;
			$items_retur = $this->pelunasanjual_model->get_items_retur($value['faktur']);
			foreach ($items_retur as $retur) {
				$harga_retur = $harga_retur + ($retur['qty'] * $retur['harga']);
			}

			$lunas = 0;
			$cek_pelunasan = $this->pelunasanjual_model->cek_items_pelunasan($value['faktur']);
			foreach ($cek_pelunasan as $items) {
				$lunas = $lunas + $items['jumlah'];
			}

			$hutang = ($a - $harga_retur) - $lunas;

			$syarat_bayar = $this->master_model->detail_syaratbayar($value['idsyaratbayar']);
			if($hutang >= 1){
				echo"
				<tr>
					<td><input type='checkbox' name='cek[]'' class='chcktbl' value='".$hutang."' faktur='".$value['faktur']."'></td>
					<td>FB-".$value['faktur']."</td>
					<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
					<td>".$syarat_bayar['nama']."</td>
					<td>Rp ".$a."</td>
					<td>Rp ".$hutang."</td>
				</tr>";
			}

		}
	}

	public function proses_tambah(){
		$kode = $this->input->post('kode');
		$lainya = $this->input->post('lainya');
		$jumlah_bayar = $this->input->post('jumlahbayar');
		$stok_uang = $jumlah_bayar - $lainya;
		$faktur = explode(",", $this->input->post('faktur'));
		$tagihan = 0;
		foreach ($faktur as $value) {
			$hutang = $this->cek_hutang_faktur($value);
			$tagihan =  $tagihan + $hutang;
		}
		$tagihan = $tagihan + $lainya;
		if($jumlah_bayar > $tagihan){
			//jika jumlah bayar melebihi grand total
			redirect(base_url().'pelunasanjual/tambah?msg=Jumlah Bayar Tidak Boleh Melebihi Grand Total ..');
		}

		if($stok_uang < 1){
			//jika jumlah bayar lebih kecil dari biaya lainya
			redirect(base_url().'pelunasanjual/tambah?msg=Proses di Batalkan, Jumlah bayar lebih kecil dari biaya lainya !');
		}		

		foreach ($faktur as $value) {
			//Cek Stok Uang
			if($stok_uang == 0){
				break;
			}

			$hutang = $this->cek_hutang_faktur($value);
			if($stok_uang >= $hutang){
				$this->pelunasanjual_model->input_pelunasan_faktur($kode, $value, $hutang);
				$this->pelunasanjual_model->penjualan_set_lunas($value, "1");
				$stok_uang = $stok_uang - $hutang;
			}else{
				$this->pelunasanjual_model->input_pelunasan_faktur($kode, $value, $stok_uang);
				$stok_uang = 0;
			}
		}

		//Input Data Pelunasan
		$this->pelunasanjual_model->input_pelunasan();
		redirect(base_url('pelunasanjual'));
	}

	public function proses_hapus(){
		$kode = $this->input->get('kode');
		$pelunasan = $this->pelunasanjual_model->list_pelunasan_kode($kode);
		foreach ($pelunasan as $value) {
			$this->pelunasanjual_model->penjualan_set_lunas($value['faktur'], "");
		}
		$this->pelunasanjual_model->hapus_pelunasan($kode);
		$this->pelunasanjual_model->hapus_pelunasan_faktur($kode);
		redirect(base_url('pelunasanjual'));
	}

}