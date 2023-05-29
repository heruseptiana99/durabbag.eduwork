<?php

	$id_user = $_GET['id_user'];

	include('koneksi.php');

	$query = mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id_user' ");

	header("Location:../view/admin_user.php?berhasil=2");

?>