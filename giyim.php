<?php
/* Verileri Çekme Bölümü */
include ("VT.php");

?>


<html lang="tr">

<head>

	<link href="https://fonts.googleapis.com/css?family=Sacramento|Sigmar+One|Ubuntu|ZCOOL+KuaiLe" rel="stylesheet">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="basket-fill.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">

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
					<span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>enessaz.xyz</strong></span>
					<span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i>
						<strong>5070503593</strong></span>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
					<span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted" href="#">Shipping</a></span>
					<span class="me-3"><i class="fa-solid fa-file  text-muted me-2"></i><a class="text-muted" href="#">Policy</a></span>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
		<div class="container">
			<a class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> <strong>FİYAKO ALIŞVERİŞ</strong></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
				<div class="input-group">
					<span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
					<input type="text" class="form-control border-warning" style="color:#242121">
					<button class="btn btn-warning text-white">Arama</button>
				</div>
			</div>
			<div class=" collapse navbar-collapse" id="navbarNavDropdown">
				<div class="ms-auto d-none d-lg-block">
					<div class="input-group">
						<span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
						<input type="text" class="form-control border-warning" style="color:#111010">
						<button class="btn btn-warning text-white">Arama</button>
					</div>
				</div>
				<ul class="navbar-nav ms-auto ">
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase " aria-current="page" href="index.php">Anasayfa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase" href="elektronik.php">Elektronik</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase active" href="giyim.php">Giyim</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase" href="ev.php">Ev</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase" href="kitap,müzik.php">Kitap,Müzik </a>
					</li>
				</ul>
				<ul class="navbar-nav ms-auto ">
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase" href="sepet.php"><i class="fa-solid fa-cart-shopping me-1"></i>
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

	<div class="container">

		<div class="row">

		<?php
				$sorgu = $baglan->prepare("SELECT * FROM `products`");
				
				$sorgu->execute();
				$rows = $sorgu->fetchAll(PDO::FETCH_ASSOC);
				foreach ($rows as $row) : ?>


				<div class="col-6 col-md-3 p-2">

					<div class="card">
					<img  style="width:auto;height: 100px;"src="admin/image/<?php echo $row['img_url']; ?>" alt="">
						<div class="card-body">
							<h6 class="card-title"><?php echo $row['product_name']; ?></h6>
							<p><?php echo $row['detail']; ?></p>
							<h4 class="card-body">
								<small><span class="text-secondary"><del>1299TL</del></span></small>
								<big><span class="text-danger"><?php echo $row['price']; ?></span></big>
							</h4>
							<div class="row">
								<div class="col-6 p-0 pr-1">
									<button class="btn btn-success btn-block addToCardBtn">Sepete Ekle</button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<?php endforeach ?>

		</div>
	</div>
	</div>

	<script src="jquery-3.6.1.min.js"></script>
	<script src="custom.js"></script>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



	<script src="kategoriler/popper.js" <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<!--Bootstrap Multi Slide Carousel Java Kodları-->
	<script>
		let items = document.querySelectorAll('.carousel .carousel-item')

		items.forEach((el) => {
			const minPerSlide = 4
			let next = el.nextElementSibling
			for (var i = 1; i < minPerSlide; i++) {
				if (!next) {
				
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