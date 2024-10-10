<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Validator;

class StoreWebItem extends FormRequest
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
            'item_title' => 'required',
            'color_id' => 'required|exists:colors,id',
            'size_id' => 'required|exists:sizes,id',
            'mainImag' => 'required',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'image_description' => 'required',

            // 'rrp_price' => 'required|numeric|min:500',
            // 'suggested_day_price' => 'required',
            // 'fourDaysPrice' => 'required|numeric',
            // 'sevenToTwentyNineDayPrice' => 'required|numeric',
            // 'thirtyPlusDayPrice' => 'required|numeric',


        ];

        if ($this->step == 2) {
            $rules['rrp_price'] = 'required|numeric|min:500';
            $rules['suggested_day_price'] =  'required';
            $rules['fourDaysPrice'] = 'required|numeric';
            $rules['sevenToTwentyNineDayPrice'] = 'required|numeric';
            $rules['thirtyPlusDayPrice'] = 'required|numeric';
        }
        
        if ($this->buy == 'true') {
            $rules['buy_price'] = 'required|numeric|min:0';
        }

        return $rules;
    }
    
}
