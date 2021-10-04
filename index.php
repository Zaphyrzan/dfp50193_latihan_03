<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>
<body>
    <h1>Asas PHP</h1>

    <?php
    //komen satu baris
    # Komen lagi satu baris
    /*
        Komen banyak baris
    */

    $nama = 'Wan Zafirzan';
    echo "<h2>Hello $nama</h2>"; #output

    $hadir = false;
    $umur = 20;
    $nokp = '010403081255'

    ?>

    <p>
        <?php
        echo 20 . 21;
        ?>
    </p>

    <h2>
        <?php
        $bandar = 'Arau';
        $baru = 'Bandar ';
        for($x = 0; $x < strlen($bandar); $x++){
            $baru .= $bandar[$x] . '-';
        }
        echo $baru;
        ?>
    </h2>
</body>
</html>