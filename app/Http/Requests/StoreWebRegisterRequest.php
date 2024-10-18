<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWebRegisterRequest extends FormRequest
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
            'email' => 'required|unique:users,email',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'number' => 'required|unique:users,number',
            'address' => 'required',
            'id_image' => 'required',
            "password_confirmation" => 'required|same:password',
            'terms' => 'required',
            'longitude' => 'nullable',
            'latitude' => 'nullable',
            'referral' => 'nullable|exists:users,refer_code'
        ];
    }
}
