<?php namespace TGL\Http\Requests;


class NewCommentRequest extends Request
{
    public function rules()
    {
        return [
            'order_id' => 'required',
            'comment' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}