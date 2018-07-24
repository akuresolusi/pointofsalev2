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

  #hasilpencarian{ 
    padding: 0px; 
    display: none; 
    position: absolute; 
    max-height: 200px;
    width: 500px;
    overflow: auto;
    border:1px solid #ddd;
    z-index: 1;
  }

  #hasilpencariansupplier{ 
    padding: 0px; 
    display: none; 
    position: absolute; 
    max-height: 250px;
    width: 380px;
    overflow: auto;
    border:1px solid #ddd;
    z-index: 1;
  }

  #daftar-autocomplete, 
  #daftar-autocomplete-supplier{ 
    list-style:none; 
    margin:0; 
    padding:0; 
    width:100%;
  }

  #daftar-autocomplete li, 
  #daftar-autocomplete-supplier li {
    padding: 5px 10px 5px 10px; 
    background:#FAFAFA; 
    border-bottom:#ddd 1px solid;
  }

  #daftar-autocomplete li:hover, 
  #daftar-autocomplete-supplier li:hover,
  #daftar-autocomplete li.autocomplete_active, 
  #daftar-autocomplete-supplier li.autocomplete_active { 
    background:#6bb9f0; 
    color:#fff; 
    cursor: pointer;
  } 

  

</style>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.css">
<script src="<?php echo base_url(); ?>assets/js/formatnumber.js"></script>
  
<script src="<?php echo base_url(); ?>assets/css/select2-min.css"></script>
<?php echo form_open('pembelian/edit_faktur'); ?>
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
			<div class="panel-body title-pos body-blue">
				<div class="col-md-12">
					<div class="form-group col-md-3">
				    	<label>Supplier</label> 
				    	<?php
				    		$supplier = $this->master_model->detail_supplier($detail['idsupplier']);
				    	?>
				    	<input type="hidden" id="idsupplier" value="<?php echo $supplier['id'] ?>" name="idsupplier" required="">
				    	<input type="text" required="" id="supplier" class="form-control" value="<?php echo $supplier['nama'] ?>" placeholder="Nama Supplier">
		  				<div id="hasilpencariansupplier"></div>
				    </div>
				     
				    <div class="form-group col-md-4">
				    	<label>Alamat</label>
				    	<input type="text" id="alamatsupplier" disabled class="form-control" value="<?php echo $supplier['alamat'] ?>">
				    </div>

					<div class="col-md-5">
						<input type="hidden" id="faktur" name="faktur" value="<?php echo $detail['faktur']; ?>" required="">
					    <span id="sub-total">No Faktur. <span class="indigo">FB-<?php echo $detail['faktur']; ?></span></span>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
		    	<div class="panel-body">
					
					  	<div class="form-group">
					    <div class=" form-group col-md-4">
					  		<label>No Referensi</label>
					  		<input type="text" name="referensi" value="<?php echo $detail['referensi']; ?>" class="form-control" placeholder="No Referensi">
					  	</div>
					      <div class="form-grou col-md-4" style="padding: 0; margin-bottom: 10px;">
							    <div class="col-sm-12 controls">
							    	<label>Tgl Penerimaan</label>
							      <div class="input-group">
							      	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
								    <input type="date" name="tanggal" class="form-control" id="inputfield2" value="<?php echo $detail['tanggal'] ?>" required="">
								  </div>
								</div>
							  </div>
					        
					    <div class="col-md-4">
					    	<label>Syarat Pembayaran</label> 
					    	<select class="form-control " name="syaratbayar" required="">
					    		<option value="" disabled selected class="hide">- Pilih Syarat Pembayaran -</option>
						    	<?php
					    			foreach ($list_syarat_bayar as $value) {
					    				if($detail['idsyaratbayar'] == $value['id']){
					    					echo "<option value='".$value['id']."' selected>".$value['nama']."</option>";
					    				}else{
					    					echo "<option value='".$value['id']."'>".$value['nama']."</option>";
					    				}
					    				
					    			}
					    		?>
						    </select>
					    </div>

					  	<div class="col-md-12">
					  		<table class="table" id="tb" style="margin-top: 20px;">
					  			<!-- THEAD -->
					  			<tr>
					  				<th width="150px" style="padding-left: 0px;">Kode</th>
					  				<th width="300px">Nama Barang</th>
					  				<th width="60">Qty</th>
					  				<th width="100">Harga Satuan</th>
					  				<th width="100">Sub Total</th>
					  				<th width="20"></th>
					  			</tr>
					  			<!-- END THEAD -->
					  			
					  			<tr>
					  				
					  				<td style="padding-left: 0px;">
					  					<input type="hidden" id="idbarang" >
					  					<input type="text" name="kode" id="kodebarang" class="form-control" placeholder="Kode Barang">
					  					<div id="hasilpencarian"></div>
					  				</td>

					  				<td style="padding-left: 0px;">
						  				<!-- Input Barang -->
										<input type="text" id="namabarang" class="form-control" placeholder="Nama Barang" >
					  				</td>
					  				 
					  				<td><input type="number" id="qty" class="form-control"></td>
					  				<td><input type="text"  id="harga" class="form-control" placeholder="Rp." style="text-align: right;"></td>
					  				
					  				<td style="text-align: right; font-size: 15px; font-weight: bold;" id="stotal">Rp.0</td>
					  				<td><a id="tambah"><span class="lnr lnr-plus-circle" title="Tambah" style="font-size: 25px; cursor: pointer;"></span></a></td>
					  			</tr>


					  			
					  			<!-- TBODY -->
					  			<tbody id="items">
						  			<!-- ////////Item Pembelian/////////// -->
					  			</tbody>
					  			<!-- TBODY -->
					  		</table>

					  		<div class="col-sm-12">
						  		<div class="col-md-6" style="padding-left: 0; margin-bottom: 20px;">
						  			<label>Catatan</label>
						  			<textarea class="form-control" name="catatan" style="height: 125px;" placeholder="Catatan"><?php echo $detail['catatan']; ?></textarea>
						  		</div>
						  		<div class="col-md-5" style="float: right;">
						  			<div class="row d">
						  				<span id="d-title">SUB TOTAL</span>	
						  				<span id="sub-number">
						  					<input type="hidden" id="total" value="">
						  					<span id="view_subtotal"></span>
						  				</span>	
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">BIAYA LAINNYA</span>	
						  				<span id="sub-number"><input type="number" value="<?php echo $detail['lainya'] ?>" id="lainnya" name="lainya" class="form-control" style="width: 240px; margin-left:  10px; text-align: right;" placeholder="Rp."></span>
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">DISKON</span>	
						  				<span id="sub-number"><input type="number" value="<?php echo $detail['diskon'] ?>" id="diskon" name="diskon" class="form-control" style="width: 240px; margin-left:  10px; text-align: right;" placeholder="Rp."></span>
						  			</div>
						  			<div class="row d">
						  				<span id="d-title">PAJAK</span>
						  				<span id="sub-number"><input type="text" id="hargapajak"   class="form-control" style="width: 150px; margin-left:  10px; text-align: right;" placeholder="Rp." disabled></span>		
						  				<span id="sub-number"><input type="number" min="0" max="100" class="form-control" style="width: 80px;" id="pajak" name="pajak" placeholder="%"></span>
						  			</div>
						  			<div class="row d">
						  				<span id="gt-title">GRAND TOTAL</span>			
						  				<span id="grand-total" class="indigo"><span id="grandtotal" ></span></span>
						  			</div>
						  		</div>
					  		</div>
					  		
					  		<div  class="form-group col-md-12" style="padding-left: 0;">
					    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Edit</button>
					    	<a href="<?php echo base_url(); ?>pembelian" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Pembelian</a>
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







<!-- MODAL SUPPLIER -->
<div class="modal fade" id="modal-tambah-supplier" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 80%">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Supplier</h4>
        </div>
        <div class="modal-body">
          <iframe src="<?php echo base_url('supplier/tambah2'); ?>" width="100%" style="border:0px;" scrolling="no" height="400"></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- END MODAL -->


<!-- MODAL SUPPLIER -->
<div class="modal fade" id="modal-tambah-barang" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 80%">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Barang</h4>
        </div>
        <div class="modal-body">
          <iframe src="<?php echo base_url('barang/tambah2'); ?>" width="100%" style="border:0px;" scrolling="no" height="400"></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- END MODAL -->




<script type="text/javascript">


	$(document).on('keyup', '#namabarang', function(e){
		var keyword = $("#namabarang").val();
		if(keyword !== ""){
			var charcode = e.which || e.keyCode;
			$.ajax({
				url: "<?php echo base_url(); ?>barang/cari_barang",
				type: "post",
				cache: false,
				data: "like=" + keyword,
				dataType: "json",
				success: function(json){
					if(json.status == 1){
						$("#hasilpencarian").show();
						$("#hasilpencarian").html(json.datanya);
					}
					if(json.status == 0){
						$("#hasilpencarian").show();
						$("#hasilpencarian").html(json.datanya);
					}
				}
			});       
		}else{
			$("#hasilpencarian").hide();      
		}
	});

	$(document).on('keyup', '#kodebarang', function(e){
		var keyword = $("#kodebarang").val();
		if(keyword !== ""){
			var charcode = e.which || e.keyCode;
			$.ajax({
				url: "<?php echo base_url(); ?>barang/cari_barang",
				type: "post",
				cache: false,
				data: "like=" + keyword,
				dataType: "json",
				success: function(json){
					if(json.status == 1){
						$("#hasilpencarian").show();
						$("#hasilpencarian").html(json.datanya);
					}
					if(json.status == 0){
						$("#hasilpencarian").show();
						$("#hasilpencarian").html(json.datanya);
					}
				}
			});       
		}else{
			$("#hasilpencarian").hide();      
		}
	});

	$(document).on('keyup', '#supplier', function(e){
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
		$("#idsupplier").val('');
		$("#alamatsupplier").val('');
	});




	$(document).on("click", "#daftar-autocomplete li", function(){
		var idbarang = $(this).find("span#id").html();
		var kodebarang = $(this).find("span#kode").html();
		var namabarang = $(this).find("span#barang").html();

		$("#idbarang").val(idbarang);
		$("#kodebarang").val(kodebarang);
		$("#namabarang").val(namabarang);
		$("#hargabeli").val(0);

		$("#hasilpencarian").hide();
	});

	$(document).on("click", "#daftar-autocomplete-supplier li", function(){
		var id = $(this).find("span#id").html();
		var nama = $(this).find("span#nama").html();
		var alamat = $(this).find("span#alamat").html();

		$("#idsupplier").val(id);
		$("#supplier").val(nama);
		$("#alamatsupplier").val(alamat);

		$("#hasilpencariansupplier").hide();
	});



	$(document).ready(function(){
		$(document).click(function(){
			$("#hasilpencarian").hide();
		});
	});

	
	$("#tambah").click(function() {
		var faktur 		= $("#faktur").val();
		var idbarang 	= $("#idbarang").val();
		var qty 		= $("#qty").val();
		var harga 		= $("#harga").val()
		if( 
			( faktur == "" ) || 
			( idbarang == "" ) || 
			( qty == "" ) || 
			( harga == "" )
		){
			alert('Form Penting belum terisi');
	    }else{
	        $.ajax({
				type: "post",
				data: "faktur=" + faktur + "&idbarang=" + idbarang + "&qty=" + qty + "&harga=" + harga,
				url: '<?php echo base_url(); ?>pembelian/add_items_edit',
		        success: function(result){
		        	if(result == ""){
		        		clear_form_item();
			        	get_items();
			        	reload_data();
					}else{
						alert(result);
						clear_form_item();
						get_items();
					}

		        }
	        });   
     	}
	});


	function clear_form_item(){
		$("#idbarang").val('');
		$("#qty").val('');
		$("#harga").val('');
		$("#kodebarang").val('');
		$("#namabarang").val('');
		$("#stotal").html('Rp.0');
	}


	function get_items(){
		var faktur = $("#faktur").val();
		$.ajax({
			type: "post",
			data: "faktur=" + faktur,
			url: '<?php echo base_url(); ?>pembelian/list_items_edit',
	        success: function(html){
	        	$("#items").html(html);
	        	hitung_form();
	        }
        }); 
	}
	get_items();


	function get_subtotal(){
		var faktur = $("#faktur").val();
		$.ajax({
			type: "post",
			data: "faktur=" + faktur,
			url: '<?php echo base_url(); ?>pembelian/subtotal',
	        success: function(result){
	        	$("#total").val(result);
	        	$("#view_subtotal").html("Rp. " + result);
	        	hitung_form();
	        }
        });
	}
	get_subtotal();	



	function hitung_form(){
		var total = $("#total").val();
		var lainnya = $("#lainnya").val();
		var diskon = $("#diskon").val();
		var pajak =  $("#pajak").val();
		if(lainnya){
			total = parseInt(total) + parseInt(lainnya); 
		}
		if(diskon){
			total = total - diskon; 
		}
		if(pajak){
			var hp = (total / 100) * pajak;
			$("#hargapajak").val(hp.toFixed(0));	
		}else{
			$("#hargapajak").val('');
		}
		if(hp){
			$("#grandtotal").html(parseInt(total) + parseInt(hp));
		}else{
			$("#grandtotal").html(total);
		}
	}

	$(document).on('change', '#pajak', function(e){
		hitung_form()
	});
	$(document).on('change', '#lainnya', function(e){
		hitung_form()
	});
	$(document).on('change', '#diskon', function(e){
		hitung_form()
	});

	$(document).on('keyup', '#pajak', function(e){
		hitung_form()
	});
	$(document).on('keyup', '#lainnya', function(e){
		hitung_form()
	});
	$(document).on('keyup', '#diskon', function(e){
		hitung_form()
	});


	

	$("#qty").change(function() {
		var qty 	= $("#qty").val();
		var harga 	= $("#harga").val();
		$("#stotal").html("Rp." + (qty * harga));
	});

	$("#harga").change(function() {
		var qty 	= $("#qty").val();
		var harga 	= $("#harga").val();
		$("#stotal").html("Rp." + (qty * harga));
	});



	$('form').on('keyup keypress', function(e) {
		var keyCode = e.keyCode || e.which;
		if (keyCode === 13) { 
			e.preventDefault();
			return false;
		}
	});



	//edit Item faktur
	$(document).on("click", ".btn_edit", function(){
		var id = $(this).attr('value');
		var qty = $(".data_edit_"+ id ).find('#qty').val();
		var harga = $(".data_edit_"+ id ).find('#harga').val();
		var faktur = "<?php echo $this->input->get('faktur') ?>";
		$.ajax({
			type: "post",
			data: "id=" + id + "&qty=" + qty + "&harga=" + harga + "&faktur=" + faktur,
			url: '<?php echo base_url(); ?>pembelian/edit_item_faktur',
			success: function(result){
				if(result == ""){
					get_items();
				}else{
					alert(result);
					get_items();
				}
			}
		}); 
	});

	//hapus item faktur
	$(document).on("click", ".btn_hapus", function(){
		var id = $(this).attr('value');
		$.ajax({
			type: "post",
			data: "id=" + id,
			url: '<?php echo base_url(); ?>pembelian/hapus_item_faktur',
			success: function(result){
				if(result == ""){
					get_items();	
				}else{
					alert(result);
					get_items();
				}
			}
		}); 

	});



</script>
