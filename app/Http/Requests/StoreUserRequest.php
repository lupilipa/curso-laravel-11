<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            //vamo validar os baguio
            'name' => 'required|string|min:3|max:255',
            'email' => [
                'required',
                'email',
                //ele eh unico na tabela users na coluna email
                'unique:users,email',
            ],
            'password' => [
                'required',
                'min:6',
                'max:20',
            ]
        ];
    }
}
