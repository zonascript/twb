<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class UploadColoringImage extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'file' => 'required|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'file.required'  => 'Image is required',
//            'file.image'  => 'File must be image.',
            'file.mimes' => 'File must be jpeg, jpg or png.',
            'file.max' => 'Maximum size is 2MB',
        ];
    }
}
