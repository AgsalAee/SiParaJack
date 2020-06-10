<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Paramount Konveksi</title>
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/fonts/font.css" rel="stylesheet">
	<script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
	<script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>

	<link href="<?php echo base_url() . 'assets/dist/css/bootstrap-select.css' ?>" rel="stylesheet">
	<style>
		.asup {
			background-image: url('<?= base_url("") ?>');
			background-size: cover;
		}
	</style>
</head>

<body class="asup">
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url() ?>Home"><span>Paramount </span>- Jacket Malang</a>
			</div>
		</div>
	</nav>

	<div class="row"><br><br><br><br><br><br>
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<center><b>Silahkan Masuk</b></center>
				</div>
				&nbsp; &nbsp; &nbsp;<?php echo $this->session->flashdata('msg'); ?>

				<div class="panel-body">
					<form action="<?php echo base_url() . 'administrator/cekuser' ?>" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="username" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
							</div>
							you don't have an account?
							<a href="<?php echo base_url() ?>Register"><span> Register </span></a>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
							<button type="submit" class="btn btn-primary">Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->



	<script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

</html>