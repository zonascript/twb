<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadCoinImage extends FormRequest
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
            'score' => 'required|numeric',
            'file' => 'required|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'score.required' => 'Score harus diisi.',
            'score.numeric' => 'Score harus angka.',
            'file.required'  => 'Gamba harus diisi.',
//            'file.image'  => 'File must be image.',
            'file.mimes' => 'Format gambar harus jpeg, jpg atau png.',
            'file.max' => 'Besar maksimum adalah 2MB',
        ];
    }
}
