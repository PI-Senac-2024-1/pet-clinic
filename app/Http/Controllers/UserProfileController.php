<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Models\User;
use App\Repository\UserRepository;
use App\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class UserProfileController extends Controller
{
    public function show()
    {
        return view('pages.user-profile');
    }

    // public function update(Request $request)
    // {
    //     $attributes = $request->validate([
    //         'username' => ['required','max:255', 'min:2'],
    //         'firstname' => ['max:100'],
    //         'lastname' => ['max:100'],
    //         'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
    //         'address' => ['max:100'],
    //         'city' => ['max:100'],
    //         'country' => ['max:100'],
    //         'postal' => ['max:100'],
    //         'about' => ['max:255']
    //     ]);

    //     auth()->user()->update([
    //         'username' => $request->get('username'),
    //         'firstname' => $request->get('firstname'),
    //         'lastname' => $request->get('lastname'),
    //         'email' => $request->get('email') ,
    //         'address' => $request->get('address'),
    //         'city' => $request->get('city'),
    //         'country' => $request->get('country'),
    //         'postal' => $request->get('postal'),
    //         'about' => $request->get('about')
    //     ]);
    //     return back()->with('succes', 'Profile succesfully updated');
    // }


    public function edit(): View
    {
        return view('pages.user-profile', [
            'user' => UserRepository::findUser(auth()->user()->id)
        ]);
    }

    public function update(UsersRequest $request): View
    {
        return UserServices::update($request->except(['_token', '_method']));
    }

    public function index(): View
    {
        return view("pages.dashboard-user", [
            'topRatedServices' => [
                [
                    'name' => 'Petz Shopz',
                    'image' => '/img/petshop1.jpg',
                    'avatar' => '/img/vet4.png',
                    'reviews' => 33,
                    'rating' => 4.7,
                    'location' => 'Goiania, Go',
                    'category' => 'Pet Shop',
                    'comments' => [
                        ['user' => 'Mary', 'text' => 'Grande seleção de produtos para animais de estimação!'],
                        ['user' => 'Jake', 'text' => 'A equipe do pet shop foi simpática e prestativa.'],
                    ],
                ],
                [
                    'name' => 'Patas & Co.',
                    'image' => '/img/petshop2.jpg',
                    'avatar' => '/img/vet5.png',
                    'reviews' => 65,
                    'rating' => 4.6,
                    'location' => 'Goiania, Go',
                    'category' => 'Pet Shop',
                    'comments' => [
                        ['user' => 'Carol', 'text' => 'Ótimo serviço! Meu animal de estimação adorou.'],
                        ['user' => 'John', 'text' => 'Pessoal muito simpático e ambiente limpo.'],
                        ['user' => 'Emily', 'text' => 'Altamente recomendado para donos de animais de estimação.'],
                    ],
                ],
                [
                    'name' => 'Sara',
                    'image' => '/img/petshop3.jpg',
                    'avatar' => '/img/vet2.jpg',
                    'reviews' => 88,
                    'rating' => 4.7,
                    'location' => 'Goiania, Go',
                    'category' => 'Veterinarian',
                    'comments' => [
                        ['user' => 'Sarah', 'text' => 'Meu animal de estimação teve uma ótima experiência com o veterinário!'],
                        ['user' => 'David', 'text' => 'A equipe foi muito atenciosa e experiente.'],
                    ],
                ],
                [
                    'name' => 'Pelo Pet',
                    'image' => '/img/petshop4.jpg',
                    'avatar' => '/img/vet6.png',
                    'reviews' => 74,
                    'rating' => 4.5,
                    'location' => 'Goiania, Go',
                    'category' => 'Pet Shop',
                    'comments' => [
                        ['user' => 'Alex', 'text' => 'I found everything I needed for my pet.'],
                        ['user' => 'Emma', 'text' => 'Reasonable prices and good quality products.'],
                        ['user' => 'Sophia', 'text' => 'My pet loves visiting this pet shop!'],
                    ],
                ],
                [
                    'name' => 'Claudio',
                    'image' => '/img/petshop5.jpg',
                    'avatar' => '/img/vet1.jpg',
                    'reviews' => 91,
                    'rating' => 4.8,
                    'location' => 'Goiania, Go',
                    'category' => 'Veterinarian',
                    'comments' => [
                        ['user' => 'James', 'text' => 'I highly recommend this veterinarian for all pet owners.'],
                        ['user' => 'Olivia', 'text' => 'The veterinarian provided excellent care for my pet.'],
                        ['user' => 'William', 'text' => 'I am very satisfied with the service received.'],
                    ],
                ],
                [
                    'name' => 'Paw Control',
                    'image' => '/img/petsho6.jpg',
                    'avatar' => '/img/vet3.png',
                    'reviews' => 47,
                    'rating' => 4.8,
                    'location' => 'Goiania, Go',
                    'category' => 'Hospital',
                    'comments' => [
                        ['user' => 'Sophie', 'text' => 'The pet hospital provided exceptional care for my pet.'],
                        ['user' => 'Benjamin', 'text' => 'The staff was efficient and compassionate.'],
                        ['user' => 'Lucas', 'text' => 'I am grateful for the prompt service received at the hospital.'],
                        ['user' => 'Charlotte', 'text' => 'My pet received the best treatment possible.'],
                        ['user' => 'Jackson', 'text' => 'Highly recommended for any pet emergencies.'],
                    ],
                ],
            ]
        ]);
    }
}
