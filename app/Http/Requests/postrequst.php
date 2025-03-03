<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postrequst extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
    
            return [
                'name' => 'required',
                'description' => 'required',
                'category_id' => 'required',
            ];
        
        
    }

    public function messages(): array
{
    return [
        'name.required' => 'A name is required',
        'description.required' => 'A description is required',
        'category_id.required' => 'A category is required',
    ];
}
}
