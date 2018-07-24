<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	// ==========================MASTER BANK=======================================

	public function add_bank(){
		$data = array('bank'=>$this->input->post('bank'),
						'status'=>1
			    );
		$this->db->insert('bank',$data);
		return;
	}

	public function update_bank($id){
		$data = array('bank'=>$this->input->post('bank'));
		$this->db->where('id',$id);
		$this->db->update('bank',$data);
		return;
	}

	public function delete_bank($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('bank', $data);
		return;
	}

	public function list_bank(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('bank',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('bank')->result_array();		
	}

	public function detail_bank($id){
		$this->db->where('id',$id);
		return $this->db->get('bank')->row_array();
	}

	// ==========================MASTER KATEGORI HARGA=======================================

	public function add_kategori_harga(){
		$data = array('kategori'=>$this->input->post('kategori'),
						'persen'=>$this->input->post('persen')
			    );
		$this->db->insert('kategori_harga',$data);
		return;
	}

	public function update_kategori_harga($id){
		$data = array('kategori'=>$this->input->post('kategori'),
					  'persen'=>$this->input->post('persen'));
		$this->db->where('id',$id);
		$this->db->update('kategori_harga',$data);
		return;
	}

	public function delete_kategori_harga($id){
		$this->db->where('id', $id);
		$this->db->delete('kategori_harga');
		return;
	}

	public function list_kategori_harga(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('kategori',$like);
			$this->db->or_like('kategori',$like);
		}
		$this->db->order_by('id','ASC');
		$this->db->limit(100);
		return $this->db->get('kategori_harga')->result_array();		
	}

	public function detail_kategori_harga($id){
		$this->db->where('id',$id);
		return $this->db->get('kategori_harga')->row_array();
	}

	// ==============================Master Syarat Bayar=============================================

	public function add_syaratbayar(){
		$data = array('nama'=>$this->input->post('nama'),
						'tempo'=>$this->input->post('tempo'),
						'status'=>1
			    );
		$this->db->insert('syarat_bayar',$data);
		return;
	}

	public function update_syaratbayar($id){
		$data = array('nama'=>$this->input->post('nama'),
						'tempo'=>$this->input->post('tempo')
			    );
		$this->db->where('id',$id);
		$this->db->update('syarat_bayar',$data);
		return;
	}

	public function delete_syaratbayar($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('syarat_bayar', $data);
		return;
	}

	public function list_syaratbayar(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('tempo',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('syarat_bayar')->result_array();		
	}

	public function detail_syaratbayar($id){
		$this->db->where('id',$id);
		return $this->db->get('syarat_bayar')->row_array();
	}

	


	// ==============================Master Kategori=============================================

	public function add_kategori(){
		$data = array('kategori'=>$this->input->post('kategori'),
						'status'=>1
			    );
		$this->db->insert('kategori',$data);
		return;
	}

	public function update_kategori($id){
		$data = array('kategori' => $this->input->post('kategori'));
		$this->db->where('id',$id);
		$this->db->update('kategori',$data);
		return;
	}

	public function delete_kategori($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('kategori', $data);
		return;
	}

	public function list_kategori(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('kategori',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('kategori')->result_array();		
	}

	public function detail_kategori($id){
		$this->db->where('id',$id);
		return $this->db->get('kategori')->row_array();
	}





	// ==============================Master Kategori Pelanggan=============================================

	public function add_kategori_pelanggan(){
		$data = array('kategori' => $this->input->post('kategori'),
						'persen'=>$this->input->post('persen'),
						'status' => 1
			    );
		$this->db->insert('kategori_pelanggan',$data);
		return;
	}

	public function update_kategori_pelanggan($id){
		$data = array('kategori' => $this->input->post('kategori'),
						'persen'=>$this->input->post('persen')
					);
		$this->db->where('id',$id);
		$this->db->update('kategori_pelanggan',$data);
		return;
	}

	public function delete_kategori_pelanggan($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('kategori_pelanggan', $data);
		return;
	}

	public function list_kategori_pelanggan(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('kategori',$like);
			$this->db->or_like('kategori',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','ASC');
		$this->db->limit(100);
		return $this->db->get('kategori_pelanggan')->result_array();		
	}

	public function detail_kategori_pelanggan($id){
		$this->db->where('id',$id);
		return $this->db->get('kategori_pelanggan')->row_array();
	}




	// ==============================Master Satuan=============================================

	public function add_satuan(){
		$data = array('satuan'=>$this->input->post('satuan'),
						'status'=>1
			    );
		$this->db->insert('satuan',$data);
		return;
	}

	public function update_satuan($id){
		$data = array('satuan' => $this->input->post('satuan'));
		$this->db->where('id',$id);
		$this->db->update('satuan',$data);
		return;
	}

	public function delete_satuan($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('satuan', $data);
		return;
	}

	public function list_satuan(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('satuan',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('satuan')->result_array();		
	}

	public function detail_satuan($id){
		$this->db->where('id',$id);
		return $this->db->get('satuan')->row_array();
	}




	// ==============================Master Warna=============================================

	public function add_warna(){
		$data = array('warna'=>$this->input->post('warna'),
						'status'=>1
			    );
		$this->db->insert('warna',$data);
		return;
	}

	public function update_warna($id){
		$data = array('warna' => $this->input->post('warna'));
		$this->db->where('id',$id);
		$this->db->update('warna',$data);
		return;
	}

	public function delete_warna($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('warna', $data);
		return;
	}

	public function list_warna(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('warna',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('warna')->result_array();		
	}

	public function detail_warna($id){
		$this->db->where('id',$id);
		return $this->db->get('warna')->row_array();
	}



	// ==============================Master Kota=============================================

	public function add_kota(){
		$data = array('kota'=>$this->input->post('kota'),
						'status'=>1
			    );
		$this->db->insert('kota',$data);
		return;
	}

	public function update_kota($id){
		$data = array('kota' => $this->input->post('kota'));
		$this->db->where('id',$id);
		$this->db->update('kota',$data);
		return;
	}

	public function delete_kota($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('kota', $data);
		return;
	}

	public function list_kota(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('kota',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('kota')->result_array();		
	}

	public function detail_kota($id){
		$this->db->where('id',$id);
		return $this->db->get('kota')->row_array();
	}


	// ==============================Master Jabatan=============================================

	public function add_jabatan(){
		$data = array('jabatan'=>$this->input->post('jabatan'),
						'status'=>1
			    );
		$this->db->insert('jabatan',$data);
		return;
	}

	public function update_jabatan($id){
		$data = array('jabatan' => $this->input->post('jabatan'));
		$this->db->where('id',$id);
		$this->db->update('jabatan',$data);
		return;
	}

	public function delete_jabatan($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('jabatan', $data);
		return;
	}

	public function list_jabatan(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('jabatan',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('jabatan')->result_array();		
	}

	public function detail_jabatan($id){
		$this->db->where('id',$id);
		return $this->db->get('jabatan')->row_array();
	}


	// ==============================Master Rekening=============================================

	public function add_rekening(){
		$data = array('bank'=>$this->input->post('bank'),
						'nomor'=>$this->input->post('nomor'),
						'nama'=>$this->input->post('nama'),
						'status'=>1
			    );
		$this->db->insert('rekening',$data);
		return;
	}

	public function update_rekening($id){
		$data = array('bank'=>$this->input->post('bank'),
						'nomor'=>$this->input->post('nomor'),
						'nama'=>$this->input->post('nama')
			    );
		$this->db->where('id',$id);
		$this->db->update('rekening',$data);
		return;
	}

	public function delete_rekening($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('rekening', $data);
		return;
	}

	public function list_rekening(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('bank',$like);
			$this->db->or_like('nomor',$like);
			$this->db->or_like('nama',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('rekening')->result_array();		
	}

	public function detail_rekening($id){
		$this->db->where('id',$id);
		return $this->db->get('rekening')->row_array();
	}		


	// ==============================Master Supplier=============================================

	public function add_supplier(){
		$data = array(	'nama'=>$this->input->post('nama'),
						'alamat'=>$this->input->post('alamat'),
						'nohp'=>$this->input->post('nohp'),
						'idkota'=>$this->input->post('kota'),
						'email'=>$this->input->post('email'),
						'norek'=>$this->input->post('norek'),
						'idbank'=>$this->input->post('bank'),
						'atasnama'=>$this->input->post('atasnama'),
						'jeniskelamin'=>$this->input->post('jeniskelamin'),
					  	'status'=>1
			    	);
		$this->db->insert('supplier',$data);
		return;
	}

	public function update_supplier($id){
		$data = array(	'nama'=>$this->input->post('nama'),
						'alamat'=>$this->input->post('alamat'),
						'nohp'=>$this->input->post('nohp'),
						'idkota'=>$this->input->post('kota'),
						'email'=>$this->input->post('email'),
						'norek'=>$this->input->post('norek'),
						'idbank'=>$this->input->post('bank'),
						'atasnama'=>$this->input->post('atasnama'),
						'jeniskelamin'=>$this->input->post('jeniskelamin')
			    	);
		$this->db->where('id',$id);
		$this->db->update('supplier',$data);
		return;
	}

	public function delete_supplier($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('supplier', $data);
		return;
	}

	public function list_supplier(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('alamat',$like);
			$this->db->or_like('nohp',$like);
			$this->db->or_like('email',$like);
			$this->db->or_like('norek',$like);
			$this->db->or_like('atasnama',$like);
			$this->db->or_like('jeniskelamin',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(50);
		return $this->db->get('supplier')->result_array();		
	}

	public function detail_supplier($id){
		$this->db->where('id',$id);
		return $this->db->get('supplier')->row_array();
	}


	// ==============================Master Pelanggan=============================================

	public function add_pelanggan(){
		$data = array(	'nama'=>$this->input->post('nama'),
						'alamat'=>$this->input->post('alamat'),
						'idkota'=>$this->input->post('kota'),
						'nohp'=>$this->input->post('nohp'),
						'idkategori'=>$this->input->post('kategori'),
						'jeniskelamin'=>$this->input->post('jeniskelamin'),
						'email'=>$this->input->post('email'),
						'kategorih'=>$this->input->post('kategorih'),
					  	'status'=>1
			    	);
		$this->db->insert('pelanggan',$data);
		return;
	}

	public function update_pelanggan($id){
		$data = array(	'nama'=>$this->input->post('nama'),
						'alamat'=>$this->input->post('alamat'),
						'idkota'=>$this->input->post('kota'),
						'nohp'=>$this->input->post('nohp'),
						'idkategori'=>$this->input->post('kategori'),
						'jeniskelamin'=>$this->input->post('jeniskelamin'),
						'kategorih'=>$this->input->post('kategorih'),
						'email'=>$this->input->post('email')
			    	);
		$this->db->where('id',$id);
		$this->db->update('pelanggan',$data);
		return;
	}

	public function delete_pelanggan($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('pelanggan', $data);
		return;
	}

	public function list_pelanggan(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('alamat',$like);
			$this->db->or_like('nohp',$like);
			$this->db->or_like('email',$like);
			$this->db->or_like('jeniskelamin',$like);
			$this->db->or_like('kategorih',$like);
				
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('pelanggan')->result_array();		
	}

	public function detail_pelanggan($id){
		$this->db->where('id',$id);
		return $this->db->get('pelanggan')->row_array();
	}

	// ==============================Master Pegawaian=============================================

	public function add_pegawai(){
		//Membuat array Akses
		$akses = "";
		foreach ($this->input->post('akses') as $value) {
			$akses = $akses."#".$value;
		}

		$data = array(	'nama'=>$this->input->post('nama'),
						'password'=>$this->input->post('password'),
						'jeniskelamin'=>$this->input->post('jeniskelamin'),
						'nohp'=>$this->input->post('nohp'),
						'alamat'=>$this->input->post('alamat'),
						'pendidikan'=>$this->input->post('pendidikan'),
						'idjabatan'=>$this->input->post('jabatan'),
						'tglmasuk'=>$this->input->post('tglmasuk'),
						'akses'=>$akses,
					  	'status'=>1
			    	);
		$this->db->insert('pegawai',$data);
		return;
	}

	public function update_pegawai($id){
		//Membuat array Akses
		$akses = "";
		foreach ($this->input->post('akses') as $value) {
			$akses = $akses."#".$value;
		}
		$data = array(	'nama'=>$this->input->post('nama'),
						'jeniskelamin'=>$this->input->post('jeniskelamin'),
						'nohp'=>$this->input->post('nohp'),
						'alamat'=>$this->input->post('alamat'),
						'pendidikan'=>$this->input->post('pendidikan'),
						'idjabatan'=>$this->input->post('jabatan'),
						'tglmasuk'=>$this->input->post('tglmasuk'),
						'akses'=>$akses
			    	);
		if(!empty($this->input->post('password'))){
			$data = array('password'=>$this->input->post('password'));
		}

		$this->db->where('id',$id);
		$this->db->update('pegawai',$data);
		return;
	}

	public function delete_pegawai($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('pegawai', $data);
		return;
	}

	public function list_pegawai(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('alamat',$like);
			$this->db->or_like('nohp',$like);
			$this->db->or_like('email',$like);
			$this->db->or_like('jeniskelamin',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('pegawai')->result_array();		
	}

	public function detail_pegawai($id){
		$this->db->where('id',$id);
		return $this->db->get('pegawai')->row_array();
	}



	// ==============================Master Metode Bayar=============================================

	public function add_metode_bayar(){
		$data = array(	'nama'=>$this->input->post('nama'),
						'metode'=>$this->input->post('metode'),
						'norek'=>$this->input->post('norek'),
						'kartu'=>$this->input->post('kartu'),
						'nocek'=>$this->input->post('nocek'),
						'atasnama'=>$this->input->post('atasnama'),
						'idbank'=>$this->input->post('bank'),
						'status'=>1
			    );
		$this->db->insert('metode_bayar',$data);
		return;
	}

	public function update_metode_bayar($id){
		$data = array(	'nama'=>$this->input->post('nama'),
						'norek'=>$this->input->post('norek'),
						'kartu'=>$this->input->post('kartu'),
						'nocek'=>$this->input->post('nocek'),
						'atasnama'=>$this->input->post('atasnama'),
						'idbank'=>$this->input->post('bank'),
			    );

		$this->db->where('id',$id);
		$this->db->update('metode_bayar',$data);
		return;
	}

	public function delete_metode_bayar($id){
		$data = array('status' => 0);
		$this->db->where('id', $id);
		$this->db->update('metode_bayar', $data);
		return;
	}

	public function list_metode_bayar(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('norek',$like);
			$this->db->or_like('kartu',$like);
			$this->db->or_like('nocek',$like);
			$this->db->or_like('atasnama',$like);
		}
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('metode_bayar')->result_array();		
	}

	public function detail_metode_bayar($id){
		$this->db->where('id',$id);
		return $this->db->get('metode_bayar')->row_array();
	}

	// =========== END MASTER METODE BAYAR ================

	// ============= MASTER OUTLET ================== //
	public function add_outlet(){
		$data = array('outlet'=>$this->input->post('outlet'),
						'nohp'=>$this->input->post('nohp'),
						'alamat'=>$this->input->post('alamat'),
						'status' => "Aktif"
			    );
		$this->db->insert('outlet',$data);
		return;
	}

	public function update_outlet($id){
		$data = array('outlet'=>$this->input->post('outlet'),
						'nohp'=>$this->input->post('nohp'),
						'alamat'=>$this->input->post('alamat'));
		$this->db->where('id',$id);
		$this->db->update('outlet',$data);
		return;
	}

	public function delete_outlet($id){
		$this->db->where('id',$id);
		$this->db->delete('outlet');
		return;
	}
	public function on_outlet($id){
		$data =  array( 'status' => "Aktif");
		$this->db->where('id',$id);
		$this->db->update('outlet',$data);
		return;
	}
	public function off_outlet($id){
		$data =  array( 'status' => "Tidak Aktif");
		$this->db->where('id',$id);
		$this->db->update('outlet',$data);
		return;
	}

	public function list_outlet(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('outlet',$like);
			$this->db->or_like('status',$like);
		}
		$this->db->order_by('id','DESC');
		$this->db->limit(50);
		return $this->db->get('outlet')->result_array();		
	}

	public function detail_outlet($id){
		$this->db->where('id',$id);
		return $this->db->get('outlet')->row_array();
	}

	// ============= END MASTER OUTLET ==============

}