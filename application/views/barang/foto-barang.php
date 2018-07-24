<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>
	    <li>
	        <a href="<?php echo base_url(); ?>barang">Data Barang</a>
	    </li>
	    <li>
	    	<span><?php echo $title; ?></span>
	    </li>
	</ul>
</div>
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-default">
	    	<div class="panel-body">
			  	<div class="form-group">
			  		<?php echo form_open_multipart('barang/upload_foto?id='.$detail['id']); ?>
				  	<div class="form-group col-md-6">
				  		<label>Upload Foto "<?php echo $detail['nama']; ?>"</label>
				  		<input type="file" name="foto" required="true" class="form-control" >
				  	</div>
				  	<div class="form-group col-md-3">
				  		<label>&nbsp;</label>
				  		<button type="submit" value="UPLOAD" class="form-control btn btn-primary" ><span class="fa fa-upload"> </span> Upload</button>
				  	</div>
				  	<?php echo form_close(); ?>
				    <div  class="form-group col-md-3">
				    	<label>&nbsp;</label>
				    	<a href="<?php echo base_url(); ?>barang" class="btn btn-warning form-control" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Barang</a>
					</div>
			  	</div>
		    </div>
		</div>


		<div class="panel panel-default">
	    	<div class="panel-body">
			  	<div class="form-group">
				<?php
					foreach ($list_foto as $value) {
						echo"
						<div  class='form-group col-md-3'>
							<img src='..\assets\\foto\\".$value['file']."' class='img-thumbnail'>
							<a href='".base_url()."barang/hapus_foto?id=".$detail['id']."&idfoto=".$value['id']."' class='btn btn-danger form-control'><label><span class='fa fa-trash'></span> Hapus</label></a>
						</div>";
					}
				?>
			  	</div>
		    </div>
		</div>

	</div>			
</div>