<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEvent extends FormRequest
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
            'publish_date' => 'required|date_format:Y-m-d',
            'event_date' => 'required|date_format:Y-m-d',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'publish_date.required'  => 'Publish Date is required',
            'event_date.required'  => 'Event Date is required',
        ];
    }
}
