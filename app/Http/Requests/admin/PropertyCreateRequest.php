<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyCreateRequest extends FormRequest
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
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'area' => 'required|numeric',
            'bathroom' => 'numeric',
            'bedroom' => 'numeric',
            'type' => 'required|string|in:land,house,shop,building,apartment,warehouse',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'is_rental'=>'required|boolean',
            'owner_id'=>'required|string|max:255',
            'is_negotiable'=>'required|boolean',
            'video' =>"string"
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'is_rental' => filter_var($this->is_rental, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE),
            'is_negotiable' => filter_var($this->is_negotiable, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)
        ]);
    }
}
