<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use App\GraphQL\Exceptions\ExceptionHandler;
use Illuminate\Contracts\Validation\Validator;

class UpdateTagRequest extends FormRequest
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
        $id = $this->route('tag') ? $this->route('tag')->id : $this->id;
        return [
            'name'  => ['required', 'string', 'max:255', Rule::unique('tags')->where('type', $this->type)->whereNull('deleted_at')->ignore($id)],
            'type' => ['in:post,product']
        ];
    }

    public function messages()
    {
        return [
            'type.in' => 'Tag type can be either post or product',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new ExceptionHandler($validator->errors()->first(), 422);
    }
}
