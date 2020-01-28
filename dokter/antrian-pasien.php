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
	
	<title>Antrian Klinik</title>
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
					<a class="navbar-brand logo_h" href="index-pasien.php">
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
										<a class="nav-link" href="index-pasien.php">Home</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="antrian-pasien.php">Antrian</a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="riwayat-pasien.php">Riwayat</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="gantipass-pasien.php">Ganti Password</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="modal" data-target="#myModal">Logout</a>
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
<div class="row">
	<div class="card shadow col-xs-4">
		<br>
		<br>
		<?php
		
		$queryumum = "SELECT COUNT(tb_periksa.id_user) from tb_periksa WHERE id_poli = 1 and id_status_periksa = 1 and tanggal_periksa = CURRENT_DATE()";
		$sqlumum = mysqli_query($koneksi, $queryumum);
		while($drowumum = mysqli_fetch_array($sqlumum)){
		?>
			<div class="tulisan1">
   			<h3>POLI UMUM</h3>
   			<form action="" method="post">

   				<table>
   				<tr>
   					<?php

		    $querypro = mysqli_query($koneksi, "SELECT tb_antrian.no_antrian FROM tb_periksa, tb_poli, tb_antrian WHERE tb_poli.id_poli=tb_antrian.id_poli AND tb_periksa.id_poli=tb_poli.id_poli AND tb_periksa.id_status_periksa=3 AND tb_periksa.id_poli=1 AND tb_periksa.tanggal_periksa=CURRENT_DATE() GROUP BY tb_periksa.id_periksa");
		    while($pro = mysqli_fetch_array($querypro)){
		    ?>
   					<td> <h1>A</h1> </td>
   					<td>  </td>
   					<td> <input type="text"  class="form-control" value="<?php echo $pro[0]; ?>"> </td>
   				</tr>
   				<?php
   			}
   				?>
   				<tr>
   					<td><h5>Jumlah Antrian</h5></td>
   					<td><h5><?php echo $drowumum[0]; ?></h5></td>
   				</tr>
   				</table>
   				
   			<button type="submit" class="btn btn-primary btn-user btn-block btn-danger" name="ambil1" value="submit"> Ambil Antrian</button>
   			<?php 
   										date_default_timezone_set('Asia/Jakarta');
										$tanggal = date("Y-m-d");
										
                            			$id_antrian = $_POST['id_antrian'];
                            			$id_user = $login_session;
                            			$id_poli=1;
                            			$antrian = $drowumum[0] + 1;

										if (isset($_POST['ambil1'])) {
										  $sql1 = "INSERT INTO tb_antrian (id_user, id_poli, tanggal, no_antrian) values('$id_user', '$id_poli', '$tanggal', '$antrian')";

										  $sql2 = "INSERT INTO tb_periksa(id_user,id_poli,tanggal_periksa,id_status_periksa,id_status_obat) values ('$id_user','$id_poli','$tanggal',1,1)";
										  mysqli_query($koneksi,$sql1);
										  mysqli_query($koneksi,$sql2);
										  		header("location:antrian-pasien.php");
										 } else {
										 	
										 }

										?>
			</div>

   			</form>
	</div>
	<div class="card shadow col-xs-4">
		<br>
		<br>
		<?php
	
	$querygigi = "SELECT COUNT(tb_periksa.id_user) from tb_periksa WHERE id_poli = 2 and id_status_periksa = 1 and tanggal_periksa = CURRENT_DATE()";
	$sqlgigi = mysqli_query($koneksi, $querygigi);
	while($drowgigi = mysqli_fetch_array($sqlgigi)){

	
	?>
			<div class="tulisan2">
   			<h3>POLI GIGI</h3>
   			<form action="" method="post">
   			<table>
   				<tr>
   					<?php

		    $querypros = mysqli_query($koneksi, "SELECT tb_antrian.no_antrian FROM tb_periksa, tb_poli, tb_antrian WHERE tb_poli.id_poli=tb_antrian.id_poli AND tb_periksa.id_poli=tb_poli.id_poli AND tb_periksa.id_status_periksa=3 AND tb_periksa.id_poli=2 AND tb_periksa.tanggal_periksa=CURRENT_DATE() GROUP BY tb_periksa.id_periksa");
		    while($pros = mysqli_fetch_array($querypros)){
		    ?>
   					<td> <h1>B</h1> </td>
   					<td>  </td>
   					<td> <input type="text"  class="form-control" value="<?php echo $pros[0]; ?>"> </td>
   				</tr>
   				<?php
   			}
   				?>
   				<tr>
   					<td><h5>Jumlah Antrian</h5></td>
   					<td><h5><?php echo $drowgigi[0]; ?></h5></td>
   				</tr>
   				</table>
   				
   			<button type="submit"  class="btn btn-primary btn-user btn-block btn-danger" name="ambil2"> Ambil Antrian</button>
   			<?php 
   										date_default_timezone_set('Asia/Jakarta');
										$tanggal= date("Y-m-d");
										
                            			$id_antrian2 = $_POST['id_antrian'];
                            			$id_user2 = $login_session;
                            			$id_poli2=2;
                            			$antrian2 = $drowgigi[0] + 1;

										if (isset($_POST['ambil2'])) {
										  $sql1 = "INSERT INTO tb_antrian (id_user, id_poli, tanggal, no_antrian) values('$id_user2', '$id_poli2', '$tanggal', '$antrian2')";
										  $sql2 = "INSERT INTO tb_periksa(id_user,id_poli,tanggal_periksa,id_status_periksa,id_status_obat) values ('$id_user2','$id_poli2','$tanggal',1,1)";
										  mysqli_query($koneksi,$sql1);
										  mysqli_query($koneksi,$sql2);
										  		header("location:antrian-pasien.php");
										 } else {
										 
										 }

										?>

			</div>
		</form>
 	</div>  
<?php
}
}
?>
</div>
</div>
</section>



<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Logout</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>Anda yakin untuk keluar?</p>
        </div>
        <div class="modal-footer">
          <button  class="btn btn-default btn-danger" data-dismiss="modal" href="../logout.php">Keluar</button>
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