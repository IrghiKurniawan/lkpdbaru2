<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Deklarasi variabel uang dengan nilai 1750
    $uang = 1750;
    
    // Memanggil fungsi carikoin dan menyimpan hasilnya ke variabel coin
    $coin = carikoin($uang);
        // Deklarasi fungsi carikoin yang mengembalikan array koin yang sesuai dengan uang
    function carikoin($uang)
    {
        // Deklarasi array koin yang tersedia
        $coin = array(500, 200);
        
        // Deklarasi array result yang akan menyimpan koin yang sesuai dengan uang
        $result = array();
        
        // Looping melalui array koin
        foreach ($coin as $koin) {
            // Looping while uang masih cukup untuk dibagi dengan koin
            while ($uang >= $koin) { // Di dalam loop foreach, ada loop while yang memeriksa apakah jumlah uang yang tersisa ($uang) masih cukup untuk dibagi dengan nilai koin saat ini ($koin).
                // Menambahkan koin ke array result
                $result[] = $koin;
                // Mengurangi uang dengan nilai koin
                $uang -= $koin; 
                // Perulangan while mengeksekusi blok kode selama kondisi yang ditetapkan bernilai benar.
            }
            // adalah operator pengurangan dan penugasan (decrement and assignment operator) dalam PHP. 
        }
        
        // Menghapus nilai yang duplikat dari array result
        $result = array_unique($result);
        
        // Mengembalikan array result
        return $result;
    }
    
    // Mencetak jenis koin yang sesuai dengan uang
    echo "Jenis Koin untuk Uang Rp. $uang: <br>";
    foreach ($coin as $koin) {
        echo "Rp.$koin <br>";
    }
    ?>
</body>

</html>