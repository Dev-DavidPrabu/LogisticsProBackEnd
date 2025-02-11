<?php

namespace App\Http\Requests\Auth\ForgetPassword;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
         "email"=>['required','email'],
         "password"=>['required','min:4'],
         "confirm_password"=>['required_with:password','same:password']
        ];
    }
}
