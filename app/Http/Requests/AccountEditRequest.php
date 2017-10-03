<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AccountEditRequest extends Request
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
            'email' => 'required|email|max:255',
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
            'email.email' => 'Đây không phải là một email',
            'role.required' => 'Vui lòng chọn vai trò',

        ];

    }
}
