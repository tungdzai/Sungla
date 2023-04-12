<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required',
            'phone'=>['required','regex:/^(03[2-9]|05[689]|07[06-9]|08[1-9]|09[0-9])\d{7}$/','unique:customers,phone'],
            'email' => 'required|email|unique:customers,email',
            'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/','confirmed'],
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Họ và tên không được để trống !',

            'phone.required'=>'Số điện thoại không được để trống !',
            'phone.regex'=>'Số điện thoại không đúng định dạng !',
            'phone.unique'=>'Số điện thoại đã tồn tại trên hệ thống !',

            'email.required' => 'Email không được để trống !',
            'email.email' => 'Email không đúng định dạng !',
            'email.unique' => 'Email đã tồn tại trên hệ thống !',

            'password.required' => 'Mật khẩu không được để trống !',
            'password.regex' => 'Mật khẩu gồm 8 kí tự !',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp !',
        ];
    }
}
