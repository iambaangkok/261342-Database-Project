<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return[
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username'=> 'required',
            'password'=> 'required|min:8',
            'password_confirmation'=> 'required|same:password',
            'contactFirstName'=>'required',
            'contactLastName'=>'required',
            'phone' => 'required',
            'customerName' => 'required',
            'addressLine1' => 'required',
            'addressLine2' => 'nullable',
            'country'=>'required',
            'state'=>'nullable',
            'city'=>'required',
            'postalCode'=>'required'];
    }
}
