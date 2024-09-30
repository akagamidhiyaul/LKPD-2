<?php
    function hitung ($data,$cari){
        $jumlah=0;
        foreach($cari as $data) {
            if ($data == $cari){
                $jumlah++;
            }
        }
        return $jumlah;
    }

    $data =[80, 90, 75, 100, 85, 100, 66];
    $cari =100;

    $jumlahangka =hitung ($cari, $data);
    echo "jumlah angka $cari = $jumlahangka"; 
?>