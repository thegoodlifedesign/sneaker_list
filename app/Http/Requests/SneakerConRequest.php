<?php namespace TGL\Http\Requests;


class SneakerConRequest extends Request
{
    public function rules()
    {
        return [
            'model' => 'required',
            'brand' => 'required',
            'size' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}