<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class StoreCategoryRequest extends FormRequest
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
            'name' => 'required',
        ];
        if(!$this->id){
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
            $rules['status'] = 'required';

        }
        return $rules;
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 422, 'message' => $validator->getMessageBag()]));
    }
}
