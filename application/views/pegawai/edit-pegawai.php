<!-- MAIN CONTENT -->
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	        <a href="<?php echo base_url(); ?>pegawai">Data Pegawai</a>
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
					<?php echo form_open('pegawai/edit_pegawai?id='.$detail['id']); ?>
					  	<div class="form-group">
					  	<div class="form-group col-md-4">
					  		<label>Nama Lengkap</label>
					  		<input type="text" name="nama" value="<?php echo $detail['nama'] ?>" class="form-control" placeholder="Nama Lengkap" required="">
					  	</div>
					    <div class="form-group col-md-2">
					    	<label>Jenis Kelamin</label> 
					    	<select class="form-control" name="jeniskelamin" required="">
						    	<?php
					    			$data_jenis = array('Laki-Laki','Perempuan');
					    			foreach ($data_jenis as $value) {
					    				if($detail['jeniskelamin'] == $value){
					    					echo "<option value='".$value."' selected>".$value."</option>";
					    				}else{
					    					echo "<option value='".$value."'>".$value."</option>";
					    				}
					    			}
					    		?>
						    </select>
					    </div>
					    
					  	<div class="form-group col-md-3">
					    	<label>Pendidikan</label> 
					    	<select class="form-control" name="pendidikan" required="">
						    	<?php
					    			$data_p = array('SD','SMP','SMA','S1');
					    			foreach ($data_p as $value) {
					    				if($detail['pendidikan'] == $value){
					    					echo "<option value='".$value."' selected>".$value."</option>";
					    				}else{
					    					echo "<option value='".$value."'>".$value."</option>";
					    				}
					    			}
					    		?>
						    </select>
					    </div>
					    <div class="col-md-3">
					  		<label>Tanggal Masuk</label>
					  		<input type="date" name="tglmasuk" value="<?php echo $detail['tglmasuk'] ?>" class="form-control" placeholder="Tanggal Masuk" required="">
					  	</div>
					    <div class="form-group col-md-4">
					    	<label>Jabatan</label> 
					    	<select class="form-control" name="jabatan" required="">
						    	<?php
					    			foreach ($list_jabatan as $value) {
					    				if($detail['idjabatan'] == $value['id']){
					    					echo "<option value='".$value['id']."' selected>".$value['jabatan']."</option>";
					    				}else{
					    					echo "<option value='".$value['id']."'>".$value['jabatan']."</option>";
					    				}
					    			}
					    		?>
						    </select>
					    </div>
					    
					  	<div class="form-group col-md-4">
					  		<label>Telp/No Hp</label>
					  		<input type="number" maxlength="13" name="nohp" value="<?php echo $detail['nohp'] ?>" class="form-control" placeholder="No Hp">
					  	</div>
					  	<div class="form-group col-md-4">
					  		<label>Password</label>
					  		<input type="password" name="password" class="form-control" placeholder="Password">
					  	</div>
					  	
					    <div class=" form-group col-md-12">
					  		<label>Alamat</label>
					  		<textarea class="form-control" required="" name="alamat" placeholder="Alamat"><?php echo $detail['alamat'] ?></textarea>
					  	</div>
					    
					  	</div>
						
			    	</div>
				</div>
				<div class="panel panel-default">
			    		<div class="panel-body">
							  	<div class="col-md-12">
							  		<label>Hak Akses</label>
							  	</div>
							  	<?php
							  		$data_cek = array('Dashboard','Data Barang','Master Data','Pembelian','Penjualan','Point Of Sale','Biaya Beban','Laporan');
							  		$arr = explode("#", $detail['akses']);
							  		foreach ($data_cek as $value) {
							  			//kondisikan ketika ada data
							  			$ok=0;
							  			foreach ($arr as $data) {
							  				if($data == $value){
							  					$ok=1;
							  				}
							  			}
							  			//cetak berdasarkan kondisi
							  			if($ok == 1){
							  				echo "
								  				<div class='col-md-3'>
											  		<div class='form-group'>
											  			<label class='checkbox-inline'><input type='checkbox' name='akses[]' checked value='".$value."'>".$value."</label>
											  		</div>
											  	</div>";
							  			}else{
							  				echo "
								  				<div class='col-md-3'>
											  		<div class='form-group'>
											  			<label class='checkbox-inline'><input type='checkbox' name='akses[]' value='".$value."'>".$value."</label>
											  		</div>
											  	</div>";
							  			}
							  		}
							  	?>

								  	<div  class="form-group col-md-12">
							    	<button type="submit" class="btn btn-info" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
							    	<a href="<?php echo base_url(); ?>pegawai" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Pegawai</a>
							    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;><span class="fa fa-remove"></span> Batal</button>
								</div>
							</div>
			  			</div>
					</div>

					<?php echo form_close(); ?>
<!-- END MAIN CONTENT -->