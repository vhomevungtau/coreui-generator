<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
       $rules = [
          'name'                  => 'required|string|max:200',
          'phone'                 => 'required|string|min:10|max:10|unique:users,phone',
          'birthday'              => 'required|date',
          'email'                 => 'required|email|unique:users,email',
          'password'              => 'required|confirmed'
       ];

        return $rules;
    }
}
