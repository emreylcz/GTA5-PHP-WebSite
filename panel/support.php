<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php define ('guvenlik', true);
include'header.php';
include'sidebar.php';
?>


<?php
if($usercek['versia_admin']=='Admin' or $usercek['versia_admin']=='Yonetim' or $usercek['versia_admin']=='Destek Ekibi') { ?>

  <div class="content-wrapper">

    <section class="content-header wow fadeInUp">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li style="font-size: 23px">Destek Talepleri⠀│⠀</li> 
              <li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
              <li><a href="#">Admin Paneli</a>⠀》⠀</li>
              <li>Destek Talepleri</li>
            </ol>
          </div>
        </div>
      </div>

    </section>





    <section class="content wow fadeInUp" data-wow-delay="400ms">
      <div class="row">
        <div class="col-12">



          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Destek Talepler</h3>
            </div>

            <div class="card-body">




              <table id="veri" class="table table-striped responsive nowrap" width="100%">



                <thead>
                  <tr style="text-align: center;">
                    <th>#</th>
                    <th>Gönderen</th>
                    <th>Konu</th>
                    <th>Durum</th>
                    <th>Gönderme Tarihi</th>
                    <th>Görüntüle</th>	
                  </tr>
                </thead>
                <tbody>




                  <?php 

                  $userkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = "Destek Ekibi"');
                  $userkontrol->fetch(PDO::FETCH_ASSOC);
                  $userkontrol->execute();

                  if(isset($userkontrol)){  

                    $supporteamsor=$db->prepare("select * from support");
                    $supporteamcek=$supporteamsor->fetch(PDO::FETCH_ASSOC);

                    $supporteamsor->execute();
                    foreach($supporteamsor as $supporteamcek) { ?>

                      <tr style="text-align: center;">
                        <td><?php echo $supporteamcek['support_id']; ?></td>
                        <td><?php echo $supporteamcek['support_ekleyen']; ?></td>
                        <td><?php echo $supporteamcek['support_destek']; ?></td>
                        <td>

                          <?php
                          if($supporteamcek['support_durum']=='İncelendi') {  ?>
                            <span class="badge badge-pill badge-success"><i class="fas fa-check"></i> <?php echo $supporteamcek['support_durum']; ?></span>
                          <?php } elseif($supporteamcek['support_durum']=='Beklemede') { ?>
                            <span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $supporteamcek['support_durum']; ?></span>
                          <?php } elseif($supporteamcek['support_durum']=='Kapatıldı') { ?>
                            <span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $supporteamcek['support_durum']; ?></span>
                          <?php } ?>

                        </td>
                        <td><?php echo tarihcevir($supporteamcek['support_tarih']); ?></td>

                        <td class="project-actions">

                          <a href="spview.php?support_id=<?php echo $supporteamcek ['support_id']; ?>DoQq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHe6nvpf0PHIFKmkyM6tG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o"><button type="button" style="width: 30%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
                          <a href="../db/process.php?supportsil=ok&support_id=<?php echo $supporteamcek ['support_id']; ?>" onclick="return desteksilmeonay();"><button type="button" style="width: 20%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>

                        </td>
                      </tr> 
                    <?php  } } ?>


                  </tbody>
                </table>
              </div>

            </div>




            <script type="text/javascript">
             function desteksilmeonay()
             {
              var onay;
              onay=window.confirm(" Destek Talebini silmeyi onaylıyor musunuz?");

              if(onay)
              {
               return true;
             }
             else
             {
               return false;
             }
           }
         </script>






       </div>

     </div>

   </section>

 </div>



 <?php 
 /*################################*/
 include 'footer.php ';
 /*################################*/


} else {  ?>

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