<!-- MAIN CONTENT -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.css">
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
					<div class="form-group col-md-3">
					    	<label>Pelanggan</label> 
					    	<p>#</p>
					    </div>
					    <div class="form-group col-md-4">
					    	<label>Alamat</label>
					      	<p>#</p>
					    </div>
					<div class="col-md-5">
					    <span id="sub-total">Total <span class="indigo">Rp. 10.000</span></span>
					</div>
				</div>
				</div>
			</div>
		<div class="panel panel-default">
		    	<div class="panel-body">
		    		<div class="form-group">
					    <div class=" form-group col-md-4">
					  		<label>Kategori</label>
					  		<p>#</p>
					  	</div>
					    <div class=" form-group col-md-4">
					  		<label>Syarat Bayar</label>
					  		<p>#</p>
					  	</div>
					    <div class=" form-group col-md-4">
					  		<label>Tanggal Faktur</label>
					  		<p></p>
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
					  			</tr>
					  			<!-- END THEAD -->
					  			<tr>
					  				<td style="padding-left: 0px;">
					  					<p>#</p>
					  				</td>
					  				<td style="padding-left: 0px;">
					  					<p>#</p>
					  				</td>
					  				<td>
					  					<p>#</p>
					  				</td>
					  				<td>
					  					<p>#</p>
					  				</td>
					  				<td style="text-align: right;">
					  					<p>#</p>
					  				</td>
					  			</tr>
					  			<!-- TBODY -->
					  			<tbody id="list_items"></tbody>
					  			<!-- TBODY -->
					  		</table>
					  		
					  		<div class="col-md-6" style="padding-left: 0; margin-bottom: 20px;">
					  			<label>Catatan</label>
					  			<p>Catatan</p>
					  		</div>
					  		<div class="col-md-5" style="float: right;">
					  				<div class="row d">
						  				<span id="d-title">TOTAL</span>	
						  				<span id="sub-number">0</span>	
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">BIAYA LAINYA</span>	
						  				<span id="sub-number">0</span>	
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">DISKON</span>	
						  				<span id="sub-number">0</span>
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">PAJAK</span>
						  				<span id="sub-number">0</span>
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">GRAND TOTAL</span>	
						  				<span id="sub-number">0</span>	
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