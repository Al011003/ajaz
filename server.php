<?php
// Header untuk mendukung AJAX
header('Content-Type: application/json');

// Ambil data dari permintaan
$name = isset($_POST['name']) ? trim($_POST['name']) : '';

// Cek apakah nama terisi atau tidak
if ($name === '') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Silahkan isi terlebih dahulu.'
    ]);
} else {
    echo json_encode([
        'status' => 'success',
        'message' => "Halo, $name! Selamat datang di AJAX."
    ]);
}
