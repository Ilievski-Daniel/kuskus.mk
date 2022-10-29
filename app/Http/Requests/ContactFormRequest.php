<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name'      => 'required|string|max:50',
            'email'     => 'required|email|max:70',
            'subject'   => 'required|max:100',
            'message'   => 'required'
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
            'name.required'         => 'Задолжително внесете го вашето име!',
            'name.string'           => 'Вашето име мора да е составено само од букви!',
            'name.max:50'           => 'Вашето име не смее да има повеќе од 50 букви!',
            'email.required'        => 'Задолжително внесете ја вашата емаил адреса!',
            'email.email'           => 'Ве молиме внесете правилна емаил адреса!',
            'email.max:70'          => 'Вашиот емаил не смее да има повеќе од 70 букви!',
            'subject.required'      => 'Задолжително внесете наслов на пораката!',
            'subject.max:100'       => 'Вашиот емаил не смее да има повеќе од 100 букви!',
            'message.required'      => 'Задолжително внесете порака!',
        ];
    }
}
