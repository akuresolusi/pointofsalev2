<!doctype html>
<html lang="en">

<head>
	<title><?php echo $title ?> &mdash; Akure Solusi</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist-custom.css">
		<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/shop.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/numpad/jquery.numpad.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- DataTables -->
	<link href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<!-- ICONS -->
	<meta name="theme-color" content="#6bb9f0">
	<style type="text/css">
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img{
			width: 100%;
			margin: auto;
			background-color: rgba(0, 0, 0, 0.7);
		}
		
	</style>
</head>

<body>
	<!-- NAVBAR -->
	 <nav class="navbar navbar-default ">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" id="toggle-custom" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar" id="custom-icon"></span>
	        <span class="icon-bar" id="custom-icon"></span>
	        <span class="icon-bar" id="custom-icon"></span>
	      </button>
	      <a class="navbar-brand" id="brand" href="#" >EasyShop<span style="font-size: 18px; font-weight: normal;">.co</span></a>
	      	<form class="navbar-form navbar-left" action="/action_page.php">
		      
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	      	<li><a href="#" id="menucolor"><span class="fa fa-home"></span></a></li>
	      	<li><a href="#" id="menucolor">Kategori</a></li>
	      	<li><a href="#" id="menucolor">Tentang Kami</a></li>
	      	<li><a href="#" id="menucolor">Hubungi Kami</a></li>
	      	<li><a href="#" id="menucolor"><span class="fa fa-user"></span></a></li>
	        <li><a href="#" id="menucolor"><span class="fa fa-shopping-cart"></span></a></li>
	      </ul>
	    </div>
	  </div>
	</nav> 


	<!-- CONTENT -->
	<div class="row">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px;">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active">
	        <img src="<?php echo base_url(); ?>assets/img/slide/sd4.jpg" alt="Chicago">
	        <div class="title-subtilte">
                <h3>Watch</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a href="" class="btn btn-primary btn-shop">Shop Now &rarr;</a>
            </div>
	        <div class="slider-overlay"></div>
	      </div>
	    
	      <div class="item">
	        <img src="<?php echo base_url(); ?>assets/img/slide/sd5.jpg" alt="New york">
	        <div class="title-subtilte">
                <h3>Street Bag</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a href="" class="btn btn-primary btn-shop">Shop Now &rarr;</a>
            </div>
	      </div>
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left" style="color: #3c4f91;"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right" style="color: #3c4f91;"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>
	<!-- END CONTETN -->

	<!-- CATALOG ITEM -->
	<div class="col-md-12">
	  <div  id="slider-text">
	      <h2>BEST SELLER</h2>
	      <p>Temukan pilihan produk terbaik anda.</p>
	      <hr id="line">
	  </div>
	</div>

<!-- Item slider-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url(); ?>assets/img/product/tas.png" class="img-responsive center-block"></a>
              <h4 class="text-center">STREET BAG</h4>
              <h5 class="text-center">Rp. 150.000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url(); ?>assets/img/product/jaket.png" class="img-responsive center-block"></a>
              <h4 class="text-center">JAKET</h4>
              <h5 class="text-center">Rp. 200.000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url(); ?>assets/img/product/kemeja.png" class="img-responsive center-block"></a>
              <h4 class="text-center">KEMEJA</h4>
              <h5 class="text-center">Rp. 100.000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url(); ?>assets/img/product/dress.png" class="img-responsive center-block"></a>
              <h4 class="text-center">DRESS</h4>
              <h5 class="text-center">Rp. 4000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url(); ?>assets/img/product/jam.png" class="img-responsive center-block"></a>
              <h4 class="text-center">JAM</h4>
              <h5 class="text-center">Rp. 4000</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="<?php echo base_url(); ?>assets/img/product/tshirt.png" class="img-responsive center-block"></a>
              <h4 class="text-center">T-SHIRT FLASH</h4>
              <h5 class="text-center">Rp. 4000</h5>
            </div>
          </div>

        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
</div>
	<!-- END CATALOG -->

	<!-- NEW COLLECTION -->
	<div class="col-md-12">
	  <div  id="slider-text">
	      <h2>NEW COLLECTION</h2>
	      <p>Produk-produk terbaru khusus untuk anda</p>
	      <hr id="line">
	  </div>
	</div>

	<div class="container-fluid">
		<div class="col-xs-6 col-sm-4 col-md-2">
			<div class="product">
				<a href="#"><img src="<?php echo base_url(); ?>assets/img/product/tshirt.png" class="img-responsive center-block"></a>
				<h4 id="title">T-SHIRT Original Made in Indonesia</h4>
				<p id="price">Rp.5000</p>
				<p id="dprice"><strike>Rp.10.000</strike></p>
				<span id="discount">20%</span>
				<div id="rating">
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span id="ulasan">20 Review</span>
				</div>
			</div>	
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2">
			<div class="product">
				<a href="#"><img src="<?php echo base_url(); ?>assets/img/product/kemeja.png" class="img-responsive center-block"></a>
				<h4 id="title">KEMEJA Original Made in Indonesia</h4>
				<p id="price">Rp.10.000</p>
				<p id="dprice"><strike>Rp.10.000</strike></p>
				<span id="discount">20%</span>
				<div id="rating">
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span id="ulasan">20 Review</span>
				</div>
			</div>	
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2">
			<div class="product">
				<a href="#"><img src="<?php echo base_url(); ?>assets/img/product/jaket.png" class="img-responsive center-block"></a>
				<h4 id="title">JAKET PARKA Original Made in Indonesia</h4>
				<p id="price">Rp.10.000</p>
				<p id="dprice"><strike>Rp.10.000</strike></p>
				<span id="discount">15%</span>
				<div id="rating">
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span id="ulasan">20 Review</span>
				</div>
			</div>	
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2">
			<div class="product">
				<a href="#"><img src="<?php echo base_url(); ?>assets/img/product/tas.png" class="img-responsive center-block"></a>
				<h4 id="title">STREET BAG Original Made in Indonesia</h4>
				<p id="price">Rp.10.000</p>
				<p id="dprice"><strike>Rp.10.000</strike></p>
				<span id="discount">10%</span>
				<div id="rating">
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span id="ulasan">20 Review</span>
				</div>
			</div>	
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2">
			<div class="product">
				<a href="#"><img src="<?php echo base_url(); ?>assets/img/product/dress.png" class="img-responsive center-block"></a>
				<h4 id="title">DRESS PURPLE Original Made in Indonesia</h4>
				<p id="price">Rp.10.000</p>
				<p id="dprice"><strike>Rp.10.000</strike></p>
				<span id="discount">30%</span>
				<div id="rating">
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span id="ulasan">20 Review</span>
				</div>
			</div>	
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2">
			<div class="product">
				<a href="#"><img src="<?php echo base_url(); ?>assets/img/product/jam.png" class="img-responsive center-block"></a>
				<h4 id="title">WATCH Original Made in Indonesia</h4>
				<p id="price">Rp.10.000</p>
				<p id="dprice"><strike>Rp.10.000</strike></p>
				<span id="discount">45%</span>
				<div id="rating">
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span id="ulasan">20 Review</span>
				</div>
			</div>	
		</div>
	</div>
	<div class="container">
		<h3 class="viewall"><a href="">Lihat Semua</a></h3>
	</div>
	<!-- END COLLECTION -->

	<!-- PRODUCT -->
	<div class="col-md-12">
	  <div  id="slider-text">
	      <h2>CATEGORY</h2>
	      <p>Produk-produk terbaru khusus untuk anda</p>
	      <hr id="line">
	  </div>
	</div>
	<!-- END PRODUCT -->
	
	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/numpad/jquery.numpad.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jQuery-slimScroll-1.3.8/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/klorofil-common.js"></script>

	<!-- DATA TABLES -->
	<script src="<?php echo base_url(); ?>assets/js/dataTables/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.buttons.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/buttons.bootstrap.min.js" type="text/javascript"></script>
        <script>
	    $(document).ready(function() {
	        $('#data').DataTable({
	            "oLanguage": {
	                "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
	                "sLengthMenu": "_MENU_ &nbsp;&nbsp;",
	                "sprimaryFiltered": "(difilter dari _MAX_ total data)",
	                "sZeroRecords": "Pencarian tidak ditemukan",
	                "sEmptyTable": "Data kosong",
	                "sLoadingRecords": "Harap Tunggu...",
	                "oPaginate": {
	                    "sPrevious": "Prev",
	                    "sNext": "Next"
	                }
	            }
	        });
	    });
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

		$('#itemslider').carousel({ interval: 3000 });

		$('.carousel-showmanymoveone .item').each(function(){
		var itemToClone = $(this);

		for (var i=1;i<6;i++) {
		itemToClone = itemToClone.next();

		if (!itemToClone.length) {
		itemToClone = $(this).siblings(':first');
		}

		itemToClone.children(':first-child').clone()
		.addClass("cloneditem-"+(i))
		.appendTo($(this));
		}
		});
		});

	</script>
	<script type="text/javascript">
		$(function(){
    $('#scroll').slimScroll({
	    height: 'auto',
	    size: '13px',
	    color:'#bbb'
	    });
	});
	</script>
	<script type="text/javascript">
	$(function() {
		// Set NumPad defaults for jQuery mobile. 
		// These defaults will be applied to all NumPads within this document!
		$.fn.numpad.defaults.gridTpl = '<table class="table modal-content" style="width:400px; height:300px;"></table>';
		$.fn.numpad.defaults.backgroundTpl = '<div class="modal-backdrop in"></div>';
		$.fn.numpad.defaults.displayTpl = '<input type="text" class="form-control  input-lg" style="width:100%; height:80px; font-size:30px;" />';
		$.fn.numpad.defaults.buttonNumberTpl =  '<button type="button" class="btn btn-default btn-lg" style="width:100%; height:80px; font-size:28px; "></button>';
		$.fn.numpad.defaults.buttonFunctionTpl = '<button type="button" class="btn btn-lg" style="width:100%; height:80px;"></button>';
		$.fn.numpad.defaults.onKeypadCreate = function(){$(this).find('.done').addClass('btn-primary');};
		
		// Instantiate NumPad once the page is ready to be shown
		$(document).ready(function(){
			$('.qty').numpad();
			$('#password').numpad({
				displayTpl: '<input class="form-control" type="password" />'		
			});
			$('#numpadButton-btn').numpad({
				target: $('#numpadButton'),
                                decimalSeparator: '.'
			});
			$('#numpad4div').numpad();
			$('#numpad4column .qtyInput').numpad();
		});
	});
</script>

</body>

</html>
