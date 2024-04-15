<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgencyRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'zipCode' => 'required|integer',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'number_of_agent' => 'required|integer',
            'webSite' => 'required|url|max:255',
        ];
    }
}