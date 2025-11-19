<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'fullname'=>'required|string',
            'email'=>['required', 'string', 'email', 'unique:users'],
            'subject_id'=>['required', 'integer'],
            'image'=>'required|image|mimes:png,jpg,jpeg,svg'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Поле Имя объязательное',
            'fullname.required'=>'Поле Фамилия объязательное',
            'email.unique'=>'Такой E-mail уже существует',
            'subject_id.required'=>'Поле предмет объязательное',
            'image.required'=>'Поле Изображение объязательное',
            'image.mimes'=>'Введите файл с расширением png,jpg,svg',
        ];
    }
}
