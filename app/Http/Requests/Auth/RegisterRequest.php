<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>['required', 'string'],
            'email'=>['required', 'string', 'email', 'unique:users,email'],
            'password'=>['required', 'confirmed'],
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Поле Имя обязательное',
            'email.required'=>'Поле E-mail обязательное',
            'email.email'=>'Поле должно тип email (example@example.com)',
            'email.unique'=>'Такой E-mail существует',
            'password.required'=>'Поле Пароль обязательное',
            'password.confirmed'=>'Поле Пароль не совпадают',
        ];

    }
}

