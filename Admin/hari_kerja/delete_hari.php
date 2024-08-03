<?php
// Memastikan file koneksi sudah disertakan
include '../../connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Membuat perintah SQL untuk menghapus data
    $sql = "DELETE FROM master_hari_kerja WHERE id = $id";

    if ($connection->query($sql) === TRUE) {
        header("Location: master_hari_kerja.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}

// Menutup koneksi
$connection->close();
