<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/4/15
 * Time: 3:41 PM
 */

namespace TGL\Http\Requests;


class AcceptOrderRequest extends Request
{
    public function rules()
    {
        return [
            'order_number' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}