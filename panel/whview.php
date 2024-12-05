<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php define ('guvenlik', true);
include'header.php';
include'sidebar.php';

$whitelistsor=$db->prepare("SELECT * from whitelist_basvuru where wh_id=:wh_id");
$whitelistsor->execute(array(
  'wh_id' => $_GET['id']
));
$whitecek=$whitelistsor->fetch(PDO::FETCH_ASSOC);

?>

<br><br><div class="content-wrapper">
<?php if($usercek['versia_admin']=='Admin' or $usercek['versia_admin']=='Kayit Sorumlusu' or $usercek['versia_admin']=='Yonetim' or $usercek['versia_admin']=='LSPD' or $usercek['versia_admin']=='EMS' or $usercek['versia_admin']=='Emlak' or $usercek['versia_admin']=='Mekanik' or $usercek['versia_admin']=='The Lost MC' or $usercek['versia_admin']=='Grove Street' or $usercek['versia_admin']=='Vagos' or $usercek['versia_admin']=='Ballas') { ?>


    <section class="content">

      <div class="container-fluid">

        <br>
        <!--<h1 style="font-size: 25px; text-align: left;" class="tittle-w3-agileits mb-4"><?php echo $whitecek['wh_meslek']; ?> - Başvuru ID: <?php echo $whitecek['wh_id']; ?></h1>-->
        <div class="row">

          <div class="col-md-6">

            <div class="card card-danger" style="margin-top:-20px;">

              <div class="card-header">

                <h5 class="card-title"><?php echo $whitecek['wh_meslek']; ?> - Başvuru ID: <?php echo $whitecek['wh_id']; ?></h5>
              </div>



              <form role="form">

                <div class="card-body">
                  <div class="form-group">

                    <label>Gönderen</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $whitecek['wh_ekleyen']; ?>">

                  </div>
                  <div class="form-group">

                    <label>Gönderen Adı</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $whitecek['wh_adsoyad']; ?>">
                  </div>

                  <div class="form-group">

                    <label>Açıklama</label>
                    <textarea class="form-control" rows="15" disabled="" placeholder=""><?php echo $whitecek['wh_aciklama']; ?></textarea>

                  </div>
                </div>


              </form>
            </div>

          </div>


          <div class="col-md-6">

            <div class="card card-info" style="margin-top:-20px;">
              <div class="card-header">
                <h5 class="card-title" style="height: 20px;"></h5>

              </div>



              <form method="POST" id="whduzenlee">

                <input type="hidden" name="wh_id" value="<?php echo $whitecek ['wh_id']; ?>">

                <div class="card-body">
                  <div class="form-group">

                    <label>İnceleyen</label>

                    <input type="text" class="form-control" disabled="" value="<?php echo $whitecek['wh_duzenleyen']; ?>"> <!-- kullanıcıyı listeliyor-->
                    <input type="text" class="form-control" hidden="" name="wh_duzenleyen" id="wh_duzenleyen" value="<?php echo $usercek['versia_kadi']; ?>"> <!-- Kullanıcıyı kaydetiyor -->

                  </div>
                  <div class="form-group">

                    <label>Durum</label>

                    <select class="form-control" id="wh_durum" name="wh_durum">
                      <option value="<?php echo $whitecek['wh_durum']; ?>"><?php echo $whitecek['wh_durum']; ?> ( Seçilen )</option>
                      <option disabled="">----------------------------------------------------------------------------------------------------------------------------------------</option>
                      <option value="Beklemede">Beklemede</option>
                      <option value="Onaylandı">Onaylandı</option>
                      <option value="Reddedildi">Reddedildi</option>
                      <option value="Geçersiz">Geçersiz</option>
                    </select>

                  </div>

                  <div class="form-group">

                    <label>İnceleme Notu</label>
                    <textarea class="form-control" id="wh_inceleme" name="wh_inceleme" rows="15" placeholder=""><?php echo $whitecek['wh_inceleme']; ?></textarea>

                  </div>


                </div>




              </div>


            </div>

          </div>

          <input type="hidden" name="whtduzenle">

          <button type="submit" class="btn btn-success float-sm-right"><i class="fa fa-check" aria-hidden="true"></i></button>  

          <a href="whitelist.php"><button type="button" class="btn btn-danger float-sm-right" style="margin-right: 10px"><i class="fa fa-arrow-left"></i></button></a>
        </form>
      </div>

    </div>
  </section>

</div>

<?php include'footer.php'; ?>


<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

<?php }else{  ?>

  <section class="content">
    <div class="container-fluid">
      <?php
      if($whitecek['wh_durum']=='Geçersiz') {  ?>

        <div class="alert alert-warning alert-dismissible" style="font-family: normal;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
          <h5><i class="icon fas fa-exclamation-triangle"></i> Hatalı veya eksik doldurduğunuz için reddedildi.</h5>
          Başvuruyu İnceleyen Yetkili: (<?php echo $whitecek['wh_duzenleyen']; ?>)
        </div>  

      <?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>

        <div class="alert alert-success alert-dismissible" style="font-family: normal;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
          <h5><i class="icon fas fa-check"></i> [<?php echo $whitecek['wh_meslek']; ?>] Başvuru formunuz onaylanmıştır.</h5>
          Başvuruyu İnceleyen Yetkili: (<?php echo $whitecek['wh_duzenleyen']; ?>)
        </div>

      <?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>

       <div class="alert alert-danger alert-dismissible" style="font-family: normal;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h5><i class="icon fas fa-ban"></i> [<?php echo $whitecek['wh_meslek']; ?>] Başvuru formunuz reddedilmiştir.</h5>
        Başvuruyu İnceleyen Yetkili: (<?php echo $whitecek['wh_duzenleyen']; ?>)
      </div> 

    <?php } elseif($whitecek['wh_durum']=='Beklemede') { ?>

      <div class="alert alert-info alert-dismissible" style="font-family: normal;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h5><i class="fas fa-cog fa-spin"> </i>⠀ [<?php echo $whitecek['wh_meslek']; ?>] Başvurunuzu en geç 2 (iki) gün içinde cevaplayacağız.</h5>
      </div> 

      <?php } ?><br>

      <div class="row">

        <div class="col-md-6">

          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>



            <form role="form">

              <div class="card-body">
                <div class="form-group">

                  <label>Gönderen</label>
                  <input type="text" class="form-control" disabled="" value="<?php echo $whitecek['wh_ekleyen']; ?>">

                </div>
                <div class="form-group">

                  <label>Gönderen Adı</label>
                  <input type="text" class="form-control" disabled="" value="<?php echo $whitecek['wh_adsoyad']; ?>">

                </div>

                <div class="form-group">

                  <label>Açıklama</label>
                  <textarea class="form-control" rows="15" disabled="" placeholder=""><?php echo $whitecek['wh_aciklama']; ?></textarea>

                </div>
              </div>


            </form>
          </div>

        </div>



        <div class="col-md-6">

          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>



            <form role="form">

              <div class="card-body">
                <div class="form-group">

                  <label>İnceleyen</label>
                  <input type="text" class="form-control" disabled="" value="<?php echo $whitecek['wh_duzenleyen']; ?>">

                </div>
                <div class="form-group">

                  <label>Durum</label>
                  <input type="text" class="form-control" disabled="" value="<?php echo $whitecek['wh_durum']; ?>">

                </div>

                <div class="form-group">

                  <label>İnceleme Notu</label>
                  <textarea class="form-control" rows="15" disabled="" placeholder=""><?php echo $whitecek['wh_inceleme']; ?></textarea>

                </div>
              </div>


            </form>
          </div>

                    <a href="applications.php"><button type="button" class="btn btn-danger float-sm-right" style="margin-right: 10px"><i class="fa fa-arrow-left"></i></button></a>
                    
        </div>

      </div>
    </div>

  </div>
</section>

</div>



<?php include'footer.php'; } ?>