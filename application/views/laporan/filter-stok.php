<!-- MAIN CONTENT -->
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>
	    <li>
	        <a href="<?php echo base_url(); ?>laporan/produk">Laporan Produk</a>
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
					    	<label>Lokasi</label> 
					    	<select class="form-control">
					    		<option>Semua Toko</option>
					    		<option>Toko 1</option>
					    	</select>
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
						<th style="text-align: left;">Nama Barang</th>
						<th style="text-align: right;">Stok Masuk</th>
						<th style="text-align: right;">Stok Keluar</th>
						<th style="text-align: right;">Stok Ahir</th>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td><a href="#" data-toggle="tooltip" data-placement="top" title="Detail Barang">Kulkas Sharp Side Bye Side SJIF85PBSL</a></td>
							<td align="right">10</td>
							<td align="right">5</td>
							<td align="right">5</td>
						</tr>
						<tr>
							<td colspan="2"><b>Grand Total</b></td>
							<td align="right"><b>10</b></td>
							<td align="right"><b>5</b></td>
							<td align="right"><b>5</b></td>
						</tr>
					</tbody>
				</table>
				<a href="<?php echo base_url(); ?>laporan/produk" class="btn btn-warning"><span class="fa fa-arrow-left"></span> Kembali</a>
				<a href="#" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
			</div>
		</div>
	</div>
</div>
		

<!-- END MAIN CONTENT -->