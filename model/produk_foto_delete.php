<?php

	$id_produk_foto = $_GET['id_produk_foto'];
	$id_produk = $_GET['id_produk'];
	$foto = $_GET['foto'];

	include('koneksi.php');

    unlink("../assets/image/produk/$foto");
	$query = mysqli_query($conn, "DELETE FROM produk_foto WHERE id_produk_foto = '$id_produk_foto' ");

    header("Location:../view/ubah_produk.php?id_produk=$id_produk");

?>