<?php
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$submit = $_POST['submit'];

//hitung total belanja//
if ($produk == 'Tv'){
    $harga = 4200000;
}
elseif ($produk == 'Kulkas'){
    $harga = 3100000;
}
else {
    $harga = 3800000;
}

//hasil total belanja//
$hasil = $jumlah * $harga; 

echo 'Nama Customer: ' . $customer;
echo '</br>Produk Pilihan: ' . $produk;
echo '</br>Jumlah Beli: ' . $jumlah;
echo '</br>Total Belanja: Rp ' . $hasil;
?>
