<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //$id = $this->route('id');
        // 檢查這個 comment 是不是該 user 新增的?
        //return Comment::where('id', $id)
        //   ->where('user_id', \Auth::id())->exists();

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:20',
            /*'email' => 'required|email',
            'title' => 'required|max:255',
            'body' => 'required',*/
        ];
    }
}
