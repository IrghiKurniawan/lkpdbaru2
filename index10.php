<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Deklarasi fungsi cek_jawaban yang menghitung jumlah jawaban benar dan salah
    function cekJawaban($nama_pelajar, $jawaban_pelajar, $jawaban_benar)
    {
        // Menghitung jumlah jawaban benar dengan menggunakan array_intersect
        $benar = count(array_intersect($jawaban_pelajar, $jawaban_benar));
        //Fungsi array_intersect() membandingkan nilai dua (atau lebih) array, dan mengembalikan kecocokannya.
        
        // Menghitung jumlah jawaban salah dengan menggunakan array_diff
        $salah = count(array_diff($jawaban_pelajar, $jawaban_benar));
        //Fungsi array_diff() membandingkan nilai dua (atau lebih) array, dan mengembalikan perbedaannya.

        // Mencetak hasil
        echo "Nama : $nama_pelajar <br>";
        echo "Jumlah Jawaban Benar : $benar <br>";
        echo "Jumlah Jawaban Salah : $salah";
    }

    // Deklarasi array jawaban_benar yang berisi jawaban benar
    $jawaban_benar = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];
    
    // Deklarasi variabel nama_pelajar dan jawaban_pelajar
    $nama_pelajar = 'Novan Ardian';
    $jawaban_pelajar = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'V'];

    // Memanggil fungsi cek_jawaban
    cekJawaban($nama_pelajar, $jawaban_pelajar, $jawaban_benar);
    ?>
</body>

</html>