<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buah Segar AbAdi</title>
</head>
<body>
    <h1>TOKO BUAH SEGAR ABADI</h1>

    <form action ="hitung.php" method="post">
        <input type="text" name="nama" placeholder="Nama Pembeli">
        <br><select name="Nama Buah">
        <select name='opsi' class='select'>
            <option name='opsi'>--Nama Buah--</option>
            <option name='opsi' value='duren'>Duren</option>
            <option name='opsi' value='mangga'>Mangga</option>
            <option name='opsi' value='rambutan'>Rambutan</option>
            <option name='opsi' value='kelengkeng'>kelengkeng</option>
            <option name='opsi' value='apel'>Apel</option>
        </select>

        </select>
        <br><input type="text" name="jumlah" placeholder="Jumlah Beli">
        <br><input type="submit" value="hitung">
    </form>
    
</body>
</html>

<?php
require('function.php');
if(isset($_POST['proses'])) {

    if ($opsi=='duren') {
        $hasil = 20000;
    } 
    else if ($opsi=='mangga') {
        $hasil = 15000;
    } 
    else if ($opsi=='rambutan') {
        $hasil = 10000;
    } 
    else if ($opsi=='kelengkeng') {
        $hasil = 25000;
    } 
    else if ($opsi=='apel') {
        $hasil = 30000;
    } 
    else {
        echo"anda belum memilih"   
    }
}

?>