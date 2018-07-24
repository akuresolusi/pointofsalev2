<div class="main-content">
	<div class="container-fluid">
		<input type="text" name="" class="form-control" placeholder="Cari Barang">
		<div class="col-xs-12 customer-mobile">
			<p>Hello, <b>Agus Setiawan</b></p>
		</div>
		<div class="col-xs-12 price-mobile">
			<div class="col-xs-6 nopadding">
				<p id="total">Total Pembayaran</p>
			</div>
			<div class="col-xs-6 nopadding">
				<p id="money">Rp. 500.000</p>
			</div>
		</div>

		<!-- ITEM -->
		<div class="col-xs-12 item-mobile">
			<div class="col-xs-10 nopadding">
				<div class="col-xs-12 nopadding">
					<p id="item">Kemeja Oxford Navy</p>
				</div>
				<div class="col-xs-3 nopadding">
					<select class="form-control">
						<?php
						echo '<option value="1">1</option>';
						for( $i= 0 ; $i <= 10 ; $i++ )
						{
						    echo '<option value="' . $i . '" >' . $i . '</option>';
						}
						?>
					</select>
				</div>
				<div class="col-xs-12 nopadding">
					<p id="sub-money">Rp. 250.000</p>
				</div>
			</div>
			<div class="col-xs-2 nopadding" id="item-delete">
				<a href="#"><span class="fa fa-trash" style="color:#EC644B; font-size: 18px; text-align: right;"></span></a>
			</div>
		</div>
		<!-- END ITEM -->
		
		<!-- ITEM -->
		<div class="col-xs-12 item-mobile">
			<div class="col-xs-10 nopadding">
				<div class="col-xs-12 nopadding">
					<p id="item">Celana Chino Gray</p>
				</div>
				<div class="col-xs-3 nopadding">
					<select class="form-control">
						<?php
						echo '<option value="1">1</option>';
						for( $i= 0 ; $i <= 10 ; $i++ )
						{
						    echo '<option value="' . $i . '" >' . $i . '</option>';
						}
						?>
					</select>
				</div>
				<div class="col-xs-12 nopadding">
					<p id="sub-money">Rp. 250.000</p>
				</div>
			</div>
			<div class="col-xs-2 nopadding" id="item-delete">
				<a href="#"><span class="fa fa-trash" style="color:#EC644B; font-size: 18px; text-align: right;"></span></a>
			</div>
		</div>
		<!-- END ITEM -->
		<a href="#" data-toggle="modal" data-target="#myDiskon">	
			<div class="col-xs-12 detailsprice">
				<p id="diskon"><span class="fa fa-money"></span> &nbsp; Masukan Diskon</p>
			</div>	
		</a>
		<div class="row">
			<div class="col-xs-6" style="padding-right: 5px;">
				<a href="" class="btn btn-danger btn-next" style="width: 100%;">Batal</a>
			</div>
			<div class="col-xs-6" style="padding-left: 5px;">
				<a href="" class="btn btn-warning btn-next" style="width: 100%;">Lanjutkan Belanja</a>
			</div>
			<div class="col-xs-12" style="margin-top: 10px;">
				<a href="" class="btn btn-success btn-next" style="width: 100%;">Bayar</a>
			</div>
		</div>
	</div>
</div>

<!-- MODAL DISKON -->
  <div class="modal fade" id="myDiskon" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-money"></span> MASUKAN DISKON</h4>
        </div>
        <div class="modal-body">
          <div class="row">
          	<div class="col-xs-4" style="padding-right: 5px;">
          		<input type="text" name="" class="form-control" placeholder="%">
          	</div>
          	<div class="col-xs-8" style="padding-left: 5px;">
          		<input type="text" name="" class="form-control" placeholder="Rp" style="text-align: right;">
          	</div>
          </div>
        </div>
        <div class="modal-footer">
        	<button type="button" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- END MODAL DISKON -->