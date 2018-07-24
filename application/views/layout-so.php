<!doctype html>
<html lang="en">

<head>
	<title>Sales Order</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- DataTables -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pace-min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pace-min.js"></script>
	<!-- ICONS -->
	<meta name="theme-color" content="#fff">
	<meta name="apple-mobile-web-app-capable" content="yes">
	
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="<?php echo base_url() ?>assets/img/favicon.png">
	<style type="text/css">
		body{
			background: #fff;
		}
	</style>
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top" style="background: #fff;">
			<div class="brand">
				<a href="#"><img src="<?php echo base_url(); ?>assets/img/logo-akure.png" alt="Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars" alt="Menu"></i></button>
					<button type="button"><i class="fa fa-chevron-left" onclick="goBack()" alt="Back"></i></button>
					<script>
						function goBack() {
						window.history.back();
						}
					</script>
					<span style="text-transform: uppercase; font-weight: 600;"><?php echo $title; ?></span>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar" style="background: #fefefe">
			<div id="scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-gears light-blue"></i> <span>Setting</span></a></li>
						<li><a href="<?php echo base_url() ?>laporan"><i class="fa fa-sign-out red"></i> <span>Logout</span></a></li>
					</ul>
				</nav>
			</div>
			
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main" style="padding-top: 80px;">	
			<?php $this->load->view($content); ?>
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
	</div>
	<!-- END WRAPPER -->
	
		
        
	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jQuery-slimScroll-1.3.8/jquery.slimscroll.min.js"></script>
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
	                "sInfoFiltered": "(Difilter dari _MAX_ total data)",
	                "sZeroRecords": "Pencarian tidak ditemukan",
	                "sEmptyTable": "Data Kosong",
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
		$(function(){
    $('#scroll').slimScroll({
	    height: 'auto',
	    size: '10px',
	    color:'#ccc'
	    });
	});
	</script>
	
</body>
</html>
