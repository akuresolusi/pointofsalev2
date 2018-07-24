<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
		$this->load->model('pembelian_model');
		$this->load->model('barang_model');
		$this->load->model('pelunasan_model');
	}

	public function index(){
		$data['list'] = $this->pembelian_model->list_faktur();
		$data['isi'] = "pembelian/page-pembelian";
		$data['subtitle'] = "Pembelian";
		$data['title'] = 'Data Pembelian';
		$this->load->view('layout',$data);
	}

	public function details(){
		$data['detail'] = $this->pembelian_model->detail_pembelian($this->input->get('faktur'));
		$data['supplier'] = $this->master_model->detail_supplier($data['detail']['idsupplier']);
		$data['syaratbayar'] = $this->master_model->detail_syaratbayar($data['detail']['idsyaratbayar']);
		$data['items'] = $this->pembelian_model->list_items($data['detail']['faktur']);
		$data['isi'] = "pembelian/view-pembelian";
		$data['subtitle'] = "Pembelian";
		$data['title'] = 'Lihat Data Pembelian';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['faktur'] = $this->pembelian_model->big_faktur()['faktur'] + 1;
		$data['list_syarat_bayar'] = $this->master_model->list_syaratbayar();
		$data['isi'] =  "pembelian/tambah-pembelian";
		$data['subtitle'] = "Pembelian";
		$data['title'] = 'Tambah Data Pembelian';
		$this->load->view('layout',$data);	
	}

	public function edit(){
		$data['faktur'] = $this->pembelian_model->big_faktur()['faktur'] + 1;
		$data['detail'] = $this->pembelian_model->detail_pembelian($this->input->get('faktur'));
		$data['list_syarat_bayar'] = $this->master_model->list_syaratbayar();
		$data['isi'] 	=  "pembelian/edit-pembelian";
		$data['subtitle'] = "Pembelian";
		$data['title'] 	= 'Perbarui Data Pembelian';

		$pelunasan = $this->pelunasan_model->list_pelunasan_faktur($this->input->get('faktur'));
		


		// $this->load->view('layout',$data);	
	}

	public function add_items(){
		$faktur = $this->input->post('faktur');
		$idbarang = $this->input->post('idbarang');
		$cek = $this->pembelian_model->cek_faktur_item($faktur, $idbarang);
		if($cek <= 0){
			$this->pembelian_model->add_items();
		}else{
			echo "Barang Sudah Dimasukan";
		}

	}

	public function list_items(){
		$items = $this->pembelian_model->list_items($this->input->post_get('faktur'));
		foreach ($items as $value) {
			$totalharga = $value['qty'] * $value['harga'];
			$barang = $this->barang_model->detail_barang($value['idbarang']);
			echo"
			<tr>
				<td>".$barang['kode']."</td>
				<td>".$barang['nama']."</td>
				<td align='center'>".$value['qty']."</td>
				<td style='text-align: right;''>Rp.".$value['harga']."</td>
				<td style='text-align: right;''>Rp.".$totalharga."</td>
				<td onClick='hapus(".$value['id'].")'  style='cursor: pointer;'><a><span title='Hapus' class='icon-close' style='font-size: 20px; color: #cd2966;''></span></a></td>
			</tr>";
		}
	}

	public function delete_items(){
		$this->pembelian_model->delete_items($this->input->post_get('id'));
	}


	public function subtotal(){
		$items = $this->pembelian_model->list_items($this->input->post_get('faktur'));
		$data = 0;
		foreach ($items as $value) {
			$totalharga = $value['qty'] * $value['harga'];
			$data = $data + $totalharga;
		}
		echo $data;
	}

	public function add_faktur(){
		$item = $this->pembelian_model->list_items($this->input->post('faktur'));
		$jitems = count($item);
		//Jika Jumlah item kkosong maka kemblai ke form input
		if($jitems >= 1){
			foreach ($item as $value) {
				$barang = $this->barang_model->detail_barang($value['idbarang']);
				$a = $barang['stok'] * $barang['modal'];
				$b = $value['qty'] * $value['harga'];
				$c = $value['qty'] + $barang['stok'];
				$d = ($a + $b) / $c;
				$this->barang_model->update_modal($value['idbarang'], $d);
				$this->barang_model->update_stok($value['idbarang'], $c);
			}

			$syaratbayar = $this->master_model->detail_syaratbayar($this->input->post('syaratbayar'));
			$tanggal_beli=strtotime(date($this->input->post('tanggal')));
			$jumlah=$syaratbayar['tempo'];
			$new = 86400 * $jumlah;
			$hasil = $tanggal_beli + $new;
			$tempo = date('Y-m-d', $hasil);

			$this->pembelian_model->add_faktur($tempo);
			redirect('pembelian');

		}else{
			redirect('pembelian/tambah');

		}
	}

	public function list_items_edit(){
		$items = $this->pembelian_model->list_items($this->input->post_get('faktur'));
		foreach ($items as $value) {
			$totalharga = $value['qty'] * $value['harga'];
			$barang = $this->barang_model->detail_barang($value['idbarang']);
			echo"
			<tr class='data_edit_".$value['id']."'>
				<td>".$barang['kode']."</td>
				<td>".$barang['nama']."</td>
				<td align='center'>
					<input type='number' id='qty' value='".$value['qty']."' class='form-control' style='text-align: right;'>
				</td>
				<td style='text-align: right;'>
					<input type='number' id='harga' value='".$value['harga']."' class='form-control' style='text-align: right;'>
				</td>
				<td style='text-align: right;'>Rp.".$totalharga."</td>
				<td style='cursor: pointer;'>
					<a class='btn_edit' value='".$value['id']."'><span title='Edit' class='lnr lnr-checkmark-circle' style='font-size: 20px; color: #444;''></span></a>
					<a class='btn_hapus' value='".$value['id']."'><span title='Hapus' class='lnr lnr-cross-circle' style='font-size: 20px; color: #cd2966;''></span></a>
				</td>
			</tr>";
		}
	}

	public function edit_item_faktur(){
		$id = $this->input->post('id');
		$qty = $this->input->post('qty'); 
		$harga = $this->input->post('harga');
		$faktur = $this->input->post('faktur');

		if(empty($id) or empty($qty)){
			echo"Qty Tidak Boleh Kosong #";
			die();
		}

		if($qty < 0){
			echo"Nilai Qty Error !!";
			die();
		}

		$item = $this->pembelian_model->detail_item_faktur($id);
		$barang = $this->barang_model->detail_barang($item['idbarang']);

		if($item['qty'] <= $barang['stok']){
			//SET modal dan Stok berdasarkan 
			$this->proses_kembalikan_stok_modal($id);

			//SET Kembali setelah input item baru
			$this->proses_set_ulang_stok_modal($id, $qty, $harga);

			//Input Input Item baru
			$this->pembelian_model->add_items_2($faktur, $item['idbarang'], $qty, $harga);

			//hapus Item lama
			$this->pembelian_model->delete_items($id);

		}else{
			echo "Proses Gagal, Stok lebih kecil dari Qty item Faktur";
		}
		

	}

	function proses_kembalikan_stok_modal($id){
		$item = $this->pembelian_model->detail_item_faktur($id);
		$barang = $this->barang_model->detail_barang($item['idbarang']);

		$stok = $barang['stok'];
		$modal = $barang['modal'];
		$qty = $item['qty'];
		$harga = $item['harga'];

		$a = $stok * $modal;
		$b = $qty * $harga;
		$c = $stok - $qty;
		if($c <= 0){
			$d = 0 ;
		}else{
			$d = ($a - $b) / $c;
		}

		$this->barang_model->update_modal($item['idbarang'], $d);
		$this->barang_model->update_stok($item['idbarang'], $c);

	}

	function  proses_set_ulang_stok_modal($id,$qty,$harga){
		$item = $this->pembelian_model->detail_item_faktur($id);
		$barang = $this->barang_model->detail_barang($item['idbarang']);

		$a = $barang['stok'] * $barang['modal'];
		$b = $qty * $harga;
		$c = $qty + $barang['stok'];
		$d = ($a + $b) / $c;
		$this->barang_model->update_modal($item['idbarang'], $d);
		$this->barang_model->update_stok($item['idbarang'], $c);

	}

	public function hapus_item_faktur(){
		$id = $this->input->post('id');
		$item = $this->pembelian_model->detail_item_faktur($id);
		$barang = $this->barang_model->detail_barang($item['idbarang']);
		if($item['qty'] <= $barang['stok']){
			$a = $barang['stok'] * $barang['modal'];
			$b = $item['qty'] * $item['harga'];
			$c = $barang['stok'] - $item['qty'];
			if($c <= 0){
				$d = 0;
			}else{
				$d = ($a - $b) / $c;
			}
			$this->barang_model->update_modal($item['idbarang'], $d);
			$this->barang_model->update_stok($item['idbarang'], $c);
			$this->pembelian_model->delete_items($id);
		}else{
			echo "Proses Gagal, Stok lebih kecil dari Qty item Faktur";
		}	
	}

	public function add_items_edit(){
		$faktur = $this->input->post('faktur');
		$idbarang = $this->input->post('idbarang');
		$cek = $this->pembelian_model->cek_faktur_item($faktur, $idbarang);
		if($cek >= 1){
			echo "Barang Sudah Dimasukan";
			die();
		}

		$qty = $this->input->post('qty');
		$harga= $this->input->post('harga');
		$barang = $this->barang_model->detail_barang($idbarang);
		$a = $barang['stok'] * $barang['modal'];
		$b = $qty * $harga ;
		$c = $a + $b ;
		$d = $barang['stok'] + $qty;
		$e = $c / $d ;
		$this->barang_model->update_modal($idbarang, $e);
		$this->barang_model->update_stok($idbarang, $d);
		$this->pembelian_model->add_items();

	}

	public function edit_faktur(){
		$syaratbayar = $this->master_model->detail_syaratbayar($this->input->post('syaratbayar'));
		$tanggal_beli=strtotime(date($this->input->post('tanggal')));
		$jumlah=$syaratbayar['tempo'];
		$new = 86400 * $jumlah;
		$hasil = $tanggal_beli + $new;
		$tempo = date('Y-m-d', $hasil);
		$this->pembelian_model->update_faktur($tempo);
		redirect('pembelian');
	}

	public function hapus_faktur(){
		$faktur = $this->input->post_get('faktur');
		$items  = $this->pembelian_model->list_items($faktur);
		$status = 0;
		//Proses Pengecektan Cukup tidaknya stok untuk dihapus
		foreach ($items as $value) {
			$barang = $this->barang_model->detail_barang($value['idbarang']);
			if($value['qty'] > $barang['stok']){
				$status = 1 ;
			}
		}

		//Jika Stok Cukup untuk di hapus
		if($status == 0){
			foreach ($items as $value) {
				//Proses Hapus Item faktur dan Set ulang harga Modal serta Stok
				$a = $barang['stok'] * $barang['modal'];
				$b = $value['qty'] * $value['harga'];
				$c = $barang['stok'] - $value['qty'];
				if($c <= 0){
					$d = 0;
				}else{
					$d = ($a - $b) / $c;
				}
				$this->barang_model->update_modal($value['idbarang'], $d);
				$this->barang_model->update_stok($value['idbarang'], $c);
				$this->pembelian_model->delete_items($value['id']);
			}
				$this->pembelian_model->delete_faktur($faktur);

		}else{
			echo "Salah Satu Barang Difaktur Tidak Memiliki Stok Yang Cukup untuk diHapus";

		}

	}

}