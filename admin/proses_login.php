<?php
include("koneksi.php");
// $host ="localhost";
// $user = "username";
// $password = "password";
// $dbname = "gojo_shopp";



$koneksi = mysqli_connect("localhost","root","","gojo_shopp");
$gmail = $_POST["gmail"];
$password = $_POST["password"];


$query=mysqli_query($koneksi,"select * from tbuser where gmail='$gmail'" );
$jumlah_data=mysqli_num_rows($query);

if($jumlah_data > 0){
    $data=mysqli_fetch_array($query);
    if(password_verify($password, $data['password'])){
        session_start();
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['gmail'] = $data['gmail'];
        $_SESSION['role'] = $data['role'];

if($data['role']== "admin"){
    header(location:admin/indexadmin.php);
}

        echo "berhasil login";
        die();
        header("location:userindex.php");


    }else{

        echo "password salah";
        die();
        header("location:login.php");
    }
}else{

    echo "email/tidak ada";
        die();
    header("location:login.php");
}
?>