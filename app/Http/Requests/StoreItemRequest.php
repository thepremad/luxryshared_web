<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class StoreItemRequest extends FormRequest
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
        $rules = [
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'brand_id' => 'required|exists:brands,id',
            'occasion_id' => 'required|exists:occasions,id',
            'item_title' => 'required',
            'color_id' => 'required|exists:colors,id',
            'size_id' => 'required|exists:sizes,id',
            'mainImag' => 'required',
            'image_1' => 'required',
            'image_2' => 'required',
            'image_3' => 'required',
            'image_4' => 'required',
            'image_description' => 'required',
            'rrp_price' => 'required',
        ];
        if ($this->buy == 'true') {
            $rules['buy_price'] = 'required';
        }
        return $rules;
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
