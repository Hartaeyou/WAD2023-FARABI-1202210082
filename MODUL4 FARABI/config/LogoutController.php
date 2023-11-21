<?php 

// (1) Hapus cookie dengan key id 
setcookie('username','', time() - 3600,'/WAD2023-FARABI-1202210082/MODUL4%20FARABI/views');

// 

// (2) Mulai session
session_start();

//

// (3) Hapus semua session yang berlangsung
session_destroy();
session_unset();

//

// (4) Lakukan redirect ke halaman login awal
header('Location: ../views/login.php');

//

exit;

?>