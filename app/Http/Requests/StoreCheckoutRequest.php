<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class StoreCheckoutRequest extends FormRequest
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
            '*.item_id' => 'required|exists:items,id',
            '*.first_name' => 'required',
            '*.last_name' => 'required',
            '*.country' => 'required',
            '*.street_address' => 'required',
            '*.city' => 'required|exists:cities,id',
            '*.mobile_number' => 'required',
            '*.checkout_status' => 'required',
            // '*.size' => 'required|exists:sizes,id',
            '*.product_price' => 'required',
            '*.shipping_address' => 'required',
            '*.payment_method' => 'required',
            '*.is_cart' => 'required',
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
