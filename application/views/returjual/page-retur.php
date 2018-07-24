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
				  		<a href="<?php echo base_url(); ?>returjual/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
				 	 </div>	
						<table id="data" class="table table-striped table-hover table-bordered">
							<thead>
								<th width="10">No</th>
								<th>No. Retur</th>
								<th>Tgl. Retur</th>
								<th>No. Faktur</th>
								<th>Pelanggan</th>
								<th>Total Retur</th>
								<th>Uang Kembali</th>
								<th width="10"></th>
							</thead>
							<tbody>
							<?php
								$i=0;
								foreach ($list as $value) {
									$i++;
									$faktur = $this->penjualan_model->detail_penjualan($value['faktur']);
									$pelanggan = $this->master_model->detail_pelanggan($faktur['idpelanggan']);
									$total = $this->returjual_model->total_retur($value['id']);
									$tretur = 0;
									foreach ($total as $item) {
										$tretur = ($item['qty'] * $item['harga']) + $tretur;
									}
									$tretur = $tretur + $value['uang_kembali'];
									echo"
										<tr>
											<td>".$i."</td>
											<td>".$value['id']."</td>
											<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
											<td>FB-".$value['faktur']."</td>
											<td>".$pelanggan['nama']."</td>
											<td>Rp ".$tretur."</td>
											<td>Rp ".$value['uang_kembali']."</td>
											<td style='text-align: left;'>
												<div class='dropdown'>
											        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
											        <ul class='dropdown-menu pull-right'>
											            <li><a href='#'><span class='fa fa-eye'></span> Lihat</a></li>
											            <li><a href='".base_url('returjual/hapus?id='.$value['id'])."'><span class='fa fa-trash'></span> Hapus</a></li>
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