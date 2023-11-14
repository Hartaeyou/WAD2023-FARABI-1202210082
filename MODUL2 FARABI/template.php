




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kalkulator BMI</h4>
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="175">
                            <label for="tinggi_badan">Tinggi Badan (CM)</label>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="53">
                            <label for="berat_badan">Berat Badan (KG)</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3 mt-3 w-100" name="HitungBMI">Hitung BMI</button>
                    </form>
                    <?php

                    $message_error ="";
                    $result = 0;
                    $status = "";
                    if (isset($_POST['HitungBMI'])){
                        $tinggi = $_POST['tinggi_badan'];
                        $berat_badan = $_POST['berat_badan'];
                        
                        
                        if ($tinggi == NULL || $berat_badan == NULL ){
                            $message_error = "Nilai Tidak Boleh Kosong";
                        }
                        if ($message_error=="") {
                            $tinggi1 = $tinggi/100;
                            $result = $berat_badan / ($tinggi1**2);
                            if ($result <= 18.4){
                                $status ="Underweight";
                            }
                            elseif ($result >= 18.5 && $result <=24.9){
                                $status ="Normal";
                            }
                            elseif ($result >= 25 && $result <=39.9){
                                $status ="Overweight";
                            }
                            else{
                                $status = "Obesitas";
                            }
                        }
                    }
                    ?>
                    
                    <?php if($message_error == "" and $result != 0 and $status !=""): ?>                        
                        <p>Hasil Perhitungan BMI adalah <?= $result; ?></p><br>
                        <p>Status BMI anda : <?= $status; ?></p>
                    <?php endif; ?>
 
                    <?php if($message_error != "" ): ?>
                        <p><?= $message_error; ?></p>
                    <?php endif; ?>
                


                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>