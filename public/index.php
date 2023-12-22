<?php

header('Access-Control-Allow-Origin: https://wedding-fitria-jaelani.vercel.app');
header('Access-Control-Allow-Origin: http://localhost:5500');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');


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
