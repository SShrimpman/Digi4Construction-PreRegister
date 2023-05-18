<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserStandRequest extends FormRequest
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
            'last_name' => 'required|string|max:25',
            'email' => 'required|email|string|unique:users',
            'profession' => 'required|string|max:50',
            'company' => 'nullable|string|max:25',
            'password' => 'required|string|min:8'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'The name field is required',
            'last_name.required' => 'the last_name field is required',
            'email.required' => 'the email field is required or email already exists',
            'password.required' => 'password field is required'
        ];
    }
}
