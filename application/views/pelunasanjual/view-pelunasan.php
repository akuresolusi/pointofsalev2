<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	        <a href="<?php echo base_url(); ?>pelunasanjual">Data Pelunasan</a>
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
					    	<label>Kode Pelunasan</label>
					      	<p>20180504011432</p>
					</div>	
					<div class="form-group col-md-4">
				    	<label>Nama Supplier</label> 
				    	<p>Agus Setiawan</p>
					</div>
					<div class="col-md-5">
					    <span id="sub-total">Total <span class="indigo">Rp. 55000000</span></span></span>
					</div>
					   
				</div>
				</div>
			</div>
		<div class="panel panel-default">
		    	<div class="panel-body">
		
					  	<div class="form-group">
					    <div class=" form-group col-md-6">
					  		<label>Alamat</label>
					  		<p>Medan</p>
					  	</div>
					  	<div class="form-group col-md-4" style="padding: 0;">
						    <div class="col-sm-12">
						    	<label>Tgl Bayar</label>
							      <p>04 May 2018</p>
							</div>
						</div>
					  	<div class="col-md-12">
					  		<table class="table table-striped">
						    <thead>
						      	<th>No. Faktur</th>
						      	<th>Tgl Faktur</th>
						      	<th>Syarat Bayar</th>
						      	<th>Nilai Faktur</th>
						      	<th>Sisa Hutang</th>
						        </thead>
						    <tbody>
						    	<tr>
						    		<td>FB-1</td>
						    		<td>05 Apr 2018</td>
						    		<td>Tempo 7</td>
						    		<td>Rp 5250</td>
						    		<td>Rp 5250</td>
						    	</tr>
						    	<tr>
						    		<td>FB-2</td>
						    		<td>05 Apr 2018</td>
						    		<td>Tempo 7</td>
						    		<td>Rp 5250</td>
						    		<td>Rp 5250</td>
						    	</tr>
						    </tbody>
						  </table>
					  		<div class="col-md-5" style=" margin-bottom: 20px;">
					  			<div class="row d">
					  				<span id="d-title">Metode Bayar</span>	
					  				<p>CASH</p>
					  			</div>
					  			<div class="row d">
						  			<label>Catatan</label>	
						  			<p>Empty</p>
						  		</div>
					  		</div>
					  		<div class="col-md-6" style="float: right;">
					  			<div class="row d">
					  				<span id="d-title"> Sub Total</span>	
					  				<span id="sub-number">Rp. 0</span></span>	
					  			</div>
					  			<div class="row d">
					  				<span id="d-title">Biaya Lainnya</span>	
					  				<span id="sub-number">Rp. 0</span>	
					  			</div>
					  			<div class="row d">
					  				<span id="d-title"> Grand Total</span>	
					  				<input type="hidden" value="0" id="grand" />
					  				<span id="sub-number">Rp. 0</span>	
					  			</div>
					  			<div class="row d">
					  				<span id="d-title">Jumlah Bayar</span>	
					  				<span id="sub-number">Rp. 0</span>	
					  			</div>
					  		</div>

					  		<div  class="form-group col-md-12" style="padding-left: 0;">
					    	<a href="<?php echo base_url(); ?>pelunasanjual" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Pelunasan Penjualan</a>
						</div>
					  	</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
		