<!-- MODAL TAMBAH BARANG -->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Barang</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
          	<form>
			  	<div class="form-group">
			  	<div class="form-group col-md-4">
			  		<label>Kode Barang</label>
			  		<input type="text" class="form-control" placeholder="Kode Barang">
			  	</div>
			    <div class="form-group col-md-5">
			    	<label>Nama Barang</label>
			      	<input type="text" class="form-control" placeholder="Nama Barang">
			    </div>
			    <div class="form-group col-md-3">
			    	<label>Satuan</label> 
			    	<select class="form-control" name="jeniskelamin" required="">
				    	<?php
			    			$data_jenis = array('Unit');
			    			foreach ($data_jenis as $value) {
			    				echo "<option value='".$value."'>".$value."</option>";
			    			}
			    		?>
				    </select>
			    </div>
			    <div class="form-group col-md-3">
			    	<label>Kategori Barang</label> 
			    	<select class="form-control" name="jeniskelamin" required="">
				    	<?php
			    			$data_jenis = array('-');
			    			foreach ($data_jenis as $value) {
			    				echo "<option value='".$value."'>".$value."</option>";
			    			}
			    		?>
				    </select>
			    </div>
			    <div class="form-group col-md-3">
			    	<label>Jenis Barang</label> 
			    	<select class="form-control" name="jeniskelamin" required="">
				    	<?php
			    			$data_jenis = array('-');
			    			foreach ($data_jenis as $value) {
			    				echo "<option value='".$value."'>".$value."</option>";
			    			}
			    		?>
				    </select>
			    </div>
			    
			    <div class="form-group col-md-3">
			    	<label>Warna</label> 
			    	<select class="form-control" name="jeniskelamin" required="">
				    	<?php
			    			$data_jenis = array('Merah','Biru');
			    			foreach ($data_jenis as $value) {
			    				echo "<option value='".$value."'>".$value."</option>";
			    			}
			    		?>
				    </select>
			    </div>
			    <div class="form-group col-md-3">
			    	<label>Ukuran</label> 
			    	<select class="form-control" name="jeniskelamin" required="">
				    	<?php
			    			$data_jenis = array('S','M');
			    			foreach ($data_jenis as $value) {
			    				echo "<option value='".$value."'>".$value."</option>";
			    			}
			    		?>
				    </select>
			    </div>
			    <div class="form-group col-md-6">
			    	<label>Harga 1</label>
			      	<input type="text" class="form-control" placeholder="Harga 1">
			    </div>
			    <div class="form-group col-md-6">
			    	<label>Harga 2</label>
			      	<input type="text" class="form-control" placeholder="Harga 2">
			    </div>
			    <div class="form-group col-md-6">
			    	<label>Harga 3</label>
			      	<input type="text" class="form-control" placeholder="Harga 3">
			    </div>
			    <div class="form-group col-md-6">
			    	<label>Harga 4</label>
			      	<input type="text" class="form-control" placeholder="Harga 4">
			    </div>
			    <div class="form-group col-md-6">
			    	<label>Harga 5</label>
			      	<input type="text" class="form-control" placeholder="Harga 5">
			    </div>
			    <div class="form-group col-md-6">
			    	<label>Foto</label>
			      	<input type="file" class="form-control" placeholder="Nama Lengkap">
			    </div>
			    <div  class="form-group col-md-12">
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
				</form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- END MODAL -->