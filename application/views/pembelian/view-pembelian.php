<!-- MAIN CONTENT -->
<?php
	$subtotal = 0;
	foreach ($items as $value) {
		$subtotal = $subtotal + $value['qty'] * $value['harga'];
	}
	$total = ($subtotal + $detail['lainya']) - $detail['diskon'];
	$hpajak = ($total / 100) * $detail['pajak'];
	$gtotal = $total + $hpajak;
?>
<style>
.hide{
	display: none;
}
option{
	color: #000;
}
</style>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.css">
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	        <a href="<?php echo base_url(); ?>pembelian">Data Pembelian</a>
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
					<div class="col-md-6">
						<h3 id="desc" style="float: left;"><span class="light-blue">No. Faktur : <span class="indigo">FB-<?php echo $detail['faktur'] ?></span></span></h3>
					</div>
					<div class="col-md-6">
					    <h3 id="desc"><span class="red1">Belum Dibayar</span></h3>
					</div>
				</div>
			</div>
			<div class="panel panel-default panel-title">
				<div class="panel-body title-pos body-blue">
					<div class="col-md-12 nopadding">
					<div class="form-group col-md-3">
					    	<label>Pelanggan</label> 
					    	<p><?php echo $supplier['nama']; ?></p>
					    </div>
					    <div class="form-group col-md-4">
					    	<label>Alamat</label>
					      	<p><?php echo $supplier['alamat']; ?></p>
					    </div>
					<div class="col-md-5">
					    <span id="sub-total">Total <span class="indigo">Rp. <?php echo $gtotal; ?></span></span>
					</div>
				</div>
				</div>
			</div>
		<div class="panel panel-default">
		    	<div class="panel-body">
					<form>
					  	<div class="form-group">
					    <div class=" form-group col-md-4">
					  		<label>No. Referensi</label>
					  		<p><?php echo $detail['referensi'] ?></p>
					  	</div>
					    <div class=" form-group col-md-4">
					  		<label>Tgl Penerimaan</label>
					  		<p><?php echo date_format(date_create($detail['tanggal']),'d M Y'); ?></p>
					  	</div>
					    <div class=" form-group col-md-4">
					  		<label>Tempo</label>
					  		<p><?php echo $syaratbayar['tempo']  ?> Hari / 
					  			<?php echo date_format(date_create($detail['tempo']),'d M Y'); ?>
					  		</p>
					  	</div>

					  	<div class="col-md-12">
					  		<table class="table table-striped table-hover" id="tb" style="margin-bottom: 30px;">
					  			<!-- THEAD -->
					  			<tr>
					  				<th>Nama Barang</th>
					  				<th width="100">Qty</th>
					  				<th width="200">Harga Satuan</th>
					  				<th width="200">Sub Total</th>
					  			</tr>
					  			<!-- END THEAD -->
					  			<?php
					  				foreach ($items as $value) {
					  					$barang = $this->barang_model->detail_barang($value['idbarang']);
					  					$total = $value['qty'] * $value['harga'];
					  					echo"
					  					<tr>
							  				<td>".$barang['nama']."</td>
							  				<td>".$value['qty']."</td>
							  				<td style='text-align: right;'>Rp. ".$value['harga']."</td>
							  				<td style='text-align: right;'>Rp. ".$total."</td>
							  			</tr>";
					  				}
					  			?>
					  			<!-- TBODY -->
					  		</table>
					  		<div class="col-md-6" style="padding-left: 0; margin-bottom: 20px;">
					  			<label>Catatan</label>
					  			<textarea class="form-control" style="height: 145px"><?php echo $detail['catatan']; ?> </textarea>
					  		</div>
					  		<div class="col-md-5" style="float: right;">
					  			<div class="row d">
					  				<span id="d-title">Sub Total</span>	
					  				<span id="sub-number">Rp. <?php echo $subtotal; ?></span>	
					  			</div>
								<div class="row d">
					  				<span id="d-title">Biaya Lainnya</span>	
					  				<span id="sub-number">Rp. <?php echo $detail['lainya']; ?></span>	
					  			</div>					  			
					  			<div class="row d">
					  				<span id="d-title">Diskon</span>	
					  				<span id="sub-number">Rp. <?php echo $detail['diskon']; ?></span>	
					  			</div>
					  			<div class="row d">
					  				<span id="d-title">Pajak (<?php echo $detail['pajak']; ?>%)</span>	
					  				<span id="sub-number">Rp. <?php echo $hpajak; ?></span>	
					  			</div>
					  			<div class="row d">
					  				<span id="gt-title">Grand Total</span>			
					  				<span id="grand-total" class="indigo"><span>Rp. <?php echo $gtotal; ?></span></span>
					  			</div>
					  		</div>

					  		<div  class="form-group col-md-12" style="padding-left: 0;">
					    	<a href="<?php echo base_url(); ?>pembelian" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Pembelian</a>
						</div>
					  	</div>
					  </div>
					</form>
			    </div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script>
<script>
	$('.chosen-select').chosen();
</script>
<!-- SCRIPT MODAL SUPPLIER -->
<script>
	$('select').change(function () {
	    if ($(this).val() == "tambah") {
	        $('#myModal').modal('show');
	    }
	});
</script>
<!-- END SUPPLIER -->

<!-- SCRIPT MODAL BARANG -->
<script>
	$('select').change(function () {
	    if ($(this).val() == "tambah1") {
	        $('#myModal1').modal('show');
	    }
	});
</script>
<!-- END BARANG -->
 
<!-- ADD & REMOVE ROW -->
<script>
$(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Maaf, Row pertama tidak bisa di hapus!");
           }
      });
});      
</script>
			<!-- END MAIN CONTENT