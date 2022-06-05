<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "obat_create"){
 	$db->obat_store( // START OBAT PROCESSING
        mysqli_real_escape_string($db->conn, $_POST['kode_obat']),
        mysqli_real_escape_string($db->conn, $_POST['nama_obat']),
        mysqli_real_escape_string($db->conn, $_POST['bentuk']),
        mysqli_real_escape_string($db->conn, $_POST['berat'])
    );
 	header("location:obat_list.php");
 }elseif($aksi == "obat_destroy"){ 	
 	$db->obat_destroy(mysqli_real_escape_string($db->conn, $_GET['id']));
	header("location:obat_list.php");
 }elseif($aksi == "obat_update"){
 	$db->obat_update(
        mysqli_real_escape_string($db->conn, $_POST['id']),
        mysqli_real_escape_string($db->conn, $_POST['kode_obat']),
        mysqli_real_escape_string($db->conn, $_POST['nama_obat']),
        mysqli_real_escape_string($db->conn, $_POST['bentuk']),
        mysqli_real_escape_string($db->conn, $_POST['berat'])
     );
 	header("location:obat_list.php");
 }
 elseif($aksi == "dokter_create"){ // START DOKTER PROCESSING
 	$db->dokter_store(
        mysqli_real_escape_string($db->conn, $_POST['nip']),
        mysqli_real_escape_string($db->conn, $_POST['nama_lengkap']),
        mysqli_real_escape_string($db->conn, $_POST['spesialis']),
        mysqli_real_escape_string($db->conn, $_POST['tempat_praktek'])
    );
 	header("location:dokter_list.php");
 }elseif($aksi == "dokter_destroy"){ 	
 	$db->dokter_destroy(mysqli_real_escape_string($db->conn, $_GET['id']));
	header("location:dokter_list.php");
 }elseif($aksi == "dokter_update"){
 	$db->dokter_update(
        mysqli_real_escape_string($db->conn, $_POST['id']),
        mysqli_real_escape_string($db->conn, $_POST['nip']),
        mysqli_real_escape_string($db->conn, $_POST['nama_lengkap']),
        mysqli_real_escape_string($db->conn, $_POST['spesialis']),
        mysqli_real_escape_string($db->conn, $_POST['tempat_praktek'])
     );
 	header("location:dokter_list.php");
 }
 elseif($aksi == "pasien_create"){ // START PASIEN PROCESSING
 	$db->pasien_store(
        mysqli_real_escape_string($db->conn, $_POST['nomor_pasien']),
        mysqli_real_escape_string($db->conn, $_POST['nama_lengkap']),
        mysqli_real_escape_string($db->conn, $_POST['jenis_kelamin']),
        mysqli_real_escape_string($db->conn, $_POST['umur'])
    );
 	header("location:pasien_list.php");
 }elseif($aksi == "pasien_destroy"){ 	
 	$db->pasien_destroy(mysqli_real_escape_string($db->conn, $_GET['id']));
	header("location:pasien_list.php");
 }elseif($aksi == "pasien_update"){
 	$db->pasien_update(
        mysqli_real_escape_string($db->conn, $_POST['id']),
        mysqli_real_escape_string($db->conn, $_POST['nomor_pasien']),
        mysqli_real_escape_string($db->conn, $_POST['nama_lengkap']),
        mysqli_real_escape_string($db->conn, $_POST['jenis_kelamin']),
        mysqli_real_escape_string($db->conn, $_POST['umur'])
     );
 	header("location:pasien_list.php");
 }
?>