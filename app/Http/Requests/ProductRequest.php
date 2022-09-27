<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // return [
        //       'name' =>'required|string|min:2|max:255',
        //       'description' =>'nullable|string|min:3|max:1000',
        //       'price' =>'required|numeric|min:0.01|max:100000',
        //       'is_available' =>'required|string|in:0,1',
        //       'image' => 'nullable|file',
              // ];
                  return [
                    'name' =>'required|string|min:2|max:255',
                    'description' => 'nullable|string|min:3|max:1000',
                    'price' => 'required|numeric|min:0.01|max:100000',
                    'is_avaliable' => 'required|string|in:0,1',
                    'image' => 'nullable|file',
                  ];
              }
}
