<!-- MAIN CONTENT -->
<script src="<?php echo base_url(); ?>assets/js/dropzone.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dropzone.min.css">
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
		<div class="panel panel-default panel-title">
			<div class="panel-body title-pos">
				<div class="container">
					<div class="col-md-6" style="padding: 0;">
						<span id="sub-title">Produk</span>
						<h3 class="page-title"><?php echo $title; ?></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-headline">
			<div class="panel-body">
				<a href="#" class="btn btn-default" style="margin-bottom: 20px;"><span class="fa fa-download"></span> Download Template</a>
				<div class="image_upload_div">
					<form action="upload.php" class="dropzone">
					</form>
				</div> 	
				<div class="col-md-12 nopadding">
					<a href="<?php echo base_url(); ?>barang" class="btn btn-warning" style="margin-top: 20px;""><span class="fa fa-list"></span> Daftar Barang</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->