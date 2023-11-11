<?php
session_start();

include 'koneksi.php';

if (isset($_POST['tanggal'], $_POST['jam'], $_POST['lokasi'], $_POST['suhu'])) {
    // Assuming you want to insert data into the 'data_perjalanan' table
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $lokasi = $_POST['lokasi'];
    $suhu = $_POST['suhu'];

    $query = "INSERT INTO data_perjalanan (tanggal, jam, lokasi, suhu) VALUES ('$tanggal', '$jam', '$lokasi', '$suhu')";

    
    // Execute the query
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data berhasil disimpan.')</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data.')</script>";
    }
} else {
    echo "<script>alert('Semua field harus diisi.')</script>";
}

// Redirect or do something else after processing the form
// header("Location: some_page.php");
?>
