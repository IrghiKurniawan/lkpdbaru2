<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selamat ulang tahun</title>
</head>
<body>
    <?php
    // Fungsi buat ngecek apa ada karakter spesial dalam kalimat
    function cekKarakter($kalimat){
        // karakter spesial yang akan dicek dalam kalimat
        $karSpesial = ['!', '*', '$'];
        
        // Array buat nyimpan simbol yang ditemukan
        $simDItemukan = [];
        
        // Loop melalui daftar karakter spesial
        foreach($karSpesial as $simbol){
            // Jika simbol ditemukan dalam kalimat, tambahkan ke array
            if (strpos($kalimat, $simbol) !== false){
                $simDItemukan[] = $simbol;
            }
            //      Foreach digunakan untuk mengulang setiap elemen dalam sebuah array, sedangkan for digunakan untuk mengulang sebuah blok kode untuk jumlah iterasi tertentu.
        }
        
        // Jika ada simbol yang ditemukan, tampilkan hasilnya
        if(!empty($simDItemukan)){
            echo "Teks : $kalimat <br>";
            echo "Karakter yang terdapat pada kalimat: " . implode (', ', $simDItemukan);
            //implode digunakan untuk menggabungkan item menjadi sebuah string
        }else{
            // Jika tidak ada simbol, tampilkan pesan bahwa tidak ada simbol dalam kalimat
            echo "Teks : $kalimat <br>";
            echo "Tidak terdapat simbol pada kalimat";
        }
    }
    
    // Kalimat yang akan diperiksa
    $kalimat = "Selamat ulang tahun yang ke 17 ! ";
    
    // Panggil fungsi untuk mengecek karakter spesial dalam kalimat
    cekKarakter($kalimat);
    ?>
</body>
</html>
