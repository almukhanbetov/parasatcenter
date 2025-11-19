<?php

namespace App\Http\Requests\Admin\Course;

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
            'desc' => 'required|string|max:255',
            'image' => 'nullable|file|mimes:jpg,png,gif,pdf,webp',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле Наименование необходимо заполнить',
            'desc.required' => 'Поле Описание необходимо заполнить',
            'image.mimes' => 'Тип поля должно быть jpg,png,gif,pdf,webp',
        ];
    }
}
