<?php 

$nilai = 56;

if ( $nilai >= 90 ) {
    $predikat = "sangat baik";
} else if ( $nilai >= 80) {
    $predikat = "baik";
} else if ( $nilai >= 70) {
    $predikat = "cukup";
} else if ( $nilai >= 50) {
    $predikat = "kurang";
} else if ( $nilai >= 0) {
    $predikat = "sangat kurang";
}

echo "Nilai " . $predikat;

?>