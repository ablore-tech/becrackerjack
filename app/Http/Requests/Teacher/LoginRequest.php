<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'phone' => 'required|digits:10|numeric',
            'otp' => 'required|numeric|digits:4'
        ];
    }

    public function phoneNumber()
    {
        return $this->get('phone_number');
    }

    public function otp()
    {
        return $this->get('otp');
    }
}
