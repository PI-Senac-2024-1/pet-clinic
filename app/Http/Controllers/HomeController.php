<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function company()
    {
        return view('pages.dashboard');
    }

    public function user()
    {
        $topRatedServices = [
            [
                'name' => 'Petz Shopz',
                'image' => '/img/petshop1.jpg',
                'avatar' => '/img/vet4.png',
                'reviews' => 33,
                'rating' => 4.7,
                'location' => 'Goiania, Go',
                'category' => 'Pet Shop',
            ],
            [
                'name' => 'Petz',
                'image' => '/img/petshop2.jpg',
                'avatar' => '/img/vet5.png',
                'reviews' => 65,
                'rating' => 4.6,
                'location' => 'Goiania, Go',
                'category' => 'Pet Shop',
            ],
            [
                'name' => 'Sara',
                'image' => '/img/petshop3.jpg',
                'avatar' => '/img/vet2.jpg',
                'reviews' => 88,
                'rating' => 4.7,
                'location' => 'Goiania, Go',
                'category' => 'Veterinarian',
            ],
            [
                'name' => 'Petz',
                'image' => '/img/petshop4.jpg',
                'avatar' => '/img/vet6.png',
                'reviews' => 74,
                'rating' => 4.5,
                'location' => 'Goiania, Go',
                'category' => 'Pet Shop',
            ],
            [
                'name' => 'Claudio',
                'image' => '/img/petshop5.jpg',
                'avatar' => '/img/vet1.jpg',
                'reviews' => 91,
                'rating' => 4.8,
                'location' => 'Goiania, Go',
                'category' => 'Veterinarian',
            ],
            [
                'name' => 'Paw Control',
                'image' => '/img/petsho6.jpg',
                'avatar' => '/img/vet3.png',
                'reviews' => 47,
                'rating' => 4.8,
                'location' => 'Goiania, Go',
                'category' => 'Hospital',
            ],
        ];
        return view("pages.dashboard-user", compact('topRatedServices'));
    }
}
