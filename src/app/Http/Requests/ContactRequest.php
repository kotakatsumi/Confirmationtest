<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            "first-name"=>['required'],
            "last-name"=>['required'],
            "gender"=>['required'],
            "email"=>['required','email'],
            "first-tel"=>['required','numeric'],
            "center-tel"=>['required','numeric'],
            "last-tel"=>['required','numeric'],
            "address"=>['required'],
            "category_id"=>['required'],
            "detail"=>['required',"max:120"],
        ];
    }

    public function messages(){
        return [
            "first-name.required"=>"姓を入力してください",
            "last-name.required"=>"名を入力してください",
            "gender.required"=>"性別を選択してください",
            "email.required"=>"メールアドレスを入力してください",
            "email.email"=>"メールアドレスはメール形式で入力してください",
            "first-tel.required"=>"電話番号を入力してください",
            "center-tel.required"=>"電話番号を入力してください",
            "last-tel.required"=>"電話番号を入力してください",
            "address.required"=>"住所を入力してください",
            "category_id.required"=>"お問い合わせの種類を選択してください",
            "detail.required"=>"お問い合わせ内容を入力してください",
            "detail.max"=>"お問い合わせ内容は120文字以内で入力してください",
        ];
    }
}
