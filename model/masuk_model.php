<?php 
    include('koneksi.php');
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
    $result = mysqli_fetch_array($query);
   
    if ($result!=0) {
        if (password_verify($password, $result['password'])) {
            $_SESSION['email'] = $result['email'];
            $_SESSION['role'] = $result['role'];
            $_SESSION['nama'] = $result['nama'];
            header("Location:../view/profil.php");
        }else{
            header("Location:../view/masuk.php");
        }
    }else{
        header("Location:../view/masuk.php");
    }



?>