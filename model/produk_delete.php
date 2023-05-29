<?php

	$id_produk = $_GET['id_produk'];

	include('koneksi.php');

	$query = mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '$id_produk' ");

	header("Location:../view/admin_produk.php?berhasil=2");

?>