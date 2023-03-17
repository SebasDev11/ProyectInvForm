<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'id_Region' => 'required',
            'firstName' => 'required',
            'LastName' => 'required',
            'dni' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'date_at' => 'required',
            'status' => 'required',
        ];
    }
}
