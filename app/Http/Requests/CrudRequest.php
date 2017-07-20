<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
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
        'name' => 'required|max:255',
        'mail' => 'required|email',
        'gender' => 'required',
        'age' => 'required|numeric',
        'pref' => 'required',
        'birthday' => 'required',
        'tel' => 'required|numeric'
        ];
    }
}
