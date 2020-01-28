<?php
require ("../koneksi.php");
include '../session.php';
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Antrian Klinik | Home</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../vendors/linericon/style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="../vendors/animate-css/animate.css">
	<link rel="stylesheet" href="../vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/responsive.css">

	<link href="antrian.css" rel="stylesheet" text="text/css">

	
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container">
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="login.php">
								<i class="lnr lnr-phone-handset"></i>
								012-6532-568-9746
							</a>
						</li>
						<li>
							<a href="#">
								<i class="lnr lnr-envelope"></i>
								official.iwars@gmailcom
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index-dr.php">
						<img src="../img/antik.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item ">
										<a class="nav-link" href="index-dr.php">Home</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="antrian.php">Antrian</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="gantipass.php">Ganti Password</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="../logout.php" data-toggle="modal" data-target="#logoutModal">Logout </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->
	
	<section class="feedback_area section_gap relative">
		<div class="container-fluid">
			<br>
			<h3>PROFIL</h3>
			<br>

			<div class="row">

	            <!-- Foto Profil -->
	            <div class="col-xl-3 col-lg-5">
	              <div class="card shadow mb-4">
	                <div class="card-body">
	                    <form action="" method="post">
	                      <div class="form-group row">
	                        <table  id="dataTable" width="100%" cellspacing="0">
	                          <tr>
	                              <td><center><img src="img/<?php echo $data ['foto'];?>" width="150" height="225"></center></td>
	                          </tr>
	                        </table>
	                      </div>
	                    </form>
	                  </div>
	              </div>
	            </div>

	            <!-- Biodata -->
	            <div class="col-xl-9 col-lg-7">
	              <div class="card shadow mb-4">
	                  <div class="card-body">
	                      <form action="" method="post">
	                          <div class="form-group row">
	                          	<?php
			                    $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_antrian='$id_antrian' AND id_poli=1");
			                    while($data = mysqli_fetch_array($query)) {
			                 	?>
	                            <label class="col-sm-2 col-form-label">ID</label>
	                            <div class="col-sm-10">
	                              <input type="text" name="no_identitas" disabled value="<?php echo $data ['no_identitas'];?>" class="form-control" size="4" >
	                            </div>
	                          </div>
	                          <div class="form-group row">
	                            <label class="col-sm-2 col-form-label">Nama</label>
	                            <div class="col-sm-10">
	                              <input type="text" name="nama" disabled value="<?php echo $data ['nama'];?>" class="form-control" size="4" >
	                            </div>
	                          </div>
	                          <div class="form-group row">
	                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
	                            <div class="col-sm-10">
	                              <input type="text" name="jk" disabled value="<?php echo $data ['jenis_kelamin'];?>" class="form-control" size="4" >
	                            </div>
	                          </div>
	                          <div class="form-group row">
	                            <label class="col-sm-2 col-form-label">Alamat</label>
	                            <div class="col-sm-10">
	                              <input type="text" name="alamat" disabled value="<?php echo $data ['alamat'];?>" class="form-control" size="4" >
	                            </div>
	                          </div>
	                          <div class="form-group row">
	                            <label class="col-sm-2 col-form-label">No HP</label>
	                            <div class="col-sm-10">
	                              <input type="text" name="no_hp" disabled value="<?php echo $data ['no_hp'];?>" class="form-control" size="4" >
	                            </div><?php } ?>
	                          </div>
	                          <div class="form-group row">
	                            <label class="col-sm-2 col-form-label">&nbsp;</label>
	                            <div class="col-sm-10">
	                              <input type="submit" name="lanjut" class="btn btn-primary" value="Lanjut">
	                            </div>
	                          </div>
	                      </form>
	                  </div>
	               </div>
	            </div>

			</div>

		</div>
	</section>



	<!--================ start footer Area =================-->
	<footer class="footer-area">
		<center>Copyright @2019 by <a href="https://www.instagram.com/iwarsofficial/?hl=id">iWARS</a></center>
	</footer>
	<!--================ End footer Area =================-->


	<!-- Logout Modal-->
	  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Yakin untuk Keluar?</h5>
	          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">×</span>
	          </button>
	        </div>
	        <div class="modal-body">Pilih "Logout" jika ingin Keluar.</div>
	        <div class="modal-footer">
	          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
	          <a class="btn btn-primary" href="../logout.php">Logout</a>
	        </div>
	      </div>
	    </div>
	  </div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="../js/jquery.ajaxchimp.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="../js/mail-script.js"></script>
	<script src="../js/custom.js"></script>
</body>

</html>