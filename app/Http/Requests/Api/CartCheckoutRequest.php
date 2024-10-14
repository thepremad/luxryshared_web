<?php

namespace App\Http\Requests\Api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CartCheckoutRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'company_name' => 'required',
            'street_address' => 'required',
            'arp_suit_unit' => 'required',
            'city' => 'required',
            'mobile_number' => 'required|numeric|digits:10',
            'card_no' => 'required',
            'cvv' => 'required',
            'exp_date' => 'required',
            'card_holder_name' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->messages();
        $errorObject = [];
    
        foreach ($errors as $field => $messages) {
            $errorObject[$field] = $messages[0];  // Take the first error message for each field
        }
    
        throw new HttpResponseException(
            response()->json([
                'error' => $errorObject
            ], 422)
        );
    }
}
