<?php 
include 'koneksi.php';
$id_produk = $_POST['id_produk'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto_produk']['name'];
$ukuran = $_FILES['foto_produk']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
    header("Location:../view/admin_produk.php");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto_produk']['tmp_name'], '../assets/image/produk/'.$rand.'_'.$filename);
        mysqli_query($conn, "INSERT INTO `produk_foto` (`id_produk`, `foto`, `status`) VALUES ('$id_produk', '$xx', 'Anggota');");

        header("Location:../view/ubah_produk.php?id_produk=$id_produk");

	}else{
		echo "GAGAL UPLOAD";
	}
}