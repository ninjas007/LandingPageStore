<?php include 'functions.php'; ?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="http://www.clker.com/cliparts/v/u/x/p/Z/Z/todd-fish-md.png">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<title>Lautan Ikan</title>
	</head>
	<body>
		<!-- Start Navbar -->
		<div class="container" id="navbar-container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">
					<img src="http://www.clker.com/cliparts/v/u/x/p/Z/Z/todd-fish-md.png" width="30" height="30" alt="">
					<span style="color: #258ce6; font-family: Open Sans;">Lautan</span><span style="color: #074d87">Ikan.com</span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent" >
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#navbar-container">Beranda <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#col-contact">Kontak</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- End Navbar -->
		<!-- Start Slider -->
		<div class="section" id="carousel">
			<div class="container" id="main-container">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img id="img-carousel" class="d-block w-100" src="img/slider/ikan.jpg" width="600" height="400" alt="First slide" style="opacity: 0.8;">
							<div class="carousel-caption " id="carousel-caption">
								<a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#list-ikan">PILIH KOMODITI</a>
								<a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#kontak">PESAN MELALUI KONTAK</a>
								<a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#kurir">KAMI ANTAR</a>->
							</div>
						</div>
						
						<div class="carousel-item">
							<img id="img-carousel" class="d-block w-100" src="http://seafood.biz.id/wp-content/uploads/2017/07/udang-2.gif" width="600" height="400" alt="Second slide" >
							<div class="carousel-caption">
								<div class="carousel-caption">
									<p style="font-size: 40px; font-weight: 900; font-family: comic; text-shadow: 5px 5px 7px black;">Beli Banyak Dapat <br><span style="color: blue">DISKON LOH!!!</span></p>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<?php require 'list-ikan.php'; ?>
		<?php require 'kontak.php'; ?>
		<?php require 'kurir.php'; ?>
		<!-- End Slideer -->
		<!-- Kontak HP dan Alamat -->
		<div class="container" id="main-container" style="background-color: #f8f9fa;">
			<div class="row" style="text-align: center;">
				<div class="container">
				<marquee id="marquee">
					<span style="color: green;">Hubungi kami : </span> <img src="img/icon/hp.png" id="contact-image"> Telp : 0823 4823 6555 <img src="img/icon/wa.png" alt="kontak WA" id="contact-image"> WA : 0823 4823 6555 || Kami hanya menerima pesanan dari jam 05:00 - 11.00 || Buka setiap hari

				</marquee>
				</div>
			</div>
		</div>
		<!-- End Kontak -->
		<!-- Start Komoditi -->
		<div class="container" id="main-container" style="background-color:#E1F1F7;">
			<div class="container" style="background-color: #f8f9fa;">
				<h4 id="daftar-komoditas" style="border-bottom: 1px solid;">Daftar Komoditas</h4>
				<div class="category">
					<p style="padding-left: 20px; padding-bottom: 20px;">Kategori : Ikan Laut, Ikan Air Tawar, Udang
					</div>
				</div>
				<div class="card-fish" style="margin: 10px; margin-top: 20px;">
					<div class="card-deck">
						<div id="innerHtml">
							<div class="row">
								<?php
									$fishes = query("SELECT * FROM komoditas");
									foreach ($fishes as $fish):
								?>
								<div class="col-md-3">
									<div class="card" style="margin-bottom: 20px;">
										<a href=""><img id="img-ikan" class="card-img-top" src="img/ikan/<?= $fish['gambar']; ?>" width="300" height="250" alt="Card image cap"></a>
										<div class="card-body">
											<h5 class="card-title"><span id="nama-ikan"><?= $fish['nama']; ?></span></h5>
											<p class="card-text">Harga <span id="harga-ikan">Rp. <?= $fish['harga']; ?> /Kg</span></p>
											<p class="card-text"><small class="text-muted">Hub : 0823 4823 6555</small></p>
										</div>
									</div>
								</div>
								<?php endforeach ?>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="container-fluid" style="margin-top: 40px; background-color: #f8f9fa;">
					<footer><!--
						<div class="container-fluid" style="background-color: white;"> -->
							<h4 style="border-bottom: 1px solid grey;" >Hubungi Kami</h4>
							<div class="row" style="background-color: white; opacity: 0.8">
								<div id="col-contact" class="col-md-4">
									<h6>Lokasi Kami</h6>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.056797961362!2d122.51800426519485!3d-4.008745014240289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d988d6b0c8321ef%3A0x89fadc35e439449f!2zNMKwMDAnMzUuNSJTIDEyMsKwMzEnMDEuNiJF!5e0!3m2!1sid!2sid!4v1533287049681" width="300" height="150" frameborder="1" style="border:1px solid grey;" autofullscreen ></iframe>
								</div>
								<div id="col-contact" class="col-md-4">
									<h6>Social Media</h6>
									<ul style="padding-left: 0px;">
										<li id="contact-socmed"><a href=""><img src="img/icon/fb.png" alt="Facebook" width="30" height="30"> Facebook</a></li>
										<li id="contact-socmed"><a href=""><img src="img/icon/google+.jpg" alt="Google+" width="30" height="30"> Google</a></li>
										<li id="contact-socmed"><a href=""><img src="img/icon/wa2.png" alt="Whatsapp" width="30" height="30"> Whatsapp</a></li>
										<li id="contact-socmed"><a href=""><img src="img/icon/ig.png" alt="Instagram"  width="30" height="30"> Instagram</a></li>
									</ul>
									<br>
									
								</div>
								<div id="col-contact" class="col-md-4">
									<h6>Cara Kerja dan Pemesanan</h6>
									<ul style="padding-left: 0px;">
										<li style="list-style-type: none;">
											<a href="#" data-toggle="collapse" data-target="#demo1"> Cara Kerja Kami</a>
											<div id="demo1" class="collapse">
												<ul>
													<li>Pilih komoditi yang anda ingin pesan</li>
													<li>Hubungi kami melalui kontak</li>
													<li>Pengantaran pemesanan menggunakan agen kurir kami</li>
												</ul>
											</div>
										</li>
										<li style="list-style-type: none;">
											<a href="#" data-toggle="collapse" data-target="#demo2"> Alamat dan Nomor Kontak</a>
											<div id="demo2" class="collapse">
												<ul>
													<li>Kantor Utama : Jln. HEA. Mokodompit Lrg. Perintis</li>
													<li>Kontak WA : 0823 4823 6555</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
								<!-- </div> -->
							</div>
						</footer>
					</div>
					<div class="container-fluid" style="background-color: #f8f9fa">
						<p class="footer" style="text-align: center; padding: 5px; margin-bottom: 0px;">&copy;<a href="https://www.facebook.com/0x566F4e">Tayo</a><a href="https://www.pondokit.com"><span style="color: red;"> Pondok IT</span></a></p>
					</div>
					<!-- End Komoditi -->
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
				</body>
			</html>