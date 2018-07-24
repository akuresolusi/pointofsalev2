<!-- MAIN CONTENT -->
<div class="container">
	<ul class="page-breadcrumb breadcrumb">
	    <li>
	        <a href="<?php echo base_url(); ?>dashboard">Home</a>
	    </li>	
	    <li>
	    	<span><?php echo $title; ?></span>
	    </li>
	</ul>
</div>
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-headline">
			<div class="panel-body">
				<div class="container nopadding">
					<a href="<?php echo base_url(); ?>pembelian/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"></span> Tambah Data</button></a>
				</div>
				<table id="data" class="table table-striped table-hover">
					<thead>
						<th style="text-align: left;">No</th>
						<th>Faktur</th>
						<th>Tanggal</th>
						<th>Referensi</th>
						<th>Supplier</th>
						<th>Syarat Pembayaran</th>
						<th width="10">Aksi</th>
					</thead>
					<tbody>
					<?php
						$i=0;
						foreach($list as $value) {
							$i++;
							$supplier = $this->master_model->detail_supplier($value['idsupplier']);
							$syaratbayar = $this->master_model->detail_syaratbayar($value['idsyaratbayar']);
							echo"
							<tr>
								<td>".$i."</td>
								<td>FB-".$value['faktur']."</td>
								<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
								<td>".$value['referensi']."</td>
								<td>".$supplier['nama']."</td>
								<td>".$syaratbayar['nama']."</td>
								<td style='text-align: center;'>
								<div class='dropdown'>
							        <a href='#'' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'><span class='fa fa-gear'></span></a>
							        <ul class='dropdown-menu pull-right'>
							            <li><a href='".base_url()."pembelian/details?faktur=".$value['faktur']."'><span class='fa fa-eye'></span> Lihat Data</a></li>
							            <li><a href='".base_url()."pembelian/edit?faktur=".$value['faktur']."'><span class='fa fa-edit'></span> Edit Data</a></li>
							            <li><a class='hapus_faktur' value='".$value['faktur']."' style='cursor: pointer;' ><span class='fa fa-trash'></span> Hapus Data</a></li>
							        </ul>
						    	</div>
							</td>
							</tr>";
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->


<script type="text/javascript">
	$(document).on("click", ".hapus_faktur", function(){
		var faktur = $(this).attr('value');
		$.ajax({
			type: "post",
			data: "faktur=" + faktur,
			url: '<?php echo base_url(); ?>pembelian/hapus_faktur',
			success: function(result){
				if(result == ""){
					 alert('Faktur Berhasil Dihapus');
					 location.reload();
				}else{
					alert(result);
				}
			}
		});
	});
</script>