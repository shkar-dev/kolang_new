<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'  => 'required',
            // 'type'  => 'required',
            'date_of_birth'  => 'required',
            'mobile_1'  => 'required',
            'mobile_2'  => 'required',
            'mobile_3'  => 'required',
            'academic_level_id'  => 'required',
            'gender'  => 'required',
            'description' => 'required',
        ];
    }
}
