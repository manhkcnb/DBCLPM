<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use DB;

class XeptkbRequest extends FormRequest
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
        $rules = [
            'stt' => 'required',
            'phonglt' => 'required',
            'thoigian' => 'required',
            'thult' => 'required',
            // 'phongth' => 'required',
            // 'thuth' => 'required',
        ];

        $monhocId = $this->input('monhoc');
        $tin = DB::table('monhoc')->where('id', $monhocId)->first();

        if ($tin) {
            $tinValue = $tin->tin;
            $th=$tin->thuchanh;
            if($th>0){
                $rules['phongth'] = 'required';
                $rules['thuth'] = 'required';
            }

            if ($tinValue == 3) {
                $rules['phongltt'] = 'required';
                $rules['thoigiant'] = 'required';
                $rules['thultt'] = 'required';
            } elseif ($tinValue == 4) {
                $rules['phonglt4tin'] = 'required';
                $rules['thoigian4tin'] = 'required';
                $rules['thult4tin'] = 'required';
            }
        } else {
            // Handle the case where the specified 'monhoc' doesn't exist in the database
            // For instance, you might want to return a validation error
            // You can adjust this part according to your application's logic
            $rules['monhoc'] = [
                'required',
                Rule::exists('monhoc', 'id'),
            ];
        }

        return $rules;
    }
    public function messages()
    {
        return [
            'stt.required' => 'Vui lòng chọn lớp.',
            'phonglt.required' => 'Vui lòng chọn phòng .',
            'thoigian.required' => 'Vui lòng chọn thời gian .',
            'thult.required' => 'Vui lòng chọn thứ học trong tuần.',
            'phongth.required' => 'Vui lòng chọn phòng thực hành.',
            'thuth.required' => 'Vui lòng chọn thời gian thực hành.',

            'phonglt4tin.required' => 'Vui lòng chọn phòng .',
            'thoigian4tin.required' => 'Vui lòng chọn thời gian.',
            'thult4tint.required' => 'Vui lòng chọn lớp thứ học trong tuần',
            'phongltt.required' => 'Vui lòng chọn phòng .',
            'thoigiant.required' => 'Vui lòng chọn thời gian.',
            'thultt.required' => 'Vui lòng chọn lớp thứ học trong tuần',

        ];
    }
}
