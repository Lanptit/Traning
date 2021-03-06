<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBlogPostRequest extends Request
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
                'code' => 'required',
                'title' => 'required',
                'despction' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'code.required' => 'Please enter code',
            'title.required' => 'Please enter title',
            'despction.required' => 'Please enter despction',
        ];
    }
}
