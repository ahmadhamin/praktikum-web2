<?php
function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return str_pad($nilai, 3, " ", STR_PAD_LEFT) . " - Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return str_pad($nilai, 3, " ", STR_PAD_LEFT) . " - Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return str_pad($nilai, 3, " ", STR_PAD_LEFT) . " - Cukup";
    } else {
        return str_pad($nilai, 3, " ", STR_PAD_LEFT) . " - Kurang";
    }
}

// Contoh penggunaan
echo tentukan_nilai(98). "<br>";
echo tentukan_nilai(76). "<br>";
echo tentukan_nilai(67). "<br>";
echo tentukan_nilai(43). "<br>";
?>
