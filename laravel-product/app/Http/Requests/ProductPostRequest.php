<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ProductPostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'required|max:30',
            'price' => 'required|numeric',
            'description' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'name.max' => 'Name cannot be more than 30 characters',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price must be a number',
            'description.required' => 'Description is required',
            'description.max' => 'Description cannot be more than 255 characters',
            'image.required' => 'Image is required',
            'image.image' => 'Image must be an image',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif',
            'image.max' => 'Image cannot be more than 2MB'
        ];
    }
}
