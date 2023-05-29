<?php 
    include('koneksi.php');
    $id_produk = $_POST['id_produk'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

        mysqli_query($conn, "UPDATE produk SET nama = '$nama', jenis = '$jenis', harga = '$harga', keterangan = '$keterangan' WHERE id_produk = '$id_produk' ");


    header("Location:../view/ubah_produk.php?id_produk=$id_produk");


?>