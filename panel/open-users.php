<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php define ('guvenlik', true);
include'header.php';
include'sidebar.php';

$usersor=$db->prepare("SELECT * from user where versia_id=:versia_id");
$usersor->execute(array(
  'versia_id' => $_GET['id']
));
$userscek=$usersor->fetch(PDO::FETCH_ASSOC);




if($usercek['versia_admin']=='Admin') { ?>


  <div class="content-wrapper">

    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li style="font-size: 23px">Kullanıcı Düzenle⠀│⠀</li> 
              <li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
              <li><a href="#">Admin Paneli</a>⠀》⠀</li>
              <li>Kullanıcı Düzenle</li>
            </ol>
          </div>
        </div>
      </div>

    </section>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">

          </div>

          <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2" style="background-color: #343A40">
                <ul class="nav nav-pills">

                  <li class="nav-item"><a class="nav-link" style="color: #fff; background-color: #343A40;" href="#settings" data-toggle="tab">Hesap Bilgileri</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="settings">

                    <div class="tab-pane" id="settings">

                      <form method="POST" id="kullanicibilgileriniguncellealert" data-parsley-validate class="form-horizontal form-label-left">

                       <input type="hidden" name="versia_id" value="<?php echo $userscek ['versia_id']; ?>">


                       <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Kullanıcı Adı</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="versia_kadi" value="<?php echo $userscek['versia_kadi'] ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">AdSoyad</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="versia_adsoyad" id="versia_adsoyad" value="<?php echo $userscek['versia_adsoyad'] ?>" placeholder="AdSoyad girin">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="versia_mail" name="versia_mail" value="<?php echo $userscek['versia_mail'] ?>" placeholder="Email girin">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Yetki</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="versia_admin">
                            <option value="Admin">Admin</option>
                            <option value="Yonetim">Yönetim</option>
                            <option value="Kayit Sorumlusu">Kayıt Sorumlusu</option>
                            <option value="Destek Ekibi">Destek Ekibi</option>
                            <option disabled=""></option>
                            <option value="LSPD">LSPD</option>
                            <option value="EMS">EMS</option>
                            <option value="Mekanik">Mekanik</option>
                            <option value="Emlak">Emlak</option>
                            <option disabled=""></option>
                            <option value="The Lost MC">The Lost MC</option>
                            <option value="Grove Street">Grove Street</option>
                            <option value="Ballas">Ballas</option>
                            <option value="Vagos">Vagos</option>
                            <option disabled=""></option>
                            <option value="User">Üye</option>
                          </select>
                        </div>
                      </div>
                      <input type="hidden" name="kullanicibilgileriniguncelle">
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit"  style="margin-left: 5px;" class="btn btn-success float-right"><i class="fa fa-check" aria-hidden="true"></i></button>
                          <a href="users.php"><button type="button" class="btn btn-danger float-right"><i class="fa fa-arrow-left"></i></button></a>
                        </div>
                      </div>
                    </form>

                  </div>

                </div>


              </div>

            </div>
          </div>

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
  ?>>