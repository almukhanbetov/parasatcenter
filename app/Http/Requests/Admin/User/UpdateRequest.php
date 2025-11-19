<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'lastname'=>'required|string',
            'address'=>'required|string',
            'email'=>['required', 'string', 'email', 'unique:users'],
            'phone'=>['required', 'string', 'min:10' ,'max:50'],
            'image'=>'sometimes|image|mimes:png,jpg,svg'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Поле Имя объязательное',
            'lastname.required'=>'Поле Фамилия объязательное',
            'email.unique'=>'Такой E-mail уже существует',
            'phone.required'=>'Поле Телефон объязательное',
            'address.required'=>'Поле Адрес объязательное',
//            'image.required'=>'Поле Изображение объязательное',
            'image.mimes'=>'Введите файл с расширением png,jpg,svg',
        ];
    }
}
