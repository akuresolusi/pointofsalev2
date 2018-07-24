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
						<table id="data" class="table table-striped table-hover table-bordered">
							<thead>
								<th width="10">No</th>
								<th>Kategori Harga</th>
								<th>Persen</th>
								<th width="10"></th>
							</thead>
							<tbody>
							<?php
								$i=0;
								foreach ($list as $value) {
									$i++;
									echo"
									<tr>
										<td>".$i.".</td>
										<td>".$value['kategori']."</td>
										<td>".$value['persen']." %</td>
										<td style='text-align: center;'>
											<div class='dropdown'>
										        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
										        <ul class='dropdown-menu pull-right'>
										            <li><a href='#' value_id='".$value['id']."' 
													value_kategori='".$value['kategori']."''
													value_persen='".$value['persen']."'' 
													class='edit' data-toggle='modal' data-target='#myModaledit' 
												><span class='fa fa-edit'></span> Edit Data</a></li>
										            <li><a href='".base_url()."kategorih/hapus_kategori_harga?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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

<!-- Modal Form input -->
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
	      	<?php echo form_open('kategorih/tambah_kategori_harga'); ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Kategori Harga</label>
			  		<input type="text" name="kategori" class="form-control" placeholder="Kategori Barang" required="">
			  	</div>
			  	<div class=" form-group">
			  		<label>Persen</label>
			  		<input type="number" name="persen" min="0" class="form-control" placeholder="Persen">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
			<?php echo form_close() ?>
	      </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
	    </div>
	  </div>
	  
	</div>
</div>

<!-- Modal form Edit -->
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
	      	<?php echo form_open('kategorih/edit_kategori_harga'); ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Kategori Harga</label>
			  		<input type="hidden" name="id" id="id_input">
			  		<input type="text" name="kategori" id="kategori_input" class="form-control" placeholder="Kategori Barang" required="">
			  	</div>
			  	<div class=" form-group">
			  		<label>Persen</label>
			  		<input type="number" name="persen" min="0" id="persen_input" class="form-control" placeholder="Persen">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
				<?php echo form_close() ?>
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
		$("#kategori_input").val($(this).attr('value_kategori'));
		$("#persen_input").val($(this).attr('value_persen'));
	});
</script>