<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertySearchRequest extends FormRequest
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
            'ownerPhone' => 'numeric|min:10',
            'ownerName' => 'string',
            'price' => 'required|numeric',
            'area' => 'numeric',
            'bathroom' => 'numeric',
            'bedroom' => 'numeric',
            'type' => 'string|in:land,house,shop,building,apartment,warehouse/factory,hotel/resort,',
            'address' => 'string|max:255',
            'city' => 'string|max:255',
            'is_rental' => 'boolean',
        ];
    }
}
