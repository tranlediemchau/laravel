<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
		//bat truee len de quan ly viec thuc hien form cua minh
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

            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            // 'password' => 'required|confirmed|min:6',
            'password' => 'required|min:6',
            'ckeck' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên đăng ký',
            //'txtTen.unique' => 'Tên sản phẩm này đã tồn tại',
            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email'=>'Email này đã tồn tại ùi',
            'email.unique' => 'Email này đã tồn tại ùi',
            'email.email' => 'Đây không phải là một email',
            'password.required' => 'Vui lòng nhập password',
            'password.confirmed' => 'Vui lòng gõ lại password',
            'password.min' => 'Password tối thiểu 6 ký tự',
            'ckeck.required' => 'Vui lòng check vào đồng ý đăng ký',
        ];
    }
}
