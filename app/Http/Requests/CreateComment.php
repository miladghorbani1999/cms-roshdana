<?php

namespace App\Http\Requests;

use App\Enums\Comment as CommentEnum;
use App\Rules\Persian;
use Illuminate\Foundation\Http\FormRequest;

class CreateComment extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'body' => 'required','min:5',
            'article' => 'integer','min:1'
            // "کامنت"=>new Persian
        ];
    }

    public function messages()
    {
        return [
            'body.required' => __('site.main.required',['text'=>'کامنت']),
            'body.min' => __('site.main.min',['text'=>'کامنت']),
            'name.required' => __('site.main.required',['text'=>'نام']),
            'article.integer' => __('site.try_again')
        ];
    }
}
