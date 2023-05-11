<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreUpdateUserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  //autorizo todos a executar essa validação
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255|min: 3', //forma 1 de fazer
            'email' => [
                'required',
                'email',
                'unique:users'  //forma 2 de fazer
            ],
            'password' => [
                'required',
                'min: 6',
                'max: 20',
            ]
        ];
    }
}
