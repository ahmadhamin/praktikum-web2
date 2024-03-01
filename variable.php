<?php
    // echo "Hello Word";

    // membuat variable
    $nama = "Feri Ardiansyah";
    $jurusan = "Teknik Informatika";
    $angkatan = 2023;

    // output
    echo "nama saya adalah : " . $nama;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum01</title>
</head>
<body>
    <h2><?php echo $nama; ?></h2>
    <p>
        saya kuliah di jurusan <?php echo $jurusan; ?>
    </p>
    <p>
        saya  angkatan tahun <?php echo $angkatan; ?>
    </p>

</body>
</html>