<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class OwnerCreateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:owners,email',
            'primary_phone' => 'required|numeric|unique:owners|min:10',
            'secondary_phone' => 'nullable|numeric|unique:owners,secondary_phone|min:10',
            'address' => 'nullable|string|max:255',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (strlen($this->input('primary_phone')) > 10 || substr($this->input('primary_phone'), 0, 2) != "09") {
                $validator->errors()->add('primary_phone', 'Invalid phone number.');
            }

            if ($this->input('secondary_phone') && (strlen($this->input('secondary_phone')) > 10 || substr($this->input('secondary_phone'), 0, 2) != "09")) {
                $validator->errors()->add('secondary_phone', 'Invalid phone number.');
            }
        });
    }
}
