<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
	$id_buku	= $_POST['id_buku'];
	$judul		= $_POST['judul'];
	$penerbit	= $_POST['penerbit'];
	$pengarang	= $_POST['pengarang'];
	$ringkasan	= $_POST['ringkasan'];
	$stok		= $_POST['stok'];
	$id_kategori= $_POST['id_kategori'];

	$sql="UPDATE buku SET judul='$judul', penerbit='$penerbit', pengarang='$pengarang', ringkasan='$ringkasan', cover='', stok='$stok', id_kategori= '$id_kategori' WHERE id_buku= $id_buku";

	$res 	= mysqli_query($koneksi, $sql);
	$count	= mysqli_affected_rows($koneksi);

	if($res > 0){
		header("Location: index.php");
	}
}