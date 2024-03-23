<?php
// Mendefinisikan fungsi untuk menampilkan pesan "Halo Dunia!"
function tampilkanHaloDunia() {
    echo "Halo Dunia ! <br>";
}

// Memanggil fungsi untuk menampilkan pesan "Halo Dunia!"
tampilkanHaloDunia();

// Perulangan untuk menampilkan pesan perulangan ke-1 hingga ke-25
for ($i = 1; $i <= 25; $i++) {
    echo "perulangan ke-{$i}<br>";
}

// Mendefinisikan fungsi untuk menampilkan angka dengan perulangan rekursif
function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    // Panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

// Memanggil fungsi tampilkanAngka dengan parameter 20
tampilkanAngka(20);

// Array menu dengan menu bertingkat
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    ["nama" => "Pantai"],
                    ["nama" => "Gunung"]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

// Mendefinisikan fungsi untuk menampilkan menu bertingkat
function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
        if (isset($item['subMenu'])) {
            // Memanggil rekursif fungsi untuk menampilkan submenu
            tampilkanMenuBertingkat($item['subMenu']);
        }
    }
    echo "</ul>";
}

// Memanggil fungsi tampilkanMenuBertingkat dengan parameter array menu
tampilkanMenuBertingkat($menu);
?>
