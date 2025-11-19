<?php

namespace App\Http\Requests\Admin\Student;

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
            'lastname' => 'required|string|max:255',
            'iin' => 'required|string|size:12|unique:students,iin',
            'course_id' => 'nullable|exists:courses,id',
            'firm_id' => 'nullable|exists:firms,id',

            // одно основное фото
            'image' => 'required|mimes:pdf|max:4096',

            // множество фото
            'images' => 'nullable|array',
            'images.*' => 'mimes:pdf|max:4096',
        ];
    }
    public function messages()
    {
        return [
            'lastname.required' => 'Поле Имя  обязательное',
            'iin.required' => 'Поле ИИН обязательное',
            'iin.size' => 'ИИН должен содержать строго 12 цифр.',
            'iin.max' => 'должно быть 12 символов',
            'iin.min' => 'должно быть 12 символов',
            'course_id.required' => 'Поле Курс обязательное',
            'course_id.exists' => 'Выбранный курс не существует.',
            'firm_id.required' => 'Поле Организация обязательное',
            'firm_id.exists' => 'Выбранная организация не существует.',
            'image.required' => 'Основное изображение (Сертификат) обязательно.',
            'image.mimes' => 'Файл должен быть pdf.',
            'images.*.mimes' => 'Каждый файл должен быть pdf.',


        ];
    }
}
