<!-- MAIN CONTENT -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.css">
<!-- <?php echo form_open(base_url('penjualan/selesai')); ?> -->
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	        <a href="<?php echo base_url(); ?>penjualan">Data Penjualan</a>
	    </li>	
	    <li>
	    	<span><?php echo $title; ?></span>
	    </li>
	</ul>
</div>
<div class="main-content">
	<div class="container-fluid">
			<div class="panel panel-default panel-title">
				<div class="panel-body title-pos body-blue">
					<div class="col-md-12 nopadding">
					<div class="form-group col-md-4">
					    <label>Pelanggan</label>
					    <input type="text" class="form-control" name="" readonly="">
					</div>
					<div class="form-group col-md-8">
				    	<label>Alamat</label>
				    	<input type="text" class="form-control" readonly="">
				    </div>
				    
				</div>
				</div>
			</div>
		<div class="panel panel-default">
		    	<div class="panel-body">
						<div class="form-group col-md-4">
				    	<label>Kategori</label>
				    	<input type="text" class="form-control" name="">
				    </div>
				    <div class="form-group col-md-4">
				    	<label>Syarat Bayar</label>
				    	<select class="form-control" name="syaratbayar" required="">
				    		<?php
				    		foreach ($list_syarat_bayar as $value) {
				    			echo"<option value='".$value['id']."'>".$value['nama']."</option>";
				    		}
				    		?>
				    	</select>
				    </div>
				    <div class="form-group col-md-4">
				    	<label>Tanggal Faktur</label>
				      	<input type="date" name="tanggal" required="" value="<?php echo date('Y-m-d') ?>" class="form-control">
				    </div>
					  	<div class="col-md-12">
					  		<table class="table" id="tb" style="margin-top: 20px">
					  			<!-- THEAD -->
					  			<tr>
					  				<th width="150">Kode</th>
					  				<th>Nama Barang</th>
					  				<th width="100">Qty</th>
					  				<th width="200">Harga</th>
					  				<th width="200">Sub Total</th>
					  				<th width="20"></th>
					  			</tr>
					  			<!-- END THEAD -->
					  			<tr>
					  				<td style="padding-left: 0px;">
					  					<input type="text" name="" class="form-control">
					  				</td>
					  				<td style="padding-left: 0px;">
					  					<input type="text" class="form-control">
					  				</td>
					  				<td>
					  					<input type="number" name="" id="qty" min="1" class="form-control">
					  				</td>
					  				<td>
					  					<input type="number" min="0" class="form-control" placeholder="Rp." style="text-align: right;">
					  				</td>
					  				<td style="text-align: right; font-weight: bolder;">
					  					Rp. <span id="subtotal"></span>
					  				</td>
					  				<td>
					  					<a id="tambah-item"><span class="lnr lnr-plus-circle" style="font-size: 25px; color:#3498DB; cursor: pointer;"></span></a>
					  				</td>
					  			</tr>
					  			<!-- TBODY -->
					  			<tbody id="list_items"></tbody>
					  			<!-- TBODY -->
					  		</table>
					  		
					  		<div class="col-md-6" style="padding-left: 0; margin-bottom: 20px;">
					  			<label>Catatan</label>
					  			<textarea class="form-control" style="height: 185px;" name="catatan"></textarea>
					  		</div>
					  		<div class="col-md-5" style="float: right;">
					  				<div class="row d">
						  				<span id="d-title">TOTAL</span>	
						  				<span id="sub-number">
						  					<input type="text" disabled="" id="total"  class="form-control" style="width: 240px">
						  				</span>	
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">BIAYA LAINYA</span>	
						  				<span id="sub-number">
						  					<input type="number" id="lainnya" name="lainnya" placeholder="Rp" class="form-control" style="width: 240px;text-align: right;">
						  				</span>	
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">DISKON</span>	
						  				<span id="sub-number">
						  					<input type="number" id="diskon" name="diskon" class="form-control" 
						  					style="width: 240px; text-align: right;" 
						  					placeholder="Rp.">
						  				</span>
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">PAJAK</span>
						  				<span id="sub-number">
						  					<input type="text" id="hargapajak"  class="form-control" 
						  					style="width: 150px; margin-left:  10px; text-align: right;" 
						  					placeholder="Rp." disabled>
						  				</span>	
						  				<span id="sub-number">
						  					<input type="number" min="0" max="100"  class="form-control" 
						  					style="width: 80px;" id="pajak" name="pajak" placeholder="%">
						  				</span>
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">GRAND TOTAL</span>	
						  				<span id="sub-number">
						  					<input type="text" disabled="" id="grandtotal" class="form-control" style="width: 240px">
						  				</span>	
						  			</div>
					  		</div>

					  		<div  class="form-group col-md-12" style="padding-left: 0;">
					    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
					    	<a href="<?php echo base_url(); ?>penjualan" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Penjualan</a>
					    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;"> <span class="fa fa-remove"></span> Batal</button>
						</div>
					  	</div>
					  </div>
			    </div>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>