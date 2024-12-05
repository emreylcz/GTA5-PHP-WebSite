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

  <section class="content-header wow fadeInUp">

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-left">
            <li style="font-size: 23px">Whitelist Kontrol │⠀</li> 
            <li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
            <li><a href="#">Admin Paneli</a>⠀》⠀</li>
            <li>Whitelist Kontrol</li>
          </ol>
        </div>
      </div>
    </div>

  </section>


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header wow fadeInUp">
              <h3 class="card-title">Whitelist Kontrol</h3>
            </div>




            <?php 
            $cloactsor=$db->prepare("select * from cloact order by  cloact_id DESC");
            $cloactsor->execute();
            while($cloactcek=$cloactsor->fetch(PDO::FETCH_ASSOC)){ ?>


              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">


                  <div class="col-sm-4 wow fadeInUp" data-wow-delay="400ms">
                    <div class="position-relative p-3" 
                    style="height: 180px; background-color: darkred;background: -webkit-linear-gradient(left, #BB51C1, #5656CD);background: -o-linear-gradient(left, #BB51C1, #5656CD);background: -moz-linear-gradient(left, #BB51C1, #5656CD);background: linear-gradient(left, #BB51C1, #5656CD);">
                    <div class="ribbon-wrapper">

                      <?php if($cloactcek['cloact_whitelist']=='Acik') { ?>

                        <div class="ribbon bg-success">
                          Açık
                        </div>

                      <?php } elseif($cloactcek['cloact_whitelist']=='Kapali') { ?>

                       <div class="ribbon bg-danger">
                        Kapalı
                      </div>

                    <?php } ?>

                  </div>  

                  <label style="font-size:27px; color: white;">Whitelist Başvuru</label><br/><br/>

                  <form method="POST" id="whitelistkontrolalert" data-parsley-validate class="form-horizontal form-label-left">

                    <input type="hidden" name="cloact_id" value="<?php echo $cloactcek ['cloact_id']; ?>">

                    <input type="hidden" name="whitelistkontrol">
                    <button type="submit"  class="btn btn-dark float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

                    <select class="form-control  float-right" id="cloact_whitelist" name="cloact_whitelist" style="width: 30%; background-color: #343A40; color: white; border:none; margin-right: 10px;">
                      <option value="<?php echo $cloactcek['cloact_whitelist']; ?>"><?php echo $cloactcek['cloact_whitelist']; ?></option>
                      <option disabled="">------------------------</option>
                      <option value="Acik">Açık</option>
                      <option value="Kapali">Kapali</option>

                    </select>

                  </form> 

                </div><br>
              </div>


              <div class="col-sm-4 wow fadeInUp" data-wow-delay="800ms">
                <div class="position-relative p-3" 
                style="height: 180px; background-color: darkred;background: -webkit-linear-gradient(left, #BB51C1, #5656CD);background: -o-linear-gradient(left, #BB51C1, #5656CD);background: -moz-linear-gradient(left, #BB51C1, #5656CD);background: linear-gradient(left, #BB51C1, #5656CD);">
                <div class="ribbon-wrapper">

                  <?php if($cloactcek['cloact_yetkili']=='Acik') { ?>

                    <div class="ribbon bg-success">
                      Açık
                    </div>

                  <?php } elseif($cloactcek['cloact_yetkili']=='Kapali') { ?>

                   <div class="ribbon bg-danger">
                    Kapalı
                  </div>

                <?php } ?>

              </div>
              <label style="font-size:27px; color: white;">Yetkili Başvuru</label><br/><br/>

              <form method="POST" id="yetkilikontrolalert" data-parsley-validate class="form-horizontal form-label-left">

                <input type="hidden" name="cloact_id" value="<?php echo $cloactcek ['cloact_id']; ?>">
                <input type="hidden" name="yetkilikontrol">

                <button type="submit" class="btn btn-dark float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

                <select class="form-control  float-right " id="cloact_yetkili" name="cloact_yetkili" style="width: 30%; background-color: #343A40; color: white; border:none; margin-right: 10px;">
                  <option value="<?php echo $cloactcek['cloact_yetkili']; ?>"><?php echo $cloactcek['cloact_yetkili']; ?></option>
                  <option disabled="">------------------------</option>
                  <option value="Acik">Açık</option>
                  <option value="Kapali">Kapali</option>

                </select>

              </form> 
            </div><br>
          </div>


          <div class="col-sm-4 wow fadeInUp" data-wow-delay="1200ms">
            <div class="position-relative p-3" 
            style="height: 180px; background-color: darkred;background: -webkit-linear-gradient(left, #BB51C1, #5656CD);background: -o-linear-gradient(left, #BB51C1, #5656CD);background: -moz-linear-gradient(left, #BB51C1, #5656CD);background: linear-gradient(left, #BB51C1, #5656CD);">
            <div class="ribbon-wrapper">

              <?php if($cloactcek['cloact_lspd']=='Acik') { ?>

                <div class="ribbon bg-success">
                  Açık
                </div>

              <?php } elseif($cloactcek['cloact_lspd']=='Kapali') { ?>

               <div class="ribbon bg-danger">
                Kapalı
              </div>

            <?php } ?>

          </div>  
          <label style="font-size:27px; color: white;">LSPD Başvuru</label><br/><br/>

          <form method="POST" id="lspdkontrolalert" data-parsley-validate class="form-horizontal form-label-left">

            <input type="hidden" name="cloact_id" value="<?php echo $cloactcek ['cloact_id']; ?>">
            <input type="hidden" name="lspdkontrol">

            <button type="submit"  class="btn btn-dark float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

            <select class="form-control  float-right" id="cloact_lspd" name="cloact_lspd" style="width: 30%; background-color: #343A40; color: white; border:none; margin-right: 10px;">

              <option value="<?php echo $cloactcek['cloact_lspd']; ?>"><?php echo $cloactcek['cloact_lspd']; ?></option>
              <option disabled="">------------------------</option>
              <option value="Acik">Açık</option>
              <option value="Kapali">Kapali</option>

            </select>

          </form> 

        </div><br>
      </div>


      <div class="col-sm-4 wow fadeInUp" data-wow-delay="1600ms">
        <div class="position-relative p-3" 
        style="height: 180px; background-color: darkred;background: -webkit-linear-gradient(left, #BB51C1, #5656CD);background: -o-linear-gradient(left, #BB51C1, #5656CD);background: -moz-linear-gradient(left, #BB51C1, #5656CD);background: linear-gradient(left, #BB51C1, #5656CD);">
        <div class="ribbon-wrapper">

          <?php if($cloactcek['cloact_ems']=='Acik') { ?>

            <div class="ribbon bg-success">
              Açık
            </div>

          <?php } elseif($cloactcek['cloact_ems']=='Kapali') { ?>

           <div class="ribbon bg-danger">
            Kapalı
          </div>

        <?php } ?>

      </div> 
      <label style="font-size:27px; color: white;">EMS Başvuru</label><br/><br/>

      <form method="POST" id="emskontrolalert" data-parsley-validate class="form-horizontal form-label-left">

        <input type="hidden" name="cloact_id" value="<?php echo $cloactcek ['cloact_id']; ?>">
        <input type="hidden" name="emskontrol">

        <button type="submit"  class="btn btn-dark float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

        <select class="form-control  float-right" id="cloact_ems" name="cloact_ems" style="width: 30%; background-color: #343A40; color: white; border:none; margin-right: 10px;">
          <option value="<?php echo $cloactcek['cloact_ems']; ?>"><?php echo $cloactcek['cloact_ems']; ?></option>
          <option disabled="">------------------------</option>
          <option value="Acik">Açık</option>
          <option value="Kapali">Kapali</option>

        </select>

      </form> 

    </div><br>
  </div>


  <div class="col-sm-4 wow fadeInUp" data-wow-delay="2000ms">
    <div class="position-relative p-3" 
    style="height: 180px; background-color: darkred;background: -webkit-linear-gradient(left, #BB51C1, #5656CD);background: -o-linear-gradient(left, #BB51C1, #5656CD);background: -moz-linear-gradient(left, #BB51C1, #5656CD);background: linear-gradient(left, #BB51C1, #5656CD);">
    <div class="ribbon-wrapper">

      <?php if($cloactcek['cloact_emlak']=='Acik') { ?>

        <div class="ribbon bg-success">
          Açık
        </div>

      <?php } elseif($cloactcek['cloact_emlak']=='Kapali') { ?>

       <div class="ribbon bg-danger">
        Kapalı
      </div>

    <?php } ?>

  </div> 
  <label style="font-size:27px; color: white;">Emlak Başvuru</label><br/><br/>
  <form method="POST" id="emlakkontrolalert" data-parsley-validate class="form-horizontal form-label-left">

    <input type="hidden" name="cloact_id" value="<?php echo $cloactcek ['cloact_id']; ?>">

    <input type="hidden" name="emlakkontrol">

    <button type="submit"  class="btn btn-dark float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

    <select class="form-control  float-right" id="cloact_emlak" name="cloact_emlak" style="width: 30%; background-color: #343A40; color: white; border:none; margin-right: 10px;">
      <option value="<?php echo $cloactcek['cloact_emlak']; ?>"><?php echo $cloactcek['cloact_emlak']; ?></option>
      <option disabled="">------------------------</option>                        
      <option value="Acik">Acık</option>
      <option value="Kapali">Kapali</option>

    </select>

  </form> 
</div><br>
</div>


<div class="col-sm-4 wow fadeInUp" data-wow-delay="2400ms">
  <div class="position-relative p-3" 
  style="height: 180px; background-color: darkred;background: -webkit-linear-gradient(left, #BB51C1, #5656CD);background: -o-linear-gradient(left, #BB51C1, #5656CD);background: -moz-linear-gradient(left, #BB51C1, #5656CD);background: linear-gradient(left, #BB51C1, #5656CD);">
  <div class="ribbon-wrapper">

    <?php if($cloactcek['cloact_mekanik']=='Acik') { ?>

      <div class="ribbon bg-success">
        Açık
      </div>

    <?php } elseif($cloactcek['cloact_mekanik']=='Kapali') { ?>

     <div class="ribbon bg-danger">
      Kapalı
    </div>

  <?php } ?>

</div> 
<label style="font-size:27px; color: white;">Mekanik Başvuru</label><br/><br/>

<form method="POST" id="mekanikkontrolalert" data-parsley-validate class="form-horizontal form-label-left">

 <input type="hidden" name="cloact_id" value="<?php echo $cloactcek ['cloact_id']; ?>">
 <input type="hidden" name="mekanikkontrol">

 <button type="submit"  class="btn btn-dark float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

 <select class="form-control  float-right" id="cloact_mekanik" name="cloact_mekanik" style="width: 30%; background-color: #343A40; color: white; border:none; margin-right: 10px;">
  <option value="<?php echo $cloactcek['cloact_mekanik']; ?>"><?php echo $cloactcek['cloact_mekanik']; ?></option>
  <option disabled="">------------------------</option>
  <option value="Acik">Açık</option>
  <option value="Kapali">Kapali</option>

</select>

</form> 
</div><br>
</div>


<div class="col-sm-4 wow fadeInUp" data-wow-delay="2800ms">
  <div class="position-relative p-3" 
  style="height: 180px; background-color: darkred;background: -webkit-linear-gradient(left, #BB51C1, #5656CD);background: -o-linear-gradient(left, #BB51C1, #5656CD);background: -moz-linear-gradient(left, #BB51C1, #5656CD);background: linear-gradient(left, #BB51C1, #5656CD);">
  <div class="ribbon-wrapper">

    <?php if($cloactcek['cloact_lost']=='Acik') { ?>

      <div class="ribbon bg-success">
        Açık
      </div>

    <?php } elseif($cloactcek['cloact_lost']=='Kapali') { ?>

     <div class="ribbon bg-danger">
      Kapalı
    </div>

  <?php } ?>

</div> 
<label style="font-size:27px; color: white;">The Lost MC Başvuru</label><br/><br/>

<form method="POST" id="thelostmckontrolalert" data-parsley-validate class="form-horizontal form-label-left">

  <input type="hidden" name="thelostmckontrol">
  <input type="hidden" name="cloact_id" value="<?php echo $cloactcek ['cloact_id']; ?>">

  <button type="submit"  class="btn btn-dark float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

  <select class="form-control  float-right"  id="cloact_lost" name="cloact_lost" style="width: 30%; background-color: #343A40; color: white; border:none; margin-right: 10px;">
    <option value="<?php echo $cloactcek['cloact_lost']; ?>"><?php echo $cloactcek['cloact_lost']; ?></option>
    <option disabled="">------------------------</option>
    <option value="Acik">Açık</option>
    <option value="Kapali">Kapali</option>

  </select>

</form> 

</div><br>
</div>


<div class="col-sm-4 wow fadeInUp" data-wow-delay="3200ms">
  <div class="position-relative p-3" 
  style="height: 180px; background-color: darkred;background: -webkit-linear-gradient(left, #BB51C1, #5656CD);background: -o-linear-gradient(left, #BB51C1, #5656CD);background: -moz-linear-gradient(left, #BB51C1, #5656CD);background: linear-gradient(left, #BB51C1, #5656CD);">
  <div class="ribbon-wrapper">

    <?php if($cloactcek['cloact_grove']=='Acik') { ?>

      <div class="ribbon bg-success">
        Açık
      </div>

    <?php } elseif($cloactcek['cloact_grove']=='Kapali') { ?>

     <div class="ribbon bg-danger">
      Kapalı
    </div>

  <?php } ?>

</div> 
<label style="font-size:27px; color: white;">Grove Street Başvuru</label><br/><br/>

<form method="POST" id="grovestreetkontrolalert" data-parsley-validate class="form-horizontal form-label-left">

  <input type="hidden" name="cloact_id" value="<?php echo $cloactcek ['cloact_id']; ?>">
  <input type="hidden" name="grovestreetkontrol">

  <button type="submit"  class="btn btn-dark float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

  <select class="form-control  float-right" name="cloact_grove" id="cloact_grove" style="width: 30%; background-color: #343A40; color: white; border:none; margin-right: 10px;">
    <option value="<?php echo $cloactcek['cloact_grove']; ?>"><?php echo $cloactcek['cloact_grove']; ?></option>
    <option disabled="">------------------------</option>
    <option value="Acik">Açık</option>
    <option value="Kapali">Kapalı</option>

  </select>

</form> 

</div><br>
</div>


<div class="col-sm-4 wow fadeInUp" data-wow-delay="3600ms">
  <div class="position-relative p-3" 
  style="height: 180px; background-color: darkred;background: -webkit-linear-gradient(left, #BB51C1, #5656CD);background: -o-linear-gradient(left, #BB51C1, #5656CD);background: -moz-linear-gradient(left, #BB51C1, #5656CD);background: linear-gradient(left, #BB51C1, #5656CD);">
  <div class="ribbon-wrapper">

    <?php if($cloactcek['cloact_vagos']=='Acik') { ?>

      <div class="ribbon bg-success">
        Açık
      </div>

    <?php } elseif($cloactcek['cloact_vagos']=='Kapali') { ?>

     <div class="ribbon bg-danger">
      Kapalı
    </div>

  <?php } ?>

</div> 
<label style="font-size:27px; color: white;">Vagos Başvuru</label><br/><br/>
<form method="POST" id="vagoskontrolalert" data-parsley-validate class="form-horizontal form-label-left">

  <input type="hidden" name="cloact_id" value="<?php echo $cloactcek ['cloact_id']; ?>">
  <input type="hidden" name="vagoskontrol">

  <button type="submit"  class="btn btn-dark float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

  <select class="form-control  float-right" name="cloact_vagos" id="cloact_vagos" style="width: 30%; background-color: #343A40; color: white; border:none; margin-right: 10px;">
    <option value="<?php echo $cloactcek['cloact_vagos']; ?>"><?php echo $cloactcek['cloact_vagos']; ?></option>
    <option disabled="">------------------------</option>
    <option value="Acik">Açık</option>
    <option value="Kapali">Kapalı</option>

  </select>

</form> 

</div><br>
</div>


<div class="col-sm-4">
</div>

<div class="col-sm-4 wow fadeInUp" data-wow-delay="4000ms">
  <div class="position-relative p-3" 
  style="height: 180px; background-color: darkred;background: -webkit-linear-gradient(left, #BB51C1, #5656CD);background: -o-linear-gradient(left, #BB51C1, #5656CD);background: -moz-linear-gradient(left, #BB51C1, #5656CD);background: linear-gradient(left, #BB51C1, #5656CD);">
  <div class="ribbon-wrapper">

    <?php if($cloactcek['cloact_ballas']=='Acik') { ?>

      <div class="ribbon bg-success">
        Açık
      </div>

    <?php } elseif($cloactcek['cloact_ballas']=='Kapali') { ?>

     <div class="ribbon bg-danger">
      Kapalı
    </div>

  <?php } ?>

</div> 
<label style="font-size:27px; color: white;">Ballas Başvuru</label><br/><br/>

<form method="POST" id="ballaskontrolalert" data-parsley-validate class="form-horizontal form-label-left">

  <input type="hidden" name="cloact_id" value="<?php echo $cloactcek ['cloact_id']; ?>">
  <input type="hidden" name="ballaskontrol">

  <button type="submit"  class="btn btn-dark float-right"><i class="fa fa-check" aria-hidden="true"></i></button>

  <select class="form-control  float-right" name="cloact_ballas" id="cloact_ballas" style="width: 30%; background-color: #343A40; color: white; border:none; margin-right: 10px;">
    <option value="<?php echo $cloactcek['cloact_ballas']; ?>"><?php echo $cloactcek['cloact_ballas']; ?></option>
    <option disabled="">------------------------</option>
    <option value="Acik">Açık</option>
    <option value="Kapali">Kapalı</option>

  </select>

</form> 

</div><br>
</div>

<?php } ?>







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
?>