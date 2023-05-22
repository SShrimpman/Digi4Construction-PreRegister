<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\UserController;

class StoreuserRequest extends FormRequest
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
            'name' => 'required|string|max:20|min:2',
            'email' => 'required|email|string|unique:users',
            'company' => 'nullable|string|max:25',
            'password' => 'required|string|min:8'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O Nome é obrigatório!',
            'email.required' => 'O E-mail é obrigatório!',
            'email.unique' => 'Este E-mail já está registado!',
            'password.required' => 'A Palavra-Passe é obrigatória.',
            'password.min' => 'A :attribute deve ter no mínimo :min caracteres.',
            'company.max' => 'A :attribute não deve ter mais que :max caracteres.',

        ];
    }
}
