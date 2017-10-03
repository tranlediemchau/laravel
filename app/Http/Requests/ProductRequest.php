<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
			'price1' => 'required',
			'price2' => 'required',
			'fileHinhAnh' => 'required',
			'fileThumb1' => 'required',
			'fileThumb2' =>'required',
			'fileThumb3' => 'required',
        ];
    }
	public function messages()
	{
		return [
			'name.required' => 'Vui lòng nhập tên sản phẩm',
			//'txtTen.unique' => 'Tên sản phẩm này đã tồn tại',
			'price1.required' => 'Vui lòng nhập giá bán',
			'price2.required' => 'Vui lòng nhập giá khuyển mãi',
			'fileHinhAnh.required' => 'Vui lòng chọn hình ảnh',
			'fileThumb1.required' => 'Vui lòng chọn hình Thumb1',
			'fileThumb2.required' =>'Vui lòng chọn hình Thumb2',
			'fileThumb3.required' => 'Vui lòng chọn hình Thumb3',
		];
		
	}
}
