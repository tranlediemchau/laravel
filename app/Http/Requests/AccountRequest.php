<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AccountRequest extends Request
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

            //'txtTen' => 'required|unique:products,name',
            'name' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'password_confirm' => 'required|min:6',
            'role' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên tài khoản',
            //'txtTen.unique' => 'Tên sản phẩm này đã tồn tại',
            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email'=>'Email này đã tồn tại ùi',
            'email.unique' => 'Email này đã tồn tại ùi',
            'email.email' => 'Đây không phải là một email',
            'password.required' => 'Vui lòng nhập password',
            //'password.confirmed' => 'Vui lòng confirm lại password',
            'password.min' => 'Password tối thiểu 6 ký tự',
            'role.required' => 'Vui lòng chọn vai trò',

            'password_confirm.required' => 'Vui lòng nhập password confirm',


        ];

    }
}
