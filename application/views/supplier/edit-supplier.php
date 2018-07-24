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
			<?php echo form_open('supplier/edit_supplier?id='.$detail['id']); ?>
			  	<div class="form-group">
				  	<div class="form-group col-md-6">
				  		<label>Nama Lengkap</label>
				  		<input type="text" name="nama" value="<?php echo $detail['nama']; ?>" class="form-control" placeholder="Nama Lengkap" required="">
				  	</div>
			    <div class="form-group col-md-3">
			    	<label>Jenis Kelamin</label> 
			    	<select class="form-control" name="jeniskelamin" required="">
				    	<?php
			    			$data_jenis = array('Laki-Laki','Perempuan');
			    			foreach ($data_jenis as $value) {
			    				if($value == $detail['jeniskelamin']){
			    					echo "<option value='".$value."' selected>".$value."</option>";
			    				}else{
			    					echo "<option value='".$value."'>".$value."</option>";
			    				}
			    			}
			    		?>
				    </select>
			    </div>
			    <div class="form-group col-md-3">
			  		<label>Telp/No Hp</label>
			  		<input type="text" name="nohp" value="<?php echo $detail['nohp']; ?>" class="form-control" placeholder="No Hp">
			  	</div>
			    <div class="form-group col-md-6">
			  		<label>Email</label>
			  		<input type="email" name="email" value="<?php echo $detail['email']; ?>" class="form-control" placeholder="Email" >
			  	</div>
			  	<div class="form-group col-md-6">
			    	<label>Kota</label> 
			    	<select class="form-control" name="kota"  required="">
				    	<?php
			    			foreach ($list_kota as $value) {
			    				if($value['id'] == $detail['idkota']){
			    					echo "<option value='".$value['id']."' selected>".$value['kota']."</option>";
			    				}else{
			    					echo "<option value='".$value['id']."'>".$value['kota']."</option>";
			    				}
			    			}
			    		?>
				    </select>
			    </div>
			    <div class=" form-group col-md-12">
			  		<label>Alamat</label>
			  		<textarea class="form-control" name="alamat" required="" placeholder="Alamat"><?php echo $detail['alamat']; ?></textarea>
			  	</div>
			  	<div class="form-group col-md-2">
			    	<label>Bank</label> 
			    	<select class="form-control" name="bank" required="">
				    	<?php
			    			foreach ($list_bank as $value) {
			    				if($value['id'] == $detail['idbank']){
			    					echo "<option value='".$value['id']."' selected>".$value['bank']."</option>";
			    				}else{
			    					echo "<option value='".$value['id']."'>".$value['bank']."</option>";
			    				}
			    			}
			    		?>
				    </select>
			    </div>
			  	<div class="form-group col-md-5">
			  		<label>No Rekening</label>
			  		<input type="number" name="norek" value="<?php echo $detail['norek']; ?>" class="form-control" placeholder="No Rekening" required="">
			  	</div>
			    <div class="form-group col-md-5">
			  		<label>Atas Nama</label>
			  		<input type="text" name="atasnama" value="<?php echo $detail['atasnama']; ?>" class="form-control" placeholder="Atas Nama" required="">
			  	</div>
			    <div  class="form-group col-md-12">
			    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
			    	<a href="<?php echo base_url(); ?>supplier" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Supplier</a>
			    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;><span class="fa fa-remove"></span> Batal</button>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->