<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThongTinCaNhanRequest extends FormRequest
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
            'name'=>'required',
            'phone'=>'required|unique:users,phone,'.$this->id,
            'country'=>'required',
            'state'=>'required',
            'company'=>'required',
            'email'=>'required|unique:users,email,'.$this->id,
            'password'=>'required',
            'password_confirm'=>'same:password',
            'info'=>'required'
        ];
    }
}
