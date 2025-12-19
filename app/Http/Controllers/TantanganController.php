<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TantanganController extends Controller
{
    public function index()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Lari',
                'icon' => '/icons/run.png',
                'challenges' => [
                    [
                        'id' => 101,
                        'title' => 'December Fun Run 2025',
                        'desc' => 'Acara lari santai yang terbuka untuk semua kalangan.',
                        'img' => '/asset/run1.png'
                    ],
                    [
                        'id' => 102,
                        'title' => 'Morning Run 5K',
                        'desc' => 'Lari pagi santai 5 kilometer.',
                        'img' => '/asset/run2.png'
                    ],
                    [
                        'id' => 103,
                        'title' => 'Night Glow Run',
                        'desc' => 'Lari malam dengan lampu neon.',
                        'img' => '/asset/run3.png'
                    ],
                ]
            ],

            [
                'id' => 2,
                'name' => 'Renang',
                'icon' => '/icons/swim.png',
                'challenges' => [
                    [
                        'id' => 201,
                        'title' => 'December Swim Fest 2025',
                        'desc' => 'Event renang santai keluarga.',
                        'img' => '/asset/swim1.png'
                    ],
                    [
                        'id' => 202,
                        'title' => 'Blue Ocean Swim',
                        'desc' => 'Renang laut 1km.',
                        'img' => '/asset/swim2.png'
                    ],
                    [
                        'id' => 203,
                        'title' => 'Kids Friendly Swim',
                        'desc' => 'Renang untuk pemula & anak-anak.',
                        'img' => '/asset/swim3.png'
                    ],
                ]
            ],

            [
                'id' => 3,
                'name' => 'Sepeda',
                'icon' => '/icons/bike.png',
                'challenges' => [
                    [
                        'id' => 301,
                        'title' => 'December Bike Ride 2025',
                        'desc' => 'Event sepeda akhir tahun.',
                        'img' => '/asset/bike1.png'
                    ],
                    [
                        'id' => 302,
                        'title' => 'Urban Cycling',
                        'desc' => 'Gowes santai keliling kota.',
                        'img' => '/asset/bike2.png'
                    ],
                    [
                        'id' => 303,
                        'title' => 'Sunrise Cycling',
                        'desc' => 'Event sepeda saat matahari terbit.',
                        'img' => '/asset/bike3.png'
                    ],
                ]
            ],
        ];

        return view('tantangan.index', compact('categories'));
    }



    public function detail($id)
    {
        return view('tantangan.detail', compact('id'));
    }


    public function daftar($id)
    {
        return back()->with('success', 'Berhasil mendaftar tantangan!');
    }
}
