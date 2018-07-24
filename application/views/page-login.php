<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login &mdash; Point Of Sale</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/simple-line-icons/simple-line-icons.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<meta name="theme-color" content="#6bb9f0">
	<link rel="icon" sizes="192x192" href="<?php echo base_url() ?>assets/img/favicon.png">
	<style type="text/css">
		body{
			    
			}
	</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="Logo" width="190" style="margin-bottom: 20px;"></div>
								<p class="lead">Silahkan masukan akun anda.</p>
							</div>
							<?php echo form_open(base_url().'welcome/proses_login'); ?>
								<div class="form-group">
									
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Nomor Handphone" name="nohp" id="nohp" type="text" autofocus="">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input class="form-control" placeholder="Password" name="password" id="password" type="password">
									</div>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Masuk &rarr;</button>
								<div class="bottom">
									<p style="margin-top: 20px; text-align: center;">&copy; 2018 <a href="#"> - Akure Solusi.</a> All Rights Reserved.</p>
								</div>
							<?php echo form_close() ?>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
