<?php
// Data barang dalam bentuk array multidimensi
$barang = array(
    array("Nama Produk" => "Pepsodent", "Stok" => 30, "Harga" => 10000),
    array("Nama Produk" => "Sunlight", "Stok" => 15, "Harga" => 11000),
    array("Nama Produk" => "Baygon", "Stok" => 10, "Harga" => 16000),
    array("Nama Produk" => "Dove", "Stok" => 20, "Harga" => 22000),
    array("Nama Produk" => "Rinso", "Stok" => 20, "Harga" => 20000),
    array("Nama Produk" => "Downy", "Stok" => 15, "Harga" => 12000),
    array("Nama Produk" => "Le Mineral", "Stok" => 25, "Harga" => 5000)
);

// Tampilkan data dalam tabel terurut
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Stok</th><th>Harga</th></tr>";

// Urutkan array berdasarkan nama produk
usort($barang, function ($a, $b) {
    return strcmp($a['Nama Produk'], $b['Nama Produk']);
});

foreach ($barang as $item) {
    echo "<tr>";
    echo "<td>" . $item['Nama Produk'] . "</td>";
    echo "<td>" . $item['Stok'] . "</td>";
    echo "<td>" . $item['Harga'] . "</td>";
    echo "</tr>";
}
echo "</table>";
