<?php 
    include('koneksi.php');
    $id_produk = $_POST['id_produk'];
    $id_produk_foto = $_POST['id_produk_foto'];
    $status = $_POST['status'];
    
    if ($status=="Utama") {
        $data_foto = mysqli_query($conn, "SELECT * FROM produk_foto WHERE id_produk=$id_produk");
            while($foto = mysqli_fetch_array($data_foto)) {
                mysqli_query($conn, "UPDATE produk_foto SET status = 'Anggota' WHERE id_produk_foto = '$foto[id_produk_foto]' ");
            }
        mysqli_query($conn, "UPDATE produk_foto SET status = '$status' WHERE id_produk_foto = '$id_produk_foto' ");
    }else{
        $data_foto = mysqli_query($conn, "SELECT * FROM produk_foto WHERE id_produk=$id_produk AND id_produk_foto!=$id_produk_foto LIMIT 0;");
            while($foto = mysqli_fetch_array($data_foto)) {
                mysqli_query($conn, "UPDATE produk_foto SET status = 'Utama' WHERE id_produk_foto = '$foto[id_produk_foto]' ");
            }
        mysqli_query($conn, "UPDATE produk_foto SET status = '$status' WHERE id_produk_foto = '$id_produk_foto' ");
    }

    header("Location:../view/ubah_produk.php?id_produk=$id_produk");


?>