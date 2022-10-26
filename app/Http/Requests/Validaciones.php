<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validaciones extends FormRequest
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
            'txtTitulo'=>'required',
            'txtRecordatorio'=>'required',
            'txtLugar'=>'required',
            'txtMotivo'=>'required'

        ];
    }
}
