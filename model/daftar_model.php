<?php 
    include('koneksi.php');
    $halaman = $_POST['halaman'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    if($role){

        $tambah = mysqli_query($conn, "INSERT INTO `user` (`nama`, `email`, `password`, `role`) VALUES ('$nama', '$email', '$password_hash', '$role');");
    }else{

        $tambah = mysqli_query($conn, "INSERT INTO `user` (`nama`, `email`, `password`, `role`) VALUES ('$nama', '$email', '$password_hash', 'user');");
    }


    
    if($halaman=="tambah"){
        
        header("Location:../view/admin_user.php?berhasil=1");
    }else{
        header("Location:../view/masuk.php?berhasil=1");
        
    }


?>