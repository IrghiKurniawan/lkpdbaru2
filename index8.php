<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan</title>
</head>
<body>
    <?php
    // Deklarasi fungsi buat_array yang mengembalikan array unik dari nama jurusan
    function buat_array($nama_jurusan) {
        // Menghapus nilai yang duplikat dari array nama_jurusan dan menyimpannya ke array_nama
        $array_nama = array_unique($nama_jurusan);
        return $array_nama;
    }
    
    // Contoh penggunaan fungsi buat_array
    // Deklarasi array nama_jurusan yang berisi nama-nama jurusan
    $nama_jurusan = array("PPLG", "HTL", "KLN", "PMN", "PPLG", "HTL");
    
    // Memanggil fungsi buat_array dan menyimpan hasilnya ke array_nama
    $array_nama = buat_array($nama_jurusan);
    
    // Mencetak hasil array_nama menggunakan print_r
    print_r($array_nama);// mencetak informasi yg dapat di baca  tentang suatu variabel
    ?>
</body>
</html>