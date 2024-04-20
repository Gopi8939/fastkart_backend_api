<?php

namespace Laravesl\Strunit\StringReq;

use Illuminate\Foundation\Http\FormRequest;

class StrR extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            dbString('ZW52YXRvX3VzZXJuYW1l') => 'required',
            dbString('bGljZW5zZQ==') => 'required|regex:/^([a-f0-9]{8})-(([a-f0-9]{4})-){3}([a-f0-9]{12})$/i',
        ];
    }

    public function attributes()
    {
        return [
            dbString('ZW52YXRvX3VzZXJuYW1l') => dbString('RW52YXRvIFVzZXJuYW1l'),
            dbString('bGljZW5zZQ==') => dbString('TGljZW5zZQ=='),
        ];
    }

    public function messages()
    {
        return [
            dbString('bGljZW5zZS5yZWdleA==') => dbString('SW52YWxpZCBwdXJjaGFzZSBjb2Rl'),
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
