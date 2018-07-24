<!-- MAIN CONTENT -->
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>
	    <li>
	        <a href="<?php echo base_url(); ?>laporan/etc">Laporan Lainnya</a>
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
				<div class="container nopadding">
					<form>
						<div class="form-group col-md-3">
					    	<label>Pelanggan</label> 
					    	<input type="text" required="" class="form-control" placeholder="Nama Pelanggan">
					    </div>
						<div class="form-group col-md-3">
					    	<label>Dari Tanggal</label> 
					    	<input type="date" required="" class="form-control">
					    </div>
					     
					    <div class="form-group col-md-3">
					    	<label>Ke Tanggal</label>
					    	<input type="date" required="" class="form-control">
					    </div>
					    <div class="form-group col-md-1">
					    	<label>&nbsp;</label>
					    	<button type="submit" class="btn btn-primary"><span class="fa fa-filter"></span> Filter</button>
					    </div>
				    </form>
				</div>
			</div>
		</div>
		<div class="panel panel-headline">
			<div class="panel-heading">
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th width="10">No</th>
						<th>No. Faktur</th>
						<th>Pelanggan</th>
						<th>Tgl. Penjualan</th>
						<th>Jatuh Tempo</th>
						<th>Sisa Hari</th>
						<th>Nilai Faktur</th>
						<th>Sisa Hutang</th>
					</thead>
					<tbody>
						<tr>

						</tr>
						<tr>
							<td colspan="7"><b>Grand Total</b></td>
							<td align="right"><b>Rp. 0</b></td>
						</tr>
					</tbody>
				</table>
				<a href="<?php echo base_url(); ?>laporan/etc" class="btn btn-warning"><span class="fa fa-arrow-left"></span> Kembali</a>
				<a href="#" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
			</div>
		</div>
	</div>
</div>
		

<!-- END MAIN CONTENT -->