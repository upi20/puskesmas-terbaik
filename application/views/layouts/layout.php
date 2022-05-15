<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $this->page->generateTitle(); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<?= $this->page->generateCss(); ?>

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon">
					<i class="fas fa-clinic-medical"></i>
				</div>
				<div class="sidebar-brand-text mx-3 text-left">Rumah Sakit Terbaik</div>

			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<?php $active = $this->uri->segment(1) == null ? 'active' : ''; ?>
			<li class="nav-item <?= $active ?>">
				<a class="nav-link py-2" href="<?= site_url('') ?>">
					<i class="fas fa-home"></i>
					<span>Home</span></a>
			</li>

			<?php $active = $this->uri->segment(1) == 'kriteria' ? 'active' : ''; ?>
			<li class="nav-item <?= $active ?>">
				<a class="nav-link py-2" href="<?= site_url('kriteria') ?>">
					<i class="fas fa-list"></i>
					<span>Kriteria</span></a>
			</li>

			<?php $active = $this->uri->segment(1) == 'puskesmas' ? 'active' : ''; ?>
			<li class="nav-item <?= $active ?>">
				<a class="nav-link py-2" href="<?= site_url('puskesmas') ?>">
					<i class="fas fa-clinic-medical"></i>
					<span>Rumah Sakit</span></a>
			</li>

			<?php $active = $this->uri->segment(1) == 'rangking' ? 'active' : ''; ?>
			<li class="nav-item <?= $active ?>">
				<a class="nav-link py-2" href="<?= site_url('rangking') ?>">
					<i class="fas fa-fw fa-file"></i>
					<span>Hasil</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<span class="fw-bold font-weight-bold my-0 mr-0 ">Metode SAW - SPK Rumah Sakit Terbaik</span>
				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<?php $this->load->view($view, $data); ?>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>&copy; <?= date('Y') ?> | SPK Rumah Sakit Terbaik | 2113191036 - Muhamad Taufiq Hidayatuloh</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<script>
		var base_url = "<?php echo site_url(); ?>";
	</script>

	<?= $this->page->generateJs(); ?>

</body>

</html>
