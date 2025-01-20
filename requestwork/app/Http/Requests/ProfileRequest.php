<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'username' => 'required|max:12',
            'password' => 'required|min:8|max:12|alpha_num',
            'latitude' => 'numeric|min:-90|max:90',
            'longitude' => 'numeric|min:-180|max:180'
        ];
    }

    public function messages()
    {
        return [
             'username.required' => '名前を12文字以内で入力してください。',
             'username.max' => '名前を12文字以内で入力してください。', 
             'password.required' => 'パスワードを8文字以上12文字以内の英数字で入力してください', 
             'password.min' => 'パスワードは少なくとも8文字である必要があります。', 
             'password.max' => 'パスワードは最大12文字までにしてください。', 
             'password.alpha_num' => 'パスワードは英数字でなければなりません。', 
             'latitude.numeric' => '緯度を数値で入力してください。', 
             'latitude.min' => '緯度を-90～90の範囲で入力してください', 
             'latitude.max' => '緯度を-90～90の範囲で入力してください', 
             'longitude.numeric' => '経度を数値で入力してください。', 
             'longitude.min' => '経度を-180～180の範囲で入力してください', 
             'longitude.max' => '経度を-180～180の範囲で入力してください'
             ];
    }
}
