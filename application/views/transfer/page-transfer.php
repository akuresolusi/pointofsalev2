<!-- MAIN CONTENT -->
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	    	<span><?php echo $title; ?></span>
	    </li>
	</ul>
</div>
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-headline">
			<div class="panel-body">
				<div class="container-fluid nopadding">
				  		<a href="<?php echo base_url(); ?>transfer/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
				 	 </div>	
				<table id="data" class="table table-striped table-hover table-bordered">
					<thead>
						<th width="10">No</th>
						<th>No. Transaksi</th>
						<th>Tanggal/Jam</th>
						<th>Dari</th>
						<th>Tujuan</th>
						<th>Keterangan</th>
						<th>User</th>
						<th width="10"></th>
					</thead>
					<tbody>
						<td>1</td>
						<td>TH001</td>
						<td>21/07/2018 - 12.00</td>
						<td>Outlet</td>
						<td>Gudang</td>
						<td>Bla bla</td>
						<td>Agus Setiawan</td>
						<td style='text-align: left;'>
							<div class='dropdown'>
						        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Tindakan'><span class='fa fa-gear'></span></a>
						        <ul class='dropdown-menu pull-right'>
						        	<li><a href='#'><span class='fa fa-edit'></span> Edit Data</a></li>
						            <li><a href='#'><span class='fa fa-eye'></span> Lihat Data</a></li>
						            <li><a href='#'><span class='fa fa-trash'></span> Hapus Data</a></li>
						        </ul>
					    	</div>
						</td>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->