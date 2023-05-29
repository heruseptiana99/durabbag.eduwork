<?php

	$id_produk_size = $_GET['id_produk_size'];
	$id_produk = $_GET['id_produk'];

	include('koneksi.php');

	$query = mysqli_query($conn, "DELETE FROM produk_size WHERE id_produk_size = '$id_produk_size' ");

    header("Location:../view/ubah_produk.php?id_produk=$id_produk");

?>