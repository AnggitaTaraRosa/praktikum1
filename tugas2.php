<?php
// Fungsi untuk menghitung luas lingkaran
function hitungLuasLingkaran($jariJari) {
    $luas = M_PI * $jariJari * $jariJari;
    return $luas;
}

// Menentukan jari-jari lingkaran
$jariJari = 7; // Gantilah angka ini dengan jari-jari yang sesuai

// Menghitung luas lingkaran
$luasLingkaran = hitungLuasLingkaran($jariJari);

// Menampilkan hasil
echo "Luas lingkaran dengan jari-jari $jariJari adalah: $luasLingkaran";
?>
