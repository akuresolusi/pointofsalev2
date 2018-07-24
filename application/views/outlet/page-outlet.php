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
			  		<a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Outlet</button></a>
			  	</div>
				<table id="data" class="table table-striped table-bordered">
					<thead>
						<th width="10">No</th>
						<th width="300">Nama Outlet</th>
						<th width="350">Alamat</th>
						<th width="150">No Handphone</th>
						<th>Status</th>
						<th width="10"></th>
					</thead>
					<tbody>
						<?php
						$i=0;
						foreach ($list as $value) {
							$i++;
							if($value['status'] == "Aktif"){
								$status = "<li><a href='outlet/off_outlet?id=".$value['id']."'><span class='fa fa-close'></span> Tidak Aktif</a></li>";
							}else{
								$status = "<li><a href='outlet/on_outlet?id=".$value['id']."'><span class='fa fa-check'></span> Aktif</a></li>";
							}
							if($value['status'] =="Aktif"){
								$label = "<span class='label label-success'>".$value['status']."</span>";
							}else{
								$label = "<span class='label label-danger'>".$value['status']."</span>";
							}
							echo"
							<tr>
								<td>".$i."</td>
								<td>".$value['outlet']."</td>
								<td>".$value['alamat']."</td>
								<td>".$value['nohp']."</td>
								<td align='center'>".$label."</td>
								<td style='text-align: center;'>
									<div class='dropdown'>
								        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
								        <ul class='dropdown-menu pull-right'>
								            <li><a href='#' value_id='".$value['id']."' 
										value_outlet='".$value['outlet']."' value_nohp='".$value['nohp']."'
										value_alamat='".$value['alamat']."' class='edit' data-toggle='modal' data-target='#myModaledit' 
										><span class='fa fa-edit'></span> Edit Data</a></li>
										".$status."
								            <li><a href='outlet/hapus_outlet?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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

<!-- MODAL TAMBAH OUTLET -->
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
	      	<?php echo form_open('outlet/tambah_outlet'); ?>
			  	<div class=" form-group">
			  		<label>Nama Outlet</label>
			  		<input type="text" class="form-control" name="outlet" placeholder="Nama Outlet" required="">
			  	</div>
			  	<div class=" form-group">
			  		<label>No Handphone</label>
			  		<input type="number" class="form-control" name="nohp" placeholder="No Handphone" required="">
			  	</div>
			  	<div class=" form-group">
			  		<label>Alamat</label>
			  		<textarea class="form-control" name="alamat" required=""></textarea>
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
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

<!-- EDIT OUTLET -->
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
	      	<?php echo form_open('outlet/edit_outlet'); ?>
			  	<div class=" form-group">
			  		<label>Nama Outlet</label>
			  		<input type="hidden" name="id" value="" id="id_input" required="">
			  		<input type="text" class="form-control" placeholder="Nama Outlet" name="outlet" id="outlet_input" required="">
			  	</div>
			  	<div class=" form-group">
			  		<label>No Handphone</label>
			  		<input type="number" class="form-control" placeholder="No Handphone" name="nohp" id="nohp_input">
			  	</div>
			  	<div class=" form-group">
			  		<label>Alamat</label>
			  		<textarea class="form-control" name="alamat" id="alamat_input"></textarea>
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
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
</div>

<script type="text/javascript">
	$(".edit").click(function(){
		$("#id_input").val($(this).attr('value_id'));
		$("#outlet_input").val($(this).attr('value_outlet'));
		$("#nohp_input").val($(this).attr('value_nohp'));
		$("#alamat_input").val($(this).attr('value_alamat'));
	});
</script>