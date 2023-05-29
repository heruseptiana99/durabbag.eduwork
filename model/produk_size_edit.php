<?php 
    include('koneksi.php');
    $id_produk = $_POST['id_produk'];
    $id_produk_size = $_POST['id_produk_size'];
    $size = $_POST['size'];
    
    $tambah = mysqli_query($conn, "UPDATE produk_size SET size = '$size' WHERE id_produk_size = '$id_produk_size' ");

    header("Location:../view/ubah_produk.php?id_produk=$id_produk");


?>