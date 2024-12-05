<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#8515
-->

<?php 
include '../db/connect.php'; 
include '../db/process.php'; 

$mainsor=$db->prepare("select * from maintenance_mode");
$mainsor->execute(array(0));
$maincek=$mainsor->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title><?php echo $maincek['main_title']; ?></title>
<!--===============================================================================================-->	
	<meta charset="UTF-8">
<!--===============================================================================================-->	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/countdowntime/flipclock.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
	
	
	<div class="bg-img1 size1 overlay1 p-b-35 p-l-15 p-r-15" style="background-image: url('images/bg01.jpg');">
		<div class="flex-col-c p-t-160 p-b-215 respon1">
			<div class="wrappic1">
				<a href="#">
					<img hidden="" src="images/icons/logo.png" alt="IMG">
				</a>
			</div>

			<h3 class="l1-txt1 txt-center p-t-30 p-b-100" style="font-family: normal;">
				<?php echo $maincek['main_aciklama']; ?>
			</h3>

			<div class="cd100"></div>

		</div>


	</div>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/flipclock.min.js"></script>
<!--===============================================================================================-->	
	<script src="vendor/countdowntime/moment.min.js"></script>
<!--===============================================================================================-->	
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
<!--===============================================================================================-->	
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
<!--===============================================================================================-->	
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->	
	<script>
		$('.cd100').countdown100({

			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: <?php echo $maincek['main_gun']; ?>,
			endtimeHours: <?php echo $maincek['main_saat']; ?>,
			endtimeMinutes: <?php echo $maincek['main_dakika']; ?>,
			endtimeSeconds: 0,
			timeZone: "" 
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--===============================================================================================-->	

</body>
</html>