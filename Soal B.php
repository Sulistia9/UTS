<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama Produk</th>";
echo "<th>Jumlah barang</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$membeli = array(
    array(1, "Pepsodent", 2, 10000),
    array(2, "Rinso", 3, 20000),
    array(3, "Downy", 2, 12000),
    array(4, "Dove", 2, 22000),
);

$totalJumlah = 0; // Variabel untuk menyimpan total jumlah produk
foreach ($membeli as $row) {
    echo "<tr>";
    $jumlah = $row[2] * $row[3]; // Hitung jumlah produk
    $totalJumlah += $jumlah; // Tambahkan jumlah produk ke total
    $row[] = $jumlah; // Tambahkan jumlah produk ke array produk
    foreach ($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}
echo "Tanggal Transaksi: 08 November 2023<br>";
echo "</table>";

echo "Total Jumlah: " . $totalJumlah; // Tampilkan total jumlah produk

$diskon = 0; // Variabel untuk menyimpan jumlah diskon

// Cek total pembelian untuk menentukan diskon
if ($totalJumlah >= 200000) {
    $diskon = 0.2; // Diskon 20%
} elseif ($totalJumlah >= 100000) {
    $diskon = 0.1; // Diskon 10%
}

if ($diskon > 0) {
    $totalDiskon = $totalJumlah * $diskon; // Hitung jumlah diskon
    $totalBayar = $totalJumlah - $totalDiskon; // Hitung total yang harus dibayar setelah diskon
    echo "<br>Discount: " . ($diskon * 100) . "%"; // Tampilkan persentase diskon
    echo "<br>Total yang harus dibayar setelah diskon: " . $totalBayar; // Tampilkan total yang harus dibayar setelah diskon
}
