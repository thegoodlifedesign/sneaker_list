<?php namespace TGL\Http\Requests;


class ShoeRequestCheckoutRequest  extends Request
{
    public function rules()
    {
        return [
            'stripeToken' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}