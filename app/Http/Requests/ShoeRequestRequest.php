<?php namespace TGL\Http\Requests;

class ShoeRequestRequest extends Request
{
    public function rules()
    {
        return [
            'model' => 'required',
            'brand' => 'required',
            'size' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}