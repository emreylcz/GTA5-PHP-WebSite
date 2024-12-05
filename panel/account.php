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
            <li style="font-size: 23px">Hesap Ayarları⠀│⠀</li> 
            <li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
            <li><a href="#">Kullanıcı Paneli</a>⠀》⠀</li>
            <li>Hesap Ayarları</li>
          </ol>
        </div>
      </div>
    </div>

  </section>

  <!-- Main content -->
  <section class="content wow fadeInUp" data-wow-delay="400ms">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">

        </div>
        <!-- /.col -->
        <div class="col-md-8">
          <div class="card">
            <div class="card-header p-2" style="background-color: #343A40">
              <ul class="nav nav-pills">

                <li class="nav-item"><a class="nav-link" style="color: #fff; background-color: #343A40;" href="#settings" data-toggle="tab">Hesap Ayarları</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="settings">

                  <div class="tab-pane" id="settings">
                    <form method="POST" id="hesapbilgileriniguncellealert"  class="form-horizontal">


                       <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Kullanıcı Adı</label>
                        <div class="col-sm-10">
                          <input type="text" disabled="" class="form-control" value="<?php echo $usercek['versia_kadi'] ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">AdSoyad</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="versia_adsoyad" id="versia_adsoyad" value="<?php echo $usercek['versia_adsoyad'] ?>" placeholder="AdSoyad girin">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="versia_mail" name="versia_mail" value="<?php echo $usercek['versia_mail'] ?>" placeholder="Email girin">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Parola</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="versia_sifre" name="versia_sifre" placeholder="Şifre girin">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" disabled=""  style="margin-left: 5px;" class="btn btn-success float-right"><i class="fa fa-check" aria-hidden="true"></i></button>
                          <a href="index.php"><button type="button" class="btn btn-danger float-right"><i class="fa fa-arrow-left"></i></button></a>
                        </div>
                      </div>
                    </form>
                  </div>

                </div>


                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php 
include'footer.php';
?>