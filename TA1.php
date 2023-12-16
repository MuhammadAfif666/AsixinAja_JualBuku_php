<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Diskon</title>
</head>
<body>
    <h2>_______________________</h2>
    <form action="" method="post">
        <label for="no_transaksi">No. Transaksi:</label><br>
        <input type="text" id="no_transaksi" name="no_transaksi"><br>
        <label for="nama_pembeli">Nama Pembeli:</label><br>
        <input type="text" id="nama_pembeli" name="nama_pembeli"><br>
        <label for="judul_buku">Judul Buku:</label><br>
        <input type="text" id="judul_buku" name="judul_buku"><br>
        <label for="jumlah_buku">Jumlah Buku:</label><br>
        <input type="text" id="jumlah_buku" name="jumlah_buku"><br>
        <label for="harga_buku">Harga Buku:</label><br>
        <input type="text" id="harga_buku" name="harga_buku"><br><br>
        <input type="submit" value="Hitung">
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_transaksi = $_POST['no_transaksi'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $judul_buku = $_POST['judul_buku'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $harga_buku = $_POST['harga_buku'];

    $total_harga = $jumlah_buku * $harga_buku;
    if ($total_harga > 149000) {
        $diskon_belanja = $total_harga * 0.10;
    } else {
        $diskon_belanja = 0; }
    if ($no_transaksi <= 50) {
        $diskon_transaksi = $total_harga * 0.05;
    } else {
        $diskon_transaksi = 0;}
    $total_bayar = $total_harga - $diskon_belanja - $diskon_transaksi;
    
    echo "No.Transaksi : " . $no_transaksi . "<br>";
    echo "Nama pembeli: " . $nama_pembeli . "<br>";
    echo "Judul buku: " . $judul_buku . "<br>";
    echo "Harga : Rp." . $total_harga . "<br>";
    echo "Diskon belanja(10%): Rp." . $diskon_belanja . "<br>";
    echo "Diskon Transaksi (5%): Rp." . $diskon_transaksi . "<br>";
    echo "Total Bayar: Rp." . $total_bayar . "<br>";
}
 ?>
</body>
</html>

