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
				  		<a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal">
						    <span class="fa fa-plus"></span> Tambah Data</button></a>
				 	 </div>	
					<div class="table-responsive">
							<table id="data" class="table table-striped table-hover table-bordered">
								<thead>
									<th width="10">No</th>
									<th>Bank</th>
									<th>Nomor</th>
									<th>Nama</th>
									<th width="10"></th>
								</thead>
								<tbody>
								<?php
									$i=0;
									foreach ($list as $value) {
										$i++;
										echo"
										<tr>
											<td>".$i."</td>
											<td>".$value['bank']."</td>
											<td>".$value['nomor']."</td>
											<td>".$value['nama']."</td>
											<td style='text-align: center;'>
											<div class='dropdown'>
										        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
										        <ul class='dropdown-menu pull-right'>
										            <li><a href='#' value_id='".$value['id']."' 
													value_bank='".$value['bank']."' 
													value_nomor='".$value['nomor']."'
													value_nama='".$value['nama']."'	
													class='edit' data-toggle='modal' data-target='#myModaledit' 
												><span class='fa fa-edit'></span> Edit Data</a></li>
										            <li><a href='".base_url()."rekening/hapus_rekening?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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
		</div>
		

			<!-- END MAIN CONTENT -->

<!-- modal Form input -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

	  <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Tambah <?php echo $title; ?></h4>
	    </div>
	    <div class="modal-body">
	      <div class="container-fluid">
	      	<?php echo form_open('rekening/tambah_rekening'); ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Bank</label>
			  		<select class="form-control" name="bank" required="">
			  			<?php
			  				foreach ($list_bank as $value) {
			  					echo"<option value='".$value['bank']."'>".$value['bank']."</option>";
			  				}
			  			?>	
			  		</select>
			  	</div>
			  	<div class=" form-group">
			  		<label>nomor</label>
			  		<input type="text" name="nomor" class="form-control" placeholder="Nomor Rekening" required="">
			  	</div>
			  	<div class=" form-group">
			  		<label>Atas Nama</label>
			  		<input type="text" name="nama" class="form-control" placeholder="Nama" required="">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
				<?php echo form_close(); ?>
	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
	    </div>
	  </div>
	  
	</div>
</div>

<!-- modal Form Edit -->
<div class="modal fade" id="myModaledit" role="dialog">
	<div class="modal-dialog">

	  <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Perbarui <?php echo $title; ?></h4>
	    </div>
	    <div class="modal-body">
	      <div class="container-fluid">
	      	<?php echo form_open('rekening/edit_rekening'); ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Bank</label>
			  		<input type="hidden" name="id" id="id_input">
			  		<select class="form-control" name="bank" id="bank_input" required="">
			  			<?php
			  				echo"<option value=''>#Pilih Bank</option>";
			  				foreach ($list_bank as $value) {
			  					echo"<option value='".$value['bank']."'>".$value['bank']."</option>";
			  				}
			  			?>	
			  		</select>
			  	</div>
			  	<div class=" form-group">
			  		<label>Nomor</label>
			  		<input type="text" name="nomor" id="nomor_input" class="form-control" placeholder="Nomor Rekening" required="">
			  	</div>
			  	<div class=" form-group">
			  		<label>Atas Nama</label>
			  		<input type="text" name="nama" id="nama_input" class="form-control" placeholder="Nama" required="">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
			<?php echo form_close(); ?>
	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
	    </div>
	  </div>
	  
	</div>
</div>


<script type="text/javascript">
	$(".edit").click(function(){
		$("#id_input").val($(this).attr('value_id'));
		$("#bank_input").val($(this).attr('value_bank'));
		$("#nomor_input").val($(this).attr('value_nomor'));
		$("#nama_input").val($(this).attr('value_nama'));
	});
</script>