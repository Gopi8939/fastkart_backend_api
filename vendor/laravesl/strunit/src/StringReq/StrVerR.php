<?php

namespace Laravesl\Strunit\StringReq;

use Illuminate\Foundation\Http\FormRequest;

class StrVerR extends FormRequest
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
        $scSpat = [
            dbString('YWRtaW4uZmlyc3RfbmFtZQ==') => 'required|max:255',
            dbString('YWRtaW4ubGFzdF9uYW1l') => 'required', 'max:255',
            dbString('YWRtaW4uZW1haWw=') => 'required', 'email', 'max:255',
            dbString('YWRtaW4ucGFzc3dvcmQ=') => 'required', 'confirmed', 'min:8',
            dbString('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') => 'required',
        ];

        $strVeR = [
            dbString('bGljZW5zZQ==') => 'required', 'regex:/^([a-f0-9]{8})-(([a-f0-9]{4})-){3}([a-f0-9]{12})$/i',
            dbString('ZW52YXRvX3VzZXJuYW1l') => 'required'
        ];

        if (scSpatPkS()) {
            $strVeR = array_merge($strVeR, $scSpat);
        }

        return $strVeR;
    }

    public function attributes()
    {
        return [
            dbString('YWRtaW4uZmlyc3RfbmFtZQ==') => dbString('Zmlyc3QgbmFtZQ=='),
            dbString('YWRtaW4ubGFzdF9uYW1l') => dbString('bGFzdCBuYW1l'),
            dbString('YWRtaW4uZW1haWw=') => dbString('ZW1haWw='),
            dbString('YWRtaW4ucGFzc3dvcmQ=') => dbString('cGFzc3dvcmQ='),
            dbString('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') => dbString('Y29uZmlybWF0aW9uIHBhc3N3b3Jk'),
            dbString('bGljZW5zZQ==') => dbString('bGljZW5zZQ=='),
            dbString('ZW52YXRvX3VzZXJuYW1l') => dbString('ZW52YXRvIHVzZXJuYW1l'),
        ];
    }

    public function messages()
    {
        return [
            dbString('bGljZW5zZS5yZWdleA==') => dbString('SW52YWxpZCBwdXJjaGFzZSBjb2Rl'),
        ];
    }
}
