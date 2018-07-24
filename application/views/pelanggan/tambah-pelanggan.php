<!-- MAIN CONTENT -->
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	        <a href="<?php echo base_url(); ?>pelanggan">Data Pelanggan</a>
	    </li>	
	    <li>
	    	<span><?php echo $title; ?></span>
	    </li>
	</ul>
</div>
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-default">
	    	<div class="panel-body">
				<?php echo form_open('pelanggan/tambah_pelanggan'); ?>
				  	<div class="form-group">
				  	<div class="form-group col-md-6">
				  		<label>Nama Lengkap</label>
				  		<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
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
				    <div class="form-group col-md-3">
				  		<label>Telp/No Hp</label>
				  		<input type="text" name="nohp" class="form-control" placeholder="No Hp">
				  	</div>
				    <div class="form-group col-md-3">
				  		<label>Email</label>
				  		<input type="email" name="email" class="form-control" placeholder="Email">
				  	</div>
				  	<div class="form-group col-md-3">
				    	<label>Kota</label> 
				    	<select name="kota" class="form-control">
				    		<option value="">- Pilih kota -</option>
					    	<?php
				    			foreach ($list_kota as $value) {
				    				echo "<option value='".$value['id']."'>".$value['kota']."</option>";
				    			}
				    		?>
					    </select>
				    </div>
				    <div class="form-group col-md-3">
				    	<label>Kategori</label> 
				    	<select name="kategori" class="form-control"  required="">
					    	<?php
				    			foreach ($list_kategori_pelanggan as $value) {
				    				echo "<option value='".$value['id']."'>".$value['kategori']."</option>";
				    			}
				    		?>
					    </select>
				    </div>
				    <div class="form-group col-md-3">
				    	<label>Kategori Harga</label> 
				    	<select name="kategorih" class="form-control"  required="">
					    	<?php
				    			foreach ($list_kategori_harga as $value) {
				    				echo "<option value='".$value['id']."'>".$value['kategori']."</option>";
				    			}
				    		?>
					    </select>
				    </div>
				    <div class=" form-group col-md-12">
				  		<label>Alamat</label>
				  		<textarea name="alamat" class="form-control"></textarea>
				  	</div>
				  	
				    <div  class="form-group col-md-12">
				    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
				    	<a href="<?php echo base_url(); ?>pelanggan" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Pelanggan</a>
				    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;"><span class="fa fa-remove"></span> Batal</button>
					</div>
				  	</div>
				<?php echo form_close(); ?>
		    </div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->