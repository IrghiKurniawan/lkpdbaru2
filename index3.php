<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Array yang berisi bilangan yang akan dibagi
    $nomer = [90];
    
    // Array yang berisi daftar pembagi
    $pembagian = [1, 2, 3, 5, 6, 9, 10, 15, 18];
    
    // Loop melalui setiap bilangan dalam array $nomer
    foreach ($nomer as $bil){
        //      Foreach digunakan untuk mengulang setiap elemen dalam sebuah array, sedangkan for digunakan untuk mengulang sebuah blok kode untuk jumlah iterasi tertentu.
        // Loop melalui setiap bilangan pembagi dalam array $pembagian
        foreach ($pembagian as $bagi) {
            // Hitung hasil pembagian
            $hasil = $bil / $bagi;
            
            // Tampilkan hasil pembagian
            echo "$bil : $bagi = $hasil" ."<br>";
        }
    }
    ?>
</body>
</html>
