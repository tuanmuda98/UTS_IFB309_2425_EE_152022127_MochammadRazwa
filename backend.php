<?php
// Aktifkan pelaporan error untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set header JSON untuk output
header('Content-Type: application/json');

// Data yang akan dikembalikan sebagai JSON
$data = [
  'suhumax' => 36,
  'suhumin' => 21,
  'suhurata' => 28.35,
  'nilai_suhu_max_humid_max' => [
    [
      'idx' => 101,
      'suhun' => 36,
      'humid' => 36,
      'kecerahan' => 25,
      'timestamp' => '2010-09-18 07:23:48'
    ],
    [
      'idx' => 226,
      'suhun' => 36,
      'humid' => 36,
      'kecerahan' => 27,
      'timestamp' => '2011-05-02 12:29:34'
    ]
  ],
  'month_year_max' => [
    [
      'month_year' => '9-2010'
    ],
    [
      'month_year' => '5-2011'
    ]
  ],
];

// Encode data menjadi JSON dan tampilkan
try {
    echo json_encode($data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
    // Menampilkan pesan error jika terjadi kesalahan dalam encoding JSON
    echo json_encode([
        'error' => 'Terjadi kesalahan dalam proses encoding JSON',
        'message' => $e->getMessage()
    ]);
}
