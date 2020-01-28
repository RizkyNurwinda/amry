<?php
	require ("../koneksi.php"); //untuk koneksi ke database untuk menambahkan data ke database lalu menangkap data yang dikirim dari form dan memasukkan ke variabel masing-masing
	//deklarasi
	$no_identitas = $_POST['no_identitas'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jk'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	// $username = $_POST['username'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	//untuk mengganti nama foto dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis').$foto;

	//setting untuk tempat menyimpan foto
	$path = "../img/".$fotobaru;

	//proses upload
	if (move_uploaded_file($tmp, $path)) {
		//untuk membuat query menambahkan data kedalam  tabel 
		$query = "INSERT INTO tb_user (no_identitas, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, no_hp, alamat, foto) VALUES ('.$no_identitas' , '$nama' , '$jenis_kelamin' , '$tempat_lahir' , '$tanggal_lahir' , '$alamat' , '$no_hp' , '$fotobaru')";
		$result = mysqli_query($koneksi, $query); //mengeksekusi atau menjalankan query dari variabel $query

		if ($query) {
			header("location: index-dr.php");
		} else{
			echo "Maaf, Terjadi Kesalahan saat mencoba menyimpan data ke database.";
			echo "<br><a href='index-dr.php'> Kembali";
		}
	}


?>