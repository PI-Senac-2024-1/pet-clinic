<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repository\UserRepository;

class UserServices
{
    /**
     * Recebe os dados do formulário e cria um novo usuário e realiza o login
     * @param $data
     * @return void
     */
    public static function register(array $data): void
    {
        auth()->login(UserRepository::createUser($data));
    }

    /**
     * Recebe os dados da requisição e realiza o login do usuário e redireciona. Se ocorrer erro volta com a mensagem de erro
     * @param Request $request
     * @return bool
     */
    public static function login(Request $request): bool
    {
        return Auth::attempt(['email' => $request->email, 'password' => $request->password]);
    }

    /**
     * Recebe os dados da requisição e realiza o logout do usuário.
     * @param Request $request
     * @return void
     */
    public static function logout(Request $request): void
    {
        Auth::logout($request);

        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
