<?php 

// Buat fungsi
function hitungUmur($thn_lahir) {
    // Kode fungsi
    $thn_sekarang = 2023;
    // Hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // kembaliin umur
    return $umur;
}

// panggil fungsi
echo "Umur saya adalah " . hitungUmur(2004);

?>