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
            'category_id' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required','email'],
            'tell_part1' => ['required','numeric','digits_between:1,5'],
            'tell_part2' => ['required','numeric','digits_between:1,5'],
            'tell_part3' => ['required','numeric','digits_between:1,5'],
            'address' => ['required'],
            'detail' => ['required','max:120'],
        ];
    }
    public function messages()
    {
        return[
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'first_name.required' => '名を入力してください',
            'last_name.required' => '姓を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tell_part1.required' => '電話番号を入力してください',
            'tell_part1.digits_between' => '電話番号は5桁までで入力してください',
            'tell_part1.numeric' => '電話番号は5桁までの数字で入力してください',
            'tell_part2.required' => '電話番号を入力してください',
            'tell_part2.digits_between' => '電話番号は5桁までで入力してください',
            'tell_part2.numeric' => '電話番号は5桁までの数字で入力してください',
            'tell_part3.required' => '電話番号を入力してください',
            'tell_part3.digits_between' => '電話番号は5桁までで入力してください',
            'tell_part3.numeric' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
