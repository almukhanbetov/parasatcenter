<?php

namespace App\Http\Requests\Admin\Service;

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
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле Наименование необходимо заполнить',
            'name.max' => 'Наименование не должно превышать 255 символов',
            'desc.required' => 'Поле Описание обязательно для заполнения',
            'image.mimes' => 'Изображение должно быть в формате: jpg, jpeg, png, gif, webp',
            'image.max' => 'Размер файла не должен превышать 2 МБ',
        ];
    }
}
