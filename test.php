<?php
try {
    $conn = new PDO(
        'pgsql:host=localhost;dbname=klinik',
        'klinik_user',
        'password123'
    );
    echo "Koneksi BERHASIL!";
} catch (PDOException $e) {
    echo "GAGAL: " . $e->getMessage();
}