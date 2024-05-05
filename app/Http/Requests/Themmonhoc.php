<?php

namespace App\Http\Requests;
use App\Rules\Emoji;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;


class Themmonhoc extends FormRequest
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
            'name' => ['required','string',new Emoji],
            'quantity' => ['required', 'regex:/^\d+(\.\d+)?$/',  'gt:0',new Emoji],
            'tin' => ['required','numeric', 'regex:/^\d+(\.\d+)?$/','gt:0',new Emoji],
            'thuchanh' => ['required','numeric','regex:/^\d+(\.\d+)?$/','gte:0',new Emoji],
            'lythuyet' => ['required','numeric','regex:/^\d+(\.\d+)?$/', 'gt:0',new Emoji],
            // 'khoa_id' => ['required','numeric',new Emoji],
        ];
    }
    public function messages()
    {
        return [
            'name.string' => 'Vui lòng nhập tên đúng định dạng.',
            'quantity.numeric' => 'Vui lòng nhập số cho số lớp.',
            'tin.numeric' => 'Vui lòng số cho số tín.',
            'tin.regex' => 'Vui lòng nhập số nguyên',
            'thuchanh.numeric' => 'Vui lòng nhập số cho thực hành.',
            'lythuyet.numeric' => 'Vui lòng nhập số cho lý thuyết.',
            // 'khoa_id.numeric' => 'Vui lòng nhập địa chỉ email.',
            'quantity.gt' => 'Số lượng lớp phải lớn hơn 0.',
            'tin.gt' => 'Số tín phải lớn hơn 0.',
            'thuchanh.gte' => 'Số thực hành phải lớn hơn hoặc bằng 0.',
            'lythuyet.gt' => 'Số lý thuyết phải lớn hơn 0.',

            

        ];
    }
}
