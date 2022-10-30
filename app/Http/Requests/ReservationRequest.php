<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'reservation_name'      => 'required|string|max:50',
            'reservation_email'     => 'required|email|max:70',
            'phone'                 => 'required',
            'date'                  => 'required',
            'time'                  => 'required',
            'people'                => 'required'
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
            'reservation_name.required'         => 'Задолжително внесете го вашето име!',
            'reservation_name.string'           => 'Вашето име мора да е составено само од букви!',
            'reservation_name.max:50'           => 'Вашето име не смее да има повеќе од 50 букви!',
            'reservation_email.required'        => 'Задолжително внесете ја вашата емаил адреса!',
            'reservation_email.email'           => 'Ве молиме внесете правилна емаил адреса!',
            'reservation_email.max:70'          => 'Вашиот емаил не смее да има повеќе од 70 букви!',
            'phone.required'                    => 'Задолжително внесете телефонски број',
            'date.required'                     => 'Задолжително внесете датум',
            'time.required'                     => 'Задолжително внесете време',
            'people.required'                   => 'Задолжително внесете број на луѓе'
        ];
    }
}
