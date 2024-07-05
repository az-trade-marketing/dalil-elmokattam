<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return [
            'name' => 'required|string|min:3',
            'email' => 'sometimes|nullable|unique:users',
            'password' => 'required|string|min:6',
            'avatar' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'mobile' => 'sometimes|nullable|unique:users',
        ];
    }
}
