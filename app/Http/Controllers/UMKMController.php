<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public static $kategoriData = [
        'makanan_minuman' => [
                [
                    'slug' => 'kopi-susu',
                    'nama' => 'Tuku - Es Kopi Susu Tetangga',
                    'healthkoin' => 750,
                    'gambar' => '/asset/tuku.png',
                    'label' => 'Terlaris',
                ],
                [
                    'slug' => 'mie-sehat',
                    'nama' => 'Mie Sehat Cempaka',
                    'healthkoin' => 250,
                    'gambar' => '/asset/mie.png',
                    'label' => 'Pilihan Sehat',
                ],
                [
                    'slug' => 'pisang-goreng',
                    'nama' => 'Pisang Goreng Bu Nanik - 5 PCS',
                    'healthkoin' => 700,
                    'gambar' => '/asset/pisgor.png',
                ],
            ],

            'produk_olahraga' => [
                [
                    'slug' => 'jaket-olahraga',
                    'nama' => 'Whittaker - Jaket Olahraga, Fitness',
                    'healthkoin' => 1000,
                    'gambar' => '/asset/jaket.png',
                    'label' => 'Baru',
                ],
                [
                    'slug' => 'sepatu-olahraga',
                    'nama' => 'Ortuseight - Sepatu Futsal Hypersonic - 38',
                    'healthkoin' => 1000,
                    'gambar' => '/asset/sepatu.png',
                ],
                [
                    'slug' => 'matras-yoga',
                    'nama' => 'Svarga - Matras Yoga Tosca',
                    'healthkoin' => 950,
                    'gambar' => '/asset/matras yoga.png',
                ],
            ],

            'pakaian' => [
                [
                    'slug' => 'blouse-batik',
                    'nama' => 'Nayara - Blouse Batik Navy',
                    'healthkoin' => 1050,
                    'gambar' => '/asset/blouse.png',
                    'label' => 'Baru',
                ],
                [
                    'slug' => 'sweater-garis',
                    'nama' => 'This Is April - Evora Sweater',
                    'healthkoin' => 1020,
                    'gambar' => '/asset/sweater.png',
                ],
                 [
                    'slug' => 'lara-skirt',
                    'nama' => 'Thenblank - Lara Skirt',
                    'healthkoin' => 1000,
                    'gambar' => '/asset/skirt.png',
                ],
            ]
    ];
    
    public $healthkoinUser = 300;

    public function __construct()
    {
        $this->kategori = self::$kategoriData;
    }

    public function index()
    {
        return view('umkm.index', [
            'kategori' => $this->kategori,
            'healthkoin' => $this->healthkoinUser
        ]);
    }

    public function tukar($slug)
    {
        foreach ($this->kategori as $items) {
            foreach ($items as $product) {
                if ($product['slug'] === $slug) {
                    if ($this->healthkoinUser < $product['healthkoin']) {
                        return back()->with('error', 'HealthKoin tidak cukup');
                    }
                    return back()->with('success', 'Penukaran berhasil!');
                }
            }
        }
        abort(404);
    }

    public function show($slug)
    {
        foreach ($this->kategori as $items) {
            foreach ($items as $product) {
                if ($product['slug'] === $slug) {
                    return view('umkm.show', [
                        'product' => $product,
                        'healthkoin' => $this->healthkoinUser
                    ]);
                }
            }
        }
        abort(404);
    }
}
