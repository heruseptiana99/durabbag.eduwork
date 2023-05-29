<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$size = $_POST['size'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];
 
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
        mysqli_query($conn, "INSERT INTO `produk` (`nama`, `jenis`, `harga`, `keterangan`) VALUES ('$nama', '$jenis', '$harga', '$keterangan');");

        $data_produk = mysqli_query($conn, "SELECT max(id_produk) as id_produk_terbaru FROM produk");
        while ($produk = mysqli_fetch_array($data_produk)) {
          $id_produk_terbaru = $produk['id_produk_terbaru'];
        }

        mysqli_query($conn, "INSERT INTO `produk_foto` (`id_produk`, `foto`, `status`) VALUES ('$id_produk_terbaru', '$xx', 'Utama');");
        mysqli_query($conn, "INSERT INTO `produk_size` (`id_produk`, `size`) VALUES ('$id_produk_terbaru', '$size');");

        header("Location:../view/admin_produk.php?berhasil=1");

	}else{
		echo "GAGAL UPLOAD";
	}
}