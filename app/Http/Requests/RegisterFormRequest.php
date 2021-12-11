<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterFormRequest extends FormRequest
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

            'name' => 'required',

            'email' => 'required|email',

            'password' => ['required', Password::min(8)],
            'password_confirmation' => 'required|same:password'

        ];
    }



    public function messages()
    {

        return [

            'name.required' => 'O campo nome é obrigatório',

            'email.required' => 'O campo email é obrigatório',

            'email.email' => 'Insira um email válido',

            'password.required' => 'O campo senha é obrigatório',

            'password_confirmation.required' => 'O campo confirmar senha é obrigatório',

            'password_confirmation.same' => 'As senhas precisam ser iguais',

            'password.min' => 'A senha precisa ter pelo menos 8 caracteres',

        ];
    }
}
