<?php

// require koneksi ke db dari file koneksi
require_once __DIR__ . '/../core/connection.php';

// Referensi:
// - Untuk mengembalikan response menggunakan php array. Dengan di encode
//   ke bentuk json
//   ref: http://php.net/manual/en/function.array.php
//   ref: http://stackoverflow.com/questions/4064444/returning-json-from-a-php-script
// File php untuk menyimpan pertanyaan dari jquery ajax ke database.
// Respon jika sukses harus :
// { status: "success", data: { ... data pertanyaan ... }}
// Respon jika gagal harus :
// { status: "failed", message: "... pesan kenapa gagal ..." }

$nama       = $_POST['nama'];
$pertanyaan = $_POST['pertanyaan'];

header('Content-Type', 'application/json');

// nama tabel pada db = `pertanyaan`;
$query = 'INSERT INTO `pertanyaan` (
    `nama`, `pertanyaan`
) VALUES (
    ?,?
)';

$stmt = $connection->prepare($query);
$stmt->bind_param('ss', $nama, $pertanyaan);

// Jika gagal meng-insert ke database, response error.
if (!$stmt->execute()) {
    // response menggunakan php array, dengan key yg kita definisikan sendiri
    $resp = array(
        'status'  => 'failed',
        'message' => 'Gagal menyimpan data ke database'
    );
    http_response_code(400);
    print(json_encode($resp));
} else {
    $resp = array(
        'status' => 'success',
        'data'   => array(
            'nama'       => $nama,
            'pertanyaan' => $pertanyaan
        )
    );
    print(json_encode($resp));
}
