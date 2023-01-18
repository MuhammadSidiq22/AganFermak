<!doctype html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/favicon.png">

	
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- floating WA -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/floating-whatsapp/floating-wpp.css">

	
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">

	<title>Fermak Levi's Anugrah</title>
	<style>
		@media (max-width: 575.98px) {
			.img-carousel{
				height: 300px;
			}
		}
	</style>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarscrl" data-bs-offset="0" class="scrollspy-example" tabindex="0">
	<!-- Navbar -->
	<nav id="navbarscrl" class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand fw-bold" href="">Fermak Levi's Anugrah</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav mx-auto">
					<a class="nav-link fw-bold" href="#layanan">Layanan</a>
					<a class="nav-link fw-bold" href="#galeri">Galeri</a>
					<a class="nav-link fw-bold" href="#lokasi">Lokasi</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- end Navbar -->

	<!-- Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<?php foreach($banner as $key => $b) : ?>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $key ?>" class="<?= ($key==0) ? 'active':'' ?>" aria-current="true" ></button>
			<?php endforeach ?>
		</div>
		<div class="carousel-inner">
			<?php foreach($banner as $key => $b) : ?>
				<div class="carousel-item <?= ($key==0) ? 'active':'' ?>">
					<img src="<?= base_url('assets/img/banner/').$b->banner ?>" height="500px" class="img-carousel d-block w-100">
				</div>
			<?php endforeach ?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<!-- end Carousel -->

	<!-- keuntungan -->
	<div class="container mt-4 ">
		<div class="text-center mb-4">
			<div class="row">
				<h3 class="fw-bolder text-primary"><?= $info->judul ?></h3>
				<p class="text-primary"><?= $info->slogan ?></p>
			</div>
			<div class="row m-4 d-flex justify-content-center">
				<div class="col-6 col-md-4">
					<div class="row">
						<div class="text-center">
							<img src="<?= base_url('assets/img/icons/')."hematwaktu.png" ?>" class="card-img-top w-25">
						</div>
					</div>
					<div class="row">
						<p class="text-primary fw-bold">Hemat Waktu</p>
					</div>
			</div>
		</div>
	</div>
	<!-- end Keuntungan -->

	<!-- layanan -->
	<div class="bg-light p-4" id="layanan">
		<div class="container">
			<div class="row text-center">
				<h4 class="fw-bold text-primary">Layanan</h4>
			</div>
			<div class="row mt-4">
				<?php foreach($layanan as $l) : ?>
				<div class="col-6 col-md-3 col-sm-6 mt-2">
					<div class="card">
						<div class="text-center">
							<img src="<?= base_url('assets/img/icons/layanan/').$l->gambar ?>" height="200px"
								class="card-img-top img-thumbnail w-100">
						</div>
						<div class="card-body text-center">
							<p class="card-text text-primary fw-bold"><?= $l->nama ?></p>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<!-- end layanan -->

	<!-- galeri -->
	<div class="container p-4" id="galeri">
		<div class="row text-center">
			<h4 class="fw-bold text-primary">Galeri</h4>
		</div>
		<div class="row mt-4">
			<?php foreach($galeri as $g) : ?>
			<div class="col-6 col-md-3 col-sm-6">
				<div class="card">
					<div class="text-center">
						<img src="<?= base_url('assets/img/galeri/').$g->gambar ?>"
							class="img-fluid card-img-top img-thumbnail w-100">
					</div>

				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
	<!-- end galeri -->

	<!-- Lokasi -->
	<div class="bg-light mb-4 mt-4" id="lokasi">
		<div class="container p-4">
			<div class="row text-center">
				<h4 class="fw-bold text-primary">Lokasi</h4>
			</div>
			<div class="row mt-4">
				<div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.2776547399694!2d105.29332046050483!3d-5.349236154357616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c53b571f0361%3A0x7ea8d39ced3fc1dd!2sFermak%20Levi&#39;s%20Anugrah!5e0!3m2!1sid!2sid!4v1669798808067!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
				</div>
				<div class="col-md-4">
					<div class="row">
						<h5 class="fw-bolder">Alamat</h5>
						<p><?= $info->alamat ?></p>
					</div>
					<div class="row">
						<h5 class="fw-bolder">Jam Buka</h5>
						<table class="table">
							<?php foreach($hari as $h): ?>
							<tr>
								<td><?= $h->hari ?></td>
								<td><?= $h->jam ?></td>
							</tr>
							<?php endforeach ?>
						</table>
					</div>
					<div class="row">
						<h5 class="fw-bolder">Kontak</h5>
						<p>+<?= $info->kontak ?></p>
						<div class="row">
							<div class="col">
								<a href="https://api.whatsapp.com/send?phone=<?= $info->kontak ?>&text=Saya%20mau%20memesan%20...."
									target="_blank" class="text-light btn btn-success"><i class="fa fa-whatsapp"></i> WhatsApp</a> <a
									href="tel: <?= $info->kontak ?>" class="text-light btn btn-dark"><i class="fa fa-phone"></i>
									Telepon</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end Lokasi -->


</body>

</html>
