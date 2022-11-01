<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateItemRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {   
        return [
            'name'          => 'required',
            'price'         => 'required',
            'description'   => 'required',
            'category'      => 'required'
        ];
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'             => 'Задолжително внесете име на храната!',
            'price.required'            => 'Задолжително цена на храната!',
            'description.required'      => 'Задолжително внесете опис на храната!',
            'category.required'         => 'Задолжително одберете категорија!',
        ];
    }
}
