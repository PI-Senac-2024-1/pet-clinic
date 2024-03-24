<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|max:255|min:2',
            'document' => 'required|max:14|min:11',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'terms' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'username.required' => 'O nome é obrigatório',
            'username.max' => 'O nome deve conter no máximo 255 caracteres',
            'username.min' => 'O nome deve conter no mínimo 2 caracteres',
            'document.required' => 'O documento é obrigatório',
            'document.max' => 'O documento deve conter no máximo 14 caracteres',
            'document.min' => 'O documento deve conter no mínimo 11 caracteres',
            'email.required' => 'O e-mail é obrigatório',
            'email.email' => 'O e-mail deve ser válido',
            'email.max' => 'O e-mail deve conter no máximo 255 caracteres',
            'email.unique' => 'O e-mail já está em uso',
            'password.required' => 'A senha é obrigatória',
        ];
    }
}
