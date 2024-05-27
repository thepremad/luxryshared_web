<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class StoewVerifyOtpRequest extends FormRequest
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
            'otp' => 'required',
            'user_id' => 'required'
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->all();
        $errorObject = [];
        
        foreach ($errors as $error) {
            $field = strtolower(preg_replace('/^The (.+?) field is required\.$/', '$1', $error));
            $errorObject[$field] = $error;
        }
        
        throw new HttpResponseException(
            response()->json([
                'error' => $errorObject
            ], 400)
        );
                
    }
}
