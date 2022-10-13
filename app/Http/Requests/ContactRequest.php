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
        return [
          'name' => 'required|min:2|max: 10',
  'email' => 'required|min:7|max: 30'
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'заполните имя',
           'name.min' => 'поле имя должно иметь от 2-х символов',
             'name.max' => 'поле имя не должно иметь более 10 символов',
          'email.required' => 'заполните настроение',
            'email.min' => 'очень короткое описание',
              'email.required' => 'опишите в 30 символах'
        ];
    }

}
