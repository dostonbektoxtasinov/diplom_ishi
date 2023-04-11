<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'ism' => 'required|max:80',
            // 'rasm' => 'required|nullable',
        ];
    }
}
