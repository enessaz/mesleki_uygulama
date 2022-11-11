<?php
session_start();
ob_start(); 
if (isset($_SESSION['user'])) {
  echo"Giriş Yaptınız";
}
?>


<html lang="tr">

<head>

	<link href="https://fonts.googleapis.com/css?family=Sacramento|Sigmar+One|Ubuntu|ZCOOL+KuaiLe" rel="stylesheet">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="basket-fill.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->





	<title>Türkiyenin Tek Adresi</title>
</head>

<body>

	<div class="superNav border-bottom py-2 bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
					<select class="me-3 border-0 bg-light">
						<option value="en-us">TR-TR</option>
					</select>
					<span
						class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>enessaz.xyz</strong></span>
					<span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i>
						<strong>5070503593</strong></span>
				</div>
				<div
					class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
					<span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted"
							href="#">Shipping</a></span>
					<span class="me-3"><i class="fa-solid fa-file  text-muted me-2"></i><a class="text-muted"
							href="#">Policy</a></span>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
		<div class="container">
			<a class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> <strong>FİYAKO ALIŞVERİŞ</strong></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
				<div class="input-group">
					<span class="border-warning input-group-text bg-warning text-white"><i
							class="fa-solid fa-magnifying-glass"></i></span>
					<input type="text" class="form-control border-warning" style="color:#242121">
					<button class="btn btn-warning text-white">Arama</button>
				</div>
			</div>
			<div class=" collapse navbar-collapse" id="navbarNavDropdown">
				<div class="ms-auto d-none d-lg-block">
					<div class="input-group">
						<span class="border-warning input-group-text bg-warning text-white"><i
								class="fa-solid fa-magnifying-glass"></i></span>
						<input type="text" class="form-control border-warning" style="color:#111010">
						<button class="btn btn-warning text-white">Arama</button>
					</div>
				</div>
				<ul class="navbar-nav ms-auto ">
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase active" aria-current="page" href="index.html">Anasayfa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase" href="elektronik.html">Elektronik</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase" href="giyim.html">Giyim</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase" href="ev.html">Ev</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase" href="kitap,müzik.html">Kitap,Müzik </a>
					</li>
				</ul>
				<ul class="navbar-nav ms-auto ">
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-cart-shopping me-1"></i>
							Sepet</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase" href="giris.php"><i class="fa-solid fa-circle-user me-1"></i>
							Giriş</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<!-- Start WOWSlider.com BODY section -->
	<div id="wowslider-container1">
		<div class="ws_images">
			<ul>
				<li><img src="data1/images/ekran_alnts.jpg" alt="" title="" id="wows1_0" /></li>
				<li><img src="data1/images/apple_1.jpg" alt="" title="" id="wows1_1" /></li>
				<li><img src="data1/images/eleman.jpg" alt="" title="" id="wows1_2" /></li>
				<li><img src="data1/images/applewatchs82uphero220907_fullbleedimage.jpg.large.jpg" alt="" title=""
						id="wows1_3" /></li>
				<li><img src="data1/images/maxresdefault.jpg" alt="" title="" id="wows1_4" /></li>
				<li><a href="http://wowslider.net"><img src="data1/images/monsterbiomutantteknosafari.jpg"
							alt="slideshow javascript" title="" id="wows1_5" /></a></li>
				<li><img src="data1/images/samsung.jpg" alt="" title="" id="wows1_6" /></li>
			</ul>
		</div>
		<div class="ws_bullets">
			<div>
				<a href="#" title=""><span><img src="data1/tooltips/ekran_alnts.jpg" alt="" />1</span></a>
				<a href="#" title=""><span><img src="data1/tooltips/apple_1.jpg" alt="" />2</span></a>
				<a href="#" title=""><span><img src="data1/tooltips/eleman.jpg" alt="" />3</span></a>
				<a href="#" title=""><span><img
							src="data1/tooltips/applewatchs82uphero220907_fullbleedimage.jpg.large.jpg"
							alt="" />4</span></a>
				<a href="#" title=""><span><img src="data1/tooltips/maxresdefault.jpg" alt="" />5</span></a>
				<a href="#" title=""><span><img src="data1/tooltips/monsterbiomutantteknosafari.jpg"
							alt="" />6</span></a>
				<a href="#" title=""><span><img src="data1/tooltips/samsung.jpg" alt="" />7</span></a>
			</div>
		</div>
		<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">html5 slider</a> by
			WOWSlider.com v9.0</div>
		<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<br>
	<!-- End WOWSlider.com BODY section -->

	<!--Slider Deneme
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner " >
		  <div class="carousel-item active">
			<img class="d-block w-100" src="carousel/apple 1.jpg" alt="First slide">
			<div class="carousel-caption d-none d-md-block">
				<h5>...</h5>
				<p>...</p>
			  </div>
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100" src="carousel/Apple-Watch-S8-2up-hero-220907_Full-Bleed-Image.jpg.large.jpg" alt="Second slide">
			<div class="carousel-caption d-none d-md-block">
				<h5>...</h5>
				<p>...</p>
			  </div>
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100" src="carousel/monster-biomutant-teknosafari.jpg" alt="Third slide">
			<div class="carousel-caption d-none d-md-block">
				<h5>...</h5>
				<p>...</p>
				<button class="btn-1">Satın Al</button>
				<button class="btn-2">İncele</button>
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
	  </div>-->


	<!--Slider Deneme-->

	<!--APPLE DENEMESİ-->
	<section class="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center">
					<img src="images/air.jpeg" alt="">
				</div>
				<div class="col-md-6">
					<div class="block">
						<h1 class="">Apple Airpods Pro Bluetooth Kulaklık - MLWK3TU/A</h1>
						<p>Kulaklarınıza inanamayacağınız kadar sihirli
							AirPods Pro, büyüleyici bir ses deneyimi için Aktif Gürültü Engelleme özelliğine, çevrenizi
							duyabilmeniz için Şeffaf Mod’a ve kişiye özel gün boyu kullanım rahatlığına sahip. AirPods
							Pro da tıpkı AirPods gibi Apple aygıtlarınıza adeta sihirli bir şekilde bağlanıyor. Ve
							kutusundan çıkar çıkmaz kullanıma hazır.</p>
						<a class="btn btn-main" href="#about" role="button">Şimdi Satın Al 9.299 TL</a>
					</div>
				</div>
			</div><!-- .row close -->
		</div><!-- .container close -->
	</section><!-- header close -->

	<br><br><br><br><br>

	<section class="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center">
					<img src="images/monster 1.png" alt="">
				</div>
				<div class="col-md-6">
					<div class="block">
						<h1 class="">Abra A5 V17.21 5,6" Oyun Bilgisayarı</h1>

						<p>Intel® Tiger Lake Core™ i5-11400H 6C/12T; 12MB L3; 8GT/s; 2.7GHz > 4.5GHz; 45W; 10nm SuperFin
							Nvidia RTX3050 TI Max-Performance 4GB GDDR6 128-Bit DX12
							15,6" FHD 1920x1080 144Hz AHVA Mat LED Ekran
							8GB (1x8GB) DDR4 1.2V 3200MHz SODIMM
							500GB PCIe M.2 2280 3.0 x4
							FreeDos (İşletim sistemi bulunmamaktadır.
							3 Adet Disk Desteği (2x M.2 SSD + 1x 2.5" Disk)
							RGB Tek Bölge Aydınlatmalı Klavye
							24,9mm Kalınlık
							2,2kg Ağırlık
							Alüminyum İle Güçlendirilmiş Kasa
							Monster Sırt Çantası Hediye</p>
						<a class="btn btn-main" href="#about" role="button">Şimdi Satın Al 21.999 TL</a>
					</div>
				</div>
			</div><!-- .row close -->
		</div><!-- .container close -->
	</section><!-- header close -->

	<br><br><br><br><br>

	<section class="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center">
					<img src="images/MKU83_VW_34FR+watch-41-stainless-graphite-cell-8s_VW_34FR_WF_CO_GEO_TR.jpeg"
						alt="">
				</div>
				<div class="col-md-6">
					<div class="block">
						<h1 class="">Smart Watch</h1>
						<p>Öne Çıkan Bilgiler
							Garanti Tipi:Resmi Distribütör Garantili
							<br>
							Renk: Gri
							<br>
							Adımsayar: Var
						</p>
						<a class="btn btn-main" href="#about" role="button">Şimdi Satın Al 735 TL</a>
					</div>
				</div>
			</div><!-- .row close -->
		</div><!-- .container close -->
	</section><!-- header close -->






	<br>
	<!--Abone Ol-->
	<section class="call-to-action section bg-opacity bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow text-center">
					<div class="block">
						<h2 class="subheading">Geleceği Keşfedin</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
						<div class="col-lg-6 offset-lg-3">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Your Email Address Here">
								<span class="input-group-btn">
									<button class="btn btn-dark btn-main" type="button">Abone Ol</button>
								</span>
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div>
				</div>
			</div>
		</div>
	</section><!-- #call-to-action close -->




	<!--GEÇİŞLİ DENEME-->

	<div class="container text-center my-3">
		<h2 class="font-weight-light">Fırsat Ürünleri</h2>
		<div class="row mx-auto my-auto justify-content-center">
			<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="images/showcase-1.png" class="img-fluid">
								</div>
								<div class="card-img-overlay">Deneme 1</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="images/showcase-2.png" class="img-fluid">
								</div>
								<div class="card-img-overlay">Deneme 1</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="images/showcase-3.png" class="img-fluid">
								</div>
								<div class="card-img-overlay">Deneme 1</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="images/showcase-4.png" class="img-fluid">
								</div>
								<div class="card-img-overlay">Deneme 1</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="images/showcase-5.png" class="img-fluid">
								</div>
								<div class="card-img-overlay">Deneme 1</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="images/showcase-6.png" class="img-fluid">
								</div>
								<div class="card-img-overlay">Deneme 1</div>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
					data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				</a>
				<a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
					data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				</a>
			</div>
		</div>
	</div>






	<!--GEÇİŞLİ DENEME-->





















	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function () {
			'use strict';
			window.addEventListener('load', function () {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function (form) {
					form.addEventListener('submit', function (event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>






	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Üye Girişi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form class="needs-validation">
						<label for="exampleInputEmail1"></label>

						<div class="row m-3">
							<input type="email" class="form-control w-100" id="exampleInputEmail1"
								aria-describedby="emailHelp" placeholder="E Posta" required>
							<div class="invalid-feedback">
								Lütfen Geçerli Bir E-Posta Giriniz!
							</div>

						</div>
						<div class="row m-3">
							<label for="exampleInputPassword1"></label>
							<input type="password" class="form-control w-100" id="exampleInputPassword1"
								placeholder="Şifre" required>
							<div class="invalid-feedback">
								Lütfen Şifrenizi Giriniz!
							</div>
						</div>
						<div class="row m-3">
							<input type="checkbox" class="form-check-input  " id="exampleCheck1" required>
							<label class="form-check-label" for="exampleCheck1">Üyelik Şartlarını Kabul Ediyorum</label>
						</div>
						<button type="submit" class="btn btn-primary ml-3">Giriş</button>
					</form>

				</div>
			</div>
		</div>

	</div>

	<footer class="bg-dark py-3">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					&copy;2022 Tüm Hakları Saklıdır<a target="_blank" href="" title=""> </a>
				</div>
				<div class="col-sm-6">
					<ul class="social-icons fot ">
						<li><a href="https://tr-tr.facebook.com/enes.saz.7" class="text-white"><i
									class="fa-brands fa-facebook animate__heartBeat"></i></a></li>
						<li><a href="https://www.instagram.com/enessaz/" class="text-white"><i
									class="fa-brands fa-instagram animate__heartBeat"></i></a></li>
						<li><a href="https://twitter.com/enessaz6" class="text-white"><i
									class="fa-brands fa-twitter animate__heartBeat"></i></a></li>
						<li><a href="https://github.com/enessaz/web" class="text-white"><i
									class="fa-brands fa-github animate__heartBeat"></i></a></li>





					</ul>
				</div>
			</div>
		</div>


	</footer>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>




	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<!--Bootstrap Multi Slide Carousel Java Kodları-->
	<script>let items = document.querySelectorAll('.carousel .carousel-item')

		items.forEach((el) => {
			const minPerSlide = 4
			let next = el.nextElementSibling
			for (var i = 1; i < minPerSlide; i++) {
				if (!next) {
					// wrap carousel by using first child
					next = items[0]
				}
				let cloneChild = next.cloneNode(true)
				el.appendChild(cloneChild.children[0])
				next = next.nextElementSibling
			}
		})
	</script>
</body>

</html>