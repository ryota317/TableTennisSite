<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|max:20',
            'email' => 'required|email|max:100',
            'pass' => 'required|min:6|confirmed',
            'confirm_pass' => 'required|min:6',
        
        ];
    }

    public function messages()
{
    return [
        'pass.confirmed' => 'パスワードが異なります',
    ];
}
}
