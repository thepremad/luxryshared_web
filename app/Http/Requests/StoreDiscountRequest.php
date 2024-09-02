<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class StoreDiscountRequest extends FormRequest
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
        $rule = [
            'code' => 'required',
            'exp_date' => 'required',
            'offer_type' => 'required',
            'product_id' => 'required',
            'limit' => 'required',
        ];
        if ($this->offer_type == 1) {
            $rule['fix_amount'] = 'required';
        }elseif($this->offer_type == 2)
        $rule['in_per'] = 'required|integer|between:1,100';
        return $rule;
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 422, 'message' => $validator->getMessageBag()]));
    }
}
