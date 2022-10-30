<?php

namespace App\Http\Requests\CollegeSubject;

use Illuminate\Foundation\Http\FormRequest;

class StoreCollegeSubjectRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
