<?php namespace TGL\Http\Requests;


class AddOrderPriceRequest extends Request
{
    public function rules()
    {
        return [
            'order_number' => 'required',
            'price' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}