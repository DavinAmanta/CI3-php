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
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap"
			rel="stylesheet">
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
    /* General Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        transition: all 0.3s ease;
    }

    html {
        scroll-behavior: smooth;
    }

   

    /* Header */
    .header {
        padding: 30px 0;
    
    }

    .header__logo img {
        width: 90px;
        transition: transform 0.3s ease;
    }

    .header__logo img:hover {
        transform: scale(1.1);
    }

    .header__menu ul {
        display: flex;
        justify-content: center;
        gap: 20px;
        list-style: none;
    }

    .header__menu ul li a {
        color: #fff;
        font-size: 16px;
        text-decoration: none;
        font-weight: 500;
        padding: 10px 20px;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .header__menu ul li a:hover {
        color: #d32f2f;
        transform: scale(1.1);
    }

    /* Blog Section */
    .blog__details__title h2 {
        font-size: 36px;
        color: #fff;
        font-weight: 700;
        margin-bottom: 20px;
        text-align: center;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.4);
    }

    .blog__details__text p {
        font-size: 18px;
        color: #f1f1f1;
        line-height: 1.8;
        text-align: justify;
        margin-bottom: 20px;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .blog__details__social a {
        display: inline-block;
        font-size: 16px;
        color: #555;
        margin: 0 10px;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 6px;
        background: #333;
        transition: all 0.3s ease;
    }

    .blog__details__social a:hover {
        color: #fff;
        background-color: #d32f2f;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    /* Tags */
    .blog__details__tags a {
        background-color: #007bff;
        color: #fff;
        font-size: 14px;
        padding: 7px 15px;
        border-radius: 15px;
        margin: 6px;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .blog__details__tags a:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    /* Footer */
    footer {
        background-color: #333;
        padding: 40px 0;
        box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.5);
    }

    footer p {
        font-size: 14px;
        color: #ccc;
        line-height: 1.7;
        text-align: center;
        max-width: 900px;
        margin: 10px auto;
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin: 20px 0;
        padding: 12px;
    }

    .pagination a {
        padding: 12px 18px;
        font-size: 14px;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
        background: #2b2b2b;
        border-radius: 6px;
        border: 1px solid #3a3a3a;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease-in-out;
    }

    .pagination a:hover {
        color: #fff;
        background: #d32f2f;
        border-color: #c62828;
        box-shadow: 0 6px 15px rgba(211, 47, 47, 0.5);
    }

    .pagination a.active {
        background: #b71c1c;
        border-color: #8e0c0c;
        color: #fff;
        box-shadow: 0 5px 12px rgba(183, 28, 28, 0.6);
    }

    /* Blog Image */
    .blog__details__pic {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease;
    }

    .blog__details__pic:hover {
        transform: scale(1.05);
    }

    .blog__details__pic iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        border-radius: 15px;
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
							<a href="<?= base_url('') ?>">
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
							<a href="<?= base_url('admin/home') ?>"><span class="icon_profile"></span></a>
						</div>
					</div>
				</div>
				<div id="mobile-menu-wrap"></div>
			</div>
		</header>
		<!-- Header End -->



		<!-- Hero Section End -->

		<section class="blog-details spad">
			<div class="container">
				<div class="row justify-content-center">
					<!-- Blog Title and Social Links -->
					<div class="col-lg-8 mb-4">
						<div class="blog__details__title text-center">
							<h2 class="mb-3 font-weight-bold"><?= $konten->judul; ?></h2>
							<div class="blog__details__social d-flex justify-content-center">
								<a href="<?= $konfig->facebook; ?>" class="facebook mx-2" target="_blank">
									<i class="fa fa-facebook-square"></i> Facebook
								</a>
								<a href="<?= $konfig->instagram; ?>" class="pinterest mx-2" target="_blank">
									<i class="fa fa-instagram"></i> Instagram
								</a>
							</div>
						</div>
					</div>

					<!-- Blog Image -->
					<div class="col-lg-10 mb-4">
						<div class="blog__details__pic text-center"
							style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
							<?php if (!empty($konten->link)): ?>
							<iframe src="<?= $konten->link; ?>"
								style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; border-radius: 15px;"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen>
							</iframe>
							<?php else: ?>
							<p style="color: #888; font-size: 18px; padding: 20px;">Video tidak tersedia.</p>
							<?php endif; ?>
						</div>
					</div>


					<!-- Blog Content -->
					<div class="col-lg-12">
						<div class="blog__details__content">
							<div class="blog__details__text mb-4 mt-2">
								<p><?= $konten->keterangan; ?></p>
							</div>
							<div class="blog__details__tags d-flex flex-wrap justify-content-center">
								<?php foreach($kategori as $kate){ ?>
								<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"
									class="badge badge-primary mx-1 py-2 px-3">
									<?= $kate['nama_kategori'] ?>
								</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<style>
				.blog__details__pic img {
					max-width: 100%;
					height: auto;
					max-height: 600px;
					object-fit: cover;
				}

				.blog__details__social a {
					font-size: 16px;
					color: #555;
					text-decoration: none;
				}

				.blog__details__social a:hover {
					color: #000;
				}

				.blog__details__tags a {
					text-decoration: none;
					color: #fff;
				}

			</style>
		</section>

		<footer class="footer">
			<div class="page-up">
				<a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
			</div>
			<div class="container">
				<div class="row">
					<!-- Footer Left Section: Logo and Description -->
					<div class="col-lg-3">
						<div class="footer__logo">
							<a href="<?= base_url('') ?>"><img src="<?= base_url('assets/anime/') ?>img/aa.png" width="90"
									alt=""></a>
						</div>
					</div>
					<!-- Footer Middle Section: Navigation Links -->
					<div class="col-lg-6">
						<div class="footer__nav">
							<ul>
								<li class="active"><a href="<?= base_url('') ?>">Home</a></li>
								<?php foreach($kategori as $kate){ ?>
								<li><a
										href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?php echo $kate['nama_kategori'] ?></a>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<!-- Footer Right Section: Copyright and Links -->
					<div class="col-lg-3">
						<p>
							&copy; <script>
								document.write(new Date().getFullYear());

							</script> All rights reserved | This template is made with <i class="fa fa-heart"
								aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						</p>
					</div>
				</div>
			</div>
		</footer>






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
