<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;
//use Illuminate\Foundation\Http\FormRequest;

class PostRegisterRequest extends BaseRequest
{
//    /**
//     * Determine if the user is authorized to make this request.
//     *
//     * @return bool
//     */
//    public function authorize()
//    {
//        return false;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'userid' => 'required',
            'name' => 'required',
            'password' => 'required',
        ];
    }
}
