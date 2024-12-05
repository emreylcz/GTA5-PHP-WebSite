<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php echo !defined ('guvenlik') ? die ('Yavrum şen hackermi olmaya çalışıyon hee') : null; ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-success elevation-4">
  <!-- Logo -->
  <a href="index.php" class="brand-link">
    <!--<img width="50%" src="dist/img/logo.png"
    alt="LSV CİT"
    class="brand-image img-circle elevation-3"
    style="opacity: .8">-->
   <span style="margin-left: 10%; font-size: 20px;" class="brand-text font-weight-light">VERSİA ROLEPLAY</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user-->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="https://i.hizliresim.com/4ekp602.png" style="background-color: #343A40;" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info" style="font-family: normal; font-size: 13px;">
        <label style="color: #C2C7D0;"><?php echo $usercek['versia_adsoyad'];?></label> 
        <a title="Güvenli Çıkış" href="../db/process.php?userlogout=Ok" class="">[Çıkış]</a><br>
        <label style="color: #C2C7D0;"><?php echo $usercek['versia_admin'] ?></label>

      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="../index.php" class="nav-link">
            <i class="nav-icon fa fa-globe"></i>
            <p>
              Siteye Git
            </p>
          </a>
        </li>

       <li class="nav-item">
          <a href="index.php" class="nav-link">
            <i class="nav-icon fa fa-home"></i>
            <p>
              Anasayfa
            </p>
          </a>
        </li>

        <?php
        if($usercek['versia_admin']=='Admin') { ?>

          <li class="nav-header">ADMİN PANELİ</li>

          <li class="nav-item">
            <a href="users.php" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Kullanıcılar
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="whitelist-control.php" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Whitelist Kontrol
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="whitelist.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Başvurular
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="support.php" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Destek Talepleri
              </p>
            </a>
          </li>

          <li class="nav-header" style="margin-top:-30px;">_____________________</li>

          <li class="nav-item">
            <a href="team.php" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Ekip
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="game-squares.php" class="nav-link">
              <i class="nav-icon fas fa-gamepad"></i>
              <p>
                Oyundan Kareler
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="settings.php" class="nav-link">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Site Ayarları
              </p>
            </a>
          </li>

        <?php } elseif($usercek['versia_admin']=='Yonetim') { ?>
          <li class="nav-item">
            <a href="whitelist.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Başvurular
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="support.php" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Destek Talepleri
              </p>
            </a>
          </li>

        <?php } elseif($usercek['versia_admin']=='Kayit Sorumlusu') { ?>

          <li class="nav-header">ADMİN PANELİ</li>

          <li class="nav-item">
            <a href="whitelist.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Başvurular
              </p>
            </a>
          </li>

        <?php } elseif($usercek['versia_admin']=='Destek Ekibi') { ?>

          <li class="nav-header">ADMİN PANELİ</li>

          <li class="nav-item">
            <a href="support.php" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Destek Talepleri
              </p>
            </a>
          </li>

        <?php } elseif($usercek['versia_admin']=='LSPD') { ?>

          <li class="nav-header">ADMİN PANELİ</li>

          <li class="nav-item">
            <a href="whitelist.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                LSPD Başvurular
              </p>
            </a>
          </li>


        <?php } elseif($usercek['versia_admin']=='EMS') { ?>

          <li class="nav-header">ADMİN PANELİ</li>

          <li class="nav-item">
            <a href="whitelist.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                EMS Başvurular
              </p>
            </a>
          </li>

        <?php } elseif($usercek['versia_admin']=='Emlak') { ?>

          <li class="nav-header">ADMİN PANELİ</li>

          <li class="nav-item">
            <a href="whitelist.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Emlak Başvurular
              </p>
            </a>
          </li>

        <?php } elseif($usercek['versia_admin']=='Mekanik') { ?>

          <li class="nav-header">ADMİN PANELİ</li>

          <li class="nav-item">
            <a href="whitelist.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Mekanik Başvurular
              </p>
            </a>
          </li>

        <?php } elseif($usercek['versia_admin']=='The Lost MC') { ?>

          <li class="nav-header">ADMİN PANELİ</li>

          <li class="nav-item">
            <a href="whitelist.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                The Lost MC Başvurular
              </p>
            </a>
          </li>

        <?php } elseif($usercek['versia_admin']=='Grove Street') { ?>

          <li class="nav-header">ADMİN PANELİ</li>

          <li class="nav-item">
            <a href="whitelist.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Grove Street Başvurular
              </p>
            </a>
          </li>

        <?php } elseif($usercek['versia_admin']=='Vagos') { ?>

          <li class="nav-header">ADMİN PANELİ</li>

          <li class="nav-item">
            <a href="whitelist.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Vagos Başvurular
              </p>
            </a>
          </li>

        <?php } elseif($usercek['versia_admin']=='Ballas') { ?>

          <li class="nav-header">ADMİN PANELİ</li>

          <li class="nav-item">
            <a href="whitelist.php" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Ballas Başvurular
              </p>
            </a>
          </li>

        <?php } ?>


        <li class="nav-header">KULLANICI PANELİ</li>

        <li class="nav-item">
          <a href="account.php" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Hesap Ayarları
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="applications.php" class="nav-link">
            <i class="nav-icon fa fa-envelope"></i>
            <p>
              Başvurularım
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="ticket.php" class="nav-link">
            <i class="nav-icon fas fa-comments"></i>
            <p>
              Destek Taleplerim
            </p>
          </a>
        </li>



      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>