<?php

namespace App\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'URL' => 'required|url',
            'file_zip' => 'required|file',
            'logo' => 'required|image',
            'key_features' => 'required',
            'cover_thumbnails' => 'required',
        ];
    }
}
