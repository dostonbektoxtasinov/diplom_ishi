<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BizHaqimizdaRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'dars_ertalab'  => 'required',
            // 'dars_kech'     => 'required',
            // 'lokatsiya'     => 'required',
            // 'nomer'         => 'required',
            // 'email'         => 'required',
        ];
    }
}
