<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php define ('guvenlik', true);
include'header.php';
include'sidebar.php';
?>

<div class="content-wrapper">

    <section class="content-header">

      <div class="container-fluid wow fadeInUp" data-wow-delay="100ms">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li style="font-size: 23px">Başvur⠀│⠀</li> 
              <li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
              <li><a href="#">Kullanıcı Paneli</a>⠀》⠀</li>
              <li>Başvur</li>
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
              <h3 class="card-title" >Whitelistler</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">



             <div>
              <table class="table">
                <thead>

                  <tr class="wow fadeInUp" data-wow-delay="300ms">
                    <th scope="col">Whitelist İsmi</th>
                    <th style="text-align: center;" scope="col">Durum</th>
                    <th style="text-align: center;" scope="col">Başvur</th>
                  </tr>

                </thead>
                <tbody>


              <?php 
              $cloactsor=$db->prepare("select * from cloact order by  cloact_id DESC");
              $cloactsor->execute();
              while($cloactcek=$cloactsor->fetch(PDO::FETCH_ASSOC)){ ?>

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

                  <tr class="wow fadeInUp "data-wow-delay="400ms">
                    <th scope="row">Versia Roleplay Whitelist Başvuru</th>

                    <?php if($cloactcek['cloact_whitelist']=='Acik') { ?>

                        <td style="text-align: center;"><span class="badge badge-success" style="margin-top: 10px">Açık</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#WH">Başvur</button></th>

                    <?php } elseif($cloactcek['cloact_whitelist']=='Kapali') { ?>

                        <td style="text-align: center;"><span class="badge badge-danger" style="margin-top: 10px">Kapalı</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:30%; margin-left: 25%" class="btn btn-block btn-outline-danger" disabled="" aria-disabled="true">Başvur</button></th>
                    
                    <?php } ?> 

                  </tr> 

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

                 <tr class="wow fadeInUp "data-wow-delay="800ms">
                    <th scope="row">Yetkili Başvuru</th>

                    <?php if($cloactcek['cloact_yetkili']=='Acik') { ?>

                        <td style="text-align: center;"><span class="badge badge-success" style="margin-top: 10px">Açık</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#Yetkili">Başvur</button></th>

                    <?php } elseif($cloactcek['cloact_yetkili']=='Kapali') { ?>

                        <td style="text-align: center;"><span class="badge badge-danger" style="margin-top: 10px">Kapalı</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-danger" disabled="" aria-disabled="true">Başvur</button></th>
                    
                    <?php } ?> 

                  </tr> 

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

                  <tr class="wow fadeInUp "data-wow-delay="1200ms">
                    <th scope="row">LSPD Başvuru</th>

                    <?php if($cloactcek['cloact_lspd']=='Acik') { ?>

                        <td style="text-align: center;"><span class="badge badge-success" style="margin-top: 10px">Açık</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#LSPD">Başvur</button></th>

                    <?php } elseif($cloactcek['cloact_lspd']=='Kapali') { ?>

                        <td style="text-align: center;"><span class="badge badge-danger" style="margin-top: 10px">Kapalı</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-danger" disabled="" aria-disabled="true">Başvur</button></th>
                    
                    <?php } ?> 

                  </tr> 

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

                  <tr class="wow fadeInUp "data-wow-delay="1600ms">
                    <th scope="row">EMS Başvuru</th>

                    <?php if($cloactcek['cloact_ems']=='Acik') { ?>

                        <td style="text-align: center;"><span class="badge badge-success" style="margin-top: 10px">Açık</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#EMS">Başvur</button></th>

                    <?php } elseif($cloactcek['cloact_ems']=='Kapali') { ?>

                        <td style="text-align: center;"><span class="badge badge-danger" style="margin-top: 10px">Kapalı</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-danger" disabled="" aria-disabled="true">Başvur</button></th>
                    
                    <?php } ?> 

                  </tr> 

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

                  <tr class="wow fadeInUp "data-wow-delay="2000ms">
                    <th scope="row">Emlak Başvuru</th>

                    <?php if($cloactcek['cloact_emlak']=='Acik') { ?>

                        <td style="text-align: center;"><span class="badge badge-success" style="margin-top: 10px">Açık</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#Emlak">Başvur</button></th>

                    <?php } elseif($cloactcek['cloact_emlak']=='Kapali') { ?>

                        <td style="text-align: center;"><span class="badge badge-danger" style="margin-top: 10px">Kapalı</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-danger" disabled="" aria-disabled="true">Başvur</button></th>
                    
                    <?php } ?> 

                  </tr> 

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################--> 

                  <tr class="wow fadeInUp "data-wow-delay="2400ms">
                    <th scope="row">Mekanik Başvuru</th>

                    <?php if($cloactcek['cloact_mekanik']=='Acik') { ?>

                        <td style="text-align: center;"><span class="badge badge-success" style="margin-top: 10px">Açık</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#Mekanik">Başvur</button></th>

                    <?php } elseif($cloactcek['cloact_mekanik']=='Kapali') { ?>

                        <td style="text-align: center;"><span class="badge badge-danger" style="margin-top: 10px">Kapalı</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-danger" disabled="" aria-disabled="true">Başvur</button></th>
                    
                    <?php } ?> 

                  </tr> 

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

                  <tr class="wow fadeInUp "data-wow-delay="2800ms">
                    <th scope="row">The Lost MC Başvuru</th>

                    <?php if($cloactcek['cloact_lost']=='Acik') { ?>

                        <td style="text-align: center;"><span class="badge badge-success" style="margin-top: 10px">Açık</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#Lost">Başvur</button></th>

                    <?php } elseif($cloactcek['cloact_lost']=='Kapali') { ?>

                        <td style="text-align: center;"><span class="badge badge-danger" style="margin-top: 10px">Kapalı</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-danger" disabled="" aria-disabled="true">Başvur</button></th>
                    
                    <?php } ?> 

                  </tr> 

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->  

                  <tr class="wow fadeInUp "data-wow-delay="3200ms">
                    <th scope="row">Grove Street Başvuru</th>

                    <?php if($cloactcek['cloact_grove']=='Acik') { ?>

                        <td style="text-align: center;"><span class="badge badge-success" style="margin-top: 10px">Açık</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#Grove">Başvur</button></th>

                    <?php } elseif($cloactcek['cloact_grove']=='Kapali') { ?>

                        <td style="text-align: center;"><span class="badge badge-danger" style="margin-top: 10px">Kapalı</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-danger" disabled="" aria-disabled="true">Başvur</button></th>
                    
                    <?php } ?> 

                  </tr> 

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->

                  <tr class="wow fadeInUp "data-wow-delay="3600ms">
                    <th scope="row">Vagos Başvuru</th>

                    <?php if($cloactcek['cloact_vagos']=='Acik') { ?>

                        <td style="text-align: center;"><span class="badge badge-success" style="margin-top: 10px">Açık</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#Vagos">Başvur</button></th>

                    <?php } elseif($cloactcek['cloact_vagos']=='Kapali') { ?>

                        <td style="text-align: center;"><span class="badge badge-danger" style="margin-top: 10px">Kapalı</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-danger" disabled="" aria-disabled="true">Başvur</button></th>
                    
                    <?php } ?> 

                  </tr> 

<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################-->
<!--############################################################################################################################################################################################################--> 

                  <tr class="wow fadeInUp "data-wow-delay="4000ms">
                    <th scope="row">Ballas Başvuru</th>

                    <?php if($cloactcek['cloact_ballas']=='Acik') { ?>

                        <td style="text-align: center;"><span class="badge badge-success" style="margin-top: 10px">Açık</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#Ballas">Başvur</button></th>

                    <?php } elseif($cloactcek['cloact_ballas']=='Kapali') { ?>

                        <td style="text-align: center;"><span class="badge badge-danger" style="margin-top: 10px">Kapalı</span></td>
                        <th style="text-align: center;" scope="col"><button type="button" style="width:50%; margin-left: 25%" class="btn btn-block btn-outline-danger" disabled="" aria-disabled="true">Başvur</button></th>
                    
                    <?php } } ?> 

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
      </div>
    </section>
</div>











<!--############################################################################################################################################################################################################-->
<!--###################################################################################### MODAL ###############################################################################################################-->
<!--############################################################################################################################################################################################################-->

<form action="" method="POST" id="whitelist" style="font-family: normal;">
    <div class="modal" id="WH" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Versia Roleplay Whitelist Başvuru Formu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">

            <input class="form-control" type="text" name="wh_ekleyen" hidden="" id="wh_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
            <input class="form-control" type="text" name="wh_adsoyad" hidden="" id="wh_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>
            
            <input class="form-control" type="text" name="wh_meslek" hidden="" id="wh_meslek" value="Versia Whitelist" readonly>

          </div>

          <div style="padding: 25px;" class="alert alert-info" role="alert">
            <h4 class="alert-heading">Başvuru Açıklaması:</h4>
            <p>Başvurularınızı en geç 2 (iki) gün içinde cevaplayacağız.
            </p>
          </div>
          <input type="datetime" hidden="" value="<?php echo date('d.m.y H:i:s'); ?>" name="wh_tarih" id="wh_tarih">

          <div style="text-align: left; padding: 15px;" class="form-group">
            <label for="wh_aciklama">Başvuru Formu</label>
            <textarea class="form-control" name="wh_aciklama" rows="18">[OOC]
Ad Soyad: 
Yaş: 
Discord adı (ornek#1234): 
Steam Link: 
FiveM Saati: 
FiveM Deneyimi: 

[Karakter Bilgileri]
Ad Soyad: 
Doğum Tarihi: 

Karakterinizden bize bahsedin
Cevap: 



Şehir'deki Rolünüz Ne olacaktır ?
Cevap: 




[Sorular]
1-) Hangi sunucularda oynadın? Adları nelerdir?
Cevap: 




2-) Her hangi bir sunucuda uyarı veya ban yediniz mi ? Yediyseniz hangi sunuculardır?
Cevap: 




3-) Sunucu'da hangi tür uyruklu rol yapmayı düşünüyorsunuz? Ör: İngiliz,Karadenizli,Trakyalı,Fransız Gibi benzeri uyruklar.
Cevap: 




4-) Arabanın camlarını siliyorsun etrafında kimse yok sessiz ve gizli bir şekilde arkandan biri yaklaşıyor fark etmiyorsun arka sağ cebinden hissettirmicek bir biçimde cüzdanını alıyor ve gidiyor bu durumda ne yaparsın?nasıl bir yol izlersin?
Cevap: 




5-) Güçlü bir çeteye bulaştın ama sende pek tekin değilsin elin güçlü paran var silahın var. Evinde otururken bir anda tarandın camdan baktığında kim olduklarını gördün bu durum karşısında ne yaparsın?
Cevap: 




6-) Otobanda seyir halindesin, emniyet şeridinde 2 kişiden oluşan soyguncu ekibi bir doktor rehin almış. Soygunculardan birinin silahı doktorun kafasında dayanmış durumda bu tehlike karşısında ne yaparsın? Olaya nasıl yaklaşırsın?
Cevap: 




7-) Araban hararet yaptı ve aracı çalıştıramıyorsun. Telefonunda da mekanik numarası yok ne yaparsın kime ulaşırsın nasıl bir yol izlersin?
Cevap: 




8-) Büyük bir banka soygununa karıştın. Soygun yaptığın arkadaşlarından biri yakalandı ve hepinizin kimliğini ifşa etme gibi bir durum var. Bu durum karşısında ne yaparsın nasıl bir yol izlersin? 
Cevap: 




9-) Bir market soygunu yaparken rehinen olan kişi rolden kaçarsa (quit atarsa) ne tür bir yol izlersin?
Cevap: 



            </textarea>
          </div>


          <script>
            function myFunction() {
              var x = document.getElementById("wh_aciklama").value;
              document.getElementById("demo").innerHTML = x;
            }
          </script>

          <p style="padding: 15px; margin-top: -25px;"><b>Meslek kurallarına uygun olmayan başvurular otomatik olarak reddedilebilir.</b></p>

          <div class="modal-footer">
            <input type="hidden" name="whitelistform">
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

<form action="" method="POST" id="yetkili" style="font-family: normal;">
    <div class="modal" id="Yetkili" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Yetkili Başvuru Formu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">
            <input class="form-control" type="text" name="wh_ekleyen" hidden="" id="wh_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
            <input class="form-control" type="text" name="wh_adsoyad" hidden="" id="wh_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>

            <input class="form-control" hidden="" type="text" name="wh_meslek" id="wh_meslek" value="Yetkili" readonly>
          </div>
          <div style="padding: 25px;" class="alert alert-info" role="alert">
            <h4 class="alert-heading">Başvuru Açıklaması:</h4>
            <p>Başvurularınızı en geç 2 (iki) gün içinde cevaplayacağız.
            </p>
          </div>
          <input type="datetime" hidden="" value="<?php echo date('d.m.y H:i:s'); ?>" name="wh_tarih" id="wh_tarih">

          <div style="text-align: left; padding: 15px;" class="form-group">
            <label for="wh_aciklama">Başvuru Formu</label>
            <textarea class="form-control" name="wh_aciklama" rows="17">Ad Soyad: 
Yaş: 
Discord adı (ornek#1234): 
Deneyimler: 
FiveM Saati: 
Kendinizden bahseder misiniz?: </textarea>
          </div>


          <script>
            function myFunction() {
              var x = document.getElementById("wh_aciklama").value;
              document.getElementById("demo").innerHTML = x;
            }
          </script>

          <p style="padding: 15px; margin-top: -25px;"><b>Yetkili başvuru kurallarına uygun olmayan başvurular otomatik olarak reddedilebilir.</b></p>

          <div class="modal-footer">
            <input type="hidden" name="whitelistform">
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

<form action="" method="POST" id="lspd" style="font-family: normal;">
    <div class="modal" id="LSPD" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">LSPD Başvuru Formu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">
            <input class="form-control" type="text" name="wh_ekleyen" hidden="" id="wh_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
            <input class="form-control" type="text" name="wh_adsoyad" hidden="" id="wh_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>           
           
            <input class="form-control" type="text" name="wh_meslek" hidden="" id="wh_meslek" value="LSPD" readonly>
          </div>

          <div style="padding: 25px;" class="alert alert-info" role="alert">
            <h4 class="alert-heading">Başvuru Açıklaması:</h4>
            <p>Başvurularınızı en geç 2 (iki) gün içinde cevaplayacağız.
            </p>
          </div>
          <input type="datetime" hidden="" value="<?php echo date('d.m.y H:i:s'); ?>" name="wh_tarih" id="wh_tarih">

          <div style="text-align: left; padding: 15px;" class="form-group">
            <label for="wh_aciklama">Başvuru Formu</label>
            <textarea class="form-control" name="wh_aciklama" rows="17">[OOC]
Adı: 
Soyadı: 
Yaş: 
Discord adı (ornek#1234): 
Steam Link: 
FiveM Saati: 
FiveM Deneyimi: 

[IC]
Karakterin adı: 
Soyadı: 
Doğum tarihi - Yaşı: 
Doğduğu yer: 

Hikaye: </textarea>
          </div>


          <script>
            function myFunction() {
              var x = document.getElementById("wh_aciklama").value;
              document.getElementById("demo").innerHTML = x;
            }
          </script>

          <p style="padding: 15px; margin-top: -25px;"><b>Meslek kurallarına uygun olmayan başvurular otomatik olarak reddedilebilir.</b></p>

          <div class="modal-footer">
            <input type="hidden" name="whitelistform">
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

<form action="" method="POST" id="ems" style="font-family: normal;">
    <div class="modal" id="EMS" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">EMS Başvuru Formu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">
            <input class="form-control" type="text" name="wh_ekleyen" hidden="" id="wh_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
            <input class="form-control" type="text" name="wh_adsoyad" hidden="" id="wh_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>

            <input class="form-control" type="text" name="wh_meslek" hidden="" id="wh_meslek" value="EMS" readonly>
          </div>

          <div style="padding: 25px;" class="alert alert-info" role="alert">
            <h4 class="alert-heading">Başvuru Açıklaması:</h4>
            <p>Başvurularınızı en geç 2 (iki) gün içinde cevaplayacağız.
            </p>
          </div>
          <input type="datetime" hidden="" value="<?php echo date('d.m.y H:i:s'); ?>" name="wh_tarih" id="wh_tarih">

          <div style="text-align: left; padding: 15px;" class="form-group">
            <label for="wh_aciklama">Başvuru Formu</label>
            <textarea class="form-control" name="wh_aciklama" rows="17">[OOC]
Adı: 
Soyadı: 
Yaş: 
Discord adı (ornek#1234): 
Steam Link: 
FiveM Saati: 
FiveM Deneyimi: 

[IC]
Karakterin adı: 
Soyadı: 
Doğum tarihi - Yaşı: 
Doğduğu yer: 

Hikaye: </textarea>
          </div>


          <script>
            function myFunction() {
              var x = document.getElementById("wh_aciklama").value;
              document.getElementById("demo").innerHTML = x;
            }
          </script>

          <p style="padding: 15px;"><b>Meslek kurallarına uygun olmayan başvurular otomatik olarak reddedilebilir.</b></p>

          <div class="modal-footer">
            <input type="hidden" name="whitelistform">
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

<form action="" method="POST" id="emlak" style="font-family: normal;">
    <div class="modal" id="Emlak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Emlak Başvuru Formu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">
            <input class="form-control" type="text" name="wh_ekleyen" hidden="" id="wh_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
            <input class="form-control" type="text" name="wh_adsoyad" hidden="" id="wh_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>

            <input class="form-control" type="text" name="wh_meslek" hidden="" id="wh_meslek" value="Emlak" readonly>
          </div>

          <div style="padding: 25px;" class="alert alert-info" role="alert">
            <h4 class="alert-heading">Başvuru Açıklaması:</h4>
            <p>Başvurularınızı en geç 2 (iki) gün içinde cevaplayacağız.
            </p>
          </div>
          <input type="datetime" hidden="" value="<?php echo date('d.m.y H:i:s'); ?>" name="wh_tarih" id="wh_tarih">

          <div style="text-align: left; padding: 15px;" class="form-group">
            <label for="wh_aciklama">Başvuru Formu</label>
            <textarea class="form-control" name="wh_aciklama" rows="17">[OOC]
Adı: 
Soyadı: 
Yaş: 
Discord adı (ornek#1234): 
Steam Link: 
FiveM Saati: 
FiveM Deneyimi: 

[IC]
Karakterin adı: 
Soyadı: 
Doğum tarihi - Yaşı: 
Doğduğu yer: 

Hikaye: </textarea>
          </div>


          <script>
            function myFunction() {
              var x = document.getElementById("wh_aciklama").value;
              document.getElementById("demo").innerHTML = x;
            }
          </script>

          <p style="padding: 15px; margin-top: -25px;"><b>Meslek kurallarına uygun olmayan başvurular otomatik olarak reddedilebilir.</b></p>

          <div class="modal-footer">
            <input type="hidden" name="whitelistform">
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

<form action="" method="POST" id="mekanik" style="font-family: normal;">
    <div class="modal" id="Mekanik" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Mekanik Başvuru Formu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">
            <input class="form-control" type="text" name="wh_ekleyen" hidden="" id="wh_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
            <input class="form-control" type="text" name="wh_adsoyad" hidden="" id="wh_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>

            <input class="form-control" type="text" name="wh_meslek" hidden="" id="wh_meslek" value="Mekanik" readonly>
          </div>

          <div style="padding: 25px;" class="alert alert-info" role="alert">
            <h4 class="alert-heading">Başvuru Açıklaması:</h4>
            <p>Başvurularınızı en geç 2 (iki) gün içinde cevaplayacağız.
            </p>
          </div>
          <input type="datetime" hidden="" value="<?php echo date('d.m.y H:i:s'); ?>" name="wh_tarih" id="wh_tarih">

          <div style="text-align: left; padding: 15px;" class="form-group">
            <label for="wh_aciklama">Başvuru Formu</label>
            <textarea class="form-control" name="wh_aciklama" rows="17">[OOC]
Adı: 
Soyadı: 
Yaş: 
Discord adı (ornek#1234): 
Steam Link: 
FiveM Saati: 
FiveM Deneyimi: 
[IC]
Karakterin adı: 
Soyadı: 
Doğum tarihi - Yaşı: 
Doğduğu yer: 

Hikaye: </textarea>
          </div>


          <script>
            function myFunction() {
              var x = document.getElementById("wh_aciklama").value;
              document.getElementById("demo").innerHTML = x;
            }
          </script>

          <p style="padding: 15px; margin-top: -25px;"><b>Meslek kurallarına uygun olmayan başvurular otomatik olarak reddedilebilir.</b></p>

          <div class="modal-footer">
            <input type="hidden" name="whitelistform">
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

<form action="" method="POST" id="lost" style="font-family: normal;">
    <div class="modal" id="Lost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">The Lost MC Başvuru Formu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">
            <input class="form-control" type="text" name="wh_ekleyen" hidden="" id="wh_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
            <input class="form-control" type="text" name="wh_adsoyad" hidden="" id="wh_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>

            <input class="form-control" type="text" name="wh_meslek" hidden="" id="wh_meslek" value="The Lost MC" readonly>
          </div>

          <div style="padding: 25px;" class="alert alert-info" role="alert">
            <h4 class="alert-heading">Başvuru Açıklaması:</h4>
            <p>Başvurularınızı en geç 2 (iki) gün içinde cevaplayacağız.
            </p>
          </div>
          <input type="datetime" hidden="" value="<?php echo date('d.m.y H:i:s'); ?>" name="wh_tarih" id="wh_tarih">

          <div style="text-align: left; padding: 15px;" class="form-group">
            <label for="wh_aciklama">Başvuru Formu</label>
            <textarea class="form-control" name="wh_aciklama" rows="17">[OOC]
Adı: 
Soyadı: 
Yaş: 
Discord adı (ornek#1234): 
FiveM Saati: 
FiveM Deneyimi: 
Aktiflik: 

[IC]
Karakterin adı: 
Soyadı: 
Yaşı: </textarea>
          </div>


          <script>
            function myFunction() {
              var x = document.getElementById("wh_aciklama").value;
              document.getElementById("demo").innerHTML = x;
            }
          </script>

          <p style="padding: 15px; margin-top: -25px;"><b>Meslek kurallarına uygun olmayan başvurular otomatik olarak reddedilebilir.</b></p>

          <div class="modal-footer">
            <input type="hidden" name="whitelistform">
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

<form action="" method="POST" id="grove" style="font-family: normal;">
    <div class="modal" id="Grove" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Grove Street Başvuru Formu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">
            <input class="form-control" type="text" name="wh_ekleyen" hidden="" id="wh_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
            <input class="form-control" type="text" name="wh_adsoyad" hidden="" id="wh_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>

            <input class="form-control" type="text" name="wh_meslek" hidden="" id="wh_meslek" value="Grove Street" readonly>
          </div>

          <div style="padding: 25px;" class="alert alert-info" role="alert">
            <h4 class="alert-heading">Başvuru Açıklaması:</h4>
            <p>Başvurularınızı en geç 2 (iki) gün içinde cevaplayacağız.
            </p>
          </div>
          <input type="datetime" hidden="" value="<?php echo date('d.m.y H:i:s'); ?>" name="wh_tarih" id="wh_tarih">

          <div style="text-align: left; padding: 15px;" class="form-group">
            <label for="wh_aciklama">Başvuru Formu</label>
            <textarea class="form-control" name="wh_aciklama" rows="17">[OOC]
Adı: 
Soyadı: 
Yaş: 
Discord adı (ornek#1234): 
FiveM Saati: 
FiveM Deneyimi: 
Aktiflik: 

[IC]
Karakterin adı: 
Soyadı: 
Yaşı: </textarea>
          </div>


          <script>
            function myFunction() {
              var x = document.getElementById("wh_aciklama").value;
              document.getElementById("demo").innerHTML = x;
            }
          </script>

          <p style="padding: 15px; margin-top: -25px;"><b>Meslek kurallarına uygun olmayan başvurular otomatik olarak reddedilebilir.</b></p>

          <div class="modal-footer">
            <input type="hidden" name="whitelistform">
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

<form action="" method="POST" id="vagos" style="font-family: normal;">
    <div class="modal" id="Vagos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Vagos Başvuru Formu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">
            <input class="form-control" type="text" name="wh_ekleyen" hidden="" id="wh_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
            <input class="form-control" type="text" name="wh_adsoyad" hidden="" id="wh_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>

            <input class="form-control" type="text" name="wh_meslek" hidden="" id="wh_meslek" value="Vagos" readonly>
          </div>

          <div style="padding: 25px;" class="alert alert-info" role="alert">
            <h4 class="alert-heading">Başvuru Açıklaması:</h4>
            <p>Başvurularınızı en geç 2 (iki) gün içinde cevaplayacağız.
            </p>
          </div>
          <input type="datetime" hidden="" value="<?php echo date('d.m.y H:i:s'); ?>" name="wh_tarih" id="wh_tarih">

          <div style="text-align: left; padding: 15px;" class="form-group">
            <label for="wh_aciklama">Başvuru Formu</label>
            <textarea class="form-control" name="wh_aciklama" rows="17">[OOC]
Adı: 
Soyadı: 
Yaş: 
Discord adı (ornek#1234): 
FiveM Saati: 
FiveM Deneyimi: 
Aktiflik: 

[IC]
Karakterin adı: 
Soyadı: 
Yaşı: </textarea>
          </div>


          <script>
            function myFunction() {
              var x = document.getElementById("wh_aciklama").value;
              document.getElementById("demo").innerHTML = x;
            }
          </script>

          <p style="padding: 15px; margin-top: -25px;"><b>Meslek kurallarına uygun olmayan başvurular otomatik olarak reddedilebilir.</b></p>

          <div class="modal-footer">
            <input type="hidden" name="whitelistform">
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

<form action="" method="POST" id="ballas" style="font-family: normal;">
    <div class="modal" id="Ballas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Ballas Başvuru Formu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div style="text-align: left;" class="modal-body">
            <input class="form-control" type="text" name="wh_ekleyen" hidden="" id="wh_ekleyen" value="<?php echo $usercek['versia_kadi']; ?>" readonly>
            <input class="form-control" type="text" name="wh_adsoyad" hidden="" id="wh_adsoyad" value="<?php echo $usercek['versia_adsoyad']; ?>" readonly>
            
            <input class="form-control" type="text" name="wh_meslek" hidden="" id="wh_meslek" value="Ballas" readonly>
          </div>

          <div style="padding: 25px;" class="alert alert-info" role="alert">
            <h4 class="alert-heading">Başvuru Açıklaması:</h4>
            <p>Başvurularınızı en geç 2 (iki) gün içinde cevaplayacağız.
            </p>
          </div>
          <input type="datetime" hidden="" value="<?php echo date('d.m.y H:i:s'); ?>" name="wh_tarih" id="wh_tarih">

          <div style="text-align: left; padding: 15px;" class="form-group">
            <label for="wh_aciklama">Başvuru Formu</label>
            <textarea class="form-control" name="wh_aciklama" rows="17">[OOC]
Adı: 
Soyadı: 
Yaş: 
Discord adı (ornek#1234): 
FiveM Saati: 
FiveM Deneyimi: 
Aktiflik: 

[IC]
Karakterin adı: 
Soyadı: 
Yaşı: </textarea>
          </div>


          <script>
            function myFunction() {
              var x = document.getElementById("wh_aciklama").value;
              document.getElementById("demo").innerHTML = x;
            }
          </script>

          <p style="padding: 15px; margin-top: -25px;"><b>Meslek kurallarına uygun olmayan başvurular otomatik olarak reddedilebilir.</b></p>

          <div class="modal-footer">
            <input type="hidden" name="whitelistform">
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

<?php 
/*################################*/
include 'footer.php '; 
/*################################*/
?>