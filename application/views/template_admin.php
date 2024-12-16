<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?= $judul_halaman; ?></title>
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" />
	<!-- CSS Styles -->
	<link rel="stylesheet" href="<?= base_url('assets/ready/') ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900">
	<link rel="stylesheet" href="<?= base_url('assets/ready/') ?>assets/css/ready.css">
	<link rel="stylesheet" href="<?= base_url('assets/ready/') ?>assets/css/demo.css">
</head>

<body>
	<div class="wrapper">
		<!-- Main Header -->
		<div class="main-header">
			<div class="logo-header">
				<a href="<?= base_url('home') ?>" class="logo"><?= $judul_halaman ?></a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
					data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<!-- Search Form -->
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<!-- Profile Dropdown -->
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
								aria-expanded="false">
								<span class="icon-class"><i class="la la-user"></i></span>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-text">
											<h4><?= $this->session->userdata('nama') ?></h4>
										</div>
									</div>
								</li>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="fa fa-power-off"></i> Logout</a>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<!-- Sidebar -->
		<div class="sidebar">
			<div class="scrollbar-inner sidebar-wrapper">
				<ul class="nav">
					<?php $menu = $this->uri->segment(2); ?>
					<li class="nav-item <?= ($menu == 'home') ? 'active' : '' ?>">
						<a href="<?= site_url('admin/home') ?>">
							<i class="la la-dashboard"></i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="nav-item <?= ($menu == 'kategori') ? 'active' : '' ?>">
						<a href="<?= site_url('admin/kategori') ?>">
							<i class="la la-table"></i>
							<p>Kategori Konten</p>
						</a>
					</li>
					<li class="nav-item <?= ($menu == 'konten') ? 'active' : '' ?>">
						<a href="<?= site_url('admin/konten') ?>">
							<i class="la la-folder"></i>
							<p>Konten</p>
						</a>
					</li>
                    <?php if($this->session->userdata('level')=='Admin'){ ?>
					<li class="nav-item <?= ($menu == 'user') ? 'active' : '' ?>">
						<a href="<?= site_url('admin/user') ?>">
							<i class="la la-user"></i>
							<p>User</p>
						</a>
					</li>
					<li class="nav-item <?= ($menu == 'konfigurasi') ? 'active' : '' ?>">
						<a href="<?= site_url('admin/konfigurasi') ?>">
							<i class="la la-edit"></i>
							<p>Konfigurasi</p>
						</a>
					</li>
					<li class="nav-item <?= ($menu == 'caraousel') ? 'active' : '' ?>">
						<a href="<?= site_url('admin/caraousel') ?>">
							<i class="la la-th"></i>
							<p>Caraousel</p>
						</a>
					</li>
                    <?php } ?>
				</ul>
			</div>
		</div>


		<!-- Main Panel -->
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<?= $contents; ?>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer class="footer">
			<div class="main-panel">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2018, made with <i class="la la-heart heart text-danger"></i> by <a
							href="http://www.themekita.com">ThemeKita</a>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- JavaScript -->
	<script src="<?= base_url('assets/ready/') ?>assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/core/popper.min.js"></script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/core/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/plugin/chartist/chartist.min.js"></script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js">
	</script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/plugin/chart-circle/circles.min.js"></script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/ready.min.js"></script>
	<script src="<?= base_url('assets/ready/') ?>assets/js/demo.js"></script>
	<script>
		$('#ngilang').delay('slow').delay(10000).slideUp(600);

	</script>
</body>

</html>
