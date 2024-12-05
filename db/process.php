<?php 
ob_start();
session_start(); 
/*#############################################################################*/
include 'connect.php';
/*#############################################################################*/
date_default_timezone_set('Europe/Istanbul');
/*#############################################################################*/
$usersor=$db->prepare("select * from user where versia_kadi=:versia_kadi");
$usersor->execute(array(
	'versia_kadi' => $_SESSION['versia_kadi'] ?? null
));
$usercek=$usersor->fetch(PDO::FETCH_ASSOC);
/*#############################################################################*/



/*#######################################################################################*/
/*##################################   PROCESS   ########################################*/
/*#######################################################################################*/


/*****************************************************************************************/

if($_GET['userlogout'] ?? null == "Ok" ){
	session_destroy();
	header("location:../panel/login.php?durum=guvenli-cikis-yapti");
}

/*****************************************************************************************/

if ($_GET['gamesquaressil'] ?? null == "ok") {

	$sil=$db->prepare("DELETE from game_squares where game_squares_id=:game_squares_id");
	$kontrol=$sil->execute(array(
		'game_squares_id' => $_GET['game_squares_id']
	));

	if ($kontrol) {

		header("Location:../panel/game-squares.php?durum=resim-basariyla-silindi");
	} else {

		header("Location:../panel/game-squares.php?durum=resim-silme-basarisiz");
	}
}


/*****************************************************************************************/

if ($_GET['teamsil'] ?? null == "ok") {

	$sil=$db->prepare("DELETE from team where team_id=:team_id");
	$kontrol=$sil->execute(array(
		'team_id' => $_GET['team_id']
	));

	if ($kontrol) {

		header("Location:../panel/team.php?durum=ekip-uyesi-basariyla-silindi");
	} else {

		header("Location:../panel/team.php?durum=ekip-uyesi-silme-basarisiz");
	}
}

/*****************************************************************************************/

if ($_GET['supportsil'] ?? null == "ok") {

	$sil=$db->prepare("DELETE from support where support_id=:support_id");
	$kontrol=$sil->execute(array(
		'support_id' => $_GET['support_id']
	));

	if ($kontrol) {

		header("Location:../panel/support.php?durum=destek-talebi-basariyla-silindi");
	} else {

		header("Location:../panel/support.php?durum=destek-talebi-silme-basarisiz");
	}
}

/*****************************************************************************************/

if ($_GET['whsil'] ?? null == "ok") {

	$sil=$db->prepare("DELETE from whitelist_basvuru where wh_id=:wh_id");
	$kontrol=$sil->execute(array(
		'wh_id' => $_GET['wh_id']
	));

	if ($kontrol) {

		header("Location:../panel/whitelist.php?durum=whitelist-basvuru-basariyla-silindi");
	} else {

		header("Location:../panel/whitelist.php?durum=whitelist-basvuruyu-silme-basarisiz");
	}
}

/*****************************************************************************************/

if ($_GET['users'] ?? null == "ok") {

	$sil=$db->prepare("DELETE from user where versia_id=:versia_id");
	$kontrol=$sil->execute(array(
		'versia_id' => $_GET['versia_id']
	));

	if ($kontrol) {

		header("Location:../panel/users.php?durum=kullanici-basariyla-silindi");
	} else {

		header("Location:../panel/users.php?durum=kullanici-silme-basarisiz");
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['maintenancemode'])) {

		$duzenle=$db->prepare("UPDATE maintenance_mode SET
			main_control=:main_control,
			main_control2=:main_control2,
			main_title=:main_title,
			main_aciklama=:main_aciklama,
			main_gun=:main_gun,
			main_saat=:main_saat,
			main_dakika=:main_dakika
			WHERE main_id=0");
		$update=$duzenle->execute(array(
			'main_control' => trim(strip_tags($_POST['main_control'])),
			'main_control2' => trim(strip_tags($_POST['main_control2'])),
			'main_title' => trim(strip_tags($_POST['main_title'])),
			'main_aciklama' => trim(strip_tags($_POST['main_aciklama'])),
			'main_gun' => trim(strip_tags($_POST['main_gun'])),
			'main_saat' => trim(strip_tags($_POST['main_saat'])),
			'main_dakika' => trim(strip_tags($_POST['main_dakika']))


		));

		$data['status']="success";
		$data['message']="Bakım Modu Başarıyla Güncellendi.";
		echo json_encode($data);
		exit;

	}

}else{
	if(isset($_POST['maintenancemode'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}


/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['aboutupdate'])) {

		if (empty($_POST['about_aciklama'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;

		}else {

			$duzenle=$db->prepare("UPDATE about SET
				about_resimurl=:about_resimurl,
				about_aciklama=:about_aciklama,
				about_discord=:about_discord,
				about_instagram=:about_instagram
				WHERE about_id=0");
			$update=$duzenle->execute(array(
				'about_resimurl' => trim(strip_tags($_POST['about_resimurl'])),
				'about_aciklama' => trim(strip_tags($_POST['about_aciklama'])),
				'about_discord' => trim(strip_tags($_POST['about_discord'])),
				'about_instagram' => trim(strip_tags($_POST['about_instagram']))


			));

			$data['status']="success";
			$data['message']="Biz Kimiz? Başarıyla Güncellendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['aboutupdate'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}


/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['whitelistkontrol'])) {

		if (empty($_POST['cloact_whitelist'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;

		}else {

			$duzenle=$db->prepare("UPDATE cloact SET
				cloact_whitelist=:cloact_whitelist
				WHERE cloact_id={$_POST['cloact_id']}");
			$update=$duzenle->execute(array(
				'cloact_whitelist' => trim(strip_tags($_POST['cloact_whitelist']))


			));

			$data['status']="success";
			$data['message']="Başvuru Formu Başarıyla Güncellendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['whitelistkontrol'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['yetkilikontrol'])) {

		if (empty($_POST['cloact_yetkili'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;

		}else {

			$duzenle=$db->prepare("UPDATE cloact SET
				cloact_yetkili=:cloact_yetkili
				WHERE cloact_id={$_POST['cloact_id']}");
			$update=$duzenle->execute(array(
				'cloact_yetkili' => trim(strip_tags($_POST['cloact_yetkili']))


			));

			$data['status']="success";
			$data['message']="Başvuru Formu Başarıyla Güncellendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['yetkilikontrol'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['lspdkontrol'])) {

		if (empty($_POST['cloact_lspd'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;

		}else {

			$duzenle=$db->prepare("UPDATE cloact SET
				cloact_lspd=:cloact_lspd
				WHERE cloact_id={$_POST['cloact_id']}");
			$update=$duzenle->execute(array(
				'cloact_lspd' => trim(strip_tags($_POST['cloact_lspd']))


			));

			$data['status']="success";
			$data['message']="Başvuru Formu Başarıyla Güncellendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['lspdkontrol'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['emskontrol'])) {

		if (empty($_POST['cloact_ems'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;

		}else {

			$duzenle=$db->prepare("UPDATE cloact SET
				cloact_ems=:cloact_ems
				WHERE cloact_id={$_POST['cloact_id']}");
			$update=$duzenle->execute(array(
				'cloact_ems' => trim(strip_tags($_POST['cloact_ems']))


			));

			$data['status']="success";
			$data['message']="Başvuru Formu Başarıyla Güncellendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['emskontrol'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['emlakkontrol'])) {

		if (empty($_POST['cloact_emlak'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;

		}else {

			$duzenle=$db->prepare("UPDATE cloact SET
				cloact_emlak=:cloact_emlak
				WHERE cloact_id={$_POST['cloact_id']}");
			$update=$duzenle->execute(array(
				'cloact_emlak' => trim(strip_tags($_POST['cloact_emlak']))


			));

			$data['status']="success";
			$data['message']="Başvuru Formu Başarıyla Güncellendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['emlakkontrol'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['mekanikkontrol'])) {

		if (empty($_POST['cloact_mekanik'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;

		}else {

			$duzenle=$db->prepare("UPDATE cloact SET
				cloact_mekanik=:cloact_mekanik
				WHERE cloact_id={$_POST['cloact_id']}");
			$update=$duzenle->execute(array(
				'cloact_mekanik' => trim(strip_tags($_POST['cloact_mekanik']))


			));

			$data['status']="success";
			$data['message']="Başvuru Formu Başarıyla Güncellendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['mekanikkontrol'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['thelostmckontrol'])) {

		if (empty($_POST['cloact_lost'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;

		}else {

			$duzenle=$db->prepare("UPDATE cloact SET
				cloact_lost=:cloact_lost
				WHERE cloact_id={$_POST['cloact_id']}");
			$update=$duzenle->execute(array(
				'cloact_lost' => trim(strip_tags($_POST['cloact_lost']))


			));

			$data['status']="success";
			$data['message']="Başvuru Formu Başarıyla Güncellendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['thelostmckontrol'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['grovestreetkontrol'])) {

		if (empty($_POST['cloact_grove'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;

		}else {

			$duzenle=$db->prepare("UPDATE cloact SET
				cloact_grove=:cloact_grove
				WHERE cloact_id={$_POST['cloact_id']}");
			$update=$duzenle->execute(array(
				'cloact_grove' => trim(strip_tags($_POST['cloact_grove']))


			));

			$data['status']="success";
			$data['message']="Başvuru Formu Başarıyla Güncellendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['grovestreetkontrol'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['vagoskontrol'])) {

		if (empty($_POST['cloact_vagos'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;

		}else {

			$duzenle=$db->prepare("UPDATE cloact SET
				cloact_vagos=:cloact_vagos
				WHERE cloact_id={$_POST['cloact_id']}");
			$update=$duzenle->execute(array(
				'cloact_vagos' => trim(strip_tags($_POST['cloact_vagos']))


			));

			$data['status']="success";
			$data['message']="Başvuru Formu Başarıyla Güncellendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['vagoskontrol'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['ballaskontrol'])) {

		if (empty($_POST['cloact_ballas'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;

		}else {

			$duzenle=$db->prepare("UPDATE cloact SET
				cloact_ballas=:cloact_ballas
				WHERE cloact_id={$_POST['cloact_id']}");
			$update=$duzenle->execute(array(
				'cloact_ballas' => trim(strip_tags($_POST['cloact_ballas']))


			));

			$data['status']="success";
			$data['message']="Başvuru Formu Başarıyla Güncellendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['ballaskontrol'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if(isset($_POST['supportduzenle'])) {

	if (empty($_POST['support_durum']) or empty($_POST['support_inceleme'])) {

		$data['status']="error";
		$data['message']="Lütfen Boş Alan Bırakmayınız.";
		echo json_encode($data);
		exit;
	}else {

		$duzenle=$db->prepare("UPDATE support SET
			support_duzenleyen=:support_duzenleyen,
			support_inceleme=:support_inceleme,
			support_durum=:support_durum
			WHERE support_id={$_POST['support_id']}");
		$update=$duzenle->execute(array(
			'support_duzenleyen' => trim(strip_tags($_POST['support_duzenleyen'])),
			'support_inceleme' => trim(strip_tags($_POST['support_inceleme'])),
			'support_durum' => trim(strip_tags($_POST['support_durum']))


		));

		$data['status']="success";
		$data['message']="Destek Talebi Başarıyla Düzenlendi.";
		echo json_encode($data);
		exit;

	}
}

/*****************************************************************************************/

if(isset($_POST['whtduzenle'])) {

	if (empty($_POST['wh_durum']) or empty($_POST['wh_inceleme'])) {

		$data['status']="error";
		$data['message']="Lütfen Boş Alan Bırakmayınız.";
		echo json_encode($data);
		exit;
	}else {

		$duzenle=$db->prepare("UPDATE whitelist_basvuru SET
			wh_duzenleyen=:wh_duzenleyen,
			wh_durum=:wh_durum,
			wh_inceleme=:wh_inceleme
			WHERE wh_id={$_POST['wh_id']}");
		$update=$duzenle->execute(array(
			'wh_duzenleyen' => trim(strip_tags($_POST['wh_duzenleyen'])),
			'wh_durum' => trim(strip_tags($_POST['wh_durum'])),
			'wh_inceleme' => trim(strip_tags($_POST['wh_inceleme']))

		));

		$data['status']="success";
		$data['message']="Başvuru Formu Başarıyla Düzenlendi.";
		echo json_encode($data);
		exit;

	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['yetkiduzenle'])) {

		if (empty($_POST['versia_admin'])) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;
		}else {

			$duzenle=$db->prepare("UPDATE user SET
				versia_admin=:versia_admin
				WHERE versia_id={$_POST['versia_id']}");
			$update=$duzenle->execute(array(
				'versia_admin' => trim(strip_tags($_POST['versia_admin']))


			));

			$data['status']="success";
			$data['message']="Yetki Başarıyla Düzenlendi.";
			echo json_encode($data);
			exit;

		}
	}
}else{
	if(isset($_POST['yetkiduzenle'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/


if(isset($_POST['hesapbilgileriniguncelle'])) {

	if (empty($_POST['versia_adsoyad']) or empty($_POST['versia_mail']) or empty($_POST['versia_sifre'])) {

		$data['status']="error";
		$data['message']="Lütfen Boş Alan Bırakmayınız.";
		echo json_encode($data);
		exit;

	}else {

		$duzenle=$db->prepare("UPDATE user SET
			versia_adsoyad=:versia_adsoyad,
			versia_mail=:versia_mail,
			versia_sifre=:versia_sifre");
		$update=$duzenle->execute(array(
			'versia_adsoyad' => trim(strip_tags($_POST['versia_adsoyad'])),
			'versia_mail' => trim(strip_tags($_POST['versia_mail'])),
			'versia_sifre' => trim(strip_tags(md5($_POST['versia_sifre'])))

		));

		$data['status']="success";
		$data['message']="Bilgileriniz Güncellendi";
		echo json_encode($data);
		exit;
	}
}


/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['teamduzenle'])) {

		$duzenle=$db->prepare("UPDATE team SET
			team_url=:team_url,
			team_ad=:team_ad,
			team_yetki=:team_yetki,
			team_aciklama=:team_aciklama
			WHERE team_id={$_POST['team_id']}");
		$update=$duzenle->execute(array(
			'team_url' => trim(strip_tags($_POST['team_url'])),
			'team_ad' => trim(strip_tags($_POST['team_ad'])),
			'team_yetki' => trim(strip_tags($_POST['team_yetki'])),
			'team_aciklama' => trim(strip_tags($_POST['team_aciklama']))

		));

		$data['status']="success";
		$data['message']="Ekip üyesinin bilgileri başarıyla güncellendi...";
		echo json_encode($data);
		exit;
	}
}else{
	if(isset($_POST['teamduzenle'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['iletisimduzenle'])) {

		$duzenle=$db->prepare("UPDATE contact SET
			contact_launcher=:contact_launcher,
			contact_connect=:contact_connect,
			contact_discord=:contact_discord,
			contact_sosyalmedya=:contact_sosyalmedya
			WHERE contact_id={$_POST['contact_id']}");
		$update=$duzenle->execute(array(
			'contact_launcher' => trim(strip_tags($_POST['contact_launcher'])),
			'contact_connect' => trim(strip_tags($_POST['contact_connect'])),
			'contact_discord' => trim(strip_tags($_POST['contact_discord'])),
			'contact_sosyalmedya' => trim(strip_tags($_POST['contact_sosyalmedya']))

		));

		$data['status']="success";
		$data['message']="İletişim Bilgileriniz Başarıyla Güncellendi..";
		echo json_encode($data);
		exit;
	}
}else{
	if(isset($_POST['iletisimduzenle'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if($usercek['versia_admin']=='Admin') { 

	if(isset($_POST['kullanicibilgileriniguncelle'])) {

		if (empty($_POST['versia_kadi']) or empty($_POST['versia_adsoyad']) or empty($_POST['versia_mail']) ) {

			$data['status']="error";
			$data['message']="Lütfen Boş Alan Bırakmayınız.";
			echo json_encode($data);
			exit;
		}else {

			$duzenle=$db->prepare("UPDATE user SET
				versia_kadi=:versia_kadi,
				versia_adsoyad=:versia_adsoyad,
				versia_mail=:versia_mail,
				versia_admin=:versia_admin
				WHERE versia_id={$_POST['versia_id']}");
			$update=$duzenle->execute(array(
				'versia_kadi' => trim(strip_tags($_POST['versia_kadi'])),
				'versia_adsoyad' => trim(strip_tags($_POST['versia_adsoyad'])),
				'versia_mail' => trim(strip_tags($_POST['versia_mail'])),
				'versia_admin' => trim(strip_tags($_POST['versia_admin']))

			));

			$data['status']="success";
			$data['message']="Kullanıcı Hesap Bilgilerini Güncelledin.";
			echo json_encode($data);
			exit;
		}
	}
}else{
	if(isset($_POST['usersduzenle'])) {

		$data['status']="error";
		$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
		echo json_encode($data);
		exit;
	}
}

/*****************************************************************************************/

if(isset($_POST['registerform'])) { ?>

	<html><head><title>Versia Roleplay | Panel</title><link rel="icon" href="../panel/dist/img/favicon.ico" type="ico" /><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head></html> <?php 
	
	$tarihsaat=date("Y-m-d H:i:s");
	$versia_adsoyad = trim(strip_tags($_POST["versia_adsoyad"]));
	$versia_kadi = trim(strip_tags($_POST["versia_kadi"]));
	$versia_mail = trim(strip_tags($_POST["versia_mail"]));
	$versia_sifre = trim(strip_tags(md5($_POST["versia_sifre"])));
	$versia_sifretekrar = trim(strip_tags(md5($_POST["versia_sifretekrar"])));
	$versia_tarih = $tarihsaat;

	if (empty($_POST['versia_kadi']) or empty($_POST['versia_sifre']) or empty($_POST['versia_adsoyad']) or empty($_POST['versia_mail'])) { ?>

		<script type="text/javascript">
			swal("Lütfen boş alan bırakmayınız!","","warning");
		</script>

	<?php } else {

		if (preg_match('/[\'^£$%&*()}{@#~?><>,. |=_+¬-]/', $versia_kadi)) { ?>

			<script type="text/javascript">
				swal("Kullanıcı adında özel karakter kullanılamaz!","","warning");
			</script>	

		<?php }else

		if(!filter_var($versia_mail, FILTER_VALIDATE_EMAIL)) { ?>

			<script type="text/javascript">
				swal("E-posta formatı yanlış girildi.","","info");
			</script>

		<?php }else{


			$ayni_uye_varmi = $db -> prepare("SELECT * FROM user WHERE versia_kadi = ?");
			$ayni_uye_varmi -> execute(array($versia_kadi));
			if($ayni_uye_varmi -> rowCount()){ ?>

				<script type="text/javascript">
					swal("Bu kullanıcı adı zaten kullanılıyor, Farklı bir kullanıcı adı deneyin.","","warning");
				</script>	


			<?php }else{
				if ($versia_sifre != $versia_sifretekrar) { ?>

					<script type="text/javascript">
						swal("Şifre birbiriyle uyuşmuyor.","","error");
					</script>

				<?php  }else{ 





					$uye_ekle = $db->prepare("INSERT INTO user (versia_kadi, versia_sifre, versia_adsoyad, versia_mail, versia_tarih) VALUES (?,?,?,?,?)");
					$uye_ekle -> execute(array($versia_kadi, $versia_sifre, $versia_adsoyad, $versia_mail, $tarihsaat));
					if ($uye_ekle){ ?>

						<script type="text/javascript">
							swal("Kayıt İşleminiz Başarılı, Artık Giriş Yapabilirsiniz.","","success");
						</script>	
						<?php header("Refresh: 3; url=../panel/login.php");	

					}else{

						$data['status']="error";
						$data['message']="Kayıt başarısız. Bir sorun oluştu.";
						echo json_encode($data);
						exit;
					} 
				}}
			}
		}
	}

	/*****************************************************************************************/

	if($usercek['versia_admin']=='Admin') { 

		if(isset($_POST['userekle'])) {

			$versia_kadi=trim(strip_tags($_POST['versia_kadi']));

			if (empty($_POST['versia_kadi']) or empty($_POST['versia_adsoyad']) or empty($_POST['versia_mail']) or empty($_POST['versia_sifre'])) {

				$data['status']="error";
				$data['message']="Lütfen boş alan bırakmayınız.!";
				echo json_encode($data);
				exit;
			} else {

				if (preg_match('/[\'^£$%&*()}{@#~?><>,. |=_+¬-]/', $versia_kadi)) {
					$data['status']="warning";
					$data['message']="Kullanıcı adında özel karakter kullanılamaz!";
					echo json_encode($data);
					exit;

				}else{

					$tarihsaat=date("Y-m-d H:i:s");
					$kaydet=$db->prepare("INSERT INTO user SET
						versia_kadi=:versia_kadi,
						versia_adsoyad=:versia_adsoyad,
						versia_mail=:versia_mail,
						versia_sifre=:versia_sifre,
						versia_admin=:versia_admin,
						versia_tarih=:versia_tarih");
					$insert=$kaydet->execute(array(
						'versia_kadi' => trim(strip_tags($_POST['versia_kadi'])),
						'versia_adsoyad' => trim(strip_tags($_POST['versia_adsoyad'])),
						'versia_mail' => trim(strip_tags($_POST['versia_mail'])),
						'versia_sifre' => trim(strip_tags(md5($_POST['versia_sifre']))),
						'versia_admin' => trim(strip_tags($_POST['versia_admin'])),
						'versia_tarih' => $tarihsaat


					));

					$data['status']="success";
					$data['message']="Kullanıcıyı Başarıyla Eklediniz.";
					echo json_encode($data);
					exit;
				}
			}
		}else{
			if(isset($_POST['kullaniciform'])) {

				$data['status']="error";
				$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
				echo json_encode($data);
				exit;
			}
		}
	}

	/*****************************************************************************************/
	if($usercek['versia_admin']=='Admin') { 

		if(isset($_POST['gamesquaresadd'])) {

			if (empty($_POST['game_squares_resimurl'])) {

				$data['status']="error";
				$data['message']="Boş alan bırakılmaz.";
				echo json_encode($data);
				exit;
			} else {

				$kaydet=$db->prepare("INSERT INTO game_squares SET
					game_squares_resimurl=:game_squares_resimurl");
				$insert=$kaydet->execute(array(
					'game_squares_resimurl' => trim(strip_tags($_POST['game_squares_resimurl']))


				));
				$data['status']="success";
				$data['message']="Oyundan Karelere Başarıyla Resim Eklediniz.";
				echo json_encode($data);
				exit;

			}
		}
	}else{
		if(isset($_POST['gamesquaresadd'])) {

			$data['status']="error";
			$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
			echo json_encode($data);
			exit;
		}
	}
	/*****************************************************************************************/


	if($usercek['versia_admin']=='Admin') { 

		if(isset($_POST['teamadd'])) {

			if (empty($_POST['team_url']) or empty($_POST['team_discord']) or empty($_POST['team_yetki'])) {

				$data['status']="error";
				$data['message']="Boş alan bırakılmaz.";
				echo json_encode($data);
				exit;
			} else {

				$kaydet=$db->prepare("INSERT INTO team SET
					team_url=:team_url,
					team_discord=:team_discord,
					team_yetki=:team_yetki");
				$insert=$kaydet->execute(array(
					'team_url' => trim(strip_tags($_POST['team_url'])),
					'team_discord' => trim(strip_tags($_POST['team_discord'])),
					'team_yetki' => trim(strip_tags($_POST['team_yetki']))


				));
				$data['status']="success";
				$data['message']="Ekipe Başarıyla Üye Eklediniz.";
				echo json_encode($data);
				exit;

			}
		}
	}else{
		if(isset($_POST['teamadd'])) {

			$data['status']="error";
			$data['message']="Yavrum şen hackermi olmaya çalışıyon hee";
			echo json_encode($data);
			exit;
		}
	}

	/*****************************************************************************************/

	if(isset($_POST['panelogin'])) { ?>

		<html><head><title>Versia Roleplay | Panel</title><link rel="icon" href="../panel/dist/img/favicon.ico" type="ico" /><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head></html>

		<?php $versia_kadi=trim(strip_tags($_POST['versia_kadi']));

		if (empty($_POST['versia_kadi']) or empty($_POST['versia_sifre'])) { ?>

			<script type="text/javascript">
				swal("Kullanıcı Adı Veya Şifre boş bırakılmaz!","","warning");
			</script>


		<?php } else {

			if (preg_match('/[\'^£$%&*()}{@#~?><>,. |=_+¬-]/', $versia_kadi)) { ?>

				<script type="text/javascript">
					swal("Kullanıcı adında özel karakter kullanılamaz!","","warning");
				</script>
				<?php

			}else{

				$versia_kadi=trim(strip_tags($_POST['versia_kadi']));
				$versia_sifre=trim(strip_tags(md5($_POST['versia_sifre'])));

				$sorgucek=$db ->prepare("select * from user where versia_kadi='$versia_kadi' and versia_sifre='$versia_sifre'");
				$sorgucek -> execute();

				if ($sorgucek -> rowCount()>0) {
					$_SESSION['productLogin'] = true;
					$_SESSION['productLogin'] = trim(md5(strip_tags($versia_kadi.$versia_kadi)));
					$_SESSION['versia_kadi'] = trim(strip_tags($versia_kadi)); ?>

					<script type="text/javascript">
						swal("Giriş Başarılı, Anasayfaya Yönlendiriliyorsunuz...","","success");
					</script>

					<?php header("Refresh: 2; url=../panel/login.php");	
					exit;


				}

				else{ ?>
					<script type="text/javascript">
						swal("Kullanıcı Adı Veya Şifreniz Yanlış, Tekrar Deneyiniz.","","error");
					</script>

				<?php }
			}

		}

	}


	if(isset($_POST['supportform'])) {

	$spsure= "300"; //5 dk

	if (($_SESSION['spkontrol']+$spsure)>time()) { //Kontrol ediliyor

		$data['status']="error";
		$data['message']="5 dakika geçmeden ikinci ticketi gönderemezsiniz.";
		echo json_encode($data);
		exit;

	}else{

		if (empty($_POST['support_aciklama'])) {

			$data['status']="error";
			$data['message']="Ticket Formunu Lütfen Boş Bırakmayınız.";
			echo json_encode($data);
			exit;
		}else{

			$_SESSION['spkontrol']=time(); 

			$tarihsaat=date("Y-m-d H:i:s");
			$kaydet=$db->prepare("INSERT INTO support SET
				support_ekleyen=:support_ekleyen,
				support_adsoyad=:support_adsoyad,
				support_destek=:support_destek,
				support_aciklama=:support_aciklama,
				support_tarih=:support_tarih");
			$insert=$kaydet->execute(array(
				'support_ekleyen' => trim(strip_tags($_POST['support_ekleyen'])),
				'support_adsoyad' => trim(strip_tags($_POST['support_adsoyad'])),
				'support_destek' => trim(strip_tags($_POST['support_destek'])),
				'support_aciklama' => trim(strip_tags($_POST['support_aciklama'])),
				'support_tarih' => $tarihsaat


			));
			$data['status']="success";
			$data['message']="Ticket formunu başarıyla gönderilmiştir. En geç 2 (iki) Gün içersinde cevaplanacaktır.";
			echo json_encode($data);
			exit;
		} 
	}
}

/*****************************************************************************************/

if(isset($_POST['whitelistform'])) {

	$sure= "300"; //5 dk

	if (($_SESSION['kontrol']+$sure)>time()) { //Kontrol ediliyor

		$data['status']="error";
		$data['message']="5 dakika geçmeden ikinci whitelist başvuru 
		⠀    ⠀    ⠀    ⠀ ⠀formu gönderemezsiniz.";
		echo json_encode($data);
		exit;

	}else{

		if (empty($_POST['wh_aciklama'])) {

			$data['status']="error";
			$data['message']="Başvuru Formunda Lütfen Boş Bırakmayınız.";
			echo json_encode($data);
			exit;

		} else {

			$_SESSION['kontrol']=time(); 

			$tarihsaat=date("Y-m-d H:i:s");
			$kaydet=$db->prepare("INSERT INTO whitelist_basvuru SET
				wh_ekleyen=:wh_ekleyen,
				wh_adsoyad=:wh_adsoyad,
				wh_meslek=:wh_meslek,
				wh_aciklama=:wh_aciklama,
				wh_tarih=:wh_tarih");
			$insert=$kaydet->execute(array(
				'wh_ekleyen' => trim(strip_tags($_POST['wh_ekleyen'])),
				'wh_adsoyad' => trim(strip_tags($_POST['wh_adsoyad'])),
				'wh_meslek' => trim(strip_tags($_POST['wh_meslek'])),
				'wh_aciklama' => trim(strip_tags($_POST['wh_aciklama'])),
				'wh_tarih' => $tarihsaat


			));

			$data['status']="success";
			$data['message']="Başvuru formunuz başarıyla gönderilmiştir. En geç 2 (iki) Gün içersinde cevaplanacaktır.";
			echo json_encode($data);
			exit;
		}
	}
}

/*****************************************************************************************/ 
?>
