<!-- MAIN CONTENT -->
<?php echo form_open(''); ?>
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	        <a href="<?php echo base_url(); ?>transfer">Data Transfer Barang</a>
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
				    	<label>Dari</label> 
				    	<input type="text" required="" class="form-control" readonly="">
				    </div>
				    <div class="form-group col-md-3">
				    	<label>Tujuan</label> 
				    	<select class="form-control " name="syaratbayar" required="">
				    		<option value="" disabled selected class="hide">- Pilih Tujuan Kirim -</option>
					    	<option>Gudang</option>
					    </select>
				    </div>
				    <div class="form-group col-md-2" style="padding: 0; margin-bottom: 10px;">
					    <div class="col-sm-12 controls">
					    	<label>Tanggal</label>
					      <div class="input-group">
					      	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
						    <input type="date" name="tanggal" class="form-control" id="inputfield2" value="<?php echo date('Y-m-d'); ?>" required="">
						  </div>
						</div>
				  	</div>
				    <div class="col-md-4">
				    	<input type="hidden" id="faktur" name="faktur" value="" required="">
			    		<span id="sub-total">No. <span class="indigo">TH-001</span></span>
				    </div>
					
				</div>
			</div>
		</div>
		<div class="panel panel-default">
		    	<div class="panel-body">
					
					  	<div class="form-group">
				  		
					    
				      	
					  	<div class="col-md-12">
					  		<table class="table" id="tb" style="margin-top: 20px;">
					  			<!-- THEAD -->
					  			<tr>
					  				<th width="150" style="padding-left: 0px;">Kode</th>
					  				<th width="400">Nama Barang</th>
					  				<th width="50">Qty</th>
					  				<th width="60">Satuan</th>
					  				<th width="10"></th>
					  			</tr>
					  			<!-- END THEAD -->
					  			
					  			<tr>
					  				
					  				<td style="padding-left: 0px;">
					  					<input type="text" name="kode" id="kodebarang" class="form-control" placeholder="Kode Barang" >
					  				</td>
					  				<td style="padding-left: 0px;">
										<input type="text" id="namabarang" class="form-control" placeholder="Nama Barang" >
					  				</td> 
					  				<td><input type="number" id="qty" class="form-control"></td>
					  				<td>
					  					<select class="form-control">
					  						<option>Pcs</option>
					  					</select>
					  				</td>
					  				<td><a id="tambah"><span class="icon-plus" title="Tambah" style="font-size: 25px; cursor: pointer; float: right;"></span></a></td>
					  			</tr>
					  		</table>

					  		<div class="col-sm-12 nopadding">
						  		<div class="col-md-6 nopadding" style="margin-bottom: 20px;">
						  			<label>Catatan</label>
						  			<textarea class="form-control" name="catatan" style="height: 125px;" placeholder="Catatan"></textarea>
						  		</div>
					  		</div>
					  		
					  		<div  class="form-group col-md-12" style="padding-left: 0;">
					    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
					    	<a href="<?php echo base_url(); ?>transfer" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Transfer</a>
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