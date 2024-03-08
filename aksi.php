<?php
include('config/index.php');
if(isset($_POST['ttambah'])){ 
	$id_pegawai	= $_POST['id_pegawai'];
	$nama_pegawai	= $_POST['nama_pegawai'];
	$jabatan_pegawai	= $_POST['jabatan_pegawai'];
	$kontrak_pegawai	= $_POST['kontrak_pegawai'];
	
	$sql= INSERT INTO pegawai.id_pegawai, pegawai.nama_pegawai, jabatan_pegawai.jabatan_pegawai, kontrak.kontrak_pegawai FROM pegawai AS pegawai LEFT JOIN jabatan_pegawai AS jabatan_pegawai ON pegawai.id_pegawai=jabatan_pegawai.id_pegawai LEFT JOIN kontrak AS kontrak ON pegawai.id_pegawai = kontrak.id_pegawai (pegawai.id_pegawai, pegawai.nama_pegawai, jabatan_pegawai.jabatan_pegawai, kontrak.kontrak_pegawai) VALUES ('id_pegawai','.$nama_pegawai','.$jabatan_pegawai.','.$kontrak_pegawai.');
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: datapegawai.php'); 
	}
	else{
		echo 'Gagal';
	}
}
?>
