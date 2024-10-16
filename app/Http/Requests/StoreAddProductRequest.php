<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class StoreAddProductRequest extends FormRequest
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
            "item_id" => "required|exists:items,id",
            "type" => "nullable|in:buy,rent",
            "days" => 'required_if:type,rent|numeric|min:1',
            "rent_from" => [
                'required_if:type,rent',
                'date',
                'after_or_equal:today', // Ensures rent_from is not in the past
            ],
            // "rent_to" => [
            //     'required_if:type,rent',
            //     'date',
            //     'after_or_equal:today', // Ensures rent_to is not in the past
            //     'after:rent_from',      // Ensures rent_to is after rent_from
            // ],
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
