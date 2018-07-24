<style type="text/css">
	table{
		border-top: none;
	}
	th{
		text-align: center;
	}
	.table>thead>th{
		padding-right: 0;
		padding-left:0;
	}
	.table>tbody>tr>td{
		padding-left: 0;
		padding-right: 0;
		border-top: 1px solid #f5f5f5;
	}
	.panel .table > thead > tr > th:first-child{
		padding-left: 0px;
	}
	.panel .table > thead > tr > td:first-child,
	.panel .table > tbody > tr > td:first-child,
	.panel .table > tbody > tr > th:first-child,
	.panel .table > tfoot > tr > td:first-child,
	.panel .table > tfoot > tr > th:first-child {
	padding-left: 0px; }
</style>
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
		<div class="col-md-6 nopadding" style="padding-right: 7px;">
			<div class="panel panel-headline">
  				<div class="panel-heading" style="border-bottom: 1px solid #eee;">
  					<h4 class="title-fav" style="margin-top: 0; margin-bottom: 15px;">Profil Barang</h4>
  				</div>
  				<div class="panel-body">
					<?php echo form_open_multipart('barang/proses_edit?id='.$detail['id']); ?>
					  	<div class="form-group col-md-12">
					  		<label>Kode Barang</label>
					  		<input type="text" class="form-control" disabled value="<?php echo $detail['kode']; ?>" >
					  	</div>
					    <div class="form-group col-md-12">
					    	<label>Nama Barang</label>
					      	<input type="text" class="form-control" required="" name="nama" value="<?php echo $detail['nama']; ?>" placeholder="Nama Barang">
					    </div>
					    <div class="form-group col-md-12">
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
					    <div class="form-group col-md-12">
					    	<div class="row">
					    		<div class="col-md-6"><label>Multi Satuan </label></div>
					    		<div class="col-md-6" style="text-align: right;">
					    			<a href="#" id="add-form-satuan" data-toggle="tooltip" data-placement="left" title="Tambah Satuan" style="margin-right: 5px; font-size: 16px;"><i class="icon-plus"></i></a>
					    			<a href="#" id="riset-satuan" data-toggle="tooltip" data-placement="left" title="Reset Satuan" style="font-size: 16px;"><i class="icon-refresh"></i></a>	
					    		</div>
					    	</div>
					    	<table width="100%" class="table">
					    		<!-- Data satuan yang telah diinput -->
					    		<?php
					    		foreach ($list_satuan_barang as $value) {
					    		?>
					    			<tr class="data-satuan">
						    			<td width="40%">
						    				<select class="form-control" name="satuan[]" required="">
									    		<option value="">#Pilih#</option>
										    	<?php
									    			foreach ($list_satuan as $value2) {
									    				if($value['satuan'] == $value2['satuan']){
									    					echo "<option selected value='".$value2['satuan']."'>".$value2['satuan']."</option>";
									    				}else{
									    					echo "<option value='".$value2['satuan']."'>".$value2['satuan']."</option>";
									    				}
									    			}
									    		?>
										    </select>
						    			</td>
						    			<td width="40%">
						    				<input type="number" class="form-control" name="kali[]" required="" value="<?php echo $value['kali'] ?>" placeholder="Penggalian">	
						    			</td>
						    		</tr>
					    		<?php			
					    		}
					    		?>
					    		<!-- End data satuan yang telah diinput -->
					    		<tr id="form-satuan">
					    			<td width="40%">
					    				<select class="form-control" name="satuan[]" required="">
								    		<option value="">#Pilih#</option>
									    	<?php
								    			foreach ($list_satuan as $value) {
								    				echo "<option value='".$value['satuan']."'>".$value['satuan']."</option>";
								    			}
								    		?>
									    </select>
					    			</td>
					    			<td width="40%">
					    				<input type="number" class="form-control" name="kali[]" required="" placeholder="Penggalian">	
					    			</td>
					    		</tr>

					    		<tbody id="tambah-satuan">
					    			<!-- Dianmis Form Satuan -->
					    		</tbody>
					    	</table>
					    </div>
					</div>
				</div>
			</div>

			<div class="col-md-6 nopadding" style="padding-right: 7px;">
			<div class="panel panel-headline">
  				<div class="panel-heading" style="border-bottom: 1px solid #eee;">
  					<h4 class="title-fav" style="margin-top: 0; margin-bottom: 15px;">Harga Barang</h4>
  				</div>
  				<div class="panel-body">
  					<div class="form-group col-md-12">
				    	<label>Harga Dasar</label>
				      	<input type="number" class="form-control" required="" value="<?php echo $detail['hargadasar'] ?>" id="hargadasar" name="harga" placeholder="Harga Dasar">
				    </div>
				    <div class="form-group col-md-12">
				    	<label>Harga Jual Barang/Jasa</label>
				    	<table class="table">
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
				    <div class="form-group col-md-12">
				    	<label>Kontrol Stok ?</label>
				    	<div class="radio">
					    	<label><input type="radio" name="kontrol" disabled
					    	<?php if($detail['kontrolstok']=="1"){echo"checked";} ?> required="">Ya</label> &nbsp;&nbsp;&nbsp;
					    	<label><input type="radio" name="kontrol" disabled 
					    	<?php if($detail['kontrolstok']=="0"){echo"checked";} ?> required="">Tidak</label>
				    	</div>
				    </div>
				    <div  class="form-group col-md-12">
				    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
				    	<a href="<?php echo base_url(); ?>barang" class="btn btn-warning"><span class="fa fa-list"></span> Daftar Barang</a>
				    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
					</div>
				  	</div>
					<?php echo form_close(); ?>
  				</div>
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


	// Proses Jquery Multi form satuan
	$("#form-satuan").hide();
	
	$("#add-form-satuan").click(function() {
		$("#tambah-satuan").html("<tr>" + $("#tambah-satuan").html() + "</tr>" + "<tr>" + $("#form-satuan").html() + "</tr>");
	});

	$("#riset-satuan").click(function() {
		$("#tambah-satuan").html("");
		$(".data-satuan").html("");
		$("#form-satuan").show();
	});
	// End Multi form Satuan
	
</script>