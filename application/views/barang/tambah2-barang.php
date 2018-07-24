<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

<div class="panel panel-default" style="border: 0;">
<div class="panel-body">
<?php echo form_open_multipart('barang/proses_tambah2'); ?>
	<div class="form-group">
		<div class="form-group col-md-4">
			<label>Kode Barang</label>
			<input type="text" class="form-control" required="" name="kode" placeholder="Kode Barang">
		</div>
		<div class="form-group col-md-4">
			<label>Nama Barang</label>
			<input type="text" class="form-control" required="" name="nama" placeholder="Nama Barang">
		</div>
		<div class="form-group col-md-4">
			<label>Kategori Barang</label> 
			<select class="form-control" name="kategori" required="">
			<?php
				foreach ($list_kategori as $value) {
					echo "<option value='".$value['id']."'>".$value['kategori']."</option>";
				}
			?>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label>Satuan</label> 
			<select class="form-control" name="satuan" required="">
			<?php
				foreach ($list_satuan as $value) {
					echo "<option value='".$value['id']."'>".$value['satuan']."</option>";
				}
			?>
			</select>
		</div>
		
		<div class="form-group col-md-3">
			<label>Kontrol Stok ?</label>
			<div class="form-group">
			<label><input type="radio"  name="kontrol" value="1" required=""> Ya</label>&nbsp;&nbsp;&nbsp;
			<label><input type="radio"  name="kontrol" value="0" required=""> Tidak</label>
		</div>

	</div>

	<div class="form-group col-md-12">
		<label>Harga Jual Barang/Jasa</label>
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th width="150px">Kategori Harga</th>
					<?php
					foreach ($list_kategorip as $value) {
						echo"<th>".$value['kategori']."</th>";
					}
					?>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($list_kategorih as $value) {
					echo"
					<tr>
						<td>".$value['kategori']."</td>";
						foreach ($list_kategorip as $value2) {
	    					echo"<td><input type='number' name='".$value['id']."-".$value2['id']."' class='form-control' /></td>";
	    				}
					echo"
					</tr>";
				}
				?>
			</tbody>
		</table>
	</div>

	<div  class="form-group col-md-12">
		<button type="submit" class="btn btn-info" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
		<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;><span class="fa fa-remove"></span> Batal</button>
	</div>
<?php echo form_close(); ?>
</div>
</div>