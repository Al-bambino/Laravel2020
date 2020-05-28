<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TariffAddOnRequest extends FormRequest
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
            'type' => 'required',
            'price' => 'required|max:500|min:0'
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'Dusan nas smara da bude required',
        ];
    }
}
