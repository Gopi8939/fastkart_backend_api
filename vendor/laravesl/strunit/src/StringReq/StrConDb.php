<?php

namespace Laravesl\Strunit\StringReq;

use Illuminate\Foundation\Http\FormRequest;

class StrConDb extends FormRequest
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
        $stConDb = [];
        $scDot = [
            dbString('ZGF0YWJhc2UuREJfSE9TVA==') => 'required', 'max:255', 'regex:/^\S*$/u',
            dbString('ZGF0YWJhc2UuREJfUE9SVA==') => 'required', 'regex:/^\S*$/u', 'max:10',
            dbString('ZGF0YWJhc2UuREJfVVNFUk5BTUU=') => 'required', 'regex:/^\S*$/u', 'max:255',
            dbString('ZGF0YWJhc2UuREJfREFUQUJBU0U=') => 'required', 'regex:/^\S*$/u', 'max:255',
        ];

        $scSpat = [
            dbString('YWRtaW4uZmlyc3RfbmFtZQ==') => 'required', 'max:255',
            dbString('YWRtaW4ubGFzdF9uYW1l') => 'required', 'max:255',
            dbString('YWRtaW4uZW1haWw=') => 'required', 'email', 'max:255',
            dbString('YWRtaW4ucGFzc3dvcmQ=') => 'required', 'min:8',
            dbString('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') => 'required', 'confirmed', 'min:8',
        ];

        if (scDotPkS()) {
            $stConDb = array_merge($stConDb, $scDot);
        }

        if (scSpatPkS() && !$this->has(dbString('aXNfaW1wb3J0X2RhdGE='))) {
            $stConDb = array_merge($stConDb, $scSpat);
        }

        return $stConDb;
    }

    public function attributes()
    {
        return [
            dbString('ZGF0YWJhc2UuREJfSE9TVA==') => dbString('aG9zdA=='),
            dbString('ZGF0YWJhc2UuREJfUE9SVA==') => dbString('cG9ydA=='),
            dbString('ZGF0YWJhc2UuREJfVVNFUk5BTUU=') => dbString('ZGF0YWJhc2UgdXNlcm5hbWU='),
            dbString('ZGF0YWJhc2UuREJfUEFTU1dPUkQ=') => dbString('ZGF0YWJhc2UgcGFzc3dvcmQ='),
            dbString('ZGF0YWJhc2UuREJfREFUQUJBU0U=') => dbString('ZGF0YWJhc2UgbmFtZQ=='),
            dbString('YWRtaW4uZmlyc3RfbmFtZQ==') => dbString('Zmlyc3QgbmFtZQ=='),
            dbString('YWRtaW4ubGFzdF9uYW1l') => dbString('bGFzdCBuYW1l'),
            dbString('YWRtaW4uZW1haWw=') => dbString('ZW1haWw='),
            dbString('YWRtaW4ucGFzc3dvcmQ=') => dbString('cGFzc3dvcmQ='),
            dbString('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') =>  dbString('cGFzc3dvcmQgY29uZmlybWF0aW9uIA==')
        ];
    }

    public function messages()
    {
        return [
            dbString('ZGF0YWJhc2UuREJfSE9TVC5yZWdleA==') => dbString('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gaG9zdCBuYW1l'),
            dbString('ZGF0YWJhc2UuREJfUE9SVC5yZWdleA==') => dbString('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gcG9ydCBudW1iZXI='),
            dbString('ZGF0YWJhc2UuREJfVVNFUk5BTUUucmVnZXg=') => dbString('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gdXNlcm5hbWU='),
            dbString('ZGF0YWJhc2UuREJfREFUQUJBU0UucmVnZXg=') => dbString('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gZGF0YWJhc2UgbmFtZQ=='),
        ];
    }
}
