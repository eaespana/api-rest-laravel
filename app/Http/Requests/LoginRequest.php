<?php

namespace App\Http\rules\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
  public function rules()
  {
    return [
      'email' => 'required|email',
      'password' => 'required',
      'name' => 'required'
    ];
  }

  public function messages() {
    return [
      'email.required' => 'The email is required, test',
      'email.email' => 'The email must be valid',
      'password.required' => 'The password is required',
      'name.required' => 'The name is required'
    ];
  }
}
