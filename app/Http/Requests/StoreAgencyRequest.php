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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'user_id' => 'required|exists:users,id',
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'description.required' => 'The description field is required.',
            'address.required' => 'The address field is required.',
            'address.max' => 'The address may not be greater than 255 characters.',
            'zipCode.required' => 'The zip code field is required.',
            'zipCode.integer' => 'The zip code must be an integer.',
            'phone.required' => 'The phone field is required.',
            'phone.max' => 'The phone may not be greater than 15 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.max' => 'The email may not be greater than 255 characters.',
            'number_of_agent.required' => 'The number of agents field is required.',
            'number_of_agent.integer' => 'The number of agents must be an integer.',
            'webSite.required' => 'The website field is required.',
            'webSite.url' => 'The website must be a valid URL.',
            'webSite.max' => 'The website may not be greater than 255 characters.',
            'image.required' => 'The image field is required.',
            'image.image' => 'The image must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'user_id.required' => 'The user id field is required.',
            'user_id.exists' => 'The selected user id is invalid.',
        ];
    }
}