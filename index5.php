<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    <?php
    // Deklarasi array bil1 dan bil2 yang berisi nilai-nilai
    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

    // Menggabungkan array bil1 dan bil2 menjadi satu array gabungan
    $gabungan = array_merge($bil1, $bil2);

    // Menghapus nilai yang duplikat dari array gabungan dan menyimpannya ke array hapus
    $hapus = array_unique($gabungan);

    // Mengurutkan array hapus dalam urutan descending (terbesar ke terkecil)
    rsort($hapus);

    // Mencetak hasil dengan mengulang nilai-nilai dalam array hapus
    echo "Hasil: ";
    echo implode(", ", $hapus);// Fungsi implode() mengembalikan string dari elemen-elemen array.
    echo "</p>";
    
    ?>
</body>
</html>