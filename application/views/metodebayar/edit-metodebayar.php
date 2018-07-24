<!-- MAIN CONTENT -->
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>
	    <li>
	        <a href="<?php echo base_url(); ?>metodebayar">Data Metode Pembayaran</a>
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
						<?php echo form_open('metodebayar/proses_edit?id='.$detail['id']); ?>
						  	<div class="form-group">
						  	<div class=" form-group col-md-3">
						  		<label>Nama Metode</label>
						  		<input type="text" class="form-control" name="nama" value="<?php echo $detail['nama'] ?>" required="" placeholder="Nama Metode" >
						  	</div>
						  	<div class=" form-group col-md-3">
						  		<label>Metode</label>
						  		<select class="form-control" disabled name="metode" id="metode" required="">
							    	<?php
						    			$data = array('CASH','Transfer','CEK','GIRO');
						    			foreach ($data as $value) {
						    				if($detail['metode'] == $value){
						    					echo "<option value='".$value."' selected>".$value."</option>";
						    				}else{
						    					echo "<option value='".$value."'>".$value."</option>";
						    				}
						    			}
						    		?>
							    </select>
						  	</div>
						  	<div class=" form-group col-md-3">
						  		<label>No Rekening</label>
						  		<input type="text" class="form-control" name="norek" value="<?php echo $detail['norek'] ?>" placeholder="No Rekening" >
						  	</div>
						  	<div class=" form-group col-md-3">
						  		<label>Kartu</label>
						  		<input type="text" class="form-control" name="kartu" value="<?php echo $detail['kartu'] ?>" placeholder="Kartu">
						  	</div>
						  	<div class=" form-group col-md-3">
						  		<label>No Cek</label>
						  		<input type="text" class="form-control" name="nocek" value="<?php echo $detail['nocek'] ?>" placeholder="No Cek">
						  	</div>
						  	<div class=" form-group col-md-3">
						  		<label>Atas Nama</label>
						  		<input type="text" class="form-control" name="atasnama" value="<?php echo $detail['atasnama'] ?>" placeholder="Atas Nama" >
						  	</div>
						  	<div class="form-group col-md-3">
						    	<label>BANK</label> 
						    	<select class="form-control" name="bank" required="">
						    		<option value="-"></option>
							    	<?php
						    			foreach ($list_bank as $value){
						    				if($detail['idbank'] == $value['id']){
						    					echo "<option value='".$value['id']."' selected>".$value['bank']."</option>";
						    				}else{
						    					echo "<option value='".$value['id']."'>".$value['bank']."</option>";
						    				}
						    			}
						    		?>
							    </select>
						    </div>

						    <div  class="form-group col-md-12">
						    	<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
						    	<a href="<?php echo base_url(); ?>metodebayar" type="submit" class="btn btn-warning"><span class="fa fa-save"></span> Daftar Metode Bayar</a>
						    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
							</div>
						  	</div>
						<?php echo form_close(); ?>
				    </div>
				</div>
			</div>
		</div>
	</div>								 