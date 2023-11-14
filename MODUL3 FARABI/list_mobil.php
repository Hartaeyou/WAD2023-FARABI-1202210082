
<?php
include("connect.php");

    // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
$query = "SELECT * FROM showroom_mobil";
$list = mysqli_query($conn,$query);
$arrayDB=[];           
while($row = mysqli_fetch_assoc($list)){
    $arrayDB[]=$row;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nama Mobil</th>
                <th scope="col">Merek Mobil</th>
                <th scope="col">Warna Mobil</th>
                <th scope="col">Tipe Mobil</th>
                <th scope="col">Harga Mobill</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <?php foreach($arrayDB as $list): ?>
                <tbody>
                    <tr>
                    <td><?= $list["id"]; ?></td>
                    <td><?= $list["nama_mobil"]; ?></td>
                    <td><?= $list["brand_mobil"]; ?></td>
                    <td><?= $list["warna_mobil"]; ?></td>
                    <td><?= $list["tipe_mobil"]; ?></td>
                    <td><?= $list["harga_mobil"]; ?></td>
                    <td><a class="btn btn-primary" href="form_detail_mobil.php?id=<?= $list["id"]; ?>" >Action</a></td>
                    </tr>
            <?php endforeach; ?> 
                </tr>
            </tbody>
            </table>
        </div>
    </center>
</body>
</html>
