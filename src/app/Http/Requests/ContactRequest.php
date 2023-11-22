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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'string', 'min:8', 'max:8'],
            'address' => ['required', 'string', 'max:255'],
            'building_name' => ['nullable', 'string', 'max:255'],
            'opinion' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '苗字を入力してください',
            'first_name.string' => '苗字を文字列で入力してください',
            'first_name.max' => '苗字を255文字以内で入力してください',
            'last_name.required' => '名前を入力してください',
            'last_name.string' => '名前を文字列で入力してください',
            'last_name.max' => '名前を255文字以内で入力してください',
            'gender.required' => '性別を選択してください' ,
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.max' => 'メールアドレスを255文字以内で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.string' => '郵便番号を文字列で入力してください',
            'postcode.max' => '郵便番号を8文字で入力してください',
            'postcode.min' => '郵便番号を8文字で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '住所を255文字以内で入力してください',
            'building_name.string' => '建物名を文字列で入力してください',
            'building_name.max' => '建物名を255文字以内で入力してください',
            'opinion.required' => '意見を入力してください',
            'opinion.string' => '意見を文字列で入力してください',
            'opinion.max' => '意見を255文字以内で入力してください',
        ];
    }
}
