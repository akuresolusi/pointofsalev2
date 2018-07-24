<!-- MODAL CARI PElANGGAN -->
<div class="modal fade" id="modal-pelanggan" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pencari Pelanggan</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid nopadding">
			  	<div class="form-group">
				  	<div class="form-group col-md-12">
				  		<input type="text" class="form-control" id="caripelanggan" placeholder="Cari Entitas Pelanggan" required="">
				  	</div>
			  	</div>
			  	<div class="form-group">
				  	<div class="form-group col-md-12">
				  		<table class="table" id="tb" style="margin-top: 0px">
					  			<!-- THEAD -->
					  			<tr align="left">
					  				<th width="10px">No</th>
					  				<th width="150px">Nama Lengkap</th>
					  				<th width="120px">Jenis Kelamin</th>
					  				<th width="250px" >Alamat</th>
					  				<th>No Hp/Telp</th>
					  				<th>Kategori</th>
					  				<th width="10"></th>
					  			</tr>
					  			<!-- END THEAD -->
					  			<!-- TBODY -->
					  			<tbody id="hasilpencarian">
					  			</tbody>
					  			<!-- END TBODY -->
					  		</table>
				  	</div>
			  	</div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- END MODAL -->