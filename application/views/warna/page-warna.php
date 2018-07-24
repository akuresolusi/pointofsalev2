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
								<th>Warna</th>
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
										<td>".$value['warna']."</td>
										<td style='text-align: center;'>
											<div class='dropdown'>
										        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
										        <ul class='dropdown-menu pull-right'>
										            <li><a href='#' value_id='".$value['id']."' 
												value_warna='".$value['warna']."' class='edit' data-toggle='modal' data-target='#myModaledit' 
												><span class='fa fa-edit'></span> Edit Data</a></li>
										            <li><a href='".base_url()."warna/hapus_warna?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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

<!-- Modal Form tambah -->
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
	      	<?php echo form_open('warna/tambah_warna'); ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Warna</label>
			  		<input type="text" name="warna" class="form-control" placeholder="Warna">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
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


<!-- Modal Form edit -->
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
	      	<?php echo form_open('warna/edit_warna'); ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Warna</label>
			  		<input type="hidden" name="id" id="id_input" >
			  		<input type="text" name="warna" id="warna_input" class="form-control" placeholder="Warna">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
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
		$("#warna_input").val($(this).attr('value_warna'));
	});
</script>