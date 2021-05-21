<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamSubmitRequest extends FormRequest
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
            'team_name' => 'required|min:3|max:20|unique:team|string',
        ];
    }
}