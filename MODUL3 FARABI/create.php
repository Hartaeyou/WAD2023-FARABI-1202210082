<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
require "connect.php";
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa


// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if (isset($_POST["create"])){

    // 
    
    // (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)
    // a. Ambil data nama mobil
    $carName = $_POST["nama_mobil"];
    
    // b. Ambil data brand mobil
    $carBrand=$_POST["brand_mobil"];
    
    // c. Ambil data warna mobil
    $carColor=$_POST["warna_mobil"];
    
    // d. Ambil data tipe mobil
    $carType=$_POST["tipe_mobil"];
    
    // e. Ambil data harga mobil
    $priceCar=$_POST["harga_mobil"];
    
    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $query="INSERT INTO showroom_mobil (nama_mobil,brand_mobil,warna_mobil,tipe_mobil,harga_mobil)
    VALUES('$carName','$carBrand','$carColor','$carType','$priceCar')";

    
    
    mysqli_query($conn,$query);
    // (5) Buatkan kondisi jika eksekusi query berhasil
    if (mysqli_affected_rows($conn)){
        
        echo "<script>
        alert('Data Berhasil Ditambahkan');
        location.href='list_mobil.php';
        </script>"
        ;
    }
    else{
        echo "<script>
        alert('Data tidak dapat ditambahkan silahkan Input ulang');
        location.href='home.php';
        </script>"
        ;
    }
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
    // (7) Tutup koneksi ke database setelah selesai menggunakan database
}
    ?>