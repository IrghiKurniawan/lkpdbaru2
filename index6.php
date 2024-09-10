<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
</head>
<body>
<?php
// Array yang berisi daftar barang belanjaan, dengan nama barang, harga barang, dan jumlah yang dibeli
$barang = [
    [
        'nama_barang' => 'pasta gigi',  // Nama barang
        'harga_barang' => 18000,        // Harga per unit
        'jumlah_beli' => 1,             // Jumlah yang dibeli
    ],
    [
        'nama_barang' => 'sabun mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'aloe vera sheet mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ]
];

// Variabel untuk menghitung total harga belanja
$total_harga = 0;

// Menampilkan daftar belanja
echo "Daftar Belanja : <br>";
echo "<ol>";  // Membuat daftar urutan

// Loop untuk menampilkan setiap item yang dibeli dan menghitung subtotal harga
foreach ($barang as $item) {
    // Menghitung subtotal per barang (harga barang x jumlah beli)
    $subtotal = $item['harga_barang'] * $item['jumlah_beli'];

    // Menampilkan nama barang, jumlah yang dibeli, dan subtotal harga
    echo "<li>" . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : Rp " . number_format($subtotal, 0, ',', '.') . "</li>";

    // Menambahkan subtotal ke total harga keseluruhan
    $total_harga += $subtotal;
}

echo "</ol>";  // Menutup daftar urutan

// Menampilkan total harga yang harus dibayar
echo "<br><br>";
echo "Total harga yang harus dibayar: Rp " . number_format($total_harga, 0, ',', '.') . "\n";
?>

</body>
</html>
