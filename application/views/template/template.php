<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('template/_partial/head') ?>
</head>

<body class="g-sidenav-show  bg-gray-200">
	<?php $this->load->view('template/_partial/aside') ?>

	<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
		<!-- Navbar -->
		<?php $this->load->view('template/_partial/navbar') ?>
		<!-- End Navbar -->
		<script src="<?= base_url() ?>assets/js/jquery.js"></script>
		<?= $contents ?>
	</main>

	<div class="fixed-plugin">
		<!-- <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
			<i class="material-icons py-2">settings</i>
		</a> -->
		<div class="card shadow-lg">
			<div class="card-header pb-0 pt-3">
				<div class="float-end mt-4">
					<button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
						<i class="material-icons">clear</i>
					</button>
				</div>
				<!-- End Toggle Button -->
			</div>
			<div class="card-body pt-sm-3 pt-0">

				<p class="text-sm d-xl-none d-block mt-2">Anda dapat mengubah jenis sidenav hanya pada tampilan desktop.</p>
				<!-- Navbar Fixed -->
				<hr class="horizontal dark my-3">
				<div class="mt-2 d-flex">
					<h6 class="mb-0">Terang / Gelap (Gelap cocok digunakan saat malam/Terang cocok digunakan saat siang)</h6>
					<div class="form-check form-switch ps-0 ms-auto my-auto">
						<input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
							onclick="darkMode(this)">
					</div>
				</div>
				<hr class="horizontal dark my-sm-4">
				
			</div>
		</div>
	</div>
	<?php $this->load->view('template/_partial/js') ?>
</body>

</html>
