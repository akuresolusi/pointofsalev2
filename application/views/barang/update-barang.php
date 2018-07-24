<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>
	    <li>
	        <a href="<?php echo base_url(); ?>barang">Data Barang</a>
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
					<?php echo form_open_multipart('barang/proses_edit?id='.$detail['id']); ?>
					  	<div class="form-group">
					  	<div class="form-group col-md-4">
					  		<label>Kode Barang</label>
					  		<input type="text" class="form-control" disabled value="<?php echo $detail['kode']; ?>" >
					  	</div>
					    <div class="form-group col-md-4">
					    	<label>Nama Barang</label>
					      	<input type="text" class="form-control" required="" name="nama" value="<?php echo $detail['nama']; ?>" placeholder="Nama Barang">
					    </div>
					    <div class="form-group col-md-4">
					    	<label>Kategori Barang</label> 
					    	<select class="form-control" name="kategori" required="">
						    	<?php
					    			foreach ($list_kategori as $value) {
					    				if($detail['idkategori'] == $value['id']){
					    					echo "<option value='".$value['id']."' selected>".$value['kategori']."</option>";
					    				}else{
					    					echo "<option value='".$value['id']."'>".$value['kategori']."</option>";
					    				}
					    			}
					    		?>
						    </select>
					    </div>
					    <div class="form-group col-md-3">
					    	<label>Satuan</label> 
					    	<select class="form-control" name="satuan" required="">
						    	<?php
					    			foreach ($list_satuan as $value) {
					    				if($detail['idsatuan'] == $value['id']){
					    					echo "<option value='".$value['id']."' selected>".$value['satuan']."</option>";
					    				}else{
					    					echo "<option value='".$value['id']."'>".$value['satuan']."</option>";
					    				}
					    			}
					    		?>
						    </select>
					    </div>

					   <!--  <div class="form-group col-md-3">
					    	<label>Warna</label> 
					    	<select class="form-control" name="warna" required="">
						    	<?php
					    			foreach ($list_warna as $value) {
					    				if($detail['idwarna'] == $value['id']){
					    					echo "<option value='".$value['id']."' selected>".$value['warna']."</option>";
					    				}else{
					    					echo "<option value='".$value['id']."'>".$value['warna']."</option>";
					    				}
					    			}
					    		?>
						    </select>
					    </div>
					    <div class="form-group col-md-3">
					    	<label>Ukuran</label> 
					    	<select class="form-control" name="ukuran" required="">
						    	<?php
					    			$data_ukuran = array('XXS','XS','S','M','L','XL','XXL');
					    			foreach ($data_ukuran as $value) {
					    				if($detail['ukuran'] == $value){
					    					echo "<option value='".$value."' selected>".$value."</option>";
					    				}else{
					    					echo "<option value='".$value."'>".$value."</option>";
					    				}
					    			}
					    		?>
						    </select>
					    </div> -->

					     <div class="form-group col-md-3">
					    	<label>Kontrol Stok ?</label>
					    	<div class="radio">
						    	<label><input type="radio" name="kontrol" disabled
						    	<?php if($detail['kontrolstok']=="1"){echo"checked";} ?> required="">Ya</label> &nbsp;&nbsp;&nbsp;
						    	<label><input type="radio" name="kontrol" disabled 
						    	<?php if($detail['kontrolstok']=="0"){echo"checked";} ?> required="">Tidak</label>
					    	</div>
					    </div>

					    <div class="form-group col-md-12">
					    	<label>Harga Dasar</label>
					      	<input type="number" class="form-control" required="" value="<?php echo $detail['hargadasar'] ?>" id="hargadasar" name="harga" placeholder="Harga Dasar">
					    </div>



					    <div class="form-group col-md-8">
					    	<label>Harga Jual Barang/Jasa</label>
					    	<table class="table table-striped table-hover table-bordered">
					    		<thead>
					    			<tr>
					    				<th width="150px">Kategori Harga</th>
					    				<?php
					    				foreach ($list_kategorip as $value) {
					    					echo"<th>".$value['kategori']."</th>";
					    				}
					    				?>
					    			</tr>
					    		</thead>
					    		<tbody>
				    				<?php
				    				foreach ($list_kategorih as $value) {
				    					echo"
				    					<tr>
				    						<td>".$value['kategori']."<input type='hidden' id='".$value['id']."h'></td>";
				    						foreach ($list_kategorip as $value2) {
				    							$nilai = $this->barang_model->detail_harga_jual($detail['id'], $value['id'], $value2['id']);
						    					$name = $value['id']."-".$value2['id'] ;
						    					echo"<td><input type='number' name='".$name."' id='".$name."' class='form-control' value='".$nilai['harga']."' /></td>";
						    				}
				    					echo"
				    					</tr>";
				    				}
				    				?>
					    		</tbody>
					    	</table>
					    </div>



					    <div  class="form-group col-md-12">
					    	<button type="submit" class="btn btn-info" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
					    	<a href="<?php echo base_url(); ?>barang" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Barang</a>
					    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;"><span class="fa fa-remove"></span> Batal</button>
						</div>
					  	</div>
						<?php echo form_close(); ?>
			    	</div>
				</div>
					<div class="panel panel-default">
			    		<div class="panel-body">
							  	<div class=" form-group col-md-12">
							  		<label>Import Data</label>
							  			<input type="file" class="form-control">
							  	</div>
							  	<div class="form-group col-md-12" style="margin-bottom: 0px;">
					    			<a href=""><button class="btn btn-info"><span class="fa fa-download"></span> Import</button></a>
								</div>
							</div>
			  			</div>
					</div>


<script type="text/javascript">
	
	$("#hargadasar").keyup(function() {
		<?php foreach ($list_kategorih as $value){ ?>
			set_kategori_harga_<?php echo $value['id'] ?>($("#hargadasar").val());
		<?php } ?>	
	});

	<?php foreach ($list_kategorih as $value){ 
		$persen = $value['persen'];
		if($persen == "" || $persen < 0){ $persen = "0";}
	?>
		function set_kategori_harga_<?php echo $value['id'] ?>(hargadasar){
			var persen = <?php echo $persen; ?>;
			var hasil = hargadasar / 100 * persen ;
			document.getElementById("<?php echo $value['id']."h" ?>").value = hasil.toFixed(0);

			<?php foreach ($list_kategorip as $value2) { 
				$persen2 = $value2['persen'];
				if($persen2 == "" || $persen2 < 0){ $persen2 = "0";}
			?>
				var hargajual = hasil / 100 * <?php echo $persen2; ?>;
				document.getElementById("<?php echo $value['id']."-".$value2['id'] ?>").value = hargajual.toFixed(0);

			<?php } ?>

		}

	<?php } ?>
	
</script>