<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "utsrama";
    var $conn = '';

	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass);
		mysqli_select_db($this->conn, $this->db);
	}

    // Obat Functionalities
    function obat_list(){
		$data = mysqli_query($this->conn, "select * from obat");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

    function obat_store($kode_obat,$nama_obat,$bentuk, $berat){
        mysqli_query($this->conn, "insert into obat (kode_obat, nama_obat, bentuk, berat) values('$kode_obat','$nama_obat','$bentuk','$berat')");
    }

    function obat_destroy($idobat){
        mysqli_query($this->conn, "delete from obat where idobat='$idobat'");
    }

    function obat_edit($id){
        $data = mysqli_fetch_assoc(mysqli_query($this->conn, "select * from obat where idobat='$id' LIMIT 1"));
        return $data;
    }
     
    function obat_update($id,$kode_obat,$nama_obat,$bentuk, $berat){
        mysqli_query($this->conn, "update obat set kode_obat='$kode_obat', nama_obat='$nama_obat', bentuk='$bentuk', berat = '$berat' where idobat='$id'");
    }

    // Dokter Functionalities
    function dokter_list(){
		$data = mysqli_query($this->conn, "select * from dokter");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

    function dokter_store($nip,$nama_lengkap,$spesialis, $tempat_praktek){
        mysqli_query($this->conn, "insert into dokter(nip, nama_lengkap, spesialis, tempat_praktek) values('$nip','$nama_lengkap','$spesialis','$tempat_praktek')");
    }

    function dokter_destroy($iddokter){
        mysqli_query($this->conn, "delete from dokter where iddokter='$iddokter'");
    }

    function dokter_edit($id){
        $data = mysqli_fetch_assoc(mysqli_query($this->conn, "select * from dokter where iddokter='$id' LIMIT 1"));
        return $data;
    }
     
    function dokter_update($id,$nip,$nama_lengkap,$spesialis, $tempat_praktek){
        mysqli_query($this->conn, "update dokter set nip='$nip', nama_lengkap='$nama_lengkap', spesialis='$spesialis', tempat_praktek = '$tempat_praktek' where iddokter='$id'");
    }

    // Pasien Functionalities
    function pasien_list(){
		$data = mysqli_query($this->conn, "select * from pasien");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

    function pasien_store($nomor_pasien,$nama_lengkap,$jenis_kelamin, $umur){
        mysqli_query($this->conn, "insert into pasien(nomor_pasien, nama_lengkap, jenis_kelamin, umur) values('$nomor_pasien','$nama_lengkap','$jenis_kelamin','$umur')");
    }

    function pasien_destroy($idpasien){
        mysqli_query($this->conn, "delete from pasien where idpasien='$idpasien'");
    }

    function pasien_edit($id){
        $data = mysqli_fetch_assoc(mysqli_query($this->conn, "select * from pasien where idpasien='$id' LIMIT 1"));
        return $data;
    }
     
    function pasien_update($id,$nomor_pasien,$nama_lengkap,$jenis_kelamin, $umur){
        mysqli_query($this->conn, "update pasien set nomor_pasien='$nomor_pasien', nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin', umur = '$umur' where idpasien='$id'");
    }

} 

?>