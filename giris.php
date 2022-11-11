<?php
error_reporting(0);

include("baglan.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/kullanicikayit.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="basket-fill.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
		
  <title>Document</title>
</head>

<body style="background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );">

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
						<a class="nav-link mx-2 text-uppercase " aria-current="page" href="index.php">Anasayfa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase" href="elektronik.html">Elektronik</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase " href="giyim.html">Giyim</a>
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
						<a class="nav-link mx-2 text-uppercase active" href="#"><i class="fa-solid fa-circle-user me-1"></i>
							Giriş</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>











  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 background">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
              <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                <div class="card-img-left d-none d-md-flex">
                  <!-- Background image for card set in CSS! -->
                </div>
                <div class=" card-body p-4 p-sm-5">
                  <h5 class="card-title text-center mb-5 fw-light fs-5">Kayıt Ol</h5>
                  <form action="" method="POST">

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInputUsername" name="adSoyad" placeholder="Ad Soyad" required autofocus>
                      <label for="floatingInputUsername">Ad Soyad</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInputEmail" name="eMail" placeholder="isim@mail.com">
                      <label for="floatingInputEmail">Email adresi</label>
                    </div>

                    <hr>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" name="telefonNo" placeholder="5070555555">
                      <label for="floatingInputEmail">Telefon Numarası</label>
                    </div>

                    <hr>

                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" name="sifre" placeholder="Şifre">
                      <label for="floatingPassword">Şifre</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPasswordConfirm" name="sifreTekrar" placeholder="Şifre Tekrar">
                      <label for="floatingPasswordConfirm">Şifre Tekrar</label>
                    </div>

                    <div class="d-grid mb-2">
                      <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit" name="kayitol">Kayıt Ol</button>
                    </div>

                    <a class="d-block text-center mt-2 small" href="anagiris.php">Hesabınız Varmı? Giriş Yap</a>

                    <hr class="my-4">



                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>


</body>







</html>
<?php
$adSoyad              = @$_POST["adSoyad"];
$eMail                  = @$_POST["eMail"];
$telefonNo              = @$_POST["telefonNo"];
$sifre                  = @$_POST["sifre"];
$sifreTekrar            = @$_POST["sifreTekrar"];


$save = $db->prepare("INSERT INTO kullanicikayit SET 
	adSoyad             =:adSoyad,
	eMail		            =:eMail,
	telefonNo			      =:telefonNo,
	sifre		            =:sifre
	
	");
$insert = $save->execute(
  array(
    "adSoyad"   => $adSoyad,
    "eMail"      => $eMail,
    "telefonNo"  => $telefonNo,
      "sifre"      => $sifre,

  )
);


if ($insert) {
  echo "Form Kaydedildi.";
} else {
  echo "Hata Var";
}
?>
