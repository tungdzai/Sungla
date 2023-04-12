<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:customers,email',
            'password' => 'required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8}$/',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống !',
            'email.email' => 'Email không đúng định dạng !',
            'email.exists' => 'Email không tồn tại trên hệ thống !',

            'password.required' => 'Mật khẩu không được để trống !',
            'password.regex' => 'Mật khẩu gồm 8 kí tự chữ thường , in hoa và kí tự đặc biệt !',
        ];
    }
}
