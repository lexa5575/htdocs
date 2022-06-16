<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return ['name' => 'required|min:3|max:50',
            'email' => 'required|email:rfc,dns',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
            ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Поле имя, является обязательным',
            'message.required' => 'Поле сообщение, должно быть не меньше 15 символов и не больше 500',
            'email.email' => 'Введите правильный email',
            'subject.required' => 'Поле тема, должно быть не меньше 5 символов и не больше 50',
            'email.required' => 'Поле email является обязательным',
            'name|min:3' => 'Поле имя, должно быть не меньше 3 символов',
            'name|max:50' => 'Поле имя, должно быть не больше 50 символов'
        ];
    }
}
