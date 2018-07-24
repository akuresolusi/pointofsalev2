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
			  		<a href="<?php echo base_url(); ?>metodebayar/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
			  	</div>
						<table id="data" class="table table-striped table-hover table-bordered">
							<thead>
								<th width="10">No</th>
								<th>Nama Metode</th>
								<th>Metode</th>
								<th>No Rek</th>
								<th>Kartu</th>
								<th>No Cek</th>
								<th>Atas Nama</th>
								<th>Bank</th>
								<th width="10"></th>
							</thead>
							<tbody>
							<?php
								$i=0;
								foreach ($list as $value) {
									$i++;
									$bank = $this->master_model->detail_bank($value['idbank']);
									$norek = $value['norek'] ;
									$kartu = $value['kartu'] ;
									$nocek = $value['nocek'] ;
									$an = $value['atasnama']  ;
									$bank = $bank['bank'];
									if($norek == "" ){ $norek = "-"; }
									if($kartu == "" ){ $kartu = "-"; }
									if($nocek == "" ){ $nocek = "-"; }
									if($an 	  == "" ){ $an 	  = "-"; }
									if($bank  == "" ){ $bank  = "-"; }
									echo"
									<tr>
										<td>".$i."</td>
										<td>".$value['nama']."</td>
										<td>".$value['metode']."</td>
										<td>".$norek."</td>
										<td>".$kartu."</td>
										<td>".$nocek."</td>
										<td>".$an."</td>
										<td>".$bank."</td>
										<td style='text-align: center;''>
										<div class='dropdown'>
									        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='#'><span class='fa fa-eye'></span> Lihat Data</a></li>
									            <li><a href='metodebayar/edit?id=".$value['id']."'><span class='fa fa-edit'></span> Edit Data</a></li>
									            <li><a href='metodebayar/proses_hapus?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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