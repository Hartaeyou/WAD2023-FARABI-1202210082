<?php

require 'connect.php';

// (1) Mulai session
session_start();
//

// (2) Ambil nilai input dari form registrasi

// a. Ambil nilai input email
$email = $_POST['email'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=($_POST['password']);
$password1= password_hash($password,PASSWORD_DEFAULT);


//

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email
$query=("SELECT * FROM users WHERE email='$email'");
$ex=mysqli_query($conn,$query);
//

// (4) Buatlah perkondisian ketika tidak ada data email yang sama ( gunakan mysqli_num_rows == 0 )
if (mysqli_num_rows($ex) == 0) {
    $insert = "INSERT INTO users VALUES ('','$name','$username','$email','$password1')";
    $result = mysqli_query($conn,$insert);
    
    if($result){
        $_SESSION["message"]="Pendaftaran sukses, silahkan login";
        $_SESSION["color"]="success";
        header('Location: ../views/login.php');
    }
    else{
        $_SESSION["message"] = "Pendaftaran Gagal";
    }
// a. Buatlah query untuk melakukan insert data ke dalam database

}
    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    //    Buat di dalamnya variabel session dengan key message untuk menampilkan pesan penadftaran berhasil
else{
    $_SESSION["message"] = " Username Udah ada";
    header('Location: ../views/register.php');
}
// 

// (5) Buat juga kondisi else
//     Buat di dalamnya variabel session dengan key message untuk menampilkan pesan error karena data email sudah terdaftar

//

?>