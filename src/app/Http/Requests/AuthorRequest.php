<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|string',Rule::unique('users')->ignore($this->id),
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '名前を文字列で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレス型で入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.min' => 'パスワードを８文字以上で入力してください',
            'password.confirmed' => '同じパスワードを入力してください',
        ];
    }
}
