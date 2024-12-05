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
    <title>Versia Roleplay Panel | Şifremi Unuttum</title>
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

if($_POST) {
	require_once 'mail/class.phpmailer.php';

	$versia_mail = trim($_POST['versia_mail']);
	if(!$versia_mail) { ?>

		<script type="text/javascript">
		swal("Boş alan bırakmayınız!","","info");
		</script>

	<?php  }else{

		if(!filter_var($versia_mail, FILTER_VALIDATE_EMAIL)) { ?>

			<script type="text/javascript">
				swal("E-posta formatı yanlış girildi.","","info");
			</script>

		<?php }else{
			$varmi = $db->prepare("SELECT versia_adsoyad,versia_mail FROM user WHERE versia_mail=:e");
			$varmi->execute([':e' => $versia_mail]);
			if ($varmi->rowCount()) {

				$row = $varmi->fetch(PDO::FETCH_ASSOC); 

				$sifirlamakodu  = uniqid("versiaroleplay__");
				$sifirlamalinki = "http://www.versiarp.com/panel/reset-password.php?kod=".$sifirlamakodu;

				$sifirlamakodunuekle = $db->prepare("UPDATE user SET sifirlama_kodu=:k WHERE versia_mail=:e");
				$sifirlamakodunuekle->execute([':k'=>$sifirlamakodu,':e' => $versia_mail]);

				$mail = new PHPMailer();
				$mail->Host = "webmail.versiarp.com";
				$mail->Port = 587; //SSL ise 465
				//$mail->SMTPSecure = 'tls'; //boş bırakılırsa tls olarak alır.
				$mail->SMTPAuth = true; //değeri değişmeyecek.
				$mail->Username = "info@versiarp.com";
				$mail->Password = "Emre3168#";
				$mail->IsSMTP();
				$mail->AddAddress($versia_mail);
				$mail->From     = "info@versiarp.com";
				$mail->FromName = "NV Roleplay ( Şifremi Unuttum )";
				$mail->CharSet  = "UTF-8";
				$mail->Subject  = "Şifremi sıfırla";
				
				$mailicerik     = "<div style='font-size:20px'>Sayın : ".$row['versia_adsoyad']." Sıfırlama Linkiniz : ".$sifirlamalinki."</div>";

				$mail->MsgHTML($mailicerik);
				if($mail->Send()) { ?>

					<script type="text/javascript">
						swal("Şifre sıfırlama linkiniz belirtmiş olduğunuz mail adresine gönderilmiştir.","","success");
					</script>
					
				<?php  }else{ ?>

					<script type="text/javascript">
						swal("Hata oluştu.","","error");
					</script>

				
				<?php }


				
			}else{ ?> 

				<script type="text/javascript">
					swal("Girilen e-posta adresi sistemde mevcut değildir.","","error");
				</script>

			
		<?php  }
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
					Şifremi Unuttum?
				</span>

				<div class="wrap-input100 wow fadeInUp" data-wow-delay="400ms">
					<input class="input100" type="mail" name="versia_mail" id="versia_mail" placeholder="Email">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope"></i>
					</span>
				</div>

				<div class="container-login100-form-btn wow fadeInUp"  data-wow-delay="800ms">
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
						Oturum Aç
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