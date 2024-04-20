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
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'A title is required',
            'title.max' => 'The title may not be greater than 255 characters',
            'price.required' => 'A price is required',
            'price.numeric' => 'The price must be a number',
            'description.required' => 'A description is required',
            'address.required' => 'An address is required',
            'address.max' => 'The address may not be greater than 255 characters',
            'zipCode.required' => 'A zip code is required',
            'zipCode.integer' => 'The zip code must be an integer',
            'status.required' => 'A status is required',
            'status.in' => 'The status must be either "high price" or "low price"',
            'area.required' => 'An area is required',
            'area.max' => 'The area may not be greater than 255 characters',
            'nbr_of_bedroom.required' => 'The number of bedrooms is required',
            'nbr_of_bedroom.integer' => 'The number of bedrooms must be an integer',
            'nbr_of_bathroom.required' => 'The number of bathrooms is required',
            'nbr_of_bathroom.integer' => 'The number of bathrooms must be an integer',
            'nbr_of_garage.required' => 'The number of garages is required',
            'nbr_of_garage.integer' => 'The number of garages must be an integer',
            'agency_id.required' => 'An agency is required',
            'agency_id.integer' => 'The agency ID must be an integer',
            'agency_id.exists' => 'The selected agency does not exist',
            'property_type_id.required' => 'A property type is required',
            'property_type_id.integer' => 'The property type ID must be an integer',
            'property_type_id.exists' => 'The selected property type does not exist',
            'category_id.required' => 'A category is required',
            'category_id.integer' => 'The category ID must be an integer',
            'category_id.exists' => 'The selected category does not exist',
            'images.*.required' => 'At least one image is required',
            'images.*.image' => 'The file must be an image',
            'images.*.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg',
            'images.*.max' => 'The image may not be greater than 2048 kilobytes',
        ];
    }
}