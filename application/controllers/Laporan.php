<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
	}

	public function today(){
		$data['isi'] =  "laporan/laporan-today";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Pendapatan Hari Ini';
		$this->load->view('layout',$data);
	}

	// PEMBELIAN
	public function pembelian(){
		$data['isi'] =  "laporan/laporan-pembelian";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Laporan Pembelian';
		$this->load->view('layout',$data);
	}
	public function rincianpembelian(){
		$data['isi'] =  "laporan/filter-pembelian";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Laporan Pembelian';
		$this->load->view('layout',$data);
	}
	public function barangbeli(){
		$data['isi'] =  "laporan/filter-barangbeli";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Berdasarkan per Barang';
		$this->load->view('layout',$data);
	}
	public function suppembelian(){
		$data['isi'] =  "laporan/filter-suppembelian";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Berdasarkan Supplier';
		$this->load->view('layout',$data);
	}
	public function lunasbeli(){
		$data['isi'] =  "laporan/laporan-lunasbeli";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Pelunasan Pembelian';
		$this->load->view('layout',$data);
	}
	public function returbeli(){
		$data['isi'] =  "laporan/laporan-returpembelian";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Retur Pembelian';
		$this->load->view('layout',$data);
	}
	// END PEMBELIAN

	// PENJUALAN
	public function penjualan(){
		$data['isi'] =  "laporan/laporan-penjualan";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Laporan Penjualan';
		$this->load->view('layout',$data);
	}
	public function rincianpenjualan(){
		$data['isi'] =  "laporan/filter-penjualan";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Laporan Penjualan';
		$this->load->view('layout',$data);
	}
	public function tglpenjualan(){
		$data['isi'] =  "laporan/filter-tglpenjualan";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Berdasarkan Tanggal Penjualan';
		$this->load->view('layout',$data);
	}
	public function suppenjualan(){
		$data['isi'] =  "laporan/filter-suppenjualan";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Berdasarkan Supplier';
		$this->load->view('layout',$data);
	}
	public function lunasjual(){
		$data['isi'] =  "laporan/laporan-lunasjual";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Pelunasan Penjualan';
		$this->load->view('layout',$data);
	}
	public function returjual(){
		$data['isi'] =  "laporan/laporan-returpenjualan";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Retur Penjualan';
		$this->load->view('layout',$data);
	}
	// END PENJUALAN

	// PRODUK
	public function produk(){
		$data['isi'] =  "laporan/laporan-produk";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Laporan Produk';
		$this->load->view('layout',$data);
	}
	public function stok(){
		$data['isi'] =  "laporan/filter-stok";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Laporan Stok';
		$this->load->view('layout',$data);
	}
	// END PRODUK

	// LAINNYA
	public function etc(){
		$data['isi'] =  "laporan/laporan-etc";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Laporan Lainnya';
		$this->load->view('layout',$data);
	}
	public function hutang(){
		$data['isi'] =  "laporan/laporan-hutang";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Laporan Hutang';
		$this->load->view('layout',$data);
	}
	public function piutang(){
		$data['isi'] =  "laporan/laporan-piutang";
		$data['subtitle'] = "Laporan";
		$data['title'] = 'Laporan Piutang';
		$this->load->view('layout',$data);
	}
	// END LAINNYA
}
