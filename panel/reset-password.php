<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php
define ('guvenlik', true);
/*################################*/
include '../db/connect.php';
/*################################*/
include '../db/process.php';
/*################################*/
ob_start();
/*################################*/

$mainsor=$db->prepare("select * from maintenance_mode");
$mainsor->execute(array(0));
$maincek=$mainsor->fetch(PDO::FETCH_ASSOC);

if ($maincek['main_control']==1) {

	header("Location:../bakim/index.php");
	exit;
}

if(isset($_SESSION['versia_kadi'])) {

  header('Location:index.php');
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Versia Roleplay Panel | Şifremi Değiştir</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" href="dist/img/favicon.ico" type="ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="dist/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/css/login-util.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="dist/css/login-main.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://www.delac.io/wow/css/libs/animate.css">
	<!--===============================================================================================-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
	<!-- disabled-->
	<script>
		document.onkeydown = function(e) {
			if (e.ctrlKey && 
				(
					e.keyCode === 85 || 
					e.keyCode === 117)) {
				return false;
		} else {
			return true;
		}
	};
	$(document).keypress("u",function(e) {
		if(e.ctrlKey)
		{
			return false;
		}
		else
		{
			return true;
		}
	});
</script>
<!-- disabled-->

<?php 
$kod = trim($_GET['kod']);


if (!$kod) { ?>

	<script type="text/javascript">
		swal("Sıfırlama kodu hatalı girildi.","","error");
	</script>

<?php }else{

	if($_POST) {

		$versia_mail = trim($_POST['versia_mail']);
		$versia_sifre = trim($_POST['versia_sifre']);
		$versia_sifre2 = trim($_POST['versia_sifre2']);

		if(!$versia_mail || !$versia_sifre || !$versia_sifre2) { ?>

			<script type="text/javascript">
				swal("Boş alan bırakmayınız.","","info");
			</script>

		<?php }else{

				if ($versia_sifre != $versia_sifre2) { ?>

					<script type="text/javascript">
						swal("Şifreler uyuşmuyor!","","error");
					</script>

				<?php }else{

				$varmi = $db->prepare("SELECT * FROM user WHERE sifirlama_kodu=:k AND versia_mail=:e");
				$varmi->execute([':k' => $kod, ':e'=>$versia_mail]);
				if($varmi->rowCount()){

					$sifreguncelle = $db->prepare("UPDATE user SET sifirlama_kodu=:sifirla,versia_sifre=:s WHERE sifirlama_kodu=:k AND versia_mail=:e");
					$sifreguncelle->execute([':sifirla'=>"",':s'=>md5($versia_sifre),':k'=>$kod,':e'=>$versia_mail]);
					if($sifreguncelle) { ?>

						<script type="text/javascript">
							swal("Şifreniz başarıyla güncellendi.","","success");
						</script>
						<?php 
						header("Refresh: 5; url=login.php");

					}else{ ?>

						<script type="text/javascript">
							swal("Hata oluştu!","","error");
						</script>

					<?php }

				}else{ ?>

						<script type="text/javascript">
							swal("Girilen bilgilere göre bir kayıt bulunamadı","","info");
						</script>

				<?php }

			}

		}
	}

}

?>


<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="https://cdn.discordapp.com/attachments/438389301433204736/725765060282023977/2.png" alt="IMG">
			</div>

			<form method="POST" class="login100-form validate-form">
				<span class="login100-form-title wow fadeInUp">
					Yeni Şifreni Gir
				</span>

				<div class="wrap-input100 wow fadeInUp" data-wow-delay="400ms">
					<input class="input100" type="mail" name="versia_mail" id="versia_mail" placeholder="Email">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope"></i>
					</span>
				</div>

				<div class="wrap-input100 wow fadeInUp" data-wow-delay="800ms">
					<input class="input100" type="password" name="versia_sifre" autocomplete="on" id="versia_sifre" placeholder="Parola girin">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 wow fadeInUp" data-wow-delay="1200ms">
					<input class="input100" type="password" name="versia_sifre2" autocomplete="on" id="versia_sifre2" placeholder="Tekrar Parola girin">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>



				<div class="container-login100-form-btn wow fadeInUp"  data-wow-delay="1600ms">
					<button type="submit" class="login100-form-btn">
						Gönder
					</button>
				</div>

				<div class="text-center p-t-12">
					<span class="txt1">
					</span>
				</div>

				<div class="text-center p-t-136">
					<a class="txt2" href="register.php">
						Kayıt Ol
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a><br>
					<a class="txt2" href="login.php">
						Şifremi hatırladım
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a><br>
					<span>
						<?php 
						$usersor=$db->prepare("select * from user order by versia_id DESC limit 1");
						$usersor->execute();
						while($usercek=$usersor->fetch(PDO::FETCH_ASSOC)){ ?>

							<b><font style="background: linear-gradient(to right, #30CFD0 0%, #330867 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Son Üye: <?php echo $usercek['versia_kadi']; ?></b><br></font>

						<?php } ?>
					</span>
				</div>
			</form>
		</div>
	</div>
</div>


<!--===============================================================================================-->	
<script src="https://www.delac.io/wow/dist/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<!--===============================================================================================-->	
<script src="dist/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="dist/vendor/bootstrap/js/popper.js"></script>
<script src="dist/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="dist/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="dist/vendor/tilt/tilt.jquery.min.js"></script>
<script >
	$('.js-tilt').tilt({
		scale: 1.1
	})
</script>
<!--===============================================================================================-->
<script src="dist/js/login-main.js"></script>


</body>
</html>