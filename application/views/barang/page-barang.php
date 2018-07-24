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
		<div class="container">

			<div class="panel panel-headline">
				  <div class="panel-body">
				  	<div class="container-fluid nopadding">
				  		<a href="<?php echo base_url(); ?>barang/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
				  	</div>
					<table id="data" class="table table-striped table-hover table-bordered">
						<thead>
							<th width="10">No</th>
							<th>Kategori</th>
							<th>Nama Barang</th>
							<th>Satuan</th>
							<th>Modal</th>
							<th>Stok</th>
							<th>Harga Dasar</th>
							<th>Status</th>
							<th width="10"></th>
						</thead>
						<tbody>
						<?php
							$i=0;
							foreach ($list as $value) {
								$i++;
								$kategori = $this->master_model->detail_kategori($value['idkategori']);
								if($value['status'] == "Aktif"){
									$status = "<li><a href='barang/off_barang?id=".$value['id']."'><span class='fa fa-close'></span> Tidak Aktif</a></li>";
								}else{
									$status = "<li><a href='barang/on_barang?id=".$value['id']."'><span class='fa fa-check'></span> Aktif</a></li>";
								}
								if($value['status'] =="Aktif"){
									$label = "<span class='label label-success'>".$value['status']."</span>";
								}else{
									$label = "<span class='label label-danger'>".$value['status']."</span>";
								}
								$jlhfoto = $this->barang_model->jlh_foto($value['id']);
								$stok = $value['stok'];
								if($stok < 1){ $stok = "-"; }
								echo"
								<tr>
									<td>".$i."</td>
									<td>".$kategori['kategori']."</td>
									<td>".$value['nama']."</td>
									<td>Unit</td>
									<td>".$value['modal']."</td>
									<td align='center'>".$stok."</td>
									<td align='center'>Rp ".$value['hargadasar']."</td>
									<td align='center'>".$label."</td>
									<td style='text-align: left;'>
										<div class='dropdown'>
									        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Tindakan'><span class='fa fa-gear'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='barang/lihatdata?id=".$value['id']."'><span class='fa fa-eye'></span> Lihat Data</a></li>
									            <li><a href='barang/foto_barang?id=".$value['id']."'><span class='fa fa-image'></span> Upload Foto</a></li>
									            ".$status."
									            <li><a href='barang/edit?id=".$value['id']."'><span class='fa fa-edit'></span> Edit Data</a></li>
									            <li><a href='barang/hapus_barang?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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