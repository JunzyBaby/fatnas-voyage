<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompagnieFormRequest extends FormRequest
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
            'nom'=>'required|min:4',
            'logo'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'required'=>'Le champ :attribute est réquis.',
            'min'=>'Le champ :attribute doit être d\'au moin :min caractères',
            'file'=>'Le champ :attribute doit être un fichier',
        ];
    }
}
