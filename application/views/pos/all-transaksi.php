<div class="panel panel-default panel-title">
	<div class="panel-body title-pos">
		<div class="col-md-6" style="padding: 0;">
    		<span id="sub-title">Laporan</span>
    		<h3 class="page-title"><?php echo $title; ?></h3>
		</div>
	</div>
</div>
<div class="panel panel-headline">
	<div class="panel-body">
		<div class="row">
			<form>
				<div class="form-group col-md-3">
			    	<label>Dari Tanggal</label> 
			    	<input type="date" required="" class="form-control">
			    </div>
			     
			    <div class="form-group col-md-3">
			    	<label>Ke Tanggal</label>
			    	<input type="date" required="" class="form-control">
			    </div>
			    <div class="form-group col-md-1">
			    	<label>&nbsp;</label>
			    	<button type="submit" class="btn btn-primary"><span class="fa fa-filter"></span> Filter</button>
			    </div>
		    </form>
		</div>
		<table id="data" class="table table-striped table-hover table-bordered">
			<thead>
				<th width="10">No</th>
				<th>Tanggal</th>
				<th>Customer</th>
				<th>Total</th>
				<th>Diskon</th>
				<th>Grand Total</th>
				<th>Jenis Pembayaran</th>
				<th>Dibayar</th>
				<th>Kembalian</th>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>21/02/2018</td>
					<td>Agus Setiawan</td>
					<td>Rp 20.000</td>
					<td>0</td>
					<td>Rp 20.000</td>
					<td>Cash</td>
					<td>Rp 50.000</td>
					<td>Rp 30.000</td>
				</tr>
			</tbody>
		</table>
		<a type="submit" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
	</div>
</div>