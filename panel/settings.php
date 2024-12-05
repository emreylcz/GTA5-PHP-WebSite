<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php define ('guvenlik', true);
include'header.php';
include'sidebar.php';


if($usercek['versia_admin']=='Admin') { 

$aboutsor=$db->prepare("select * from about");
$aboutsor->execute(array(0));
$aboutcek=$aboutsor->fetch(PDO::FETCH_ASSOC);

$mainsor=$db->prepare("select * from maintenance_mode");
$mainsor->execute(array(0));
$maincek=$mainsor->fetch(PDO::FETCH_ASSOC);


?>

<div class="content-wrapper">

  <section class="content-header wow fadeInUp">

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-left">
            <li style="font-size: 23px">Ayarlar⠀│⠀</li> 
            <li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
            <li><a href="#">Admin Paneli</a>⠀》⠀</li>
            <li>Ayarlar</li>
          </ol>
        </div>
      </div>
    </div>

  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms">
        <div class="card">
          <div class="card-header" style="background: -webkit-linear-gradient(right, #BB51C1 30%, #5656CD 55%); color: white;">
            <h3 class="card-title">Biz Kimiz?</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              </div>

            </div>

            <div class="card-body">

              <form method="POST" id="aboutupdatealert" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Resim URL</label>
                  <input type="text"  class="form-control" id="about_resimurl" name="about_resimurl" value="<?php echo $aboutcek['about_resimurl']; ?>">
                </div>

                <div class="form-group">
                  <label >Açıklama</label>
                  <textarea class="form-control" name="about_aciklama" id="about_aciklama" rows="9"><?php echo $aboutcek['about_aciklama']; ?></textarea>
                </div>

                <div class="form-group">
                  <label >Discord</label>
                  <input type="text" class="form-control" name="about_discord" id="about_discord" value="<?php echo $aboutcek['about_discord']; ?>">
                </div>

                <div class="form-group">
                  <label >İnstagram</label>
                  <input type="text"  class="form-control" name="about_instagram" id="about_instagram" value="<?php echo $aboutcek['about_instagram']; ?>">
                </div>

                <input type="hidden" name="aboutupdate">        
                <button type="submit" style="margin-left: 5px;" class="btn btn-success float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

              </form>

            </div>

          </div>

        </div>


        <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms">
          <div class="card">
          <div class="card-header" style="background: -webkit-linear-gradient(left, #BB51C1 30%, #5656CD 55%); color: white;">
              <h3 class="card-title">Bakım Modu</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">

                <form method="POST" id="maintenancemodealert" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="inputEstimatedBudget">Register Açık Olsun mu? (Panel)</label>
                    <select class="form-control" name="main_control2" id="main_control2">
                      <option value="0">Evet</option>
                      <option value="1">Hayır</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="inputEstimatedBudget">Aktif Edilsin mi? (Anasayfa)</label>
                    <select class="form-control" name="main_control2" id="main_control2">
                      <option value="0">Hayır</option>
                      <option value="1">Evet</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="inputEstimatedBudget">Aktif Edilsin mi? (Panel)</label>
                    <select class="form-control" name="main_control" id="main_control">
                      <option value="0">Hayır</option>
                      <option value="1">Evet</option>
                    </select>
                  </div> 


                  <div class="form-group">
                    <label >Sayfa Başlığı</label>
                    <input type="text"  class="form-control" name="main_title" id="main_title" placeholder="Çok Yakında!" value="<?php echo $maincek['main_title']; ?>">
                  </div>

                  <div class="form-group">
                    <label >Açıklama</label>
                    <input type="text"  class="form-control" name="main_aciklama" id="main_aciklama" placeholder="Çok Yakında!" value="<?php echo $maincek['main_aciklama']; ?>">
                  </div>

                  <label style="margin-top: 10px">Geri Sayım ( Gün-Saat-Dakika )</label>
                  <div class="row">

                      <div class="col-4">
                        <input type="text" class="form-control" name="main_gun" id="main_gun" placeholder="Gün" value="<?php echo $maincek['main_gun']; ?>">
                      </div>

                      <div class="col-4">
                        <input type="text" class="form-control" name="main_saat" id="main_saat" placeholder="Saat" value="<?php echo $maincek['main_saat']; ?>">
                      </div>

                      <div class="col-4">
                        <input type="text" class="form-control" name="main_dakika" id="main_dakika" placeholder="Dakika" value="<?php echo $maincek['main_dakika']; ?>">
                      </div>

                  </div><br>

                  <input type="hidden" name="maintenancemode">        
                  <button type="submit" style="margin-left: 5px;" class="btn btn-success float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

                </div>
                <!-- /.card-body -->
              </div>

            </div>

          </div>
        </section>

      </div>

<?php 
/*################################*/
include 'footer.php ';
/*################################*/
} else {  ?>
  ?>


  <div class="content-wrapper">

    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 col-md-12">
          </div>

          <div class="card-body">
            <div class="alert alert-danger alert-dismissible text-center">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
              <h5><i class="icon fas fa-ban"></i> Oopss!</h5>
              Sayfayı göremezsin yetkin yok!
            </div>
          </div>

        </div>
      </div>

    </section>

  </div>
  <?php 
  /*################################*/
  include 'footer.php '; } 
  /*################################*/
  ?>