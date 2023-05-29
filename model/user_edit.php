<?php 
    include('koneksi.php');
    $id_user = $_GET['id_user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $tambah = mysqli_query($conn, "UPDATE user SET nama = '$nama', email='$email', role = '$role' WHERE id_user = '$id_user' ");

    header("Location:../view/admin_user.php?berhasil=3");


?>