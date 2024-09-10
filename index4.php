<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>*</title>
</head>
<body>
    <?php
    // Looping luar untuk membuat dua blok bintang
    for ($dani = 0; $dani < 2; $dani++) {
        // Looping tengah untuk membuat empat baris bintang dalam satu blok
        for ($irghi = 0; $irghi < 4; $irghi++){
            // Looping dalam untuk membuat delapan bintang dalam satu baris
            for ($soni = 0; $soni < 8; $soni++){
                // Mencetak bintang
                echo "*";
            }
            // Mencetak baris baru setelah setiap baris bintang
            echo "<br>";
        }
        // Mencetak baris baru setelah setiap blok bintang
        echo "<br>";//  for digunakan untuk mengulang sebuah blok kode untuk jumlah iterasi tertentu.
    }
    ?>
</body>
</html>