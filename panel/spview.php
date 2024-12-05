<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
--> 
<?php define ('guvenlik', true);
include'header.php';
include'sidebar.php';

$supportsor=$db->prepare("SELECT * from support where support_id=:support_id");
$supportsor->execute(array(
  'support_id' => $_GET['support_id']
));
$supportcek=$supportsor->fetch(PDO::FETCH_ASSOC);

?>


<br><br><div class="content-wrapper">

  <?php if($usercek['versia_admin']=='Admin' or $usercek['versia_admin']=='Yonetim' or $usercek['versia_admin']=='Destek Ekibi') { ?>



    <section class="content">
      <div class="container-fluid"><br>

        <div class="row">

          <div class="col-md-6">

            <div class="card card-danger" style="margin-top:-20px;">

              <div class="card-header">

                <h5 class="card-title"><?php echo $supportcek['support_destek']; ?> - Destek ID: <?php echo $supportcek['support_id']; ?></h5>
              </div>



              <form method="POST" id="supportduzenlee">

                <input type="hidden" name="support_id" value="<?php echo $supportcek ['support_id']; ?>">



                <div class="card-body">
                  <div class="form-group">

                    <label>Gönderen</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $supportcek['support_ekleyen']; ?>">

                  </div>
                  <div class="form-group">

                    <label>Gönderen Adı</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $supportcek['support_adsoyad']; ?>">

                  </div>

                  <div class="form-group">

                    <label>Açıklama</label>
                    <textarea class="form-control" rows="15" disabled="" placeholder=""><?php echo $supportcek['support_aciklama']; ?></textarea>

                  </div>
                </div>


            </div>

          </div>







          <div class="col-md-6">

            <div class="card card-info" style="margin-top:-20px;">
              <div class="card-header">
                <h5 class="card-title" style="height: 20px;"></h5>
              </div>



  

                <div class="card-body">
                  <div class="form-group">

                    <label>İnceleyen</label>
                <input type="text" class="form-control" disabled="" value="<?php echo $supportcek  ['support_duzenleyen']; ?>"> <!-- destegi listeliyor-->
                <input type="text" class="form-control" hidden="" name="support_duzenleyen" id="support_duzenleyen" value="<?php echo $usercek['versia_kadi']; ?>"> <!-- destegi kaydetiyor -->

                  </div>
                  <div class="form-group">

                    <label>Durum</label>

                    <select class="form-control" id="support_durum" name="support_durum">
                      <option value="<?php echo $supportcek['support_durum']; ?>"><?php echo $supportcek['support_durum']; ?> ( Seçilen )</option>
                      <option disabled="">----------------------------------------------------------------------------------------------------------------------------------------</option>
                      <option value="İncelendi">İncelendi</option>
                      <option value="Beklemede">Beklemede</option>
                      <option value="Kapatıldı">Kapatıldı</option>
                    </select>

                  </div>

                  <div class="form-group">

                    <label>İnceleme Notu</label>
                    <textarea class="form-control" rows="15" id="support_inceleme" name="support_inceleme" placeholder=""><?php echo $supportcek['support_inceleme']; ?></textarea>

                  </div>
                </div>




              </div>
              <input type="hidden" name="supportduzenle">
              <button type="submit" class="btn btn-success float-sm-right"><i class="fa fa-check" aria-hidden="true"></i></button>  

              <a href="support.php"><button type="button" class="btn btn-danger float-sm-right" style="margin-right: 10px"><i class="fa fa-arrow-left"></i></button></a>

            </form>
          </div>

        </div>

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
      if($supportcek['support_durum']=='İncelendi') {  ?>

        <div class="alert alert-success alert-dismissible" style="font-family: normal;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
          <h5><i class="icon fas fa-check"></i> Destek talebiniz yetkililer tarafından incelenmiştir.</h5>
          Sizinle İlgilenen Yetkili: (<?php echo $supportcek['support_duzenleyen']; ?>)
        </div>  

      <?php } elseif($supportcek['support_durum']=='Kapatıldı') { ?>

       <div class="alert alert-danger alert-dismissible" style="font-family: normal;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h5><i class="icon fas fa-ban"></i>[<?php echo $supportcek['support_destek']; ?>] Destek talebin kapatıldı,</h5>
        Kapatan yetkili ( <?php echo $supportcek['support_duzenleyen']; ?> )
      </div> 

    <?php } elseif($supportcek['support_durum']=='Beklemede') { ?>

      <div class="alert alert-info alert-dismissible" style="font-family: normal;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h5><i class="fas fa-cog fa-spin"> </i>⠀ [<?php echo $supportcek['support_destek']; ?>] Destek Talebiniz en yakın zamanda yetkililer tarafından incelenilecektir.</h5>
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

                  <input type="text" class="form-control" disabled="" value="<?php echo $supportcek['support_ekleyen']; ?>">

                </div>
                <div class="form-group">

                  <label>Gönderen Adı</label>
                  <input type="text" class="form-control" disabled="" value="<?php echo $supportcek['support_adsoyad']; ?>">

                </div>

                <div class="form-group">

                  <label>Açıklama</label>
                  <textarea class="form-control" rows="15" disabled="" placeholder=""><?php echo $supportcek['support_aciklama']; ?></textarea>


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
                  <input type="text" class="form-control" disabled="" value="<?php echo $supportcek['support_duzenleyen']; ?>">

                </div>
                <div class="form-group">

                  <label>Durum</label>
                  <input type="text" class="form-control" disabled="" value="<?php echo $supportcek['support_durum']; ?>">

                </div>

                <div class="form-group">

                  <label>İnceleme Notu</label>
                  <textarea class="form-control" rows="15" disabled="" placeholder=""><?php echo $supportcek['support_inceleme']; ?></textarea>


                </div>
              </div>


            </form>
          </div>
          <a href="ticket.php"><button type="button" class="btn btn-danger float-sm-right" style="margin-right: 10px"><i class="fa fa-arrow-left"></i></button></a>

        </div>

      </div>

    </div>

  </div>
</section>

</div>


<?php include'footer.php'; } ?>