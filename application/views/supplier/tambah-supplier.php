<!-- MAIN CONTENT -->
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	        <a href="<?php echo base_url(); ?>supplier">Data Supplier</a>
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
			<?php echo form_open('supplier/tambah_supplier') ?>
			  	<div class="form-group">
				  	<div class="form-group col-md-6">
				  		<label>Nama Lengkap</label>
				  		<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
				  	</div>
			    <div class="form-group col-md-3">
			    	<label>Jenis Kelamin</label> 
			    	<select class="form-control" name="jeniskelamin" required="">
			    		<option value="" disabled selected class="hide">- Pilih Jenis Kelamin -</option>
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
			  		<input type="text" name="nohp" class="form-control" placeholder="No Hp" required="">
			  	</div>
			    <div class="form-group col-md-6">
			  		<label>Email</label>
			  		<input type="email" name="email" class="form-control" placeholder="Email" >
			  	</div>
			  	<div class="form-group col-md-6">
			    	<label>Kota</label> 
			    	<select class="form-control" name="kota"  required="">
			    		<option value="" disabled selected class="hide">- Pilih Kota -</option>
				    	<?php
			    			foreach ($list_kota as $value) {
			    				echo "<option value='".$value['id']."'>".$value['kota']."</option>";
			    			}
			    		?>
				    </select>
			    </div>
			    <div class=" form-group col-md-12">
			  		<label>Alamat</label>
			  		<textarea class="form-control" name="alamat" required="" placeholder="Alamat"></textarea>
			  	</div>
			  	<div class="form-group col-md-2">
			    	<label>Bank</label> 
			    	<select class="form-control" name="bank">
			    		<option value="" disabled selected class="hide">- Pilih Bank -</option>
				    	<?php
			    			foreach ($list_bank as $value) {
			    				echo "<option value='".$value['id']."'>".$value['bank']."</option>";
			    			}
			    		?>
				    </select>
			    </div>
			  	<div class="form-group col-md-5">
			  		<label>No Rekening</label>
			  		<input type="number" name="norek" class="form-control" placeholder="No Rekening">
			  	</div>
			    <div class="form-group col-md-5">
			  		<label>Atas Nama</label>
			  		<input type="text" name="atasnama" class="form-control" placeholder="Atas Nama">
			  	</div>
			    <div  class="form-group col-md-12">
			    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
			    	<a href="<?php echo base_url(); ?>supplier" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Supplier</a>
			    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;"><span class="fa fa-remove"></span> Batal</button>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->