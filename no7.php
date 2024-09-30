<?php
$nama1 = "Fema Flamelina Putri";
$nama2 = "Artasya Legina";

$jumlah1 = strlen($nama1); 
$jumlah2 = strlen($nama2); 
$total = $jumlah1-$jumlah2;

if($jumlah1 > $jumlah2) {
    echo "nama pertama :".$nama1;
    echo "<br>";
    echo "nama kedua :".$nama2;
    echo "<br>";

    echo $nama1 . " lebih panjang dari " . $nama2 . " dengan selisih " . $total;
} else if ($jumlah1 < $jumlah2) {
 
    echo "nama pertama :".$nama2;
    echo "<br>";
    echo "nama kedua :".$nama1;
    echo "<br>";

    echo $nama2 . " lebih panjang dari " . $nama1 . " dengan selisih " . $total;
}else {
    echo "namanya sama panjang";
}

?>