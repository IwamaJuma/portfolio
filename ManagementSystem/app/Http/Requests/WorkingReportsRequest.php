<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkingReportsRequest extends FormRequest
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
            //
            'employee_id' => 'required|integer',
            'working_date' => 'required|date',
            'working_hours' => 'required|numeric|min:0'
        ];
    }

    public function messages()
    {
        return [
        'employee_id.required' => '従業員IDは必須です。',
        'employee_id.integer' => '従業員IDは整数でなければなりません。',
        'working_date.required' => '作業日付は必須です。',
        'working_date.date' => '作業日付は有効な日付形式でなければなりません。',
        'working_hours.required' => '作業時間は必須です。',
        'working_hours.numeric' => '作業時間は数値でなければなりません。',
        'working_hours.min' => '作業時間は0以上でなければなりません。'
        ];
    }
}
