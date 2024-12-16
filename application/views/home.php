<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Anime Template">
	<meta name="keywords" content="Anime, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $judul; ?></title>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

	<!-- Css Styles -->
	<link rel="stylesheet" href="<?= base_url('assets/anime/') ?>css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/anime/') ?>css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/anime/') ?>css/elegant-icons.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/anime/') ?>css/plyr.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/anime/') ?>css/nice-select.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/anime/') ?>css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/anime/') ?>css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/anime/') ?>css/style.css" type="text/css">

	<style>
		html {
			scroll-behavior: smooth;
		}
		.pagination {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin: 20px 0;
    padding: 12px;
    border-radius: 10px;
}

.pagination a {
    position: relative;
    display: inline-block;
    padding: 12px 18px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    text-decoration: none;
    background: #2b2b2b; /* Tombol gelap */
    border-radius: 6px;
    border: 1px solid #3a3a3a;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3); /* Bayangan ringan */
}

.pagination a::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(211, 47, 47, 0.3);
    opacity: 0;
    transform: scale(0.9);
    transition: opacity 0.3s ease, transform 0.3s ease;
    border-radius: inherit;
    z-index: -1; /* Efek berada di bawah teks */
}

.pagination a:hover::after {
    opacity: 1;
    transform: scale(1.2); /* Efek membesar halus */
}

.pagination a:hover {
    color: #fff;
    background: #d32f2f; /* Merah aksen saat hover */
    border-color: #c62828;
    box-shadow: 0 6px 15px rgba(211, 47, 47, 0.5); /* Cahaya lembut */
}

.pagination a.active {
    background: #b71c1c; /* Tombol aktif lebih gelap */
    border-color: #8e0c0c;
    color: #fff;
    box-shadow: 0 5px 12px rgba(183, 28, 28, 0.6); /* Bayangan lembut */
    transform: scale(1.05); /* Sedikit diperbesar untuk menarik perhatian */
    transition: all 0.4s ease; /* Transisi lebih halus */
}

		

	</style>
	
</head>

<body>
	<!-- Header Section Begin -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<div class="header__logo">
						<a href="<?= base_url('home') ?>">
							<img src="<?= base_url('assets/anime/') ?>img/aa.png" width="90" alt="">
						</a>
					</div>
				</div>
				<div class="col-lg-8 mt-4">
					<div class="header__nav">
						<nav class="header__menu mobile-menu">
							<ul>
								<li class="active"><a href="<?= base_url('') ?>">Home</a></li>
								<?php foreach($kategori as $kate){ ?>
								<li><a
										href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?php echo $kate['nama_kategori'] ?></a>
								</li>
								<?php } ?>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-lg-2 mt-4">
					<div class="header__right">
						
						<a href="<?= base_url('auth/logout') ?>">17+</a>
						<a href="<?= base_url('admin/home') ?>"><span class="icon_profile"></span></a>
						<!-- <a href="#" class="search-switch"><span class="icon_search"></span></a> -->
					</div>
					
				</div>
			</div>
			<div id="mobile-menu-wrap"></div>
		</div>
	</header>
	<!-- Header End -->

	<!-- Hero Section Begin -->
	<section class="hero">
		<div class="container">
			<div class="hero__slider owl-carousel">
				<?php foreach ($caraousel as $aa) { ?>
				<div class="hero__items set-bg" data-setbg="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>">
					<div class="row">
						<div class="col-lg-6">
							<div class="hero__text">
								<div class="label">DAGAME</div>
								<h2><?= strtoupper($aa['judul']) ?></h2>
								<p>"The world is calling for a hero, and that hero is you. This is your chance to step
									up, embrace the journey, and prove that you have the strength, courage, and skill to
									overcome any challenge that comes your way!"</p>
								<a href="#game"><span>Play Now</span> <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<!-- Hero Section End -->

	<!-- Product Section Begin -->
	<section class="product spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="trending__product">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-8">
								<div class="section-title" id="game">
									<h4>Game Populer</h4>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">

							</div>
						</div>
						<?php
// Define how many items per page
$items_per_page = 8;

// Get the current page from URL or default to 1
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the starting index
$start = ($current_page - 1) * $items_per_page;

// Slice the array to get the items for the current page
$paginated_konten = array_slice($konten, $start, $items_per_page);

?>

						<div class="row">
							<?php 
							shuffle($paginated_konten);
							foreach($paginated_konten as $aa){ ?>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="product__item">
								<a href="<?= base_url('home/artikel/'.$aa['slug']) ?>">
										<div class="product__item__pic set-bg"
											data-setbg="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>"
											style="height:380px; width:250px;">
										</div>
									</a>
									<div class="product__item__text">
										<ul>
											<li><?= $aa['nama_kategori'] ?></li>
										</ul>
										<h5><a
												href="<?= base_url('home/artikel/'.$aa['slug']) ?>"><?= $aa['judul'] ?></a>
										</h5>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>

						<!-- Pagination Links -->
						<div class="pagination">
							<?php
    $total_pages = ceil(count($konten) / $items_per_page); // Calculate total pages
    for ($i = 1; $i <= $total_pages; $i++) {
		echo '<a href="?page=' . $i . '#game" ' . ($i == $current_page ? 'class="active"' : '') . '>' . $i . '</a>';
    }
    ?>
						</div>

					</div>
					 

					<div class="popular__product">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-8">
								<div class="section-title">
									<h4>FPS</h4>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="btn__all">
									<a href="<?= base_url('home/kategori/12') ?>" class="primary-btn">View All <span
											class="arrow_right"></span></a>
								</div>
							</div>
						</div>
						<div class="row">
							<?php 
        $counter = 0; // Initialize counter
        foreach($konten as $aa) { 
            if($aa['id_kategori'] == 12) {
                $counter++; // Increment counter
                if ($counter > 4) break; // Stop loop after 4 items
        ?>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="product__item">
									<a href="<?= base_url('home/artikel/'.$aa['slug']) ?>">
										<div class="product__item__pic set-bg"
											data-setbg="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>"
											style="height:340px; width:250px;">
										</div>
									</a>
									<div class="product__item__text">
										<!-- Add other details here if needed -->
									</div>
								</div>
							</div>
							<?php 
            } 
        } 
        ?>
						</div>
					</div>
					<div class="popular__product">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-8">
								<div class="section-title">
									<h4>ACTION</h4>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="btn__all">
									<a href="<?= base_url('home/kategori/9') ?>" class="primary-btn">View All <span
											class="arrow_right"></span></a>
								</div>
							</div>
						</div>
						<div class="row">
							<?php 
        $counter = 0; // Initialize counter
        foreach($konten as $aa) { 
            if($aa['id_kategori'] == 9) {
                $counter++; // Increment counter
                if ($counter > 4) break; // Stop loop after 4 items
        ?>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="product__item">
								<a href="<?= base_url('home/artikel/'.$aa['slug']) ?>">
										<div class="product__item__pic set-bg"
											data-setbg="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>"
											style="height:340px; width:250px;">
										</div>
									</a>
									<div class="product__item__text">
										<!-- Add other details here if needed -->
									</div>
								</div>
							</div>
							<?php 
            } 
        } 
        ?>
						</div>
					</div>
					<div class="popular__product">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-8">
								<div class="section-title">
									<h4>RACING</h4>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="btn__all">
									<a href="<?= base_url('home/kategori/11') ?>" class="primary-btn">View All <span
											class="arrow_right"></span></a>
								</div>
							</div>
						</div>
						<div class="row">
							<?php 
        $counter = 0; // Initialize counter
        foreach($konten as $aa) { 
            if($aa['id_kategori'] == 11) {
                $counter++; // Increment counter
                if ($counter > 4) break; // Stop loop after 4 items
        ?>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="product__item">
								<a href="<?= base_url('home/artikel/'.$aa['slug']) ?>">
										<div class="product__item__pic set-bg"
											data-setbg="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>"
											style="height:340px; width:250px;">
										</div>
									</a>
									<div class="product__item__text">
										<!-- Add other details here if needed -->
									</div>
								</div>
							</div>
							<?php 
            } 
        } 
        ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Product Section End -->

	<!-- Footer Section Begin -->
	<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <!-- Footer Left Section: Logo and Description -->
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="<?= base_url('') ?>"><img src="<?= base_url('assets/anime/') ?>img/aa.png" width="90" alt=""></a>
                </div>
            </div>
            <!-- Footer Middle Section: Navigation Links -->
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="<?= base_url('') ?>">Home</a></li>
                        <?php foreach($kategori as $kate){ ?>
                        <li><a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?php echo $kate['nama_kategori'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- Footer Right Section: Copyright and Links -->
            <div class="col-lg-3">
                <p>
                    &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
            </div>
        </div>
    </div>
</footer>
	<!-- Footer Section End -->



	<!-- Js Plugins -->
	<script src="<?= base_url('assets/anime/') ?>js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url('assets/anime/') ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/anime/') ?>js/player.js"></script>
	<script src="<?= base_url('assets/anime/') ?>js/jquery.nice-select.min.js"></script>
	<script src="<?= base_url('assets/anime/') ?>js/mixitup.min.js"></script>
	<script src="<?= base_url('assets/anime/') ?>js/jquery.slicknav.js"></script>
	<script src="<?= base_url('assets/anime/') ?>js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/anime/') ?>js/main.js"></script>


</body>

</html>
