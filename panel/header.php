<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php echo !defined ('guvenlik') ? die ('Yavrum şen hackermi olmaya çalışıyon hee') : null; 
/*################################*/
include '../db/connect.php';
/*################################*/
include '../db/process.php';
/*################################*/

/*************************************************************************************************/

$usersor=$db->prepare("select * from user where versia_kadi=:versia_kadi");
$usersor->execute(array(
  'versia_kadi' => $_SESSION['versia_kadi']
));
$usercek=$usersor->fetch(PDO::FETCH_ASSOC);

$userssor=$db->prepare("select * from user where versia_id=:versia_id");
$userssor->execute(array(
  'versia_id' => $_POST['versia_id'] ?? null
));
$userscek=$userssor->fetch(PDO::FETCH_ASSOC);

$toplamWhsor=$db->prepare("select * from whitelist_basvuru");
$toplamWhsor->execute();
$toplamWhsay=$toplamWhsor->rowCount();

/*************************************************************************************************/

if(!isset($_SESSION['versia_kadi'])) {

  header('Location:login.php?login=dont');
}

/*************************************************************************************************/

function tarihcevir($tarih)
{
  $yil=substr($tarih,0,4);
  $ay=substr($tarih,5,2);
  $gun=substr($tarih,8,2);
  $saat=substr($tarih,10,4);
  $dakika=substr($tarih,14,5);

  $gunler = array(
    'Pazartesi',
    'Salı',
    'Çarşamba',
    'Perşembe',
    'Cuma',
    'Cumartesi',
    'Pazar'
  );

  $aylar = array(
    'Ocak',
    'Şubat',
    'Mart',
    'Nisan',
    'Mayıs',
    'Haziran',
    'Temmuz',
    'Ağustos',
    'Eylül',
    'Ekim',
    'Kasım',
    'Aralık'
  );

  $ay = $aylar[date('m') - 1];
  $gunyazili = $gunler[date('N') - 1];

  return "$gun $ay $yil / $saat$dakika";

}
/*************************************************************************************************/?>

<!DOCTYPE html>
<html>
<head>
  <!--===============================================================================================-->  
  <title>Versia Roleplay | Panel</title>
  <!--===============================================================================================-->  
  <meta charset="utf-8">
  <!--===============================================================================================-->  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--===============================================================================================-->  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->  
  <link rel="icon" href="dist/img/favicon.ico" type="ico" />
  <!--===============================================================================================-->  
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" href="https://www.delac.io/wow/css/libs/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!--===============================================================================================-->  
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!--===============================================================================================-->   
  <script data-ad-client="ca-pub-1462427973619691" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!--===============================================================================================-->  
  
</head>

<body class="hold-transition sidebar-mini" style="font-family: normal;">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>


    </nav>
  <!-- /.navbar -->