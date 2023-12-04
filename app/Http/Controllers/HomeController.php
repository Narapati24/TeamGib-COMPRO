<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $whyUss = [
            [
                'img' => 'creative.svg',
                'title' => 'Creative',
                'body' => 'Tim yang berpengalaman dan kreatif siap membantu segala kebutuhan anda.'
            ],
            [
                'img' => 'creative.svg',
                'title' => 'Cs Responsif',
                'body' => 'CS yang responsif dan ramah siap membantu anda.'
            ],
            [
                'img' => 'creative.svg',
                'title' => 'On Time',
                'body' => 'Kami berusaha memberikan layanan yang pasti dan tepat waktu.'
            ],
            [
                'img' => 'creative.svg',
                'title' => 'Cloud Save',
                'body' => 'File desain anda akan kami simpan dalam cloud storage yang aman.'
            ],
            [
                'img' => 'creative.svg',
                'title' => 'Complete File',
                'body' => 'File master yang kami berikan lengkap dan mudah dalam melakukan editing.'
            ],
            [
                'img' => 'creative.svg',
                'title' => 'Diskon',
                'body' => 'Diskon Khusus bagi pelangganan setia kami.'
            ]
        ];

        $products = [
            [
                'img' => 'creative.svg',
                'title' => 'Graphic Design'
            ],
            [
                'img' => 'creative.svg',
                'title' => 'Software Development'
            ],
            [
                'img' => 'creative.svg',
                'title' => 'Photo & Video Profesional'
            ]
        ];

        $ourTeams = [
            [
                'img' => 'rafli-chaerul.png',
                'name' => 'Rafli Chaerul. G',
                'position' => 'Directur',
                'instagram' => '',
                'facebook' => '',
                'tweeter' => ''
            ],
            [
                'img' => 'rafli-chaerul.png',
                'name' => 'Narapati Keysa A',
                'position' => 'Directur Development',
                'instagram' => '',
                'facebook' => '',
                'tweeter' => ''
            ],
            [
                'img' => 'rafli-chaerul.png',
                'name' => 'Naufal Hilmi',
                'position' => 'Directur Creative',
                'instagram' => '',
                'facebook' => '',
                'tweeter' => ''
            ],
            [
                'img' => 'rafli-chaerul.png',
                'name' => 'Feby Resti',
                'position' => 'Finance',
                'instagram' => '',
                'facebook' => '',
                'tweeter' => ''
            ],
            [
                'img' => 'rafli-chaerul.png',
                'name' => 'Gusti',
                'position' => 'Directu Marketing',
                'instagram' => '',
                'facebook' => '',
                'tweeter' => ''
            ]
        ];

        return view('home', [
            'title' => 'Home',
            'whyUss' => $whyUss,
            'products' => $products,
            'ourTeams' => $ourTeams,
            'ourClients' => ['wifiku.png', 'priba.png', 'Tpb.png', 'msn.png']
        ]);
    }
}
