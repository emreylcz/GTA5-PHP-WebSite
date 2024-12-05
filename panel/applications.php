<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php define ('guvenlik', true);
include'header.php';
include'sidebar.php';
?>



  <div class="content-wrapper">

    <section class="content-header wow fadeInUp">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li style="font-size: 23px">Başvurularım⠀│⠀</li> 
              <li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
              <li><a href="#">Kullanıcı Paneli</a>⠀》⠀</li>
              <li>Başvurularım</li>
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
    <div class="users-list-filter px-1">
        <form>
            <div class="row rounded py-2 mb-2">
                <div class="col-12 col-sm-6 col-lg-3">
                    <label style="padding-top:-10px; margin-bottom: 15px" for="users-list-status">Durum</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="" style="margin-top: -15px;" disabled="">
                        </select>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                    <a href=""><button type="reset" disabled="" style="margin-top: 5px; box-shadow: 3px 3px 4px #000;" class="btn btn-primary btn-block glow users-list-clear mb-0">Temizle</button></a>
                    <a href="open-app.php"><button type="button" style="margin-left: 20px; margin-top: 5px; box-shadow: 3px 3px 4px #000;" class="btn btn-primary btn-block glow users-list-clear mb-0">Başvur</button></a>
                </div>
            </div>
        </form>
    </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">



          <div class="card wow fadeInUp" data-wow-delay="800ms">
            <div class="card-header" style="background-color: #343A40; color: white;">
              <h3 class="card-title">Whitelist Başvuruları</h3>

            </div> 

            <!-- /.card-header -->
            <div class="card-body">



              <table id="veri" class="table table-striped responsive nowrap" width="100%">



                <thead>
                  <tr style="text-align: center;">
                    <th>#</th>
                    <th>Gönderen</th>
                    <th>Meslek</th>
                    <th>Durum</th>
                    <th>Gönderme Tarihi</th>
                    <th>Görüntüle</th>	
                  </tr>
                </thead>
                <tbody>




          <?php 

          $whitelistkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = 0');
          $whitelistkontrol->fetch(PDO::FETCH_ASSOC);
          $whitelistkontrol->execute();

          if(isset($whitelistkontrol)){ 
            $kadi = $_SESSION['versia_kadi']; 

            $whitelistbos = $db->query("SELECT * FROM whitelist_basvuru WHERE wh_ekleyen = '$kadi' ");


                $whitesor=$db->prepare("select * from whitelist_basvuru WHERE wh_ekleyen =  '$kadi' order by wh_id DESC");
                $whitecek=$whitesor->fetch(PDO::FETCH_ASSOC);
                $whitesor->execute();

                      foreach($whitesor as $whitecek) { ?>
                    <tr style="text-align: center;">
                      <td><?php echo $whitecek['wh_id']; ?></td>
                      <td><?php echo $whitecek['wh_ekleyen']; ?></td>
                      <td><?php echo $whitecek['wh_meslek']; ?></td>
                      <td>
                       <?php
                       if($whitecek['wh_durum']=='Beklemede') {  ?>
                        <span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $whitecek['wh_durum']; ?></span>
                      <?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>
                        <span class="badge badge-pill badge-success"><i class="fas fa-check"></i>  <?php echo $whitecek['wh_durum']; ?></span>
                      <?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>
                        <span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $whitecek['wh_durum']; ?></span>
                      <?php } elseif($whitecek['wh_durum']=='Geçersiz') { ?>
                        <span class="badge badge-pill badge-danger"><i class="fas fa-ban"></i> <?php echo $whitecek['wh_durum']; ?></span>
                      <?php } ?>

                    </td>
                    <td><?php echo tarihcevir($whitecek['wh_tarih']); ?></td>

                    <td class="project-actions">

                      <a href="whview.php?id=<?php echo $whitecek ['wh_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o">
                        <i class="fas fa-eye"></i>
                      </a>

                    </td>
                  </tr> 
                <?php } }  ?>

                
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->










      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>


  <?php 
  /*################################*/
  include 'footer.php ';
  /*################################*/
  ?>