<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => 'required',
            'description' => 'sometimes',
            'group_id'    => 'required',
            'prices'      => 'required|array',
            'options'     => 'required'
        ];
    }
}
