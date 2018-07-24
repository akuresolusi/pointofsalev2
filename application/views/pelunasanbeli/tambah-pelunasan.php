<!-- MAIN CONTENT -->
<style>
.hide{
	display: none;
}
option{
	color: #000;
}
</style>

<style type="text/css">

  #hasilpencariansupplier{ 
    padding: 0px; 
    display: none; 
    position: absolute; 
    max-height: 250px;
    width: 570px;
    overflow: auto;
    border:1px solid #ddd;
    z-index: 1;
  }

  #daftar-autocomplete-supplier{ 
    list-style:none; 
    margin:0; 
    padding:0; 
    width:100%;
  }

  #daftar-autocomplete-supplier li {
    padding: 5px 10px 5px 10px; 
    background:#FAFAFA; 
    border-bottom:#ddd 1px solid;
  }

  #daftar-autocomplete-supplier li:hover,
  #daftar-autocomplete li.autocomplete_active, 
  #daftar-autocomplete-supplier li.autocomplete_active { 
    background:#6bb9f0; 
    color:#fff; 
    cursor: pointer;
  } 

 
</style>

<?php echo form_open(base_url().'pelunasanbeli/proses_tambah'); ?>
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	        <a href="<?php echo base_url(); ?>pelunasanbeli">Data Pelunasan</a>
	    </li>	
	    <li>
	    	<span><?php echo $title; ?></span>
	    </li>
	</ul>
</div>
<div class="main-content">
	<div class="container-fluid">
			<div class="panel panel-default panel-title" style="margin-bottom:0;">
				<div class="panel-body title-pos body-blue">
					<div class="col-md-12 nopadding">
						<div class="form-group col-md-3">
						    	<label>ID Supplier</label>
						      	<input type="hidden" name="kode" value="<?php echo date('Ymd').date('his'); ?>">
						      	<input type="text" readonly="true" name="idsupplier" id="idsupplier" required="" class="form-control" placeholder="ID">
						      	<div id="hasilpencariansupplier"></div>
						</div>	
						<div class="form-group col-md-4">
						    	<label>Nama Supplier</label> 
						    	<input type="text" required="" id="supplier" class="form-control" placeholder="Nama Supplier">
						</div>
						<div class="col-md-5">
						    <span id="sub-total">Total <span class="indigo">Rp. <span id="label"></span></span></span>
						</div>
						   
					</div>
				</div>
			</div>
		<div class="panel panel-default">
		    	<div class="panel-body">
		
					  	<div class="form-group">
					    <div class=" form-group col-md-8">
					  		<label>Alamat</label>
					  		<textarea class="form-control" placeholder="Alamat"  id="alamatsupplier" style="height: 105px"></textarea>
					  	</div>
					  	<div class="form-group col-md-4" style="padding: 0;">
						    <div class="col-sm-12 controls">
						    	<label>Tgl Bayar</label>
							      <div class="input-group">
							      	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
								    <input type="date" name="tanggal" required="true"  value="<?php echo date('Y-m-d'); ?>" class="form-control" id="inputfield2" >
								  </div>
							</div>
						</div>
					  	<div class="col-md-12">
					  		<table class="table table-striped" id="tbl">
						    <thead>
						    	<th width="20"></th>
						      	<th>No. Faktur</th>
						      	<th>Tgl Faktur</th>
						      	<th>Syarat Bayar</th>
						      	<th>Nilai Faktur</th>
						      	<th>Sisa Hutang</th>
						        </thead>
						    <tbody id="list_faktur">
						    </tbody>
						  </table>
					  		<div class="col-md-5" style="margin-bottom: 20px;">
					  			
					  			<div class="row d">
					  				<label>Metode Bayar</label>
					  				<select class="form-control" name="metode" required="true" id="metode">
					  					<option value="1">Cash</option>
					  					<option value="2">Bank Transfer</option>
					  					<option value="3">Cheque</option>
					  					<option value="4">Credit Card</option>
					  					<option value="5">Debit Card</option>
					  				</select>
					  			</div>
					  			<div class="row d" id="11">
					  				<label>Rekening Bank</label>
					  				<span id="sub-number">
					  					<select class="form-control" name="rekbank" id="rekbank" style="width:270px;">
					  						<option class="hide" value="">- Pilih Rekening Bank -</option>
						  					<?php
						  					foreach ($list_rekening as $value) {
						  						echo"<option value='".$value['id']."'>".$value['bank']." / ".$value['nomor']." / ".$value['nama']."</option>";
						  					}
						  					?>
						  				</select>
					  				</span>	
					  			</div>
					  			<div class="row d" id="22">
					  				<label>No CeK/Giro</label>	
					  				<span id="sub-number"><input type="text" class="form-control"  name="nocek" id="nocek" style="width:200px;"></span>	
					  			</div>
					  			<div class="row d" id="33">
					  				<label>Tanggal Cek/Giro</label>
					  				<span id="sub-number"><input type="date" class="form-control" name="tglcek" id="tglcek" style="width:200px;"></span>	
					  			</div>
					  			<div class="row d" id="44">
					  				<label>Bank</label>
					  				<span id="sub-number">
					  					<select class="form-control" name="bank" id="bank" style="width:200px;">
						  					<?php
						  					foreach ($list_bank as $value) {
						  						echo"<option value='".$value['id']."'>".$value['bank']."</option>";
						  					}
						  					?>
						  				</select>
					  				</span>	
					  			</div>
					  			<div class="row d" id="55">
					  				<label>No Kartu Kredit</label>	
					  				<span id="sub-number"><input type="text" class="form-control" name="nokartu" id="nokartu" style="width:200px;"></span>	
					  			</div>
					  			<div class="row d" id="66">
					  				<label>Nama Kartu Kredit</label>	
					  				<span id="sub-number"><input type="text" class="form-control" name="namakartu" id="namakartu" style="width:200px;"></span>	
					  			</div>
					  			<div class="row d">
						  			<label>Catatan</label>
						  			<textarea class="form-control" name="catatan" style="height: 70px;"></textarea>
						  		</div>
					  		</div>
					  		<div class="col-md-6" style="float: right;">
					  			<div class="row d">
					  				<span id="d-title"> Sub Total</span>	
					  				<input type="hidden" id="subtotal" min="1" required="true" value="">
					  				<input type="hidden" name="faktur" id="faktur" value="">
					  				<span id="sub-number">Rp. <span id="hargasubtotal">0</span></span>	
					  			</div>
					  			<div class="row d">
					  				<span id="d-title">Biaya Lainnya</span>	
					  				<span id="sub-number"><input type="number" class="form-control" id="lainya" name="lainya" style="width: 200px;"></span>	
					  			</div>
					  			<div class="row d">
					  				<span id="d-title"> Grand Total</span>	
					  				<input type="hidden" value="0" id="grand" />
					  				<span id="sub-number">Rp. <span id="hargagrand">0</span></span>	
					  			</div>
					  			<div class="row d">
					  				<span id="d-title">Jumlah Bayar</span>	
					  				<span id="sub-number"><input type="number" min="1" class="form-control" name="jumlahbayar"  id="jumlahbayar" style="width: 200px;" required="true"></span>	
					  			</div>
					  		</div>

					  		<div  class="form-group col-md-12" style="padding-left: 0;">
					    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
					    	<a href="<?php echo base_url(); ?>pelunasanbeli" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Pelunasan</a>
					    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;"> <span class="fa fa-remove"></span> Batal</button>
						</div>
					  	</div>
					  </div>
			    </div>
			</div>
		</div>
	</div>
</div>				
<?php echo form_close(); ?>

<script src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"></script>						 

<script type="text/javascript">
	$(document).on('keyup', '#supplier', function(e){
		$("#idsupplier").val('');
		$("#alamatsupplier").val('');
		var keyword = $("#supplier").val();
		if(keyword !== ""){
			var charcode = e.which || e.keyCode;
			$.ajax({
				url: "<?php echo base_url(); ?>supplier/cari_supplier",
				type: "post",
				cache: false,
				data: "like=" + keyword,
				dataType: "json",
				success: function(json){
					$("#hasilpencariansupplier").show();
					$("#hasilpencariansupplier").html(json.datanya);
				}
			});       
		}else{
			$("#hasilpencariansupplier").hide();      
		}
	});

	$(document).on('keyup', '#idsupplier', function(e){
		$("#idsupplier").val('');
		$("#alamatsupplier").val('');
		var keyword = $("#idsupplier").val();
		if(keyword !== ""){
			var charcode = e.which || e.keyCode;
			$.ajax({
				url: "<?php echo base_url(); ?>supplier/cari_supplier",
				type: "post",
				cache: false,
				data: "like=" + keyword,
				dataType: "json",
				success: function(json){
					$("#hasilpencariansupplier").show();
					$("#hasilpencariansupplier").html(json.datanya);
				}
			});       
		}else{
			$("#hasilpencariansupplier").hide();      
		}
	});


	$(document).on("click", "#daftar-autocomplete-supplier li", function(){
		var id = $(this).find("span#id").html();
		var nama = $(this).find("span#nama").html();
		var alamat = $(this).find("span#alamat").html();

		$("#idsupplier").val(id);
		$("#supplier").val(nama);
		$("#alamatsupplier").val(alamat);
		$("#hasilpencariansupplier").hide();
		get_pembelian(id);

	});

	function set_grand(){
		var a = parseInt($("#subtotal").val());
		var b = parseInt($("#lainya").val());
		$("#grand").val( a + b);
		$("#hargagrand").html( a + b);
		$("#label").html( a + b);
	}

	$(document).on("change", "#lainya", function(){
		set_grand();
	});

	$(document).on("change", "#jumlahbayar", function(){
		var a = parseInt($("#grand").val()) -  parseInt($("#jumlahbayar").val());
		if(a < 0){
			$("#jumlahbayar").val('');
		}
	});

	function get_pembelian(supplier){
		$.ajax({
			type: "post",
			data: "supplier=" + supplier,
			url: '<?php echo base_url(); ?>pelunasanbeli/cari_faktur',
	        success: function(html){
	        	$("#list_faktur").html(html);
	        }
        }); 
	}

	$(document).on("click", ".chcktbl", function(){
	   var faktur = [];
	   var jlh = 0 ;
		$("input[name='cek[]']:checked").each(function (){
		    faktur.push(parseInt($(this).attr('faktur')));
		    jlh += parseInt($(this).val());
		});
		$("#faktur").val(faktur);
		$("#subtotal").val(jlh);
		$("#hargasubtotal").html(jlh);
		$("#lainya").val(0);
		$("#grand").val(jlh);
		$("#hargagrand").html(jlh);
		$("#label").html(jlh);
	});

	function reset_form(){
		$("#11").hide();
		$("#22").hide();
		$("#33").hide();
		$("#44").hide();
		$("#55").hide();
		$("#66").hide();

		$("#rekbank").val('');
		$("#nocek").val('');
		$("#tglcek").val('');
		$("#bank").val('');
		$("#nokartu").val('');
		$("#namakartu").val('');

		$("#rekbank").removeAttr('required');
		$("#nocek").removeAttr('required');
		$("#bank").removeAttr('required');
		$("#nokartu").removeAttr('required');
		$("#namakartu").removeAttr('required');
	}
	reset_form();

	$(document).on("change", "#metode", function(){
		reset_form();
		var a = $(this).val();
		if(a == 1){
			reset_form();
		}else if(a == 2){
			$("#11").show();
			$("#rekbank").attr('required','');
		}else if(a == 3){
			$("#11").show();
			$("#22").show();
			$("#33").show();
			$("#rekbank").attr('required','');
			$("#nocek").attr('required','');
		}else if(a == 4){
			$("#44").show();
			$("#55").show();
			$("#66").show();
			$("#bank").attr('required','');
			$("#nokartu").attr('required','');
			$("#namakartu").attr('required','');
		}else if(a == 5){
			$("#11").show();
			$("#rekbank").attr('required','');
		}
	});


	<?php
		$msg = $this->input->get('msg');
		if(!empty($msg)){
			echo"alert('".$msg."');";
		}
	?>

</script>