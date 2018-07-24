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
				  		<a href="<?php echo base_url(); ?>pelunasanjual/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
				 	 </div>	
						<table id="data" class="table table-striped table-hover table-bordered">
							<thead>
								<th width="10">No</th>
								<th>Kode Pelunasan</th>
								<th>Tanggal</th>
								<th>Pelanggan</th>
								<th>Jumlah Bayar</th>
								<th>Biaya Lainya</th>
								<th>Cara Bayar</th>
								<th width="10"></th>
							</thead>
							<tbody>
							<?php
								$i=0;
								foreach ($list as $value) {
									$pelanggan = $this->master_model->detail_pelanggan($value['pelanggan']);
									$i++;
									if($value['metode'] == 1){
										$metode = "Cash";
									}else if($value['metode'] == 2){
										$metode = "Bank Transfer";
									}else if($value['metode'] == 3){
										$metode = "Cheque";
									}else if($value['metode'] == 4){
										$metode = "Credit Card";
									}else if($value['metode'] == 5){
										$metode = "Debit Card";
									}
									echo"
									<tr>
										<td>".$i."</td>
										<td>".$value['kode']."</td>
										<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
										<td>".$pelanggan['nama']."</td>
										<td>Rp ".$value['jumlah']."</td>
										<td>Rp ".$value['lainya']."</td>
										<td>".$metode."</td>
										<td style='text-align: center;''>
										<div class='dropdown'>
									        <a href='#'' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='".base_url()."pelunasanjual/details'><span class='fa fa-eye'></span> Lihat Data</a></li>
									            <li><a href='".base_url()."pelunasanjual/proses_hapus?kode=".$value['kode']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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