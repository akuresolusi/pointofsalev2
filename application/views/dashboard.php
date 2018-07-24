<style type="text/css">
	.title-ds{
	 	margin:20px 0 15px 0;
    	font-size: 20px;
    	font-weight: normal;
      	text-transform: uppercase;
	}
	.title-fav{
	 	margin:0;
	 	margin-bottom: 15px;
    	font-size: 18px;
    	font-weight: normal;
	}
    .nav-tabs{border: none;}
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; padding: 0 20px 15px 20px;}
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #2196f3 !important; background: transparent; }
        .nav-tabs > li > a::after { content: ""; background: #2196f3; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 350ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
	.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
	.tab-pane { padding: 5px 0; }
	.tab-content{padding:10px 0 0 0}
</style>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/chart/Chart.js"></script>
<div class="container">
  <ul class="page-breadcrumb breadcrumb">
      <li>
          <a href="index.html">Home</a>
      </li>
      <li>
          <span>Dashboard</span>
      </li>
  </ul>
</div>
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
				<div class="row">
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="icon-basket-loaded green"></i></span>
							<p>
								<span class="number">Rp 0</span>
								<span class="title">Pembelian Barang</span>
								<a href="<?php echo base_url() ?>pembelian"><span class="readmore">Lihat Data</span></a>
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="icon-handbag purple"></i></span>
							<p>
								<span class="number">Rp 0</span>
								<span class="title">Penjualan Barang</span>
								<a href="<?php echo base_url() ?>penjualan"><span class="readmore">Lihat Data</span></a>
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="icon-wallet blue"></i></span>
							<p>
								<span class="number">Rp 0</span>
								<span class="title">Hutang</span>
								<a href="#"><span class="readmore">Lihat Data</span></a>
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="icon-ban red"></i></span>
							<p>
								<span class="number">Rp 0</span>
								<span class="title">Laba Rugi</span>
								<a href="#"><span class="readmore">Lihat Data</span></a>
							</p>
						</div>
					</div>
				</div>
    <div class="panel panel-headline">
      <div class="panel-heading" style="border-bottom: 1px solid #eee;">
            <h3 class="title-fav">Grafik Penjualan</h3>
            <div class="right">
              <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#day" aria-controls="day" role="tab" data-toggle="tab">Hari</a></li>
              <li role="presentation"><a href="#week" aria-controls="week" role="tab" data-toggle="tab">Minggu</a></li>
              <li role="presentation"><a href="#month" aria-controls="month" role="tab" data-toggle="tab">Bulan</a></li>
            </ul>
            </div>
        </div>
      <div class="panel-body" style="padding: 10px 20px;">
				<div class="row">
					<div class="col-md-12">
						

            <!-- Tab panes -->
            <div class="tab-content" style="margin-bottom: 0;">
                <div role="tabpanel" class="tab-pane active" id="day">
                	<canvas id="hari"></canvas>
                </div>
                <div role="tabpanel" class="tab-pane" id="week">
                	<canvas id="minggu"></canvas>
                </div>
                <div role="tabpanel" class="tab-pane" id="month">
                	<canvas id="bulan"></canvas>
                </div>
            </div>
					</div>
				</div>
    </div>
</div>
			<div class="row">
				<div class="col-md-6">
					<!-- PRODUK TERATAS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="title-fav">Penjualan Produk Teratas</h3>
							<div class="right">
								<button type="button" class="btn-ftoggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<tbody>
									<tr>
										<td>1</td>
										<td><a href="#">Kulkas Sharp Side Bye Side SJIF85PBSL</a></td>
                    <td>20</td>
										<td>Rp. 15.231.000</td>
									</tr>
									<tr>
										<td>2</td>
										<td><a href="#">Baju cantik</a></td>
                    <td>10</td>
										<td>Rp. 9.000.000</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6"></div>
								<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Lihat Data</a></div>
							</div>
						</div>
					</div>
					<!-- END PRODUK TERATAS -->
				</div>

				<div class="col-md-6">
					<!-- KATEGORI -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="title-fav">Perjualan per Kategori</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<tbody>
									<tr>
										<td>1</td>
										<td><a href="#">Kemeja</a></td>
                    <td>20</td>
										<td>Rp. 15.231.000</td>
									</tr>
									<tr>
										<td>2</td>
										<td><a href="#">Kaos</a></td>
                    <td>10</td>
										<td>Rp. 15.231.000</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6"></div>
								<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Lihat Data</a></div>
							</div>
						</div>
					</div>
					<!-- END KATEGORI -->
				</div>
			</div>
		</div>
		</div>
	</div>
</div>

<!-- per HARI -->
<script>
    let myDay = document.getElementById('hari').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Source Sans Pro';
    Chart.defaults.global.defaultFontSize = 15;
    Chart.defaults.global.defaultFontColor = '#777';

    let massDay = new Chart(myDay, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['07.00', '09.00', '11.00', '13.00', '15.00', '17.00','19.00','21.00','23.00','00.00'],
        datasets:[{
          label:' Pendapatan ',
          data:[
            717594,
            481045,
            253060,
            146519,
            125162,
            95072,
            85320,
            102320,
            293027,
            120323
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(54, 162, 235, 0.6)',
          ],
        }]
      },
      options:{
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:10
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
  <!-- END per Hari -->

  <!-- per Minggu -->
<script>
    let myWeek = document.getElementById('minggu').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Source Sans Pro';
    Chart.defaults.global.defaultFontSize = 15;
    Chart.defaults.global.defaultFontColor = '#777';

    let massWeek = new Chart(myWeek, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu','Minggu'],
        datasets:[{
          label:' Pendapatan ',
          data:[
            617594,
            181045,
            153060,
            106519,
            105162,
            95072,
            324902
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderColor:'#777',
        }]
      },
      options:{
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:10
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
  <!-- END per Minggu -->

<!-- per Bulan -->
<script>
    let myMonth = document.getElementById('bulan').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Source Sans Pro';
    Chart.defaults.global.defaultFontSize = 15;
    Chart.defaults.global.defaultFontColor = '#777';

    let massMonth = new Chart(myMonth, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','November','Desember'],
        datasets:[{
          label:' Pendapatan ',
          data:[
            717594,
            481045,
            253060,
            146519,
            125162,
            95072,
            85320,
            102320,
            293027,
            120323,
            92830,
            79290
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)'
          ],
          borderColor:'#777',
        }]
      },
      options:{
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:10
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
  <!-- END per Bulan -->
