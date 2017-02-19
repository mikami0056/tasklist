<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreTaskPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            //
            'title' => 'max:10',
            'content' => 'required|max:255',
            'status' => 'required'
        ];
        
    }
    
    public function messages(){
        return [
            'title.max' => 'タイトルの内容は10文字以内にして下さい',
            'content.required'=>'タスクの内容を入力して下さい',
            'content.max'=>'タスクの内容は255文字以内にして下さい',
            'status.required'=>'ステータスを選択して下さい' // セレクトボックスを使用している為、不要かもしれない
        ];
    }
}
