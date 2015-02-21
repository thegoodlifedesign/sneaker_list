<?php namespace TGL\Http\Requests;


class LoginRequest extends Request
{
    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}