<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ResetRequest extends Request
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
            'passwordold' => 'required|min:6',
            // 'password' => 'required|confirmed|min:6',
            'passwordnew' => 'required|min:6',
            'passconfirm' =>'required|min:6'
        ];
    }
    public function messages()
    {
        return [
            'passwordold.required' => 'Vui lòng nhập password củ',
            'passwordold.min' => 'Password củ tối thiểu 6 ký tự',
            'passwordnew.required' => 'Vui lòng nhập password mới',
            'passwordnew.confirmed' => 'Vui lòng confirm password mới',
            'passwordnew.min' => 'Password mới tối thiểu 6 ký tự',
            'passconfirm.required' => 'Vui lòng nhập password xác nhận',
            'passconfirm.min' => 'Password xác nhận tối thiểu 6 ký tự',
        ];
    }
}
