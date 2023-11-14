<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

$conn = mysqli_connect("localhost:3308", "root","","MODUL3");

// 
// if ($conn->connect_error()) {
//     echo "Tidak bisa Masuk Ke Daatabase" . $mysqli -> connect_error;
// }
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya

// 
?>