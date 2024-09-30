<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Angka dalam Teks</title>
    <link rel="stylesheet" href="parameter,argumen,">
</head>
<body>

<form method="post" action="">
    <input type="text" id="input-teks" name="teks" required>
    <button type="submit">Cek Angka</button>
</form>     

<?php
function cekangka($teks) {
    $angka = preg_replace('/[^0-9]/', '', $teks);
    
    if ($angka) {
        $array = str_split($angka);
        $hasil = "teks mengandung angka : " . implode(',', $array);
    } else {
        $hasil = "teks tidak ada angka";
    }
    return $hasil;
}   

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $teks = $_POST["teks"];
    
    echo "<p>" . cekangka($teks) . "</p>";
}   
?>  

</body>
</html>