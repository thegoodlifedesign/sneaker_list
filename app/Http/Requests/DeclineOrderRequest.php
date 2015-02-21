<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/4/15
 * Time: 3:42 PM
 */

namespace TGL\Http\Requests;


class DeclineOrderRequest extends Request
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