<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'item_id' => 'required|exists:items,id',
            'first_name' => 'required|exists:items,id',
            'last_name' => 'required|exists:items,id',
            'country' => 'required|exists:items,id',
            'street_address' => 'required|exists:items,id',
            'city' => 'required|exists:items,id',
            'mobile_number' => 'required|exists:items,id',
            'mobile_number' => 'required|exists:items,id',
            'mobile_number' => 'required|exists:items,id',
            'mobile_number' => 'required|exists:items,id',
        ];
    }
}
