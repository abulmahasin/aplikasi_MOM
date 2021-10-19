<?php
$koneksi = new mysqli('localhost', 'root', '','meeting_bpg');

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>