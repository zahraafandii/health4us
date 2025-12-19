<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    private $kategori;

    public function __construct()
    {
        
        $this->kategori = [
            'lari' => [
                [
                    'slug' => 'december-fun-run',
                    'judul' => 'December Fun Run 2025',
                    'deskripsi' => 'Acara lari santai yang terbuka untuk semua kalangan.',
                    'gambar' => '/asset/lari.jpeg'
                ],
                [
                    'slug' => 'sunset-run',
                    'judul' => 'Sunset Run 2025',
                    'deskripsi' => 'Event lari sore dengan pemandangan sunset.',
                    'gambar' => '/asset/sunriserun.jpg'
                ],
                [
                    'slug' => 'morning-jog',
                    'judul' => 'Morning Jog Challenge',
                    'deskripsi' => 'Lari pagi sehat dan menyenangkan.',
                    'gambar' => '/asset/aquasprint.jpeg'
                ],
            ],

            'bersepeda' => [
                [
                    'slug' => 'december-bike-ride',
                    'judul' => 'December Bike Ride 2025',
                    'deskripsi' => 'Event sepeda akhir tahun untuk semua peserta.',
                    'gambar' => '/asset/Sepeda.jpeg'
                ],
                [
                    'slug' => 'mountain-cycling',
                    'judul' => 'Mountain Cycling Challenge',
                    'deskripsi' => 'Tantangan sepeda gunung.',
                    'gambar' => '/asset/sepeda1.jpeg'
                ],
                [
                    'slug' => 'city-ride',
                    'judul' => 'City Ride Marathon',
                    'deskripsi' => 'Gowes fun di dalam kota.',
                    'gambar' => '/asset/sepeda3.jpg'
                ],
            ],

            'renang' => [
                [
                    'slug' => 'swim-fest',
                    'judul' => 'December Swim Fest 2025',
                    'deskripsi' => 'Event renang santai keluarga.',
                    'gambar' => '/asset/renang1.jpeg'
                ],
                [
                    'slug' => 'aqua-challenge',
                    'judul' => 'Aqua Challenge',
                    'deskripsi' => 'Lomba renang menyenangkan.',
                    'gambar' => '/asset/renang2.jpeg'
                ],
                [
                    'slug' => 'blue-water',
                    'judul' => 'Blue Water Splash',
                    'deskripsi' => 'Event renang rekreasi.',
                    'gambar' => '/asset/renang3.jpeg'
                ],
            ],
        ];
    }

    public function index()
    {
        return view('tantangan.index', [
            'kategori' => $this->kategori
        ]);
    }

    public function show($slug)
    {
        foreach ($this->kategori as $group) {
            foreach ($group as $item) {
                if ($item['slug'] === $slug) {
                    return view('tantangan.detail', ['event' => $item]);
                }
            }
        }
        abort(404);
    }

    public function register($slug)
    {
        return redirect()->route('tantangan.index')
            ->with('success', 'Berhasil mendaftar tantangan!');
    }
}
