<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyStoreRequest extends FormRequest
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
            'name' => 'required', 
            'email' => 'email', 
            'logo' => 'file|dimensions:min_width=100,min_height=100', 
        ];
    }

    public function messages()
    {
        return [
            'name' => 'O campo nome deve ser preenchido', 
            'email' => 'O email deve ser valido', 
            'logo' => 'O campo deve ter no minimo 100x100', 
        ];
    }
}
