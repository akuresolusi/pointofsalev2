<!-- MAIN CONTENT -->
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>
	    <li>
	        <a href="<?php echo base_url(); ?>laporan/penjualan">Laporan Penjualan</a>
	    </li>	
	    <li>
	    	<span><?php echo $title; ?></span>
	    </li>
	</ul>
</div>
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-headline">
			<div class="panel-heading">
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th width="10">No</th>
						<th>Nama Barang</th>
						<th>Pelanggan</th>
						<th>Tgl Penerimaan</th>
						<th>Jatuh Tempo</th>
						<th>Sub Total</th>
						<th>Disc</th>
						<th>Total</th>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>FB-3</td>
							<td>Firman</td>
							<td>05 Apr 2018</td>
							<td>10 Apr 2018</td>
							<td align="right">Rp. 22.829.291</td>
							<td align="right">0%</td>
							<td align="right">Rp. 22.829.291</td>
						</tr>
						<tr>
							<td colspan="7"><b>Grand Total</b></td>
							<td align="right"><b>Rp. 22.829.291</b></td>
						</tr>
					</tbody>
				</table>
				<a href="<?php echo base_url(); ?>laporan/penjualan" class="btn btn-warning"><span class="fa fa-arrow-left"></span> Kembali</a>
				<a href="#" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
			</div>
		</div>
	</div>
</div>
		

<!-- END MAIN CONTENT -->