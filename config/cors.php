<?php

return [
    // Path yang diizinkan untuk CORS, tambahkan semua endpoint API yang dipakai oleh frontend
    'paths' => [
        'api/*',
        'sanctum/csrf-cookie',
        'api/login', // pastikan /api/login juga di sini
        // tambahkan path lain jika perlu (misal: 'login', 'logout', dsb)
    ],

    // Semua metode HTTP diizinkan
    'allowed_methods' => ['*'],

    // Hanya izinkan frontend kamu
    'allowed_origins' => [
        'https://web-bps-frontend-nine.vercel.app', // domain frontend deploy Vercel
        // tambahkan domain lain jika perlu (misal: localhost untuk development)
    ],

    // Pola domain yang diizinkan (biasanya dikosongkan)
    'allowed_origins_patterns' => [],

    // Semua header diizinkan
    'allowed_headers' => ['*'],

    // Header yang diekspos ke frontend (biasanya kosong)
    'exposed_headers' => [],

    // Durasi cache preflight
    'max_age' => 0,

    // Jika frontend pakai cookie/session, set true. Kalau tidak, set false
    'supports_credentials' => true,
];
