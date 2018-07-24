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
				  		<a href="<?php echo base_url(); ?>penjualan/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
				 	 </div>	
						<table id="data" class="table table-striped table-hover table-bordered">
							<thead>
								<th width="10">No</th>
								<th>Faktur</th>
								<th>Pelanggan</th>
								<th>Total Faktur</th>
								<th>Total Hutang</th>
								<th>Syarat Pemabayaran</th>
								<th>Tgl Faktur</th>
								<th>Jatuh Tempo</th>
								<th width="10"></th>
							</thead>
							<tbody>
							<?php
								$i=0;
								foreach ($list_penjualan as $value) {
									$pelanggan = $this->master_model->detail_pelanggan($value['idpelanggan']);
									$syaratbayar = $this->master_model->detail_syaratbayar($value['idsyaratbayar']);
									$i++;
									echo"
									<tr>
										<td>".$i."</td>
										<td>FP-".$value['faktur']."</td>
										<td>".$pelanggan['nama']."</td>
										<td></td>
										<td></td>
										<td>".$syaratbayar['nama']."</td>
										<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
										<td>".date_format(date_create($value['tempo']),'d M Y')."</td>
										<td style='text-align: center;'>
										<div class='dropdown'>
									        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='".base_url()."penjualan/details'><span class='fa fa-eye'></span> Lihat Data</a></li>
									            <li><a href='".base_url()."penjualan/edit'><span class='fa fa-edit'></span> Edit Data</a></li>
									            <li><a href='".base_url('penjualan/hapus_penjualan?faktur='.$value['faktur'])."'><span class='fa fa-trash'></span> Hapus Data</a></li>
									        </ul>
								    	</div>
										</td>
									</tr>";
								}
							?>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
		</div>
		

			<!-- END MAIN CONTENT -->