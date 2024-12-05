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
              <li style="font-size: 23px">Oyundan Kareler⠀│⠀</li> 
              <li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
              <li><a href="#">Admin Paneli</a>⠀》⠀</li>
              <li>Oyundan Kareler</li>
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
              <h3 class="card-title">Oyundan Kareler</h3>

              <button type="button"  class="btn btn-outline-success float-right" data-toggle="modal" data-target="#adduser"><i class="fa fa-user"></i> Resim Ekle</button>


            </div>
            <!-- /.card-header -->
            <div class="card-body">


              <table id="veri" class="table table-striped responsive" width="100%">



                <thead>
                  <tr style="text-align: left;">
                    <th style="text-align: center;">#</th>
                    <th>Resim</th>
                    <th>İşlemler</th> 
                  </tr>
                </thead>
                <tbody>




                  <?php 


                  $gamesquaressor=$db->prepare("select * from game_squares");
                  $gamesquaressor->execute();
                  while($gamesquarescek=$gamesquaressor->fetch(PDO::FETCH_ASSOC)){ ?>

                    <tr style="text-align: left;">
                      <td style="text-align: center;"><?php echo $gamesquarescek['game_squares_id']; ?></td>
                      <td><img width="300px" height="200px" src="<?php echo $gamesquarescek['game_squares_resimurl']; ?>"></td>

                        <td class="project-actions">
                         <a href="../db/process.php?gamesquaressil=ok&game_squares_id=<?php echo $gamesquarescek ['game_squares_id']; ?>" onclick="return gamesquaresdelete();"><button type="button" style="width: 45%; margin-top: 21%;" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
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
   <form action="" method="POST" id="gamesquaresimageadd" style="font-family: normal;">
    <div class="modal animated zoomIn" id="adduser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #2962FF; color: white;">
            <h5 class="modal-title" id="exampleModalCenterTitle">Resim Ekle</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">

            <label>Resim URL</label>
            <input class="form-control" type="text" name="game_squares_resimurl" id="game_squares_resimurl"><br>

          </div>



          <div class="modal-footer">
            <input type="hidden" name="gamesquaresadd">
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
   function gamesquaresdelete()
   {
    var onay;
    onay=window.confirm(" Oyundan karelerdeki resmi silmeyi onaylıyor musunuz?");

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