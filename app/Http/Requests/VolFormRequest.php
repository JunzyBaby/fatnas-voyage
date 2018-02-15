<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolFormRequest extends FormRequest
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
            'code'=>'required|min:4',
            'depart'=>'required|date',
            'arrive'=>'required|date',
            'place'=>'required|numeric',
            'duree'=>'required',
            'destination'=>'required|min:4',
            'statut'=>'required|min:4'
        ];
    }

    public function messages()
    {
        return [
            'required'=>'Le champ :attribute est réquis!',
            'date'=>'Le champ :attribute doit être une date valide!',
            'min'=>'Le champ :attribute doit avoir au moin :min caractères'
        ];
    }
}
