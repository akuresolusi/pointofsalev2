
<!-- MAIN CONTENT -->
<style>
.hide{
	display: none;
}
option{
	color: #000;
}
</style>
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	        <a href="<?php echo base_url(); ?>returbeli">Data Retur Pembelian</a>
	    </li>	
	    <li>
	    	<span><?php echo $title; ?></span>
	    </li>
	</ul>
</div>
<div class="main-content">
	<div class="container-fluid">
			<div class="panel panel-default panel-title">
				<div class="panel-body title-pos body-blue">
					<div class="container nopadding">
					<div class="form-group col-md-3">
					    	<label>No. Faktur Pembelian</label>
					      	<input type="text" class="form-control" value="<?php echo $this->input->get('faktur') ?>"  id="faktur" placeholder="No. Faktur Pembelian">
					</div>	
					<div class="form-group col-md-4">
					    	<label>Nama Supplier</label>
					      	<input type="text" class="form-control" value="<?php echo @$supplier['nama'] ?>" placeholder="Supplier" disabled="">
					</div>	
					<!-- <div class="col-md-5">
					    <span id="sub-total">Total <span class="indigo">Rp. 10.000</span></span>
					</div> -->
					   
				</div>
			</div>
		</div>
		<?php 
			if(!empty($this->input->get('faktur'))){

				$subtotal = 0;
				foreach ($list_items as $value) {
					$subtotal = $subtotal + $value['qty'] * $value['harga'];
				}
				$hpajak = ($subtotal / 100) * $faktur['pajak'];
				$hdiskon = ($subtotal / 100) * $faktur['diskon'];
				$tagihan = $subtotal + $hpajak - $hdiskon;
		?>
		<div class="panel panel-default">
		    	<div class="panel-body">
					<?php echo form_open(base_url('returbeli/selesai?faktur='.$faktur['faktur'])); ?>
					  	<div class="form-group">
					    <div class=" form-group col-md-8">
					  		<label>Alamat</label>
					  		<textarea class="form-control" placeholder="Alamat" style="height: 105px" disabled=""><?php echo $supplier['alamat'] ?></textarea>
					  	</div>
					  	 <div class="form-grou col-md-4" style="padding: 0; margin-bottom: 10px;">
							    <div class="col-sm-12 controls">
							    	<label>Tgl Faktur</label>
							      <div class="input-group">
							      	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
								    <input type="date" class="form-control" value="<?php echo $faktur['tanggal'] ?>" id="inputfield2" placeholder="Input 2" disabled="">
								  </div>
								</div>
							  </div>
					        <div class="form-group col-md-4" style="padding: 0">
						    <div class="col-sm-12 controls">
						    	<label>Tgl Retur</label>
						      <div class="input-group">
						      	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
							    <input type="date" class="form-control" name="tanggal" value="<?php echo date('Y-m-d') ?>" id="inputfield2" placeholder="Input 2">
							  </div>
							</div>
						  </div>
						</div>
					  	<div class="col-md-12">
					  		<table class="table table-striped" id="tbl">
						    <thead>
						    	<th width="10x">No</th>
						      	<th style="text-align: left">Kode</th>
						      	<th style="text-align: left">Nama Barang</th>
						      	<th style="text-align: right" width="200x">Harga Beli</th>
						      	<th style="text-align: right;" width="70px">Qty</th>
						      	<th style="text-align: right;" width="120px">Telah Retur</th>
						      	<th width="120px">Retur</th>
						      	<th width="150px">Sub Total</th>
						    </thead>
						    <tbody>
						    <?php
						    	$i=0;
						    	foreach ($list_items as $value) {
						    		$i++;
						    		$barang= $this->barang_model->detail_barang($value['idbarang']);
						    		$retur_items = $this->retur_model->retur_pembelian_item($faktur['faktur'], $value['idbarang'])['jumlah'];
						    		$max = $value['qty'] - $retur_items ;
						    		if( empty($retur_items) ){ $retur_items = "-"; }
						    		
						    		echo"
						    		<tr>
								      	<td>".$i."</td>
								        <td>".$barang['kode']."</td>
								        <td>".$barang['nama']."</td>
								        <td style='text-align: right;'>Rp ".$value['harga']."</td>
								        <td style='text-align: right;'>".$value['qty']."</td>
								        <td style='text-align: right;'>".$retur_items."</td>
								        <td><input type='number' step='1' name='retur[]' max='".$max."' min='0' harga='".$value['harga']."' id='i".$i."' class='form-control input'></td>
								        <td style='text-align: right;'>Rp <span id='s".$i."'></span></td>
								    </tr>";
						    	}
						    ?>
						    </tbody>
						    <tfoot>
						    	<tr>
					    			<th colspan="7" style='text-align: left;'>TOTAL RETUR</th>
					    			<th id="klik" style='text-align: right;'><b>Rp <span id="total"></span></b></th>
					    		</tr>
						    </tfoot>
						  </table>
					  		
					  		<div class="col-md-5" style="padding-right: 30px;">
					  			<div class="row d">
					  				<span id="d-title">Total Tagihan</span>	
					  				<span id="sub-number">Rp <?php echo $tagihan; ?></span>	
					  			</div>
					  			<div class="row d">
					  				<span id="d-title">Total Retur</span>	
					  				<span id="sub-number">Rp <?php echo $jumlah_retur; ?></span>	
					  			</div>
					  			<div class="row d">
					  				<span id="d-title">Total Pembayaran</span>	
					  				<span id="sub-number">Rp <?php echo $pelunasan; ?></span>	
					  			</div>
					  			<?php
					  				$sisa_tagihan = $tagihan - $jumlah_retur - $pelunasan ;
					  			?>
					  			<div class="row d">
					  				<span id="d-title">Pengembalian Uang</span>	
					  				<span id="sub-number"><input type="number" class="form-control" name="uangkembali" id="uangkembali" style="width: 175px;"></span>	
					  			</div>
					  			<div class="row d">
					  				<span id="d-title">Sisa Tagihan</span>	
					  				<span id="sub-number">Rp <span id="sisa_tagihan"><?php echo $sisa_tagihan; ?></span></span>	
					  			</div>
					  		</div>
					  		<div class="col-md-7" style="margin-bottom: 20px;">
					  			<label>Catatan</label>
					  			<textarea class="form-control" name="catatan" style="height: 148px;"></textarea>
					  		</div>
					  		<div  class="form-group col-md-12" style="padding-left: 0;">
					    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
					    	<a href="<?php echo base_url(); ?>returbeli" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Retur</a>
					    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;"> <span class="fa fa-remove"></span> Batal</button>
						</div>
					  	</div>
					  </div>
					<?php echo form_close(); ?>
			    </div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
	$('form input').on('keypress', function(e) {
	    // return e.which !== 13;
	});

	$('#faktur').keyup(function(e){
	    if(e.keyCode == 13){
	    	window.location.href = "<?php echo base_url('returbeli/tambah?faktur='); ?>" + $(this).val();
	    }
	});

	$('.input').keyup(function(e){
		var nilai = Number($(this).val());
	    var max = Number($(this).attr('max'));
	    if(nilai > max){
	    	$(this).val('');
		}
		hitung();
	});

	$('#uangkembali').change(function(e){
	    hitung();
	});

	$("#uangkembali").keyup(function(e){ 
		var code = e.which;
		if(code == 13){
			hitung();
		}
	});

	function hitung(){
		var total = 0;
		for (i=1;i<=<?php echo @$i+0; ?>;i++){
			var a = $("#i" + i).attr('harga');
			var b = $("#i" + i).val();
			var subtotal = a * b;
			total += subtotal;
			$("#s" + i).html(subtotal);
		}
		$("#total").html(total);

		var tagihan = <?php echo @$tagihan + 0; ?>;
		var jretur = <?php echo @$jumlah_retur + 0; ?>;
		var pelunasan = <?php echo @$pelunasan + 0; ?>;
		var uangkembali = Number($("#uangkembali").val());
		var a = tagihan - jretur - pelunasan - total ;
		$("#sisa_tagihan").html(parseInt(a) + parseInt(uangkembali));
	};

});
</script>
