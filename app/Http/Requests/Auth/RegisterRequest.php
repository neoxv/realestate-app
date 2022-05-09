<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required','min:10', 'unique:users', 'numeric'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
             if (strlen($this->input('phone')) > 10 ) {
                $validator->errors()->add('phone', 'Phone number must be less than 10 digits');
            }
            if(substr($this->input('phone'), 0, 2) != '09'){
                $validator->errors()->add('phone', 'Phone number must start with 09');
            }
        });
    }
}
