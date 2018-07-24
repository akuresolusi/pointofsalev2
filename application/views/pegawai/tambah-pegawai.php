<!-- MAIN CONTENT -->
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	        <a href="<?php echo base_url(); ?>pegawai">Data Pegawai</a>
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
					<?php echo form_open('pegawai/tambah_pegawai'); ?>
					  	<div class="form-group">
					  	<div class="form-group col-md-6">
					  		<label>Nama Lengkap</label>
					  		<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
					  	</div>
					    <div class="form-group col-md-3">
					    	<label>Jenis Kelamin</label> 
					    	<select class="form-control" name="jeniskelamin" required="">
					    		<option value="" disabled selected class="hide">- Pilih Jenis Kelamin -</option>
						    	<?php
					    			$data_jenis = array('Laki-Laki','Perempuan');
					    			foreach ($data_jenis as $value) {
					    				echo "<option value='".$value."'>".$value."</option>";
					    			}
					    		?>
						    </select>
					    </div>
					    
					  	<div class="form-group col-md-3">
					    	<label>Pendidikan</label> 
					    	<select class="form-control" name="pendidikan" required="">
					    		<option value="" disabled selected class="hide">- Pilih Pendidikan -</option>
						    	<?php
					    			$data_jenis = array('SD','SMP','SMA','S1');
					    			foreach ($data_jenis as $value) {
					    				echo "<option value='".$value."'>".$value."</option>";
					    			}
					    		?>
						    </select>
					    </div>
					    <div class="col-md-3">
					  		<label>Tanggal Masuk</label>
					  		<input type="date" name="tglmasuk" class="form-control" placeholder="Tanggal Masuk" required="">
					  	</div>
					    <div class="form-group col-md-3">
					    	<label>Jabatan</label> 
					    	<select class="form-control" name="jabatan" required="">
					    		<option value="" disabled selected class="hide">- Pilih Jabatan -</option>
						    	<?php
					    			foreach ($list_jabatan as $value) {
					    				echo "<option value='".$value['id']."'>".$value['jabatan']."</option>";
					    			}
					    		?>
						    </select>
					    </div>
					    
					  	<div class="form-group col-md-3">
					  		<label>Telp/No Hp</label>
					  		<input type="number" maxlength="13" name="nohp" class="form-control" placeholder="No Hp">
					  	</div>
					  	<div class="form-group col-md-3">
					  		<label>Password</label>
					  		<input type="password" name="password" class="form-control" placeholder="Password">
					  	</div>
					  	
					    <div class=" form-group col-md-12">
					  		<label>Alamat</label>
					  		<textarea class="form-control" required="" name="alamat" placeholder="Alamat"></textarea>
					  	</div>
					    
					  	</div>
						
			    	</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-12">
							
							<label class="checkbox-inline"><input type="checkbox" id="styled-checkbox-1" value="" onclick="myFunction()">Komisi</label>
						</div>
						<div class="col-md-12" id="myDIV" style="display: none; margin-top: 20px;">
							<form class="form-inline" id="demo">
								<div class="form-group col-md-3" style="padding: 0">
								    <label>Hitung Komisi Berdasarkan</label>
								    <select class="form-control">
								    	<option>Omset</option>
								    	<option>Profit</option>
								    </select>
								 </div>
								 <div class="form-group col-md-2" style="padding-right: 0">
								 	<label>Berdasarkan</label>
								 	<select class="form-control" id="rangeBox">
								    	<option>Percent</option>
								    	<option value="Range">Range</option>
								    </select>
								 </div>
								 <div class="form-group col-md-2">
								 	<label>Nilai</label>
								 	<input type="text" class="form-control" name="" placeholder="%" style="text-align: right;">
								 </div>
							 </form>
							 <div class="col-md-12" style="padding: 0" id="btnRange">
							 	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#range">Range</button>
							 	<div class="table-responsive" style="margin-top: 10px;">
							 		<div class="col-md-6" style="padding: 0">
						          		<table class="table table-striped table-hover">
						          			<thead>
						          				<th>Dari</th>
						          				<th>Hingga</th>
						          				<th>Nilai</th>
						          				<th></th>
						          			</thead>
						          			<tbody>
						          				<tr>
						          					<td>-</td>
						          					<td>-</td>
						          					<td>-</td>
						          					<td style="float: right;"><a href="#"><span class="lnr lnr-cross-circle" style="font-size: 26px; color: #cd2966"></span></a></td>
						          				</tr>
						          			</tbody>
						          		</table>
					          		</div>
					      		</div>
							 </div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
			    		<div class="panel-body">
							  	<div class="col-md-12">
							  		<label>Hak Akses</label>
							  	</div>
							  	<?php
							  		$data_cek = array('Dashboard','Data Barang','Master Data','Pembelian','Penjualan','Point Of Sale','Biaya Beban','Laporan');
							  		foreach ($data_cek as $value) {
							  			echo "
							  				<div class='col-md-3'>
										  		<div class='form-group'>
										  			<label class='checkbox-inline'><input type='checkbox' name='akses[]' value='".$value."'>".$value."</label>
										  		</div>
										  	</div>";
							  		}
							  	?>

								  	<div  class="form-group col-md-12">
							    	<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
							    	<a href="<?php echo base_url(); ?>pegawai" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Daftar Pegawai</a>
							    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;"><span class="fa fa-remove"></span> Batal</button>
								</div>
							</div>
			  			</div>
					</div>

					<?php echo form_close(); ?>
<!-- END MAIN CONTENT-->

<!-- MODAL RANGE -->
 <!-- Modal -->
  <div class="modal fade" id="range" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Range</h4>
        </div>
        <div class="modal-body">
        	<div class="table-responsive">
          		<table class="table table-striped table-hover">
          			<thead>
          				<th>Dari</th>
          				<th>Hingga</th>
          				<th>Nilai</th>
          				<th></th>
          			</thead>
          			<tbody>
          				<tr>
          					<td><input type="number" class="form-control" name="" readonly="" value="0" style="text-align: right;"></td>
          					<td><input type="number" class="form-control" name="" style="text-align: right;"></td>
          					<td><input type="number" class="form-control" name="" placeholder="%" style="text-align: right;"></td>
          					<td><a href="#"><span class="lnr lnr-plus-circle" style="font-size: 26px"></span></a></td>
          				</tr>
          			</tbody>
          		</table>
      		</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- END MODAL -->
<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<script type="text/javascript">
	$(document).ready(function(){
  	$("#btnRange").hide();
  	$("#rangeBox").change(function(){
   if($("#rangeBox").val() == 'Range'){
      //Show text box here
      $("#btnRange").show();
   }
   else{
     //Hide text box here
     $("#btnRange").hide();
   }
    });
});
</script>