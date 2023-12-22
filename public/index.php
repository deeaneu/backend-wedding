<?php

header('Access-Control-Allow-Origin: https://wedding-fitria-jaelani.vercel.app');
header('Access-Control-Allow-Origin: http://localhost:5500');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Periksa metode permintaan, jika OPTIONS, kirim respons kosong
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('HTTP/1.1 200 OK');
    exit();
}

// Proses permintaan sesuai kebutuhan aplikasi Anda
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Handle permintaan GET
    echo json_encode(['message' => 'Permintaan GET berhasil']);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle permintaan POST
    $data = json_decode(file_get_contents('php://input'), true);
    echo json_encode(['message' => 'Permintaan POST berhasil', 'data' => $data]);
} else {
    // Metode permintaan tidak didukung
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['error' => 'Metode permintaan tidak didukung']);
}

/**
 * Import semua class yang digunakan dalam framework ini.
 * Tenang, ini telah dilakukan secara otomatis oleh composer.
 *
 * Sekarang, tinggal menjalankan aplikasi ini saja.
 */

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Okey, sekarang memanggil fungsi web secara static pada kernel.
 * Bentar, fungsi web ini perlu app kernel sebagai penghubung aplikasi.
 * Setelah itu, hanya perlu menjalankannya saja.
 *
 * Ini sangat simple.
 */

\Core\Kernel\Kernel::web(
    new \App\Kernel()
)->run();
