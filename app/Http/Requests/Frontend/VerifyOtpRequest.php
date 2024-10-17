<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class VerifyOtpRequest extends FormRequest
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
            'mainotp' => 'required|digits:4'
        ];
    }


    public function messages(): array
     {
         $data =  [
             'mainotp.required' => 'The OTP field is required',
         ];
         return $data;
    }

    
}
