<?php

namespace App\Http\Requests\Admin\Document;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'file_path' => 'required|mimes:doc,docx|max:10000',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Поле "Название" обязательно для заполнения.',
            'title.string'   => 'Поле "Название" должно быть строкой.',
            'title.max'      => 'Поле "Название" не должно превышать 255 символов.',

            'word_file.required' => 'Не выбран файл.',
            'word_file.mimes'    => 'Файл должен быть в формате .doc или .docx.',
            'word_file.max'      => 'Максимальный размер файла — 5 МБ.',
        ];
    }
}
