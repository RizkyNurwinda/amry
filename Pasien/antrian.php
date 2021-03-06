<?php
session_start();
require ("../koneksi.php");
include '../session.php';
include 'akses.php';
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Antrian Klinik | Antrian</title>
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

	<link href="../css/antrian.css" rel="stylesheet" text="text/css">

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
					<a class="navbar-brand logo_h" href="index.php">
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
										<a class="nav-link" href="index.php">Home</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="antrian.php">Antrian</a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="riwayat.php">Riwayat</a>
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

	<section class="procedure_category section_gap_custom"><!-- contact_area p_120 -->
		<div class="container">
			<br>
			<center><h1>ANTRIAN</h1></center>
			<br>
			<div class="row">
	            <!-- Pie Chart -->
	            <div class="col-xl-6 col-lg-6">
	              <div class="card shadow mb-4 bg-primary">
	                <div class="card-body">
	                    <form action="" method="post">
	                      <div class="form-group row">
	                        <table  id="dataTable" width="100%" cellspacing="0">
	                        	<tr>
	                        		<td>&nbsp;</td>
	                        		<td><CENTER><H1>POLI UMUM</H1></CENTER></td>
	                        		<td>&nbsp;</td>
	                        	</tr>
	                        	<TR><TD>&nbsp;</TD></TR>
	                        	<tr>
	                        		<td>&nbsp;</td>
	                        		<td><center><a href="lihat-umum.php" class="btn btn-block btn-danger circle" name="umum" type="button">Lihat Antrian</a></center></td>
	                        		<td>&nbsp;</td>
	                        	</tr>
	                        </table>
	                      </div>
	                    </form>
	                  </div>
	              </div>
	            </div>
	            <!-- Area Chart -->
	            <div class="col-xl-6 col-lg-6">
	                <div class="card shadow mb-4 bg-success">
	                  <div class="card-body">
	                      <form action="" method="post">
	                          <div class="form-group row">
	                          	<table  id="dataTable" width="100%" cellspacing="0">
	                          		<tr>
	                          			<td>&nbsp;</td>
	                        			<td><CENTER><H1>POLI GIGI</H1></CENTER></td>
	                        			<td>&nbsp;</td>
	                        		</tr>
		                        	<TR><TD>&nbsp;</TD></TR>
		                        	<tr>
		                        		<td>&nbsp;</td>
		                        		<td><center><a href="lihat-gigi.php" class="btn btn-block btn-danger circle" name="gigi" type="button">Lihat Antrian</a></center></td>
		                        		<td>&nbsp;</td>
		                        	</tr>
	                        	</table>
	                          </div>
	                      </form>
	                  </div>
	                </div>
	            </div>
            </div>
		</div>
	</section>



<!-- Modal -->
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
  

<!-- end modal -->





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