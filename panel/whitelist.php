<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<?php define ('guvenlik', true);
include'header.php';
include'sidebar.php';
?>


<?php if($usercek['versia_admin']=='Admin') { ?>


	<div class="content-wrapper">

		<section class="content-header wow fadeInUp">

			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-12">
						<ol class="breadcrumb float-sm-left">
							<li style="font-size: 23px">Başvurular⠀│⠀</li> 
							<li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
							<li><a href="#">Admin Paneli</a>⠀》⠀</li>
							<li>Başvurular</li>
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
							<h3 class="card-title">Whitelist Başvuruları</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">


							<table id="veri" class="table table-striped responsive nowrap" width="100%">



								<thead>
									<tr style="text-align: center;">
										<th>#</th>
										<th>Gönderen</th>
										<th>Meslek</th>
										<th>Durum</th>
										<th>Gönderme Tarihi</th>
										<th>İşlemler</th>	
									</tr>
								</thead>
								<tbody>




									<?php 

									$userkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = "Admin"');
									$userkontrol->fetch(PDO::FETCH_ASSOC);
									$userkontrol->execute();


									$whitelistsor=$db->prepare("select * from whitelist_basvuru");
									$whitecek=$whitelistsor->fetch(PDO::FETCH_ASSOC);

									$whitelistsor->execute();
									foreach($whitelistsor as $whitecek) { ?>
										<tr style="text-align: center;">
											<td><?php echo $whitecek['wh_id']; ?></td>
											<td><?php echo $whitecek['wh_ekleyen']; ?></td>
											<td><?php echo $whitecek['wh_meslek']; ?></td>
											<td>
												<?php
												if($whitecek['wh_durum']=='Beklemede') {  ?>
													<span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $whitecek['wh_durum']; ?></span>
												<?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>
													<span class="badge badge-pill badge-success"><i class="fas fa-check"></i>  <?php echo $whitecek['wh_durum']; ?></span>
												<?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>
													<span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $whitecek['wh_durum']; ?></span>
												<?php } elseif($whitecek['wh_durum']=='Geçersiz') { ?>
													<span class="badge badge-pill badge-danger"><i class="fas fa-ban"></i> <?php echo $whitecek['wh_durum']; ?></span>
												<?php } ?>

											</td>
											<td><?php echo tarihcevir($whitecek['wh_tarih']); ?></td>

											<td class="project-actions">
												<a href="whview.php?id=<?php echo $whitecek ['wh_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o"><button type="button" style="width: 30%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
												<a href="../db/process.php?whsil=ok&wh_id=<?php echo $whitecek ['wh_id']; ?>" onclick="return whitelistsil();"><button type="button" style="width: 20%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
											</td>



										</tr> 
									<?php }   ?>


								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->







				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>


	<script type="text/javascript">
		function whitelistsil()
		{
			var onay;
			onay=window.confirm(" Whitelist Başvuru Formunu silmeyi onaylıyor musunuz?");

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





	/*#############################################################################################################################################################################################################*/
	/*#############################################################################################################################################################################################################*/
	/*#############################################################################################################################################################################################################*/
	/*#############################################################################################################################################################################################################*/
	/*#############################################################################################################################################################################################################*/
	/*#############################################################################################################################################################################################################*/
	/*#############################################################################################################################################################################################################*/
	/*#############################################################################################################################################################################################################*/
	/*#############################################################################################################################################################################################################*/







} elseif($usercek['versia_admin']=='Kayit Sorumlusu' or $usercek['versia_admin']=='Yonetim') {  ?>



	<div class="content-wrapper">

		<section class="content-header">

			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-12">
						<ol class="breadcrumb float-sm-left">
							<li style="font-size: 23px">Başvurular⠀│⠀</li> 
							<li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
							<li><a href="#">Admin Paneli</a>⠀》⠀</li>
							<li>Başvurular</li>
						</ol>
					</div>
				</div>
			</div>

		</section>







		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">



					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Whitelist Başvuruları</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">


							<table id="veri" class="table table-striped responsive nowrap" width="100%">



								<thead>
									<tr style="text-align: center;">
										<th>#</th>
										<th>Gönderen</th>
										<th>Meslek</th>
										<th>Durum</th>
										<th>Gönderme Tarihi</th>
										<th>İşlemler</th> 
									</tr>
								</thead>
								<tbody>




									<?php 

									$userkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = Kayit Sorumlusu');
									$userkontrol->fetch(PDO::FETCH_ASSOC);
									$userkontrol->execute;

									if(isset($userkontrol)){  

										$whitelistsor=$db->prepare("select * from whitelist_basvuru where wh_meslek='Versia Whitelist'");
										$whitelistcek=$whitelistsor->fetch(PDO::FETCH_ASSOC);

										$whitelistsor->execute();
										foreach($whitelistsor as $whitecek) { ?>

											<tr style="text-align: center;">
												<td><?php echo $whitecek['wh_id']; ?></td>
												<td><?php echo $whitecek['wh_ekleyen']; ?></td>
												<td><?php echo $whitecek['wh_meslek']; ?></td>
												<td>
													<?php
													if($whitecek['wh_durum']=='Beklemede') {  ?>
														<span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $whitecek['wh_durum']; ?></span>
													<?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>
														<span class="badge badge-pill badge-success"><i class="fas fa-check"></i>  <?php echo $whitecek['wh_durum']; ?></span>
													<?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>
														<span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $whitecek['wh_durum']; ?></span>
													<?php } elseif($whitecek['wh_durum']=='Geçersiz') { ?>
														<span class="badge badge-pill badge-danger"><i class="fas fa-ban"></i> <?php echo $whitecek['wh_durum']; ?></span>
													<?php } ?>

												</td>
												<td><?php echo tarihcevir($whitecek['wh_tarih']); ?></td>

												<td class="project-actions">
													<a href="whview.php?id=<?php echo $whitecek ['wh_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o"><button type="button" style="width: 30%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
													<a href="../db/process.php?whsil=ok&wh_id=<?php echo $whitecek ['wh_id']; ?>" onclick="return whitelistsil();"><button type="button" style="width: 20%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
												</td>



											</tr> 
										<?php } }  ?>


									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->







					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</section>
			<!-- /.content -->
		</div>


		<script type="text/javascript">
			function whitelistsil()
			{
				var onay;
				onay=window.confirm(" Whitelist Başvuru Formunu silmeyi onaylıyor musunuz?");

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
		/*#############################################################################################################################################################################################################*/
		/*#############################################################################################################################################################################################################*/
		/*#############################################################################################################################################################################################################*/
		/*#############################################################################################################################################################################################################*/
		/*#############################################################################################################################################################################################################*/
		/*#############################################################################################################################################################################################################*/
		/*#############################################################################################################################################################################################################*/
		/*#############################################################################################################################################################################################################*/
		/*#############################################################################################################################################################################################################*/



		/*################################*/
		include 'footer.php ';
		/*################################*/

	} elseif($usercek['versia_admin']=='LSPD') {  ?>



		<div class="content-wrapper">

			<section class="content-header">

				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-12">
							<ol class="breadcrumb float-sm-left">
								<li style="font-size: 23px">Başvurular⠀│⠀</li> 
								<li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
								<li><a href="#">Admin Paneli</a>⠀》⠀</li>
								<li>Başvurular</li>
							</ol>
						</div>
					</div>
				</div>

			</section>







			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-12">



						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Whitelist Başvuruları</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">


								<table id="veri" class="table table-striped responsive nowrap" width="100%">



									<thead>
										<tr style="text-align: center;">
											<th>#</th>
											<th>Gönderen</th>
											<th>Meslek</th>
											<th>Durum</th>
											<th>Gönderme Tarihi</th>
											<th>İşlemler</th> 
										</tr>
									</thead>
									<tbody>




										<?php 

										$userkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = LSPD');
										$userkontrol->fetch(PDO::FETCH_ASSOC);
										$userkontrol->execute;

										if(isset($userkontrol)){  

											$whitelistsor=$db->prepare("select * from whitelist_basvuru where wh_meslek='LSPD'");
											$whitelistcek=$whitelistsor->fetch(PDO::FETCH_ASSOC);

											$whitelistsor->execute();
											foreach($whitelistsor as $whitecek) { ?>

												<tr style="text-align: center;">
													<td><?php echo $whitecek['wh_id']; ?></td>
													<td><?php echo $whitecek['wh_ekleyen']; ?></td>
													<td><?php echo $whitecek['wh_meslek']; ?></td>
													<td>
														<?php
														if($whitecek['wh_durum']=='Beklemede') {  ?>
															<span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $whitecek['wh_durum']; ?></span>
														<?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>
															<span class="badge badge-pill badge-success"><i class="fas fa-check"></i>  <?php echo $whitecek['wh_durum']; ?></span>
														<?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>
															<span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $whitecek['wh_durum']; ?></span>
														<?php } elseif($whitecek['wh_durum']=='Geçersiz') { ?>
															<span class="badge badge-pill badge-danger"><i class="fas fa-ban"></i> <?php echo $whitecek['wh_durum']; ?></span>
														<?php } ?>

													</td>
													<td><?php echo tarihcevir($whitecek['wh_tarih']); ?></td>

													<td class="project-actions">
														<a href="whview.php?id=<?php echo $whitecek ['wh_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o"><button type="button" style="width: 30%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
														<a href="../db/process.php?whsil=ok&wh_id=<?php echo $whitecek ['wh_id']; ?>" onclick="return whitelistsil();"><button type="button" style="width: 20%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
													</td>



												</tr> 
											<?php } }  ?>


										</tbody>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->







						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</section>
				<!-- /.content -->
			</div>


			<script type="text/javascript">
				function whitelistsil()
				{
					var onay;
					onay=window.confirm(" LSPD Whitelist Başvuru Formunu silmeyi onaylıyor musunuz?");

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
			/*#############################################################################################################################################################################################################*/
			/*#############################################################################################################################################################################################################*/
			/*#############################################################################################################################################################################################################*/
			/*#############################################################################################################################################################################################################*/
			/*#############################################################################################################################################################################################################*/
			/*#############################################################################################################################################################################################################*/
			/*#############################################################################################################################################################################################################*/
			/*#############################################################################################################################################################################################################*/
			/*#############################################################################################################################################################################################################*/



			/*################################*/
			include 'footer.php ';
			/*################################*/
		} elseif($usercek['versia_admin']=='EMS') {  ?>



			<div class="content-wrapper">

				<section class="content-header">

					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-12">
								<ol class="breadcrumb float-sm-left">
									<li style="font-size: 23px">Başvurular⠀│⠀</li> 
									<li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
									<li><a href="#">Admin Paneli</a>⠀》⠀</li>
									<li>Başvurular</li>
								</ol>
							</div>
						</div>
					</div>

				</section>







				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-12">



							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Whitelist Başvuruları</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">


									<table id="veri" class="table table-striped responsive nowrap" width="100%">



										<thead>
											<tr style="text-align: center;">
												<th>#</th>
												<th>Gönderen</th>
												<th>Meslek</th>
												<th>Durum</th>
												<th>Gönderme Tarihi</th>
												<th>İşlemler</th> 
											</tr>
										</thead>
										<tbody>




											<?php 

											$userkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = EMS');
											$userkontrol->fetch(PDO::FETCH_ASSOC);
											$userkontrol->execute;

											if(isset($userkontrol)){  

												$whitelistsor=$db->prepare("select * from whitelist_basvuru where wh_meslek='EMS'");
												$whitelistcek=$whitelistsor->fetch(PDO::FETCH_ASSOC);

												$whitelistsor->execute();
												foreach($whitelistsor as $whitecek) { ?>

													<tr style="text-align: center;">
														<td><?php echo $whitecek['wh_id']; ?></td>
														<td><?php echo $whitecek['wh_ekleyen']; ?></td>
														<td><?php echo $whitecek['wh_meslek']; ?></td>
														<td>
															<?php
															if($whitecek['wh_durum']=='Beklemede') {  ?>
																<span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $whitecek['wh_durum']; ?></span>
															<?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>
																<span class="badge badge-pill badge-success"><i class="fas fa-check"></i>  <?php echo $whitecek['wh_durum']; ?></span>
															<?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>
																<span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $whitecek['wh_durum']; ?></span>
															<?php } elseif($whitecek['wh_durum']=='Geçersiz') { ?>
																<span class="badge badge-pill badge-danger"><i class="fas fa-ban"></i> <?php echo $whitecek['wh_durum']; ?></span>
															<?php } ?>

														</td>
														<td><?php echo tarihcevir($whitecek['wh_tarih']); ?></td>

														<td class="project-actions">
															<a href="whview.php?id=<?php echo $whitecek ['wh_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o"><button type="button" style="width: 30%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
															<a href="../db/process.php?whsil=ok&wh_id=<?php echo $whitecek ['wh_id']; ?>" onclick="return whitelistsil();"><button type="button" style="width: 20%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
														</td>



													</tr> 
												<?php } }  ?>


											</tbody>
										</table>
									</div>
									<!-- /.card-body -->
								</div>
								<!-- /.card -->







							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</section>
					<!-- /.content -->
				</div>


				<script type="text/javascript">
					function whitelistsil()
					{
						var onay;
						onay=window.confirm(" EMS Whitelist Başvuru Formunu silmeyi onaylıyor musunuz?");

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
				/*#############################################################################################################################################################################################################*/
				/*#############################################################################################################################################################################################################*/
				/*#############################################################################################################################################################################################################*/
				/*#############################################################################################################################################################################################################*/
				/*#############################################################################################################################################################################################################*/
				/*#############################################################################################################################################################################################################*/
				/*#############################################################################################################################################################################################################*/
				/*#############################################################################################################################################################################################################*/
				/*#############################################################################################################################################################################################################*/



				/*################################*/
				include 'footer.php ';
				/*################################*/

			} elseif($usercek['versia_admin']=='Emlak') {  ?>



				<div class="content-wrapper">

					<section class="content-header">

						<div class="container-fluid">
							<div class="row mb-2">
								<div class="col-sm-12">
									<ol class="breadcrumb float-sm-left">
										<li style="font-size: 23px">Başvurular⠀│⠀</li> 
										<li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
										<li><a href="#">Admin Paneli</a>⠀》⠀</li>
										<li>Başvurular</li>
									</ol>
								</div>
							</div>
						</div>

					</section>







					<!-- Main content -->
					<section class="content">
						<div class="row">
							<div class="col-12">



								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Whitelist Başvuruları</h3>
									</div>
									<!-- /.card-header -->
									<div class="card-body">


										<table id="veri" class="table table-striped responsive nowrap" width="100%">



											<thead>
												<tr style="text-align: center;">
													<th>#</th>
													<th>Gönderen</th>
													<th>Meslek</th>
													<th>Durum</th>
													<th>Gönderme Tarihi</th>
													<th>İşlemler</th> 
												</tr>
											</thead>
											<tbody>




												<?php 

												$userkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = Emlak');
												$userkontrol->fetch(PDO::FETCH_ASSOC);
												$userkontrol->execute;

												if(isset($userkontrol)){  

													$whitelistsor=$db->prepare("select * from whitelist_basvuru where wh_meslek='Emlak'");
													$whitelistcek=$whitelistsor->fetch(PDO::FETCH_ASSOC);

													$whitelistsor->execute();
													foreach($whitelistsor as $whitecek) { ?>

														<tr style="text-align: center;">
															<td><?php echo $whitecek['wh_id']; ?></td>
															<td><?php echo $whitecek['wh_ekleyen']; ?></td>
															<td><?php echo $whitecek['wh_meslek']; ?></td>
															<td>
																<?php
																if($whitecek['wh_durum']=='Beklemede') {  ?>
																	<span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $whitecek['wh_durum']; ?></span>
																<?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>
																	<span class="badge badge-pill badge-success"><i class="fas fa-check"></i>  <?php echo $whitecek['wh_durum']; ?></span>
																<?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>
																	<span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $whitecek['wh_durum']; ?></span>
																<?php } elseif($whitecek['wh_durum']=='Geçersiz') { ?>
																	<span class="badge badge-pill badge-danger"><i class="fas fa-ban"></i> <?php echo $whitecek['wh_durum']; ?></span>
																<?php } ?>

															</td>
															<td><?php echo tarihcevir($whitecek['wh_tarih']); ?></td>

															<td class="project-actions">
																<a href="whview.php?id=<?php echo $whitecek ['wh_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o"><button type="button" style="width: 30%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
																<a href="../db/process.php?whsil=ok&wh_id=<?php echo $whitecek ['wh_id']; ?>" onclick="return whitelistsil();"><button type="button" style="width: 20%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
															</td>



														</tr> 
													<?php } }  ?>


												</tbody>
											</table>
										</div>
										<!-- /.card-body -->
									</div>
									<!-- /.card -->







								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
						</section>
						<!-- /.content -->
					</div>


					<script type="text/javascript">
						function whitelistsil()
						{
							var onay;
							onay=window.confirm(" Emlak Whitelist Başvuru Formunu silmeyi onaylıyor musunuz?");

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
					/*#############################################################################################################################################################################################################*/
					/*#############################################################################################################################################################################################################*/
					/*#############################################################################################################################################################################################################*/
					/*#############################################################################################################################################################################################################*/
					/*#############################################################################################################################################################################################################*/
					/*#############################################################################################################################################################################################################*/
					/*#############################################################################################################################################################################################################*/
					/*#############################################################################################################################################################################################################*/
					/*#############################################################################################################################################################################################################*/



					/*################################*/
					include 'footer.php ';
					/*################################*/


				} elseif($usercek['versia_admin']=='Mekanik') {  ?>



					<div class="content-wrapper">

						<section class="content-header">

							<div class="container-fluid">
								<div class="row mb-2">
									<div class="col-sm-12">
										<ol class="breadcrumb float-sm-left">
											<li style="font-size: 23px">Başvurular⠀│⠀</li> 
											<li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
											<li><a href="#">Admin Paneli</a>⠀》⠀</li>
											<li>Başvurular</li>
										</ol>
									</div>
								</div>
							</div>

						</section>







						<!-- Main content -->
						<section class="content">
							<div class="row">
								<div class="col-12">



									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Mekanik Başvuruları</h3>
										</div>
										<!-- /.card-header -->
										<div class="card-body">


											<table id="veri" class="table table-striped responsive nowrap" width="100%">



												<thead>
													<tr style="text-align: center;">
														<th>#</th>
														<th>Gönderen</th>
														<th>Meslek</th>
														<th>Durum</th>
														<th>Gönderme Tarihi</th>
														<th>İşlemler</th> 
													</tr>
												</thead>
												<tbody>




													<?php 

													$userkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = Mekanik');
													$userkontrol->fetch(PDO::FETCH_ASSOC);
													$userkontrol->execute;

													if(isset($userkontrol)){  

														$whitelistsor=$db->prepare("select * from whitelist_basvuru where wh_meslek='Mekanik'");
														$whitelistcek=$whitelistsor->fetch(PDO::FETCH_ASSOC);

														$whitelistsor->execute();
														foreach($whitelistsor as $whitecek) { ?>

															<tr style="text-align: center;">
																<td><?php echo $whitecek['wh_id']; ?></td>
																<td><?php echo $whitecek['wh_ekleyen']; ?></td>
																<td><?php echo $whitecek['wh_meslek']; ?></td>
																<td>
																	<?php
																	if($whitecek['wh_durum']=='Beklemede') {  ?>
																		<span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $whitecek['wh_durum']; ?></span>
																	<?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>
																		<span class="badge badge-pill badge-success"><i class="fas fa-check"></i>  <?php echo $whitecek['wh_durum']; ?></span>
																	<?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>
																		<span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $whitecek['wh_durum']; ?></span>
																	<?php } elseif($whitecek['wh_durum']=='Geçersiz') { ?>
																		<span class="badge badge-pill badge-danger"><i class="fas fa-ban"></i> <?php echo $whitecek['wh_durum']; ?></span>
																	<?php } ?>

																</td>
																<td><?php echo tarihcevir($whitecek['wh_tarih']); ?></td>

																<td class="project-actions">
																	<a href="whview.php?id=<?php echo $whitecek ['wh_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o"><button type="button" style="width: 30%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
																	<a href="../db/process.php?whsil=ok&wh_id=<?php echo $whitecek ['wh_id']; ?>" onclick="return whitelistsil();"><button type="button" style="width: 20%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
																</td>



															</tr> 
														<?php } }  ?>


													</tbody>
												</table>
											</div>
											<!-- /.card-body -->
										</div>
										<!-- /.card -->







									</div>
									<!-- /.col -->
								</div>
								<!-- /.row -->
							</section>
							<!-- /.content -->
						</div>


						<script type="text/javascript">
							function whitelistsil()
							{
								var onay;
								onay=window.confirm(" Mekanik Whitelist Başvuru Formunu silmeyi onaylıyor musunuz?");

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
						/*#############################################################################################################################################################################################################*/
						/*#############################################################################################################################################################################################################*/
						/*#############################################################################################################################################################################################################*/
						/*#############################################################################################################################################################################################################*/
						/*#############################################################################################################################################################################################################*/
						/*#############################################################################################################################################################################################################*/
						/*#############################################################################################################################################################################################################*/
						/*#############################################################################################################################################################################################################*/
						/*#############################################################################################################################################################################################################*/



						/*################################*/
						include 'footer.php ';
						/*################################*/


					} elseif($usercek['versia_admin']=='The Lost MC') {  ?>



						<div class="content-wrapper">

							<section class="content-header">

								<div class="container-fluid">
									<div class="row mb-2">
										<div class="col-sm-12">
											<ol class="breadcrumb float-sm-left">
												<li style="font-size: 23px">Başvurular⠀│⠀</li> 
												<li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
												<li><a href="#">Admin Paneli</a>⠀》⠀</li>
												<li>Başvurular</li>
											</ol>
										</div>
									</div>
								</div>

							</section>







							<!-- Main content -->
							<section class="content">
								<div class="row">
									<div class="col-12">



										<div class="card">
											<div class="card-header">
												<h3 class="card-title">The Lost MC Başvuruları</h3>
											</div>
											<!-- /.card-header -->
											<div class="card-body">


												<table id="veri" class="table table-striped responsive nowrap" width="100%">



													<thead>
														<tr style="text-align: center;">
															<th>#</th>
															<th>Gönderen</th>
															<th>Meslek</th>
															<th>Durum</th>
															<th>Gönderme Tarihi</th>
															<th>İşlemler</th> 
														</tr>
													</thead>
													<tbody>




														<?php 

														$userkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = The Lost MC');
														$userkontrol->fetch(PDO::FETCH_ASSOC);
														$userkontrol->execute;

														if(isset($userkontrol)){  

															$whitelistsor=$db->prepare("select * from whitelist_basvuru where wh_meslek='The Lost MC'");
															$whitelistcek=$whitelistsor->fetch(PDO::FETCH_ASSOC);

															$whitelistsor->execute();
															foreach($whitelistsor as $whitecek) { ?>

																<tr style="text-align: center;">
																	<td><?php echo $whitecek['wh_id']; ?></td>
																	<td><?php echo $whitecek['wh_ekleyen']; ?></td>
																	<td><?php echo $whitecek['wh_meslek']; ?></td>
																	<td>
																		<?php
																		if($whitecek['wh_durum']=='Beklemede') {  ?>
																			<span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $whitecek['wh_durum']; ?></span>
																		<?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>
																			<span class="badge badge-pill badge-success"><i class="fas fa-check"></i>  <?php echo $whitecek['wh_durum']; ?></span>
																		<?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>
																			<span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $whitecek['wh_durum']; ?></span>
																		<?php } elseif($whitecek['wh_durum']=='Geçersiz') { ?>
																			<span class="badge badge-pill badge-danger"><i class="fas fa-ban"></i> <?php echo $whitecek['wh_durum']; ?></span>
																		<?php } ?>

																	</td>
																	<td><?php echo tarihcevir($whitecek['wh_tarih']); ?></td>

																	<td class="project-actions">
																		<a href="whview.php?id=<?php echo $whitecek ['wh_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o"><button type="button" style="width: 30%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
																		<a href="../db/process.php?whsil=ok&wh_id=<?php echo $whitecek ['wh_id']; ?>" onclick="return whitelistsil();"><button type="button" style="width: 20%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
																	</td>



																</tr> 
															<?php } }  ?>


														</tbody>
													</table>
												</div>
												<!-- /.card-body -->
											</div>
											<!-- /.card -->







										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
								</section>
								<!-- /.content -->
							</div>


							<script type="text/javascript">
								function whitelistsil()
								{
									var onay;
									onay=window.confirm(" The Lost MC Whitelist Başvuru Formunu silmeyi onaylıyor musunuz?");

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
							/*#############################################################################################################################################################################################################*/
							/*#############################################################################################################################################################################################################*/
							/*#############################################################################################################################################################################################################*/
							/*#############################################################################################################################################################################################################*/
							/*#############################################################################################################################################################################################################*/
							/*#############################################################################################################################################################################################################*/
							/*#############################################################################################################################################################################################################*/
							/*#############################################################################################################################################################################################################*/
							/*#############################################################################################################################################################################################################*/



							/*################################*/
							include 'footer.php ';
							/*################################*/


						} elseif($usercek['versia_admin']=='Grove Street') {  ?>



							<div class="content-wrapper">

								<section class="content-header">

									<div class="container-fluid">
										<div class="row mb-2">
											<div class="col-sm-12">
												<ol class="breadcrumb float-sm-left">
													<li style="font-size: 23px">Başvurular⠀│⠀</li> 
													<li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
													<li><a href="#">Admin Paneli</a>⠀》⠀</li>
													<li>Başvurular</li>
												</ol>
											</div>
										</div>
									</div>

								</section>







								<!-- Main content -->
								<section class="content">
									<div class="row">
										<div class="col-12">



											<div class="card">
												<div class="card-header">
													<h3 class="card-title">Grove Street Başvuruları</h3>
												</div>
												<!-- /.card-header -->
												<div class="card-body">


													<table id="veri" class="table table-striped responsive nowrap" width="100%">



														<thead>
															<tr style="text-align: center;">
																<th>#</th>
																<th>Gönderen</th>
																<th>Meslek</th>
																<th>Durum</th>
																<th>Gönderme Tarihi</th>
																<th>İşlemler</th> 
															</tr>
														</thead>
														<tbody>




															<?php 

															$userkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = Grove Street');
															$userkontrol->fetch(PDO::FETCH_ASSOC);
															$userkontrol->execute;

															if(isset($userkontrol)){  

																$whitelistsor=$db->prepare("select * from whitelist_basvuru where wh_meslek='Grove Street'");
																$whitelistcek=$whitelistsor->fetch(PDO::FETCH_ASSOC);

																$whitelistsor->execute();
																foreach($whitelistsor as $whitecek) { ?>

																	<tr style="text-align: center;">
																		<td><?php echo $whitecek['wh_id']; ?></td>
																		<td><?php echo $whitecek['wh_ekleyen']; ?></td>
																		<td><?php echo $whitecek['wh_meslek']; ?></td>
																		<td>
																			<?php
																			if($whitecek['wh_durum']=='Beklemede') {  ?>
																				<span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $whitecek['wh_durum']; ?></span>
																			<?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>
																				<span class="badge badge-pill badge-success"><i class="fas fa-check"></i>  <?php echo $whitecek['wh_durum']; ?></span>
																			<?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>
																				<span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $whitecek['wh_durum']; ?></span>
																			<?php } elseif($whitecek['wh_durum']=='Geçersiz') { ?>
																				<span class="badge badge-pill badge-danger"><i class="fas fa-ban"></i> <?php echo $whitecek['wh_durum']; ?></span>
																			<?php } ?>

																		</td>
																		<td><?php echo tarihcevir($whitecek['wh_tarih']); ?></td>

																		<td class="project-actions">
																			<a href="whview.php?id=<?php echo $whitecek ['wh_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o"><button type="button" style="width: 30%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
																			<a href="../db/process.php?whsil=ok&wh_id=<?php echo $whitecek ['wh_id']; ?>" onclick="return whitelistsil();"><button type="button" style="width: 20%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
																		</td>



																	</tr> 
																<?php } }  ?>


															</tbody>
														</table>
													</div>
													<!-- /.card-body -->
												</div>
												<!-- /.card -->







											</div>
											<!-- /.col -->
										</div>
										<!-- /.row -->
									</section>
									<!-- /.content -->
								</div>


								<script type="text/javascript">
									function whitelistsil()
									{
										var onay;
										onay=window.confirm(" Grove Street Whitelist Başvuru Formunu silmeyi onaylıyor musunuz?");

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
								/*#############################################################################################################################################################################################################*/
								/*#############################################################################################################################################################################################################*/
								/*#############################################################################################################################################################################################################*/
								/*#############################################################################################################################################################################################################*/
								/*#############################################################################################################################################################################################################*/
								/*#############################################################################################################################################################################################################*/
								/*#############################################################################################################################################################################################################*/
								/*#############################################################################################################################################################################################################*/
								/*#############################################################################################################################################################################################################*/



								/*################################*/
								include 'footer.php ';
								/*################################*/


							} elseif($usercek['versia_admin']=='Vagos') {  ?>



								<div class="content-wrapper">

									<section class="content-header">

										<div class="container-fluid">
											<div class="row mb-2">
												<div class="col-sm-12">
													<ol class="breadcrumb float-sm-left">
														<li style="font-size: 23px">Başvurular⠀│⠀</li> 
														<li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
														<li><a href="#">Admin Paneli</a>⠀》⠀</li>
														<li>Başvurular</li>
													</ol>
												</div>
											</div>
										</div>

									</section>







									<!-- Main content -->
									<section class="content">
										<div class="row">
											<div class="col-12">



												<div class="card">
													<div class="card-header">
														<h3 class="card-title">Vagos Başvuruları</h3>
													</div>
													<!-- /.card-header -->
													<div class="card-body">


														<table id="veri" class="table table-striped responsive nowrap" width="100%">



															<thead>
																<tr style="text-align: center;">
																	<th>#</th>
																	<th>Gönderen</th>
																	<th>Meslek</th>
																	<th>Durum</th>
																	<th>Gönderme Tarihi</th>
																	<th>İşlemler</th> 
																</tr>
															</thead>
															<tbody>




																<?php 

																$userkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = Vagos');
																$userkontrol->fetch(PDO::FETCH_ASSOC);
																$userkontrol->execute;

																if(isset($userkontrol)){  

																	$whitelistsor=$db->prepare("select * from whitelist_basvuru where wh_meslek='Vagos'");
																	$whitelistcek=$whitelistsor->fetch(PDO::FETCH_ASSOC);

																	$whitelistsor->execute();
																	foreach($whitelistsor as $whitecek) { ?>

																		<tr style="text-align: center;">
																			<td><?php echo $whitecek['wh_id']; ?></td>
																			<td><?php echo $whitecek['wh_ekleyen']; ?></td>
																			<td><?php echo $whitecek['wh_meslek']; ?></td>
																			<td>
																				<?php
																				if($whitecek['wh_durum']=='Beklemede') {  ?>
																					<span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $whitecek['wh_durum']; ?></span>
																				<?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>
																					<span class="badge badge-pill badge-success"><i class="fas fa-check"></i>  <?php echo $whitecek['wh_durum']; ?></span>
																				<?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>
																					<span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $whitecek['wh_durum']; ?></span>
																				<?php } elseif($whitecek['wh_durum']=='Geçersiz') { ?>
																					<span class="badge badge-pill badge-danger"><i class="fas fa-ban"></i> <?php echo $whitecek['wh_durum']; ?></span>
																				<?php } ?>

																			</td>
																			<td><?php echo tarihcevir($whitecek['wh_tarih']); ?></td>

																			<td class="project-actions">
																				<a href="whview.php?id=<?php echo $whitecek ['wh_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o"><button type="button" style="width: 30%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
																				<a href="../db/process.php?whsil=ok&wh_id=<?php echo $whitecek ['wh_id']; ?>" onclick="return whitelistsil();"><button type="button" style="width: 20%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
																			</td>



																		</tr> 
																	<?php } }  ?>


																</tbody>
															</table>
														</div>
														<!-- /.card-body -->
													</div>
													<!-- /.card -->







												</div>
												<!-- /.col -->
											</div>
											<!-- /.row -->
										</section>
										<!-- /.content -->
									</div>


									<script type="text/javascript">
										function whitelistsil()
										{
											var onay;
											onay=window.confirm(" Vagos Whitelist Başvuru Formunu silmeyi onaylıyor musunuz?");

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
									/*#############################################################################################################################################################################################################*/
									/*#############################################################################################################################################################################################################*/
									/*#############################################################################################################################################################################################################*/
									/*#############################################################################################################################################################################################################*/
									/*#############################################################################################################################################################################################################*/
									/*#############################################################################################################################################################################################################*/
									/*#############################################################################################################################################################################################################*/
									/*#############################################################################################################################################################################################################*/
									/*#############################################################################################################################################################################################################*/



									/*################################*/
									include 'footer.php ';
									/*################################*/

								} elseif($usercek['versia_admin']=='Ballas') {  ?>



									<div class="content-wrapper">

										<section class="content-header">

											<div class="container-fluid">
												<div class="row mb-2">
													<div class="col-sm-12">
														<ol class="breadcrumb float-sm-left">
															<li style="font-size: 23px">Başvurular⠀│⠀</li> 
															<li class="breadcrumb-list"><a href="index.php"><i class="fa fa-home"></i></a>⠀》⠀</li>
															<li><a href="#">Admin Paneli</a>⠀》⠀</li>
															<li>Başvurular</li>
														</ol>
													</div>
												</div>
											</div>

										</section>







										<!-- Main content -->
										<section class="content">
											<div class="row">
												<div class="col-12">



													<div class="card">
														<div class="card-header">
															<h3 class="card-title">Ballas Başvuruları</h3>
														</div>
														<!-- /.card-header -->
														<div class="card-body">


															<table id="veri" class="table table-striped responsive nowrap" width="100%">



																<thead>
																	<tr style="text-align: center;">
																		<th>#</th>
																		<th>Gönderen</th>
																		<th>Meslek</th>
																		<th>Durum</th>
																		<th>Gönderme Tarihi</th>
																		<th>İşlemler</th> 
																	</tr>
																</thead>
																<tbody>




																	<?php 

																	$userkontrol = $db->prepare('SELECT * FROM user WHERE versia_admin = Ballas');
																	$userkontrol->fetch(PDO::FETCH_ASSOC);
																	$userkontrol->execute;

																	if(isset($userkontrol)){  

																		$whitelistsor=$db->prepare("select * from whitelist_basvuru where wh_meslek='Ballas'");
																		$whitelistcek=$whitelistsor->fetch(PDO::FETCH_ASSOC);

																		$whitelistsor->execute();
																		foreach($whitelistsor as $whitecek) { ?>

																			<tr style="text-align: center;">
																				<td><?php echo $whitecek['wh_id']; ?></td>
																				<td><?php echo $whitecek['wh_ekleyen']; ?></td>
																				<td><?php echo $whitecek['wh_meslek']; ?></td>
																				<td>
																					<?php
																					if($whitecek['wh_durum']=='Beklemede') {  ?>
																						<span class="badge badge-pill badge-info"><i class="fas fa-cog fa-spin"></i> <?php echo $whitecek['wh_durum']; ?></span>
																					<?php } elseif($whitecek['wh_durum']=='Onaylandı') { ?>
																						<span class="badge badge-pill badge-success"><i class="fas fa-check"></i>  <?php echo $whitecek['wh_durum']; ?></span>
																					<?php } elseif($whitecek['wh_durum']=='Reddedildi') { ?>
																						<span class="badge badge-pill badge-danger"><i class="fas fa-times"></i> <?php echo $whitecek['wh_durum']; ?></span>
																					<?php } elseif($whitecek['wh_durum']=='Geçersiz') { ?>
																						<span class="badge badge-pill badge-danger"><i class="fas fa-ban"></i> <?php echo $whitecek['wh_durum']; ?></span>
																					<?php } ?>

																				</td>
																				<td><?php echo tarihcevir($whitecek['wh_tarih']); ?></td>

																				<td class="project-actions">
																					<a href="whview.php?id=<?php echo $whitecek ['wh_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o"><button type="button" style="width: 30%" class="btn btn-outline-info"><i class="fas fa-eye"></i> Görüntüle</button></a>
																					<a href="../db/process.php?whsil=ok&wh_id=<?php echo $whitecek ['wh_id']; ?>" onclick="return whitelistsil();"><button type="button" style="width: 20%" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Sil</button></a>
																				</td>



																			</tr> 
																		<?php } }  ?>


																	</tbody>
																</table>
															</div>
															<!-- /.card-body -->
														</div>
														<!-- /.card -->







													</div>
													<!-- /.col -->
												</div>
												<!-- /.row -->
											</section>
											<!-- /.content -->
										</div>


										<script type="text/javascript">
											function whitelistsil()
											{
												var onay;
												onay=window.confirm(" Ballas Whitelist Başvuru Formunu silmeyi onaylıyor musunuz?");

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
										/*#############################################################################################################################################################################################################*/
										/*#############################################################################################################################################################################################################*/
										/*#############################################################################################################################################################################################################*/
										/*#############################################################################################################################################################################################################*/
										/*#############################################################################################################################################################################################################*/
										/*#############################################################################################################################################################################################################*/
										/*#############################################################################################################################################################################################################*/
										/*#############################################################################################################################################################################################################*/
										/*#############################################################################################################################################################################################################*/



										/*################################*/
										include 'footer.php ';
										/*################################*/





									} else {  ?>


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