<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php define ('guvenlik', true);
include'header.php';
include'sidebar.php';
?>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<div class="content-wrapper">

    <section class="content-header">

      <div class="container-fluid wow fadeInUp" data-wow-delay="100ms">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li style="font-size: 23px">Ticket Aç⠀│⠀</li> 
              <li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
              <li><a href="#">Kullanıcı Paneli</a>⠀》⠀</li>
              <li>Ticket Aç</li>
            </ol>
          </div>
        </div>
      </div>

    </section>




    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">



          <div class="card"  style="font-family: normal;">
            <div class="card-header wow fadeInUp" data-wow-delay="200ms" style="background-color: #343A40; color: white;">
              <h3 class="card-title">TİCKETLER</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">




              <table class="table">
                <thead>

                  <tr class="wow fadeInUp" data-wow-delay="400ms">
                    <th scope="col">Ticket Konusu</th>
                    <th style="text-align: center;" scope="col">Başvur</th>
                  </tr>

                </thead>
                <tbody>

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

                  <tr class="wow fadeInUp" data-wow-delay="800ms">
                    <th scope="row">Genel</th>

                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#Genel">Başvur</button></th>

                  </tr> 

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

                  <tr class="wow fadeInUp" data-wow-delay="1200ms">
                    <th scope="row">Oyuncu Bildirimi</th>

                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#Oyuncubildirimi">Başvur</button></th>

                  </tr>                  

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

                  <tr class="wow fadeInUp" data-wow-delay="1600ms">
                    <th scope="row">Şikayet</th>

                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#Sikayet">Başvur</button></th>

                  </tr> 

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

                  <tr class="wow fadeInUp" data-wow-delay="2000ms">
                    <th scope="row">Bug</th>

                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#Bug">Başvur</button></th>

                  </tr> 


<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################--> 

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################--> 

<form action="" method="POST" id="genel">
    <div class="modal" id="Genel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Genel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>


      <div style="text-align: left;" class="modal-body">
        <input class="form-control" type="text" name="support_ekleyen" hidden="" id="support_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
        <input class="form-control" type="text" name="support_adsoyad" hidden="" id="support_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>
                
        <input class="form-control" type="text" readonly name="support_destek" hidden="" id="support_destek" value="Şikayet">
    </div>

    <div style="padding: 25px;" class="alert alert-info" role="alert">
      <h4 class="alert-heading">Bilgilendirme:</h4>
      <p>Sunucumuzda yaşadığınız herhangi sorunu burada açıklayabilirsiniz.
      </p>
  </div>

  <div style="text-align: left; padding: 15px;" class="form-group">
    <label for="support_aciklama">Açıklama</label>
    <textarea class="form-control" name="support_aciklama" id="support_aciklama" rows="10">Discord adı (ornek#1234): 
Açıklama: </textarea>
</div>


<script>
    function myFunction() {
      var x = document.getElementById("support_aciklama").value;
      document.getElementById("demo").innerHTML = x;
  }
</script>

<p style="padding: 15px; margin-top: -25px;"><b>Formata uyulmadığında otomatik olarak kapatılabilir.</b></p>

<div class="modal-footer">
    <input hidden="" type="datetime" name="support_tarih">
    <input type="hidden" name="supportform">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
    <button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
</div>


</div>
</div>
</div>
</form>

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################--> 

<form action="" method="POST" id="oyuncubildirimi">
    <div class="modal" id="Oyuncubildirimi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Oyuncu Bildirimi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>


      <div style="text-align: left;" class="modal-body">
        <input class="form-control" type="text" name="support_ekleyen" hidden="" id="support_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
        <input class="form-control" type="text" name="support_adsoyad" hidden="" id="support_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>

        <input class="form-control" type="text" readonly name="support_destek" hidden="" id="support_destek" value="Oyuncu Bildirimi">
    </div>

    <div style="padding: 25px;" class="alert alert-info" role="alert">
      <h4 class="alert-heading">Bilgilendirme:</h4>
      <p>Sunucumuzdaki rahatsız olduğunuz oyunucularımızı destek talebini doldurarak yetkililere bildirebilirsiniz.
      </p>
  </div>

  <div style="text-align: left; padding: 15px;" class="form-group">
    <label for="support_aciklama">Açıklama</label>
    <textarea class="form-control" name="support_aciklama" id="support_aciklama" rows="10">Discord adı (ornek#1234): 
Video veya resim linki: 
Açıklama: </textarea>
</div>


<script>
    function myFunction() {
      var x = document.getElementById("support_aciklama").value;
      document.getElementById("demo").innerHTML = x;
  }
</script>

<p style="padding: 15px; margin-top: -25px;"><b>Formata uyulmadığında otomatik olarak kapatılabilir.</b></p>

<div class="modal-footer">
    <input hidden="" type="datetime" name="support_tarih">
    <input type="hidden" name="supportform">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
    <button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
</div>


</div>
</div>
</div>
</form>

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################--> 

<form action="" method="POST" id="sikayet">
    <div class="modal" id="Sikayet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Şikayet</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>


      <div style="text-align: left;" class="modal-body">
        <input class="form-control" type="text" name="support_ekleyen" hidden="" id="support_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
        <input class="form-control" type="text" name="support_adsoyad" hidden="" id="support_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>

        <input class="form-control" type="text" readonly name="support_destek" hidden="" id="support_destek" value="Şikayet">
    </div>

    <div style="padding: 25px;" class="alert alert-info" role="alert">
      <h4 class="alert-heading">Bilgilendirme:</h4>
      <p>Hakkında şikayetçi olduğunuz konuları burada açıklayabilirsiniz.
      </p>
  </div>

  <div style="text-align: left; padding: 15px;" class="form-group">
    <label for="support_aciklama">Açıklama</label>
    <textarea class="form-control" name="support_aciklama" id="support_aciklama" rows="10">Discord adı (ornek#1234): 
Video veya resim linki: 
Açıklama: </textarea>
</div>


<script>
    function myFunction() {
      var x = document.getElementById("support_aciklama").value;
      document.getElementById("demo").innerHTML = x;
  }
</script>

<p style="padding: 15px; margin-top: -25px;"><b>Formata uyulmadığında otomatik olarak kapatılabilir.</b></p>

<div class="modal-footer">
    <input hidden="" type="datetime" name="support_tarih">
    <input type="hidden" name="supportform">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
    <button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
</div>


</div>
</div>
</div>
</form>

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################--> 

<form action="" method="POST" id="bug">
    <div class="modal" id="Bug" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Bug</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>


      <div style="text-align: left;" class="modal-body">
        <input class="form-control" type="text" name="support_ekleyen" hidden="" id="support_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
        <input class="form-control" type="text" name="support_adsoyad" hidden="" id="support_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>

        <input class="form-control" type="text" readonly name="support_destek" hidden="" id="support_destek" value="Bug">
    </div>

    <div style="padding: 25px;" class="alert alert-info" role="alert">
      <h4 class="alert-heading">Bilgilendirme:</h4>
      <p>Sunucuda rast geldiğiniz Bugları bize bildirerek sunucumuzun gelişmesine katkıda bulunabilirsiniz.
      </p>
  </div>

  <div style="text-align: left; padding: 15px;" class="form-group">
    <label for="support_aciklama">Açıklama</label>
    <textarea class="form-control" name="support_aciklama" id="support_aciklama" rows="10">Discord adı (ornek#1234): 
Video veya resim linki: 
Bug'ın nasıl yapıldığını kısaca yazılı olarak anlatınız: </textarea>
</div>


<script>
    function myFunction() {
      var x = document.getElementById("support_aciklama").value;
      document.getElementById("demo").innerHTML = x;
  }
</script>

<p style="padding: 15px; margin-top: -25px;"><b>Formata uyulmadığında otomatik olarak kapatılabilir.</b></p>

<div class="modal-footer">
    <input hidden="" type="datetime" name="support_tarih">
    <input type="hidden" name="supportform">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i></button>
    <button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
</div>


</div>
</div>
</div>
</form>

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################--> 


<?php 
/*################################*/
include 'footer.php '; 
/*################################*/
?>