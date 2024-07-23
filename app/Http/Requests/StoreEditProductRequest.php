<?php

namespace App\Http\Requests;

use App\Models\ItemImage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class StoreEditProductRequest extends FormRequest
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
        $count = ItemImage::where('item_id',$this->id)->count();
        // dd($count);
        $rules =  [
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'color_id' => 'required',
            'size_id' => 'required',
            'brand_id' => 'required',
            'item_title' => 'required',
            'image_description' => 'required',
            // 'buy_price' => 'required',
        ];

        if ($count < 4) {
            $maxImages = 4 - $count;
            $rules['image'] = 'required|max:' . $maxImages;
        }
         else {
            $rules['image'] = 'max:0';
        }
        return $rules;
        
    }
  
 
    
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 422, 'message' => $validator->getMessageBag()]));
    }

}
