<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->

<?php 
include 'db/connect.php'; 
include 'db/process.php'; 

$mainsor=$db->prepare("select * from maintenance_mode");
$mainsor->execute(array(0));
$maincek=$mainsor->fetch(PDO::FETCH_ASSOC);

if ($maincek['main_control2']==1) {
  
    header("Location:bakim/index.php");
    exit;
}

$aboutsor=$db->prepare("select * from about");
$aboutsor->execute(array(0));
$aboutcek=$aboutsor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="tr">
<head>

	<!--===============================================================================================-->	
    <title>Versia Roleplay | Fivem GTA V Roleplay Server</title>
	<!--===============================================================================================-->	
	<meta content="Emre YOLCU" name="author">
	<!--===============================================================================================-->	
	<meta charset="utf-8">
	<!--===============================================================================================-->	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<!--===============================================================================================-->	
	<meta name="keywords" content="Versia, Versia Roleplay, Roleplay, Versia Roleplay, versiaoleplay, versiarp, Gta5, grand theft auto v, Fivem, Fivem TürkServer, Fivem GTA V Roleplay Server, Fivem GTA V, Fivem Türk Server, Fivem Türk, Rol, server, hardrp" />
	<!--===============================================================================================-->	
	<meta content="Versia Roleplay Fivem GTA5 Sunucusu. Şehrin tadına varmak için hemen katıl!" name="description">	
	<!--===============================================================================================-->	
	<link rel="icon" href="panel/dist/img/favicon.ico" type="ico" />
	<!--===============================================================================================-->	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" href="css/swiper.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" href="style.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" href="https://www.delac.io/wow/css/libs/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<!--===============================================================================================-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/custom.js"></script>
	<!--===============================================================================================-->
	<script data-ad-client="ca-pub-1462427973619691" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  	<!--===============================================================================================-->  
	<script type="text/javascript">
	var title = document.title;
	var alttitle = "Hey, Versia Roleplay'i unutma..!";
	window.onblur = function () { document.title = alttitle; };
	window.onfocus = function () { document.title = title; };
	</script>
	<!--===============================================================================================-->

</head>
<body oncontextmenu="return false"  onselectstart="return false" ondragstart="return false">

	<!--############################################################################################################################################-->
	<!--############################################################### HEADER #####################################################################-->
	<!--############################################################################################################################################-->

<header class="site-header">
		<div class="header-bar">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-10 col-lg-2 order-lg-1">
						<div class="site-branding">

							<div class="site-title">
								<a href="#"><img src="https://i.hizliresim.com/4ekp602.png" alt="logo"></a>
							</div>

						</div>

					</div>


<div class="col-2 col-lg-9 order-3 order-lg-2 wrapper fadeInDown">
	<nav class="site-navigation">
		<div class="hamburger-menu d-lg-none formContent">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>

					<ul>
						<li><a href="#" class="inactive underlineHover">Anasayfa</a></li>
						<li><a href="#biz-kimiz" class="inactive underlineHover">Biz Kimiz?</a></li>
						<li><a href="#oyundan-kareler" class="inactive underlineHover">Oyundan Kareler</a></li>
						<li><a href="#neden-nv-roleplay" class="inactive underlineHover">Neden Versia Roleplay?</a></li>
						<li><a href="#ekibimiz" class="inactive underlineHover">Ekibimiz</a></li>
						<li><a href="#sunucu-durumu" class="inactive underlineHover">Sunucu Durumu</a></li>
						<li><a href="#bize-ulasin" class="inactive underlineHover">Bize Ulaşın</a></li>
						<li><a class="panel" href="panel/login.php"><span>Panel</span></a></li>
					</ul>

				</nav>
			</div>


		</div>
	</div>
</div>



<div class="swiper-container hero-slider newskin">
	<div class="swiper-wrapper">
		<div class="swiper-slide" style="background: url('https://wallpaperaccess.com/full/4903539.jpg') no-repeat">
			<div class="hero-content">
				<div class="container">
					<div class="row">
						<div class="col flex flex-column justify-content-center">
							<div class="entry-header">

								<div class="banner_text">
									<h3 data-wow-iteration="1" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="50" class="span3 wow fadeInDownBig" style="font-size: 30px;">-Gerçek Fivem Deneyimi-</h3>
										<p data-wow-iteration="1" data-wow-delay="1s" data-wow-duration="1s" data-wow-offset="50" class="span3 wow fadeInDownBig" style="font-size: 100px; border-top: 5px solid white; border-bottom: 5px solid white; text-align: center; margin-left: 20%; margin-right: 20%; margin-bottom: 10px; margin-top: 10px;">VERSİA ROLEPLAY</p>
									<h3 data-wow-iteration="1" data-wow-delay="2s" data-wow-duration="1s" data-wow-offset="50" class="span3 wow fadeInDownBig" style="font-size: 30px;">-Şimdi Başlıyor-</h3>
								</div>

					</div><br><br><br><br><br><br><br><br>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="swiper-slide" style="background: url('https://wallpaperaccess.com/full/4903539.jpg') no-repeat">
	<div class="hero-content">
		<div class="container">
			<div class="row">
				<div class="col flex flex-column justify-content-center">
					<div class="entry-header">

						<div class="banner_text">
							<h3 data-wow-iteration="1" data-wow-delay="5s" data-wow-duration="1s" data-wow-offset="50" class="span3 wow fadeInDownBig" style="font-size: 30px;">-Daha Önce Görmediğiniz-</h3>
								<p data-wow-iteration="1" data-wow-delay="6s" data-wow-duration="1s" data-wow-offset="50" class="span3 wow fadeInDownBig" style="font-size: 100px; border-top: 5px solid white; border-bottom: 5px solid white; text-align: center; margin-left: 20%; margin-right: 20%; margin-bottom: 10px; margin-top: 10px;">ÖZEL SİSTEMLER</p>
							<h3 data-wow-iteration="1" data-wow-delay="7s" data-wow-duration="1s" data-wow-offset="50" class="span3 wow fadeInDownBig" style="font-size: 30px;">-Ve Özel Haritalar-</h3>
						</div>

					</div><br><br>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="swiper-slide" style="background: url('https://wallpaperaccess.com/full/4903539.jpg') no-repeat">
	<div class="hero-content">
		<div class="container">
			<div class="row">
				<div class="col flex flex-column justify-content-center">
					<div class="entry-header">

						<div class="banner_text">
							<h3 data-wow-iteration="1" data-wow-delay="8s" data-wow-duration="1s" data-wow-offset="50" class="span3 wow fadeInDownBig" style="font-size: 30px;">-Dünyada Tek-</h3>
								<p data-wow-iteration="1" data-wow-delay="9s" data-wow-duration="1s" data-wow-offset="50" class="span3 wow fadeInDownBig" style="font-size: 100px; border-top: 5px solid white; border-bottom: 5px solid white; text-align: center; margin-left: 20%; margin-right: 20%; margin-bottom: 10px; margin-top: 10px;">TÜM MAPLER AKTİF</p>
							<h3 data-wow-iteration="1" data-wow-delay="10s" data-wow-duration="1s" data-wow-offset="50" class="span3 wow fadeInDownBig" style="font-size: 30px;">-%100 Gerçekci Ve Kaliteli Bir Deneyim-</h3>
						</div>

					</div><br><br>
				</div>
			</div>
		</div>
	</div>
</div>

</div>


</header>

<!--############################################################################################################################################-->
<!--############################################################### HEADER #####################################################################-->
<!--############################################################################################################################################-->		