<?php

namespace TGL\Http\Requests;


class AddUserDetailsRequest  extends Request
{
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}