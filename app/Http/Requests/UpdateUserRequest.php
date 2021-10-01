<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $id = $this->route('user');
        $rules = [
            'name'                  => 'required|string|max:200',
            'phone'                 => 'required|string|min:10|max:10',
            'birthday'              => 'required|date',
            'email'                 => 'required|email'
        ];

        return $rules;
    }
}
