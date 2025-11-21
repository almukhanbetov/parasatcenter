<?php

namespace App\Http\Requests\Admin\CourseDetail;

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
            'course_id'    => 'required|exists:courses,id',
            'title'        => 'required|string|max:255',
            'description'  => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'course_id.required' => 'Необходимо выбрать курс',
            'course_id.exists'   => 'Выбранный курс не существует',

            'title.required'     => 'Поле Наименование необходимо заполнить',
            'title.string'       => 'Поле Наименование должно быть строкой',
            'title.max'          => 'Поле Наименование должно быть не длиннее 255 символов',

            'description.required' => 'Поле Описание необходимо заполнить',
            'description.string'   => 'Поле Описание должно быть строкой',
        ];
    }
}
