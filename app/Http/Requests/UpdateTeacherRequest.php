<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function userData()
    {
        return $this->only('first_name', 'last_name', 'address', 'city', 'zip_code', 'account_holder_name', 'bank_name', 'account_number', 'ifsc_code', 'aadhar_number', 'pan_number');
    }
}
