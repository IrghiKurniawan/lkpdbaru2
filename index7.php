<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalimat</title>
</head>
<body>
    <?php
    // Deklarasi fungsi motongString yang memotong string menjadi 50 karakter jika lebih panjang
    function cekKalimat($kal){
        // Cek jika panjang string lebih dari 50 karakter
        if(strlen($kal) > 50){
            // Potong string menjadi 50 karakter dan tambahkan "..." di akhir
            // strlen() digunakan untuk menghitung panjang atau jumlah karakter dari sebuah string.
            return substr($kal, 0, 50) . "...";
        }else{
            // Jika panjang string kurang dari atau sama dengan 50, maka return string asli
            // substr() digunakan untuk mengambil bagian dari string berdasarkan indeks awal dan panjang tertentu.
            return $kal;
            //  return digunakan dalam fungsi untuk mengembalikan suatu nilai atau menghentikan eksekusi fungsi dan mengirimkan nilai kembali ke tempat fungsi dipanggil.
        }
    }
    
    // Mencetak kalimat awal dan memanggil fungsi motongString
    echo "<b>Kalimat awal</b> : ";
    echo cekKalimat("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, non quos cum, a nemo adipisci eum accusantium laborum repudiandae laudantium minima, in dignissimos soluta culpa et ratione? Magnam, et voluptas!");
    ?>
</body>
</html>