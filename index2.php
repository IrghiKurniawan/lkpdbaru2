<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayaran</title>
</head>
<body>
    <?php
    // Fungsi untuk menghitung total pembayaran dengan mempertimbangkan diskon
    function itungTotalbayar($total_pembelian, &$hari_ini){ // Tanda & pada parameter di PHP menunjukkan bahwa parameter tersebut diterima dengan referensi, bukan dengan nilai. 
        // Mengambil hari saat ini dalam format nama hari (contoh: 'Monday', 'Tuesday', dll)
        $hari_ini = date('l');
        
        // Diskon khusus pada hari Selasa (5%)
        $diskon_hari_selasa = 0.05;
        
        // Diskon khusus jika total pembelian lebih dari 100.000 (7%)
        $diskon_pembelian_lebih_dari_100k = 0.07;

        // Jika hari ini adalah Selasa, terapkan diskon 5%
        if ($hari_ini == 'Tuesday'){
            $total_pembelian -= $total_pembelian * $diskon_hari_selasa;
        }

        // Jika total pembelian lebih dari 100.000, terapkan diskon 7%
        if ($total_pembelian > 100000){
            $total_pembelian -= $total_pembelian * $diskon_pembelian_lebih_dari_100k;
        }
        
        // Mengembalikan total pembelian setelah diskon
        return $total_pembelian;//  return digunakan dalam fungsi untuk mengembalikan suatu nilai atau menghentikan eksekusi fungsi dan mengirimkan nilai kembali ke tempat fungsi dipanggil.
    }

    // Contoh nilai total pembelian sebesar 150.000
    $total_pembelian = 150000;
    
    // Variabel untuk menyimpan hari ini
    $hari_ini = '';

    // Memanggil fungsi untuk menghitung total pembayaran
    $total_bayar = itungTotalbayar($total_pembelian, $hari_ini);

    // Menampilkan hari ini
    echo "Hari ini adalah: " . $hari_ini . "<br>";
    
    // Menampilkan total pembelian sebelum diskon
    echo "Total pembelanjaan: Rp " . number_format($total_pembelian) . "<br>";
    // Fungsi number_format() memformat angka dengan ribuan yang dikelompokkan.
    // Menampilkan total yang harus dibayar setelah diskon
    echo "Total yang harus dibayar: Rp " . number_format($total_bayar);
    ?>
</body>
</html>
