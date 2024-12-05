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
              <li style="font-size: 23px">Ekip⠀│⠀</li> 
              <li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
              <li><a href="#">Admin Paneli</a>⠀》⠀</li>
              <li>Ekip</li>
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
              <h3 class="card-title">Ekip Üyeleri</h3>

              <button type="button"  class="btn btn-outline-success float-right" data-toggle="modal" data-target="#adduser"><i class="fa fa-user"></i> Kullanıcı Ekle</button>


            </div>
            <!-- /.card-header -->
            <div class="card-body">


              <table id="veri" class="table table-striped responsive" width="100%">



                <thead>
                  <tr style="text-align: center;">
                    <th>Resim</th>
                    <th>Discord Adı</th>
                    <th>Yetki</th>
                    <th>İşlemler</th> 
                  </tr>
                </thead>
                <tbody>




                  <?php 


                  $teamsor=$db->prepare("select * from team");
                  $teamsor->execute();
                  while($teamcek=$teamsor->fetch(PDO::FETCH_ASSOC)){ ?>

                    <tr style="text-align: center;">
                      <td><img width="60px" height="60px" style="border-radius: 100px; margin-top:-12px;" src="<?php echo $teamcek['team_url']; ?>"></td>
                      <td><?php echo $teamcek['team_discord']; ?></td>
                      <td><?php echo $teamcek['team_yetki']; ?></td>

                        <td class="project-actions">
                         <a href="../db/process.php?teamsil=ok&team_id=<?php echo $teamcek ['team_id']; ?>" onclick="return teamuserdelete();"><button type="button" style="width: 30%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
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
   <form action="" method="POST" id="TeamAddUser" style="font-family: normal;">
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

            <label>Resim URL</label>
            <input class="form-control" type="text" name="team_url" id="team_url"><br>

            <label>Discord Adı:</label>
            <input class="form-control" type="text" name="team_discord" id="team_discord"><br>

            <label>Yetki</label>
            <input class="form-control" type="text" name="team_yetki" id="team_yetki"><br>

          </div>



          <div class="modal-footer">
            <input type="hidden" name="teamadd">
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
   function teamuserdelete()
   {
    var onay;
    onay=window.confirm(" Ekip üyesini silmeyi onaylıyor musunuz?");

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