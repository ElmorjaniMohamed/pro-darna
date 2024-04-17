<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'zipCode' => 'required|integer',
            'status' => 'required|in:high price,low price',
            'area' => 'required|string|max:255',
            'nbr_of_bedroom' => 'required|integer',
            'nbr_of_bathroom' => 'required|integer',
            'nbr_of_garage' => 'required|integer',
            'agency_id' => 'required|integer|exists:agencies,id',
            'property_type_id' => 'required|integer|exists:property_types,id',
            'category_id' => 'required|integer|exists:categories,id',
        ];
    }
}