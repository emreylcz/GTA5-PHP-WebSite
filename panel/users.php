<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php define ('guvenlik', true);
include'header.php';
include'sidebar.php';
?>

<?php
if($usercek['versia_admin']=='Admin') { ?>


  <div class="content-wrapper">

    <section class="content-header">

      <div class="container-fluid wow fadeInUp">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li style="font-size: 23px">Kullanıcılar⠀│⠀</li> 
              <li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
              <li><a href="#">Admin Paneli</a>⠀》⠀</li>
              <li>Kullanıcılar</li>
            </ol>
          </div>
        </div>
      </div>

    </section>







    <!-- Main content -->
    <section class="content wow fadeInUp" data-wow-delay="400ms">
      <div class="row">
        <div class="col-12">



          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Kullanıcılar</h3>

              <button type="button"  class="btn btn-outline-success float-right" data-toggle="modal" data-target="#adduser"><i class="fa fa-user"></i> Kullanıcı Ekle</button>


            </div>
            <!-- /.card-header -->
            <div class="card-body">


              <table id="veri" class="table table-striped responsive" width="100%">



                <thead>
                  <tr style="text-align: center;">
                    <th>#</th>
                    <th>AdSoyad</th>
                    <th>Kullanıcı Adı</th>
                    <th>Email</th>
                    <th>Yetki</th>	
                    <th>İşlemler</th> 
                  </tr>
                </thead>
                <tbody>




                  <?php 

                  $usersor=$db->prepare("select * from user");
                  $usersor->execute();
                  while($usercek=$usersor->fetch(PDO::FETCH_ASSOC)){ ?>

                    <tr style="text-align: center;">
                      <td><?php echo $usercek['versia_id']; ?></td>
                      <td><?php echo $usercek['versia_adsoyad']; ?></td>
                      <td><?php echo $usercek['versia_kadi']; ?></td>
                      <td><?php echo $usercek['versia_mail']; ?></td>
                      <td>

                        <?php 
                        if($usercek['versia_admin']=='Admin') { ?>
                          <span class="badge badge-pill badge-danger"><strong><?php echo $usercek['versia_admin']; ?></strong></span>
                        <?php } elseif($usercek['versia_admin']=='Yonetim') {  ?>
                          <span class="badge badge-pill badge-danger"><strong><?php echo $usercek['versia_admin']; ?></strong></span>
                        <?php } elseif($usercek['versia_admin']=='Kayit Sorumlusu') {  ?>
                          <span class="badge badge-pill badge-danger"><strong><?php echo $usercek['versia_admin']; ?></strong></span> 
                        <?php } elseif($usercek['versia_admin']=='Destek Ekibi') {  ?>
                          <span class="badge badge-pill badge-danger"><strong><?php echo $usercek['versia_admin']; ?></strong></span> 

                        <?php } elseif($usercek['versia_admin']=='LSPD') {  ?>
                          <span class="badge badge-pill badge-warning"><strong><?php echo $usercek['versia_admin']; ?></strong></span>  
                        <?php } elseif($usercek['versia_admin']=='EMS') {  ?>
                          <span class="badge badge-pill badge-warning"><strong><?php echo $usercek['versia_admin']; ?></strong></span>  
                        <?php } elseif($usercek['versia_admin']=='Mekanik') {  ?>
                          <span class="badge badge-pill badge-warning"><strong><?php echo $usercek['versia_admin']; ?></strong></span>
                        <?php } elseif($usercek['versia_admin']=='Emlak') {  ?>
                          <span class="badge badge-pill badge-warning"><strong><?php echo $usercek['versia_admin']; ?></strong></span>  

                        <?php } elseif($usercek['versia_admin']=='The Lost MC') {  ?>
                          <span class="badge badge-pill badge-success"><strong><?php echo $usercek['versia_admin']; ?></strong></span>
                        <?php } elseif($usercek['versia_admin']=='Grove Street') {  ?>
                          <span class="badge badge-pill badge-success"><strong><?php echo $usercek['versia_admin']; ?></strong></span>
                        <?php } elseif($usercek['versia_admin']=='Ballas') {  ?>
                          <span class="badge badge-pill badge-success"><strong><?php echo $usercek['versia_admin']; ?></strong></span>
                        <?php } elseif($usercek['versia_admin']=='Vagos') {  ?>
                          <span class="badge badge-pill badge-success"><strong><?php echo $usercek['versia_admin']; ?></strong></span>


                        <?php } elseif($usercek['versia_admin']=='User') {  ?>
                          <span class="badge badge-pill badge-info"><strong><?php echo $usercek['versia_admin']; ?></strong></span>     
                        <?php } ?> 


                        <td class="project-actions">
                         <a href="open-users.php?id=<?php echo $usercek ['versia_id']; ?>C115VD2tu8pwOAWIu_rr4OfmzKL11u4dn9EyJ1DdKFdNSTyUnzb3Skdxt09ixeaAr5cByBomk"><button type="button" style="width: 40%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
                         <a href="../db/process.php?users=ok&versia_id=<?php echo $usercek ['versia_id']; ?>" onclick="return usersilonay();"><button type="button" style="width: 30%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
                       </td>



                     </tr> 


                   <?php }  ?>


                 </tbody>
               </table>
             </div>

           </div>








         </div>

       </div>

     </section>

   </div>



   <!--############################################################################################################################################################################################################-->
   <!--###################################################################################### MODAL ###############################################################################################################-->
   <!--############################################################################################################################################################################################################-->

   <style type="text/css">label{margin:0px; padding: 0px;}</style>
   <form action="" method="POST" id="AddUser" style="font-family: normal;">
    <div class="modal animated zoomIn" id="adduser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #2962FF; color: white;">
            <h5 class="modal-title" id="exampleModalCenterTitle">Kullanıcı Ekle</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">

            <label>Kullanıcı Adı</label>
            <input class="form-control" type="text" name="versia_kadi" id="versia_kadi"><br>

            <label>AdSoyad</label>
            <input class="form-control" type="text" name="versia_adsoyad" id="versia_adsoyad"><br>

            <label>Email</label>
            <input class="form-control" type="email" name="versia_mail" id="versia_mail"><br>

            <label>Parola</label>
            <input class="form-control" type="password" name="versia_sifre" id="versia_sifre"><br>

            <label>Yetki</label>
            <select class="form-control" name="versia_admin">
              <option value="Admin">Admin</option>
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
          <input type="datetime" hidden="" value="<?php echo date('d.m.y H:i:s'); ?>" name="versia_tarih" id="versia_tarih">



          <div class="modal-footer">
            <input type="hidden" name="userekle">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
          </div>


        </div>
      </div>
    </div>
  </form>

  <!--############################################################################################################################################################################################################-->
  <!--###################################################################################### MODAL ###############################################################################################################-->
  <!--############################################################################################################################################################################################################-->

  <script type="text/javascript">
   function usersilonay()
   {
    var onay;
    onay=window.confirm(" Kullanıcıyı silmeyi onaylıyor musunuz?");

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