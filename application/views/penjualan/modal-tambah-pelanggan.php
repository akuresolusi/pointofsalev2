<!-- MODAL TAMBAH PELANGGAN -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Pelanggan</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
          	<form>
			  	<div class="form-group">
			  	<div class="form-group col-md-5">
			  		<label>Nama Lengkap</label>
			  		<input type="text" class="form-control" placeholder="Nama Lengkap" required="">
			  	</div>
			    <div class="form-group col-md-3">
			    	<label>Jenis Kelamin</label> 
			    	<select class="form-control" name="jeniskelamin" required="">
				    	<?php
			    			$data_jenis = array('Laki-Laki','Perempuan');
			    			foreach ($data_jenis as $value) {
			    				echo "<option value='".$value."'>".$value."</option>";
			    			}
			    		?>
				    </select>
			    </div>
			    <div class="form-group col-md-4">
			  		<label>Telp/No Hp</label>
			  		<input type="text" class="form-control" placeholder="No Hp">
			  	</div>
			    <div class="form-group col-md-4">
			  		<label>Email</label>
			  		<input type="text" class="form-control" placeholder="Email" required="">
			  	</div>
			  	<div class="form-group col-md-4">
			    	<label>Kota</label> 
			    	<select class="form-control"  required="">
				    	<?php
			    			$data_jenis = array('Medan','Kualasimpang');
			    			foreach ($data_jenis as $value) {
			    				echo "<option value='".$value."'>".$value."</option>";
			    			}
			    		?>
				    </select>
			    </div>
			    <div class="form-group col-md-4">
			    	<label>Kategori</label> 
			    	<select class="form-control"  required="">
				    	<?php
			    			$data_jenis = array('Seller','Umum');
			    			foreach ($data_jenis as $value) {
			    				echo "<option value='".$value."'>".$value."</option>";
			    			}
			    		?>
				    </select>
			    </div>
			    <div class=" form-group col-md-12">
			  		<label>Alamat</label>
			  		<textarea class="form-control" placeholder="Alamat"></textarea>
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