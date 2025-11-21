<?php

namespace App\Http\Requests\Admin\CourseDetail;

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
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',

        ];
    }
    public function messages()
    {
        return [
            'course_id.required' => 'Выберите курс',
            'course_id.exists'   => 'Выбранный курс не существует',

            'name.required'      => 'Поле Наименование необходимо заполнить',
            'desc.required'      => 'Поле Описание необходимо заполнить',
        ];
    }
}
