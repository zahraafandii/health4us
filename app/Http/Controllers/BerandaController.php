<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UMKMController;

class BerandaController extends Controller
{
    public function home() {
        $activities = [
            [
                'title' => 'Aqua Sprint Challenge',
                'image' => 'aquasprint.jpeg',
                'type'  => 'Renang'
            ],
            [
                'title' => 'Morning Run 5K',
                'image' => 'charityrun.jpg',
                'type'  => 'Lari'
            ],
            [
                'title' => 'Weekend Cycling Ride',
                'image' => 'sepeda2.jpg',
                'type'  => 'Bersepeda'
            ],
            [
                'title' => 'Swim Endurance Test',
                'image' => 'renang1.jpeg',
                'type'  => 'Renang'
            ],
        ];

        $challenges = [];

        for ($i = 1; $i <= 10; $i++) {
            $activity = $activities[array_rand($activities)];

            $challenges[] = [
                'id' => $i,
                'title' => $activity['title'],
                'description' => 'Tantangan untuk meningkatkan kebugaran dan stamina tubuh.',
                'duration' => '7 Hari',
                'points' => rand(200, 600),
                'image' => $activity['image'],
                'type' => $activity['type'],
            ];
        }

        $kategori = UMKMController::$kategoriData;
        return view('beranda', compact('challenges', 'kategori'));
    }

    public function show($id)
    {
        $challenge = [
            'id' => $id,
            'title' => 'Run 5K Challenge',
            'description' => 'Tantangan ini mengajak kamu untuk berlari sejauh 5 KM dalam waktu 1 minggu. Cocok untuk meningkatkan stamina dan kesehatan jantung.',
            'rules' => [
                'Lari minimal 5 KM',
                'Dilakukan dalam 7 hari',
                'Aktivitas dapat direkam manual'
            ],
            'points' => 500
        ];

        return view('challenge-detail', compact('challenge'));
    }

    public function index() {
        $categories = [
            'Lari' => [
                [
                    'id' => 1,
                    'title' => 'December Fun Run 2025',
                    'date' => '20 Desember 2025',
                    'points' => 500,
                    'image' => 'run.jpg'
                ],
                [
                    'id' => 2,
                    'title' => 'Weekly 5K Challenge',
                    'date' => 'Setiap Minggu',
                    'points' => 300,
                    'image' => 'run.jpg'
                ],
            ],

            'Bersepeda' => [
                [
                    'id' => 3,
                    'title' => 'City Cycling Challenge',
                    'date' => '25 Desember 2025',
                    'points' => 450,
                    'image' => 'bike.jpg'
                ],
            ],

            'Renang' => [
                [
                    'id' => 4,
                    'title' => 'Swim Endurance',
                    'date' => 'Setiap Minggu',
                    'points' => 400,
                    'image' => 'swim.jpg'
                ],
            ],
        ];

        return view('tantangan.index', compact('categories'));
    }
}
