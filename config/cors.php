<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Menentukan jalur API yang diizinkan
    'allowed_methods' => ['*'], // Mengizinkan semua metode HTTP (GET, POST, PUT, DELETE, dll.)
    'allowed_origins' => ['https://web-bps-frontend-nine.vercel.app'], // Hanya izinkan domain ini untuk mengakses
    'allowed_origins_patterns' => [], // Pola domain yang diperbolehkan (kosongkan jika tidak diperlukan)
    'allowed_headers' => ['*'], // Mengizinkan semua header yang diperlukan
    'exposed_headers' => [], // Tidak ada header yang dikeluarkan secara eksplisit
    'max_age' => 0, // Durasi cache untuk preflight request
    'supports_credentials' => true, // Mengizinkan pengiriman kredensial (cookies, header Authorization, dll.)
];
