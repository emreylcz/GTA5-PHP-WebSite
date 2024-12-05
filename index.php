<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php
include 'header.php';
?>


<div class="homepage-info-section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-5">

				<figure>
					<img src="<?php echo $aboutcek['about_resimurl']; ?>" width="100%" height="auto" alt="logo">
				</figure>

			</div>

			<div id="biz-kimiz" class="col-12 col-md-8 col-lg-7">

				<header class="entry-header">
					<h2 style="text-transform: uppercase; background: linear-gradient(to right, #30CFD0 0%, #330867 60%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;" class="entry-title">- Biz Kimiz?</h2>
				</header>

				<div class="entry-content">
					<p><?php echo $aboutcek['about_aciklama']; ?></p>
				</div>

				<footer class="entry-footer">
					<a href="<?php echo $aboutcek['about_discord']; ?>" target="_blank" class="btn gradient-bg">Discord</a>
					<a href="<?php echo $aboutcek['about_instagram']; ?>" target="_blank" class="btn dark">İnstagram</a>
				</footer>

			</div>
		</div>
	</div>
</div>




<div class="homepage-featured-events" id="oyundan-kareler">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="featured-events-wrap flex flex-wrap justify-content-between">

					<div class="gallery" id="gallery">

					 <?php 
					 $gamesquaressor=$db->prepare("select * from game_squares order by game_squares_id DESC");
					 $gamesquaressor->execute();
					 while($gamesquarescek=$gamesquaressor->fetch(PDO::FETCH_ASSOC)){ ?>

						<div class="gallery-item">
							<div class="content"><img src="<?php echo $gamesquarescek['game_squares_resimurl']; ?>"></div>
						</div>

					<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br><br><br>





<h1 id="neden-nv-roleplay" style="text-transform: uppercase; background: linear-gradient(to right, #30CFD0 40%, #800080 70%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 55px;" class="entry-title text-center">Neden VERSİA ROLEPLAY</h1><br><br>

<div class="container">
	<div class="row">

		<div class="col-md-3 col-sm-6 wow fadeInUp">
			<div class="serviceBox">

				<div class="service-icon">
					<i class="fa fa-trophy"></i>
				</div>

				<h3 class="title">Sıralamada Lider</h3>

				<p class="description">
					Aktif oyuncu kitlemiz ve planlı güncellemelerimiz sayesinde sunucu sıralamasında liderliğimizi koruyoruz.
				</p>

			</div>
		</div>

		<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="400ms">
			<div class="serviceBox red">
				
				<div class="service-icon">
					<i class="fa fa-users"></i>
				</div>

				<h3 class="title">Geliştirici Ekip</h3>

				<p class="description">
					Diğer serverlardan farklı olarak kendi scriptlerimizi kendimiz yazıyor, FiveM topluluklarında paylaşıyoruz.
				</p>

			</div>
		</div>

		<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="800ms">
			<div class="serviceBox blue">

				<div class="service-icon">
					<i class="fa fa-calendar"></i>
				</div>

				<h3 class="title">Düzenli Etkinlikler</h3>

				<p class="description">
					Her hafta en az 2 kez düzenlenen birbirinden farklı ve bol ödüllü etkinliklerle sizlerleyiz.
				</p>

			</div>
		</div>

		<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1200ms">
			<div class="serviceBox green">

				<div class="service-icon">
					<i class="fa fa-ticket"></i>
				</div>

				<h3 class="title">7/24 Ticket Desteği</h3>

				<p class="description">
					Vardiyalı çalışan ekibimiz sayesinde yardıma ihtiyaç duydugunuz her an 1 ticket uzağınızdayız.
				</p>

			</div>
		</div>


	</div>
</div>





<div class="homepage-regional-events" id="ekibimiz">
	<div class="container">
		<div class="row">
			<div class="col-12">

				<header class="regional-events-heading entry-header flex flex-wrap justify-content-between align-items-center">
					<h2 style="text-transform: uppercase; background: linear-gradient(to right, #30CFD0 20%, #800080 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;" class="entry-title">Ekibimiz</h2>

				</header>

				<div class="swiper-container homepage-regional-events-slider">
					<div class="swiper-wrapper">

						<!--############################################################################################################################################-->
			 		 <?php 
					 $teamsor=$db->prepare("select * from team order by team_id ASC limit 25");
					 $teamsor->execute();
					 while($teamcek=$teamsor->fetch(PDO::FETCH_ASSOC)){ ?>

						<div class="swiper-slide">

							<figure>
								<img src="<?php echo $teamcek['team_url']; ?>" height="240px" alt="">

								<a class="event-overlay-link flex justify-content-center align-items-center" href="<?php echo $teamcek['team_url']; ?>"  target="_blank">+</a>
							</figure>

							<div class="entry-header">
								<h2 class="entry-title"><?php echo $teamcek['team_discord']; ?></h2>
							</div>

							<div class="entry-footer">
								<div class="posted-date team-social"><span><?php echo $teamcek['team_yetki']; ?></span><br>
									
									<ul class="flex flex-wrap justify-content-center align-items-center">
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									</ul>
									
								</div>
							</div>

						</div>
					<?php } ?>

					</div>
					<br><br><br><br><br><br><br><br>



					<div class="row elements-wrap" style="color: white;" id="sunucu-durumu">
						<div class="col-12">

							<header class="regional-events-heading entry-header justify-content-between align-items-center">
								<h2 style="text-transform: uppercase; background: linear-gradient(to right, #30CFD0 40%, #800080 70%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;" class="entry-title text-center">Sunucu Durumu</h2>
							</header>

							<div class="entry-content elements-container">
								<div class="row">

									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="counter-box">

											<div class="flex justify-content-center align-items-center">
												<img src="images/user.png" width="64px" height="64px" alt="">
											</div>

											<div class="entry-content">
												<div style="color: white;" class="start-counter" data-to="1514" data-speed="2000">5555</div>

												<h3 style="color: white;" class="entry-title">Oyuncu</h3>
											</div>

										</div>
									</div>

									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="counter-box">

											<div class="flex justify-content-center align-items-center">
												<img src="images/money.png" width="64px" height="64px" alt="">
											</div>

											<div class="entry-content">
												<div style="color: white;" class="start-counter" data-to="5277391" data-speed="2000">5555</div>

												<h3 style="color: white;" class="entry-title">Para</h3>
											</div>

										</div>
									</div>

									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="counter-box">

											<div class="flex justify-content-center align-items-center">
												<img src="images/vehicle.png" width="64px" height="64px" alt="">
											</div>

											<div class="entry-content">
												<div style="color: white;" class="start-counter" data-to="1403" data-speed="2000">5555</div>

												<h3 style="color: white;" class="entry-title">Araba</h3>
											</div>

										</div>
									</div>

									<div class="col-12 col-sm-6 col-md-4 col-lg-3">
										<div class="counter-box">

											<div class="flex justify-content-center align-items-center">
												<img src="images/user.png" width="64px" height="64px" alt="">
											</div>

											<div class="entry-content">
												<div style="color: white;" class="start-counter" data-to="0" data-speed="2000">5555</div>

												<h3 style="color: white;" class="entry-title">xxx</h3>
											</div>

										</div>
									</div>


								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>



<?php 
include 'footer.php';
?>