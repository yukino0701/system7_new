<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class LoginRequest extends FormRequest
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
     * /*バリデーション処理
     * @return array
     */
    public function rules()
    {
        return [

            /*入力項目の条件、バリデーション*/

            'email' => 'required | max:255 |  email ',
            'password' => 'required | max:255 '
        ];
    }


    public function attributes()
    {
        return [

            //テーブル
            'email' => 'E-Mail',
            'password' => 'パスワード',
        ];
    }

    public function messages()
    {
        return [

            //エラーメッセージ

            'email.required' => ':attributeは必須項目です。',
            'email.max' => ':attribute:max字以内で入力してください。',
            'email.email' => ':attributeはE-Mail形式で入力してください。',
            'password.required' => ':attributeは必須項目です。',
            'password.max' => ':attribute:max字以内で入力してください。'
            /*'password.alpha_num' => ':attributeは英数字で入力してください。',*/

        ];
    }



}
