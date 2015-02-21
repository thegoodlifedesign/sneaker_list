<?php namespace TGL\Http\Requests;

class RegisterRequest extends Request
{
    public function rules()
    {
        return [
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:12',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
