<?php

namespace App\Http\Requests\Admin\Student;

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
    public function rules(): array
    {
        return [
            'lastname' => 'required|string|max:255',
            'iin' => 'nullable|string|max:12',
            'course_id' => 'nullable|exists:courses,id',
            'firm_id' => 'nullable|exists:firms,id',

            // Основной файл — не обязателен при редактировании
            'image' => 'nullable|mimes:pdf|max:4096',

            // Дополнительные файлы
            'images' => 'nullable|array',
            'images.*' => 'mimes:pdf|max:4096',
        ];
    }
    public function messages(): array
{
    return [
        // ФИО
        'lastname.required' => 'Поле «ФИО» является обязательным.',
        'lastname.string'   => 'Поле «ФИО» должно содержать только текст.',
        'lastname.max'      => 'Поле «ФИО» не должно превышать 255 символов.',

        // ИИН
        'iin.required' => 'Поле «ИИН» является обязательным.',
        'iin.digits'   => 'ИИН должен содержать строго 12 цифр.',
        'iin.numeric'  => 'ИИН должен состоять только из цифр.',

        // Курс
        'course_id.required' => 'Выберите курс.',
        'course_id.exists'   => 'Выбранный курс не найден в системе.',

        // Организация
        'firm_id.required' => 'Выберите организацию.',
        'firm_id.exists'   => 'Выбранная организация не найдена в системе.',

        // Основной PDF
        'image.required' => 'Основной сертификат обязателен к загрузке.',
        'image.mimes'    => 'Основной файл должен быть в формате PDF.',
        'image.max'      => 'Размер PDF не должен превышать 4 MB.',

        // Дополнительные PDF
        'images.array'     => 'Дополнительные файлы должны быть массивом.',
        'images.*.mimes'   => 'Каждый дополнительный сертификат должен быть PDF.',
        'images.*.max'     => 'Размер каждого дополнительного PDF не должен превышать 4 MB.',
    ];
}

}
