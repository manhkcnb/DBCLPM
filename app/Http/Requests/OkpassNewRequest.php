<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OkpassNewRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'password' => [
                'required',
                'string',
                'min:6',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()\-_=+{};:,<.>]).*$/'
            ],
        ];
    }
    public function messages()
    {
        return [
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'password.min' => 'Mật khẩu cần có ít nhất :min ký tự.',
            'password.regex' =>"Vui lòng nhập mật khẩu gồm ít nhất 1 kí tự in hoa, 1 ký tự thường, 1 ký tự đặc biệt",

        ];
    }
}
