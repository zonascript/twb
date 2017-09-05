<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompleteProfile extends FormRequest
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
            'mother_name' => 'required',
            'birthdate' => 'required|date_format:Y-m-d'
        ];
    }

    public function messages()
    {
        return [
            'mother_name.required' => 'Nama Ibu wajib diisi',
            'birthdate.required' => 'Tanggal Lahir wajib diisi',
            'birthdate.date_format' => 'Format tanggal harus Y-m-d (1900-01-01)'
        ];
    }
}
