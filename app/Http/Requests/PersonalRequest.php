<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonalRequest extends Request
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

            'fullname' => 'required|max:255',
            'address' => 'required',
            'jop' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'jop.required' => 'Vui lòng nhập nghề nghiệp của bạn',
            'address.required' => 'Vui lòng nhập địa chỉ của bạn',
            'fullname.required' => 'Vui lòng nhập đầy đủ họ tên',
        ];
    }
}
