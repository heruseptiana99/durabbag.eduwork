<?php 
    include('koneksi.php');
    $id_produk = $_POST['id_produk'];
    $size = $_POST['size'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $tambah = mysqli_query($conn, "INSERT INTO `produk_size` (`id_produk`, `size`) VALUES ('$id_produk', '$size');");

        
    header("Location:../view/ubah_produk.php?id_produk=$id_produk");


?>