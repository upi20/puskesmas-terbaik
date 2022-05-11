<!doctype html>
<html lang="en">

<head>
	<title>
		<?php echo $this->page->generateTitle(); ?>
	</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
	$this->page->generateCss();
	?>

	<style>
		body {
			padding-top: 70px;
		}

		.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			color: white;
			padding: 16px 0;
			background: rgb(4, 0, 55);
			background: -moz-linear-gradient(286deg, rgba(4, 0, 55, 1) 0%, rgba(8, 8, 8, 1) 100%);
			background: -webkit-linear-gradient(286deg, rgba(4, 0, 55, 1) 0%, rgba(8, 8, 8, 1) 100%);
			background: linear-gradient(286deg, rgba(4, 0, 55, 1) 0%, rgba(8, 8, 8, 1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#040037", endColorstr="#080808", GradientType=1);
			border-color: #080808;

		}

		.pd-bottom {
			padding-bottom: 80px;
		}

		.font-weight-bold {
			font-weight: bold;
		}

		.box-style-shadow {
			box-shadow: 0px 0px 30px -1px rgba(0, 0, 0, 0.1);
			-webkit-box-shadow: 0px 0px 30px -1px rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 0px 0px 30px -1px rgba(0, 0, 0, 0.1);
		}

		.label-kriteria {
			text-transform: capitalize;
			font-weight: normal;
			cursor: pointer;
			padding: 10px;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<nav class="navbar navbar-inverse navbar-fixed-top ">
			<div class="container">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand active" href="<?php echo site_url() ?>">SPK Uinv Metode SAW</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li <?php if ($this->uri->segment(1) == 'kriteria') {
								?> class="active" <?php
												} ?>><a href="<?php echo site_url('kriteria'); ?>">Kriteria</a></li>
							<li <?php if ($this->uri->segment(1) == 'universitas') {
								?> class="active" <?php
												} ?>><a href="<?php echo site_url('universitas'); ?>">Universitas</a></li>
							<li <?php if ($this->uri->segment(1) == 'rangking') {
								?> class="active" <?php
												} ?>><a href="<?php echo site_url('rangking'); ?>">Rangking</a></li>
						</ul>

					</div><!-- /.navbar-collapse -->
				</div>


			</div>
		</nav>
	</div>

	<div class="container pd-bottom">
		<?php $this->load->view($view, $data); ?>
	</div>

	<div class="footer">
		<div class="container">
			<p>Copyright &copy 2020 2113191073 Akbar Maulana M Tarumadoya</p>
		</div>
	</div>

	<script>
		var base_url = "<?php echo site_url(); ?>";
	</script>
	<?php
	$this->page->generateJs();
	?>

</body>

</html>
