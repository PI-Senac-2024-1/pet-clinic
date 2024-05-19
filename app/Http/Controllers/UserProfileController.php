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
                    'location' => 'Goiânia, GO',
                    'category' => 'Pet Shop',
                    'comments' => [
                        ['user' => 'Mary', 'text' => 'Ótima seleção de produtos para pets!'],
                        ['user' => 'Jake', 'text' => 'A equipe do pet shop foi amigável e prestativa.'],
                    ],
                ],
                [
                    'name' => 'Patas & Co.',
                    'image' => '/img/petshop2.jpg',
                    'avatar' => '/img/vet5.png',
                    'reviews' => 65,
                    'rating' => 4.6,
                    'location' => 'Goiânia, GO',
                    'category' => 'Pet Shop',
                    'comments' => [
                        ['user' => 'Carol', 'text' => 'Ótimo serviço! Meu pet adorou.'],
                        ['user' => 'John', 'text' => 'Equipe muito amigável e ambiente limpo.'],
                        ['user' => 'Emily', 'text' => 'Altamente recomendado para donos de pets.'],
                    ],
                ],
                [
                    'name' => 'Sara',
                    'image' => '/img/petshop3.jpg',
                    'avatar' => '/img/vet2.jpg',
                    'reviews' => 88,
                    'rating' => 4.7,
                    'location' => 'Goiânia, GO',
                    'category' => 'Veterinário',
                    'comments' => [
                        ['user' => 'Sarah', 'text' => 'Meu pet teve uma ótima experiência com o veterinário!'],
                        ['user' => 'David', 'text' => 'A equipe foi muito carinhosa e conhecedora.'],
                    ],
                ],
                [
                    'name' => 'Pelo Pet',
                    'image' => '/img/petshop4.jpg',
                    'avatar' => '/img/vet6.png',
                    'reviews' => 74,
                    'rating' => 4.5,
                    'location' => 'Goiânia, GO',
                    'category' => 'Pet Shop',
                    'comments' => [
                        ['user' => 'Alex', 'text' => 'Encontrei tudo o que precisava para meu pet.'],
                        ['user' => 'Emma', 'text' => 'Preços razoáveis e produtos de boa qualidade.'],
                        ['user' => 'Sophia', 'text' => 'Meu pet adora visitar este pet shop!'],
                    ],
                ],
                [
                    'name' => 'Claudio',
                    'image' => '/img/petshop5.jpg',
                    'avatar' => '/img/vet1.jpg',
                    'reviews' => 91,
                    'rating' => 4.8,
                    'location' => 'Goiânia, GO',
                    'category' => 'Veterinário',
                    'comments' => [
                        ['user' => 'James', 'text' => 'Recomendo muito este veterinário para todos os donos de pets.'],
                        ['user' => 'Olivia', 'text' => 'O veterinário forneceu um excelente cuidado para meu pet.'],
                        ['user' => 'William', 'text' => 'Estou muito satisfeito com o serviço recebido.'],
                    ],
                ],
                [
                    'name' => 'Paw Control',
                    'image' => '/img/petsho6.jpg',
                    'avatar' => '/img/vet3.png',
                    'reviews' => 47,
                    'rating' => 4.8,
                    'location' => 'Goiânia, GO',
                    'category' => 'Hospital',
                    'comments' => [
                        ['user' => 'Sophie', 'text' => 'O hospital para pets forneceu um cuidado excepcional para meu pet.'],
                        ['user' => 'Benjamin', 'text' => 'A equipe foi eficiente e compassiva.'],
                        ['user' => 'Lucas', 'text' => 'Sou grato pelo serviço rápido recebido no hospital.'],
                        ['user' => 'Charlotte', 'text' => 'Meu pet recebeu o melhor tratamento possível.'],
                        ['user' => 'Jackson', 'text' => 'Altamente recomendado para qualquer emergência com pets.'],
                    ],
                ],
            ]
        ]);        
    }
}
